<?php
/**
 * Fonctions utiles au plugin Tutoriaux
 *
 * @plugin     Tutoriaux
 * @copyright  2019 - 2021
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Tutoriel\Fonctions
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function inc_tutoriel_criteres_utilises_dist ($lang = '') {
	include_spip('action/editer_url');
	if (!$lang) {
		$lang = $GLOBALS['meta']['langue_site'];
	}

	$groupes_mots = sql_allfetsel('id_groupe,titre', 'spip_groupes_mots', 'tables_liees LIKE ' . sql_quote('%tutos%'));

	$criteres = [];
	foreach ($groupes_mots AS $groupe) {
		$titre = extraire_multi($groupe['titre'], $lang);
		$groupe['nom'] = 'mc-' . url_nettoyer($titre, 30, 0, '-', 'strtolower') . '_' . $groupe['id_groupe'];
		$criteres[$groupe['id_groupe']] = $groupe;
	}

	return $criteres;
}

