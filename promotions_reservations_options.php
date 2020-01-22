<?php
/**
 * Options au chargement du plugin Promotions Réservations
 *
 * @plugin     Promotions Réservations
 * @copyright  2018 - 2020
 * @author     Rainer Müller
 * @licence    GNU/GPL
 * @package    SPIP\Promotions_reservations\Options
 */

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

// Ajoute le plugin reservation événements aux promotions.
$GLOBALS['promotion_plugin']['reservation_evenement'] = _T('reservation_evenement:reservation_evenement_titre');
