<?php

function tuto_champ_editables() {
	$table_tuto = lister_tables_objets_sql('spip_tutos');
	$champs = $table_tuto['champs_editables'];
	$champs[] = 'lang';
	$champs = array_diff($champs,['id_secteur']);
	return implode(',',$champs);
}

function tuto_criteres() {
	$fonction = charger_fonction('criteres_utilises', 'inc/tutoriel');
	$criteres = $fonction();
	$criteres = array_column($criteres, 'nom', 'id_groupe');
	return implode(',',$criteres);
}