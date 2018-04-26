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
	include_spip('inc/promotions');
print 0;
	if (function_exists('promotion_code_simple_actif_plugin') and promotion_code_simple_actif_plugin('reservation_evenement')) {
		print 1;
		$champs['spip_reservations']['code_promotion']=array(
			'saisie' => 'input',//Type du champ (voir plugin Saisies)
			'options' => array(
				'nom' => 'code_promotion',
				'label' => _T('reservation:label_lang'),
				'sql' => "varchar(255) NOT NULL DEFAULT ''",
				'defaut' => '',// Valeur par défaut
				'restrictions'=>array('voir' => array('auteur' => ''),//Tout le monde peut voir
					'modifier' => array('auteur' => 'webmestre')),//Seuls les webmestres peuvent modifier
			),
		);
	}

	return $champs;
}
