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
	$retours = ['message_ok' => 'Il ne se passe rien.'];

	$fichiers = _request('_fichiers');
	var_dump($_FILES);
	var_dump($fichiers);

	return $retours;
}

