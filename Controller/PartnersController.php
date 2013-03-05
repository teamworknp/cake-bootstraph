<?php
App::uses('AppController', 'Controller');
/**
 * Partners Controller
 *
 * @property Partner $Partner
 */
class PartnersController extends AppController {

/**
 *  Layout
 *
 * @var string
 */
	public $layout = 'default';

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('TwitterBootstrap.BootstrapHtml', 'TwitterBootstrap.BootstrapForm', 'TwitterBootstrap.BootstrapPaginator');
/**
 * Components
 *
 * @var array
 */
	public $components = array('Session');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Partner->recursive = 0;
		$this->set('partners', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Partner->id = $id;
		if (!$this->Partner->exists()) {
			throw new NotFoundException(__('Invalid %s', __('partner')));
		}
		$this->set('partner', $this->Partner->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Partner->create();
			if ($this->Partner->save($this->request->data)) {
				$this->Session->setFlash(
					__('The %s has been saved', __('partner')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-success'
					)
				);
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('partner')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		}
		$bussinesTypes = $this->Partner->BussinesType->find('list');
		$employees = $this->Partner->Employee->find('list');
		$statusCredits = $this->Partner->StatusCredit->find('list');
		$currencies = $this->Partner->Currency->find('list');
		$paymentTerms = $this->Partner->PaymentTerm->find('list');
		$salesTypes = $this->Partner->SalesType->find('list');
		$countries = $this->Partner->Country->find('list');
		$taxes = $this->Partner->Tax->find('list');
		$this->set(compact('bussinesTypes', 'employees', 'statusCredits', 'currencies', 'paymentTerms', 'salesTypes', 'countries', 'taxes'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Partner->id = $id;
		if (!$this->Partner->exists()) {
			throw new NotFoundException(__('Invalid %s', __('partner')));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Partner->save($this->request->data)) {
				//$this->Session->setFlash(
				//	__('The %s has been saved', __('partner')),
				//	'alert',
				//	array(
				//		'plugin' => 'TwitterBootstrap',
				//		'class' => 'alert-success'
				//	)
				//);
				
				$this->Session->setFlash(__('The something has been saved'), 'alert', array(
   					 'plugin' => 'TwitterBootstrap',
    				 'class' => 'alert-success'
				));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(
					__('The %s could not be saved. Please, try again.', __('partner')),
					'alert',
					array(
						'plugin' => 'TwitterBootstrap',
						'class' => 'alert-error'
					)
				);
			}
		} else {
			$this->request->data = $this->Partner->read(null, $id);
		}
		$bussinesTypes = $this->Partner->BussinesType->find('list');
		$employees = $this->Partner->Employee->find('list');
		$statusCredits = $this->Partner->StatusCredit->find('list');
		$currencies = $this->Partner->Currency->find('list');
		$paymentTerms = $this->Partner->PaymentTerm->find('list');
		$salesTypes = $this->Partner->SalesType->find('list');
		$countries = $this->Partner->Country->find('list');
		$taxes = $this->Partner->Tax->find('list');
		$this->set(compact('bussinesTypes', 'employees', 'statusCredits', 'currencies', 'paymentTerms', 'salesTypes', 'countries', 'taxes'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Partner->id = $id;
		if (!$this->Partner->exists()) {
			throw new NotFoundException(__('Invalid %s', __('partner')));
		}
		if ($this->Partner->delete()) {
			$this->Session->setFlash(
				__('The %s deleted', __('partner')),
				'alert',
				array(
					'plugin' => 'TwitterBootstrap',
					'class' => 'alert-success'
				)
			);
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(
			__('The %s was not deleted', __('partner')),
			'alert',
			array(
				'plugin' => 'TwitterBootstrap',
				'class' => 'alert-error'
			)
		);
		$this->redirect(array('action' => 'index'));
	}
	public function test() {
		
	}
}
