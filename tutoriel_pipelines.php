<?php
/**
 * Utilisations de pipelines par Tutoriaux
 *
 * @plugin     Tutoriaux
 * @copyright  2019 - 2020
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Tutoriel\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/*
 * Un fichier de pipelines permet de regrouper
 * les fonctions de branchement de votre plugin
 * sur des pipelines existants.
 */


/**
 * Ajouter les objets sur les vues des parents directs
 *
 * @pipeline affiche_enfants
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
**/
function tutoriel_affiche_enfants($flux) {
	if ($e = trouver_objet_exec($flux['args']['exec']) and $e['edition'] == false) {
		$id_objet = $flux['args']['id_objet'];

		if ($e['type'] == 'rubrique') {
			$flux['data'] .= recuperer_fond(
				'prive/objets/liste/tutos',
				array(
					'titre' => _T('tuto:titre_tutos_rubrique'),
					'id_rubrique' => $id_objet,
					'lang' => 'fr',
				)
			);

			if (autoriser('creertutodans', 'rubrique', $id_objet)) {
				include_spip('inc/presentation');
				$flux['data'] .= icone_verticale(
					_T('tuto:icone_creer_tuto'),
					generer_url_ecrire('tuto_edit', "id_rubrique=$id_objet"),
					'tuto-24.png',
					'new',
					'right'
				) . "<br class='nettoyeur' />";
			}

		}
	}
	return $flux;
}


/**
 * Ajout de contenu sur certaines pages,
 * notamment des formulaires de liaisons entre objets
 *
 * @pipeline affiche_milieu
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function tutoriel_affiche_milieu($flux) {
	$texte = '';
	$e = trouver_objet_exec($flux['args']['exec']);

	// auteurs sur les tutos
	if (!$e['edition'] and in_array($e['type'], array('tuto'))) {
		$texte .= recuperer_fond('prive/objets/editer/liens', array(
			'table_source' => 'auteurs',
			'objet' => $e['type'],
			'id_objet' => $flux['args'][$e['id_table_objet']]
		));
	}

	if ($texte) {
		if ($p = strpos($flux['data'], '<!--affiche_milieu-->')) {
			$flux['data'] = substr_replace($flux['data'], $texte, $p, 0);
		} else {
			$flux['data'] .= $texte;
		}
	}

	return $flux;
}

/**
 * Ajout de liste sur la vue d'un auteur
 *
 * @pipeline affiche_auteurs_interventions
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function tutoriel_affiche_auteurs_interventions($flux) {
	if ($id_auteur = intval($flux['args']['id_auteur'])) {
		$flux['data'] .= recuperer_fond('prive/objets/liste/tutos', array(
			'id_auteur' => $id_auteur,
			'titre' => _T('tuto:info_tutos_auteur')
		), array('ajax' => true));
	}
	return $flux;
}

/**
 * Afficher le nombre d'éléments dans les parents
 *
 * @pipeline boite_infos
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
**/
function tutoriel_boite_infos($flux) {
	if (isset($flux['args']['type']) and isset($flux['args']['id']) and $id = intval($flux['args']['id'])) {
		$texte = '';
		if ($flux['args']['type'] == 'rubrique' and $nb = sql_countsel('spip_tutos', array("statut='publie'", 'id_rubrique=' . $id))) {
			$texte .= '<div>' . singulier_ou_pluriel($nb, 'tuto:info_1_tuto', 'tuto:info_nb_tutos') . "</div>\n";
		}
		if ($texte and $p = strpos($flux['data'], '<!--nb_elements-->')) {
			$flux['data'] = substr_replace($flux['data'], $texte, $p, 0);
		}
	}
	return $flux;
}

/**
 * Compter les enfants d'un objet
 *
 * @pipeline objets_compte_enfants
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
**/
function tutoriel_objet_compte_enfants($flux) {
	if ($flux['args']['objet'] == 'rubrique' and $id_rubrique = intval($flux['args']['id_objet'])) {
		// juste les publiés ?
		if (array_key_exists('statut', $flux['args']) and ($flux['args']['statut'] == 'publie')) {
			$flux['data']['tutos'] = sql_countsel('spip_tutos', 'id_rubrique= ' . intval($id_rubrique) . " AND (statut = 'publie')");
		} else {
			$flux['data']['tutos'] = sql_countsel('spip_tutos', 'id_rubrique= ' . intval($id_rubrique) . " AND (statut <> 'poubelle')");
		}
	}

	return $flux;
}

/**
 * Optimiser la base de données
 *
 * Supprime les objets à la poubelle.
 *
 * @pipeline optimiser_base_disparus
 * @param  array $flux Données du pipeline
 * @return array       Données du pipeline
 */
function tutoriel_optimiser_base_disparus($flux) {

	sql_delete('spip_tutos', "statut='poubelle' AND maj < " . $flux['args']['date']);

	return $flux;
}

/**
 * Synchroniser la valeur de id secteur
 *
 * @pipeline trig_propager_les_secteurs
 * @param  string $flux Données du pipeline
 * @return string       Données du pipeline
**/
function tutoriel_trig_propager_les_secteurs($flux) {

	// synchroniser spip_tutos
	$r = sql_select(
		'A.id_tuto AS id, R.id_secteur AS secteur',
		'spip_tutos AS A, spip_rubriques AS R',
		'A.id_rubrique = R.id_rubrique AND A.id_secteur <> R.id_secteur'
	);
	while ($row = sql_fetch($r)) {
		sql_update('spip_tutos', array('id_secteur' => $row['secteur']), 'id_tuto=' . $row['id']);
	}

	return $flux;
}
