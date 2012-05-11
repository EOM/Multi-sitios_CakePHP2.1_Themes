<?php
App::uses('AppController', 'Controller');
/**
 * Modelos Controller
 *
 * @property Modelos $Modelos
 */
class ModelosController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Modelos->recursive = 0;
		$this->set('modelos', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Modelos->id = $id;
		if (!$this->Modelos->exists()) {
			throw new NotFoundException(__('Invalid modelos'));
		}
		$this->set('modelos', $this->Modelos->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Modelos->create();
			if ($this->Modelos->save($this->request->data)) {
				$this->Session->setFlash(__('The modelos has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modelos could not be saved. Please, try again.'));
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
		$this->Modelos->id = $id;
		if (!$this->Modelos->exists()) {
			throw new NotFoundException(__('Invalid modelos'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Modelos->save($this->request->data)) {
				$this->Session->setFlash(__('The modelos has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The modelos could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Modelos->read(null, $id);
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
		$this->Modelos->id = $id;
		if (!$this->Modelos->exists()) {
			throw new NotFoundException(__('Invalid modelos'));
		}
		if ($this->Modelos->delete()) {
			$this->Session->setFlash(__('Modelos deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Modelos was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
