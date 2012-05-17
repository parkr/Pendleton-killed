<?php
App::uses('AppController', 'Controller');
/**
 * Collections Controller
 *
 * @property Collection $Collection
 */
class CollectionsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Collection->recursive = 0;
		$this->set('collections', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($year = null) {
		if($year == null){
			if(isset($this->request->params['year'])){
				$year = $this->request->params['year'];
			} else {
				throw new NotFoundException(__("Please specify the year of the collection."));
			}
		}
		$collection = $this->Collection->findByYear($year);
		$this->Collection->id = $collection['Collection']['id'];
		if (!$this->Collection->exists()) {
			throw new NotFoundException(__("Collection for $year has not been added."));
		}
		$this->set('collection', $this->Collection->read(null, $collection['Collection']['id']));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Collection->create();
			if ($this->Collection->save($this->request->data)) {
				$this->Session->setFlash(__('The collection has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The collection could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Collection->id = $id;
		if (!$this->Collection->exists()) {
			throw new NotFoundException(__('Invalid collection'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Collection->save($this->request->data)) {
				$this->Session->setFlash(__('The collection has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The collection could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Collection->read(null, $id);
		}
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
		$this->Collection->id = $id;
		if (!$this->Collection->exists()) {
			throw new NotFoundException(__('Invalid collection'));
		}
		if ($this->Collection->delete()) {
			$this->Session->setFlash(__('Collection deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Collection was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	
	
/**
 * listAll method
 *
 * @return displayField of all collections, as JSON.
 */
	public function listAll() {
		if (!$this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		$View = new View($this);
		$Html = $View->loadHelper('Html');
		$params = array(
			'order' => 'Collection.year DESC',
			'recursive' => 0,
			'fields' => array($this->Collection->displayField)
		);
		$collections = $this->Collection->find('all', $params);
		for($c=0; $c<count($collections); $c++){
			$collections[$c]['Collection']['url'] = $Html->url('/collections/'.urlencode($collections[$c]['Collection']['year']));
		}
		echo json_encode($collections);
	}

}
