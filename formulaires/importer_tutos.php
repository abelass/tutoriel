<?php
// Sécurité
if (!defined("_ECRIRE_INC_VERSION")) {
	return;
}

include_spip('inc/cvtupload');

function formulaires_importer_tutos_charger(){
	$valeurs = [
		'csv' => '',
	];

	// On détermine le champs critères
	$fonction = charger_fonction('criteres_utilises', 'inc/tutoriel');
	$criteres = $fonction();
	$criteres = array_column($criteres, 'nom', 'id_groupe');
	$valeurs['_hidden'] .= '<input name="criteres" type="hidden" value="' . implode(',', $criteres) . '"/>';

	return $valeurs;
}

function formulaires_importer_tutos_fichiers(){
	return ['csv'];
}

function formulaires_importer_tutos_verifier(){
	$erreurs = [];

	return $erreurs;
}

function formulaires_importer_tutos_traiter(){
	$importer_csv = charger_fonction("importer_csv", "inc");
	$editer_objet = charger_fonction('editer_objet', 'action');

	// Les champs critères
	$criteres = explode(',',_request('criteres'));

	// Le fichier
	$fichiers = _request('_fichiers');

	// On récupère le contenu du csv.
	$tutos = $importer_csv($fichiers['csv']['tmp_name'], TRUE);
	$enregistre = 0;

	foreach ($tutos AS $tuto) {
		$set = [];
		// On sépare les champs tutos des critères
		foreach($tuto AS $champ => $valeur) {
			$champ = trim($champ);
			if (in_array($champ, $criteres)) {
				$dest = 'mots';
				// On regarde si on trouve un mot clé correspondant au critère
				if ($id_mot = sql_getfetsel(
					'id_mot', 
					'spip_mots', 
					'titre LIKE ' . sql_quote('%' . $valeur . '%'))) {
					$set['mots'][] = $id_mot;
				}
			}
			elseif (!empty($valeur)) {
				$set['tutos'][$champ] = $valeur;
			}
		}

		// Si il y du contenu, en enregistre.
		if (!empty($set['tutos'])) {
			//Si la langue n'est pas fournit
			if (!isset($set['tutos']['lang'])){
				// On essaie de la générer via l'id_rubrique.
				if (isset($set['tutos']['id_rubrique'])) {
					$set['tutos']['lang'] = sql_getfestel(
						'lang'. 
						'spip_rubriques', 
						'id_rubrique=' . $set['tutos']['id_rubrique']);
				}
				// Sinon vial l'id_parent
				elseif (isset($set['tutos']['id_parent'])) {
					$set['tutos']['lang'] = sql_getfestel(
						'lang'. 
						'spip_rubriques', 
						'id_rubrique=' . $set['tutos']['id_parent']);
				}
				// Sinon c'est la langue par défaut
				else {
					$set['tutos']['lang'] = $GLOBALS['meta']['langue_site'];
				}
			}

			// Si l'id_pareent es manquante
			if (!isset($set['tutos']['id_parent'])) {

				if (!isset($set['tutos']['id_rubrique'])) {
					if (!$id_rubrique = sql_getfetsel(
						'id_rubrique', 
						'spip_rubriques', 
						'id_parent=0 AND lang LIKE ' . sql_quote($set['tutos']['lang']))) {
						$id_rubrique = sql_getfetsel('id_rubrique', 'spip_rubriques', 'lang LIKE ' . sql_quote($lang));
					}

					if ($id_rubrique) {
						$set['tutos']['id_parent'] = $id_rubrique;
					}
				}
				else {
					$set['tutos']['id_parent'] = $set['tutos']['id_rubrique'];
				}
			}

			// On enregistre les tutos.
			if ($tuto = $editer_objet('', 'tuto', $set['tutos'])) {
				// On attache les mots clés
				objet_associer(['mot' => $set['mots']], ['tuto' => $tuto[0]]);
				$enregistre++;
			}
		}

	}
	unlink($fichiers['csv']['tmp_name']);

	$retours = ['message_ok' => _T('tuto:message_tutos_importe', ['nombre' => $enregistre])];
	return $retours;
}


