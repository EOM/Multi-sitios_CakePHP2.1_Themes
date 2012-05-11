<?php
App::uses('AppController', 'Controller');
/**
 * Paises Controller
 *
 * @property Paises $Paises
 */
class PaisesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Paises->recursive = 0;
		$this->set('paises', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Paises->id = $id;
		if (!$this->Paises->exists()) {
			throw new NotFoundException(__('Invalid paises'));
		}
		$this->set('paises', $this->Paises->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Paises->create();
			if ($this->Paises->save($this->request->data)) {
				$this->Session->setFlash(__('The paises has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paises could not be saved. Please, try again.'));
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
		$this->Paises->id = $id;
		if (!$this->Paises->exists()) {
			throw new NotFoundException(__('Invalid paises'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Paises->save($this->request->data)) {
				$this->Session->setFlash(__('The paises has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The paises could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Paises->read(null, $id);
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
		$this->Paises->id = $id;
		if (!$this->Paises->exists()) {
			throw new NotFoundException(__('Invalid paises'));
		}
		if ($this->Paises->delete()) {
			$this->Session->setFlash(__('Paises deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Paises was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
