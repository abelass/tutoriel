<?php
/**
 * Utilisation de l'action supprimer pour l'objet tuto
 *
 * @plugin     Tutoriaux
 * @copyright  2019 - 2021
 * @author     Rainer Müller
 * @licence    GNU/GPL v3
 * @package    SPIP\Tutoriel\Action
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}



/**
 * Action pour supprimer un·e tuto
 *
 * Vérifier l'autorisation avant d'appeler l'action.
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, tuto, #ID_TUTO}|oui)
 *         [(#BOUTON_ACTION{<:tuto:supprimer_tuto:>,
 *             #URL_ACTION_AUTEUR{supprimer_tuto, #ID_TUTO, #URL_ECRIRE{tutos}},
 *             danger, <:tuto:confirmer_supprimer_tuto:>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     [(#AUTORISER{supprimer, tuto, #ID_TUTO}|oui)
 *         [(#BOUTON_ACTION{
 *             [(#CHEMIN_IMAGE{tuto-del-24.png}|balise_img{<:tuto:supprimer_tuto:>}|concat{' ',#VAL{<:tuto:supprimer_tuto:>}|wrap{<b>}}|trim)],
 *             #URL_ACTION_AUTEUR{supprimer_tuto, #ID_TUTO, #URL_ECRIRE{tutos}},
 *             icone s24 horizontale danger tuto-del-24, <:tuto:confirmer_supprimer_tuto:>})]
 *     ]
 *     ```
 *
 * @example
 *     ```
 *     if (autoriser('supprimer', 'tuto', $id_tuto)) {
 *          $supprimer_tuto = charger_fonction('supprimer_tuto', 'action');
 *          $supprimer_tuto($id_tuto);
 *     }
 *     ```
 *
 * @param null|int $arg
 *     Identifiant à supprimer.
 *     En absence de id utilise l'argument de l'action sécurisée.
**/
function action_supprimer_tuto_dist($arg=null) {
	if (is_null($arg)){
		$securiser_action = charger_fonction('securiser_action', 'inc');
		$arg = $securiser_action();
	}
	$arg = intval($arg);

	// cas suppression
	if ($arg) {
		sql_delete('spip_tutos',  'id_tuto=' . sql_quote($arg));
	}
	else {
		spip_log("action_supprimer_tuto_dist $arg pas compris");
	}
}
