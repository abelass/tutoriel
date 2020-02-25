<?php
/**
 * Gestion du formulaire de d'édition de tuto
 *
 * @plugin     Tutoriaux
 * @copyright  2019 - 2020
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Tutoriel\Formulaires
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

include_spip('inc/actions');
include_spip('inc/editer');


/**
 * Identifier le formulaire en faisant abstraction des paramètres qui ne représentent pas l'objet edité
 *
 * @param int|string $id_tuto
 *     Identifiant du tuto. 'new' pour un nouveau tuto.
 * @param int $id_rubrique
 *     Identifiant de l'objet parent (si connu)
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un tuto source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du tuto, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return string
 *     Hash du formulaire
 */
function formulaires_editer_tuto_identifier_dist($id_tuto = 'new', $id_rubrique = 0, $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
	return serialize(array(intval($id_tuto)));
}

/**
 * Chargement du formulaire d'édition de tuto
 *
 * Déclarer les champs postés et y intégrer les valeurs par défaut
 *
 * @uses formulaires_editer_objet_charger()
 *
 * @param int|string $id_tuto
 *     Identifiant du tuto. 'new' pour un nouveau tuto.
 * @param int $id_rubrique
 *     Identifiant de l'objet parent (si connu)
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un tuto source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du tuto, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Environnement du formulaire
 */
function formulaires_editer_tuto_charger_dist($id_tuto = 'new', $id_rubrique = 0, $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
	$valeurs = formulaires_editer_objet_charger('tuto', $id_tuto, $id_rubrique, $lier_trad, $retour, $config_fonc, $row, $hidden);
	return $valeurs;
}

/**
 * Vérifications du formulaire d'édition de tuto
 *
 * Vérifier les champs postés et signaler d'éventuelles erreurs
 *
 * @uses formulaires_editer_objet_verifier()
 *
 * @param int|string $id_tuto
 *     Identifiant du tuto. 'new' pour un nouveau tuto.
 * @param int $id_rubrique
 *     Identifiant de l'objet parent (si connu)
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un tuto source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du tuto, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Tableau des erreurs
 */
function formulaires_editer_tuto_verifier_dist($id_tuto = 'new', $id_rubrique = 0, $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
	$erreurs = array();

	$erreurs = formulaires_editer_objet_verifier('tuto', $id_tuto, array('titre', 'descriptif', 'url'));

	return $erreurs;
}

/**
 * Traitement du formulaire d'édition de tuto
 *
 * Traiter les champs postés
 *
 * @uses formulaires_editer_objet_traiter()
 *
 * @param int|string $id_tuto
 *     Identifiant du tuto. 'new' pour un nouveau tuto.
 * @param int $id_rubrique
 *     Identifiant de l'objet parent (si connu)
 * @param string $retour
 *     URL de redirection après le traitement
 * @param int $lier_trad
 *     Identifiant éventuel d'un tuto source d'une traduction
 * @param string $config_fonc
 *     Nom de la fonction ajoutant des configurations particulières au formulaire
 * @param array $row
 *     Valeurs de la ligne SQL du tuto, si connu
 * @param string $hidden
 *     Contenu HTML ajouté en même temps que les champs cachés du formulaire.
 * @return array
 *     Retours des traitements
 */
function formulaires_editer_tuto_traiter_dist($id_tuto = 'new', $id_rubrique = 0, $retour = '', $lier_trad = 0, $config_fonc = '', $row = array(), $hidden = '') {
	$retours = formulaires_editer_objet_traiter('tuto', $id_tuto, $id_rubrique, $lier_trad, $retour, $config_fonc, $row, $hidden);
	return $retours;
}
