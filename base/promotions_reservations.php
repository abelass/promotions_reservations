<?php
/**
 * Déclarations relatives à la base de données
 *
 * @plugin     Promotions
 * @copyright  2014 - 2018
 * @author     Rainer
 * @licence    GNU/GPL
 * @package    SPIP\Promotions\Pipelines
 */
if (!defined('_ECRIRE_INC_VERSION'))
	return;

/**
 * Déclaration des champs extras
 *
 * @pipeline declarer_tables_objets_sql
 * @param array $tables
 *        	Description des tables
 * @return array Description complétée des tables
 */
function promotions_reservations_declarer_champs_extras($champs = array()) {
	include_spip('inc/promotion');

	if (function_exists('promotion_code_simple_actif_plugin') and
		promotion_code_simple_actif_plugin('reservation')) {

		$champs['spip_reservations']['code_promotion']=array(
			'saisie' => 'input',//Type du champ (voir plugin Saisies)
			'options' => array(
				'nom' => 'code_promotion',
				'label' => _T('promotion:label_code'),
				'sql' => "varchar(255) NOT NULL DEFAULT ''",
				'defaut' => '',// Valeur par défaut
			),
		);
	}

	return $champs;
}
