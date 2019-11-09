<?php
/**
 * Déclarations relatives à la base de données
 *
 * @plugin     Tutoriaux
 * @copyright  2019
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Tutoriel\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}


/**
 * Déclaration des alias de tables et filtres automatiques de champs
 *
 * @pipeline declarer_tables_interfaces
 * @param array $interfaces
 *     Déclarations d'interface pour le compilateur
 * @return array
 *     Déclarations d'interface pour le compilateur
 */
function tutoriel_declarer_tables_interfaces($interfaces) {

	$interfaces['table_des_tables']['tutos'] = 'tutos';

	return $interfaces;
}


/**
 * Déclaration des objets éditoriaux
 *
 * @pipeline declarer_tables_objets_sql
 * @param array $tables
 *     Description des tables
 * @return array
 *     Description complétée des tables
 */
function tutoriel_declarer_tables_objets_sql($tables) {

	$tables['spip_tutos'] = array(
		'type' => 'tuto',
		'principale' => 'oui',
		'field'=> array(
			'id_tuto'            => 'bigint(21) NOT NULL',
			'id_rubrique'        => 'bigint(21) NOT NULL DEFAULT 0',
			'id_secteur'         => 'bigint(21) NOT NULL DEFAULT 0',
			'titre'              => 'varchar(255) NOT NULL DEFAULT ""',
			'descriptif'         => 'text NOT NULL DEFAULT ""',
			'url'                => 'varchar(255) NOT NULL DEFAULT ""',
			'commentaires'       => 'text NOT NULL DEFAULT ""',
			'date'               => 'datetime NOT NULL DEFAULT "0000-00-00 00:00:00"',
			'statut'             => 'varchar(20)  DEFAULT "0" NOT NULL',
			'lang'               => 'VARCHAR(10) NOT NULL DEFAULT ""',
			'langue_choisie'     => 'VARCHAR(3) DEFAULT "non"',
			'id_trad'            => 'bigint(21) NOT NULL DEFAULT 0',
			'maj'                => 'TIMESTAMP'
		),
		'key' => array(
			'PRIMARY KEY'        => 'id_tuto',
			'KEY id_rubrique'    => 'id_rubrique',
			'KEY id_secteur'     => 'id_secteur',
			'KEY lang'           => 'lang',
			'KEY id_trad'        => 'id_trad',
			'KEY statut'         => 'statut',
		),
		'titre' => 'titre AS titre, lang AS lang',
		'date' => 'date',
		'champs_editables'  => array('titre', 'descriptif', 'url', 'commentaires', 'id_rubrique', 'id_secteur'),
		'champs_versionnes' => array('titre', 'descriptif', 'url', 'commentaires', 'id_rubrique', 'id_secteur'),
		'rechercher_champs' => array("titre" => 10, "descriptif" => 8, "commentaires" => 4),
		'tables_jointures'  => array(),
		'statut_textes_instituer' => array(
			'prepa'    => 'texte_statut_en_cours_redaction',
			'prop'     => 'texte_statut_propose_evaluation',
			'publie'   => 'texte_statut_publie',
			'refuse'   => 'texte_statut_refuse',
			'poubelle' => 'texte_statut_poubelle',
		),
		'statut'=> array(
			array(
				'champ'     => 'statut',
				'publie'    => 'publie',
				'previsu'   => 'publie,prop,prepa',
				'post_date' => 'date',
				'exception' => array('statut','tout')
			)
		),
		'texte_changer_statut' => 'tuto:texte_changer_statut_tuto',


	);

	return $tables;
}
