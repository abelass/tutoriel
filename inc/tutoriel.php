<?php
/**
 * Fonctions utiles au plugin Tutoriaux
 *
 * @plugin     Tutoriaux
 * @copyright  2019
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Tutoriel\Fonctions
 */

 if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function inc_tutoriel_criteres_utilises_dist () {
	include_spip('action/editer_url');
	$groupes_mots = sql_allfetsel('id_groupe,titre', 'spip_groupes_mots', 'tables_liees LIKE ' . sql_quote('%tutos%'));

	$criteres = [];
	foreach ($groupes_mots AS $groupe) {
		$groupe['nom'] = url_nettoyer($groupe['titre'], 30, 0, '_', 'strtolower');
		$criteres[$groupe['id_groupe']] = $groupe;
	}

	return $criteres;
}

