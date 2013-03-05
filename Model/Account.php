<?php
App::uses('AppModel', 'Model');
/**
 * Account Model
 *
 * @property AccountGroup $AccountGroup
 * @property Currency $Currency
 * @property JournalDetail $JournalDetail
 * @property DepositeDetail $DepositeDetail
 * @property PaymentDetail $PaymentDetail
 * @property CashBank $CashBank
 * @property Gltran $Gltran
 */
class Account extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'AccountGroup' => array(
			'className' => 'AccountGroup',
			'foreignKey' => 'account_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
	
	);

}
