<?php
App::uses('AppController', 'Controller');
/**
 * Clientes Controller
 *
 * @property Clientes $Clientes
 */
class ClientesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Clientes->recursive = 0;
		$this->set('clientes', $this->paginate());
		$this->set('sitio', 'Soy el sitio 1');
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Clientes->id = $id;
		if (!$this->Clientes->exists()) {
			throw new NotFoundException(__('Invalid clientes'));
		}
		$this->set('clientes', $this->Clientes->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Clientes->create();
			if ($this->Clientes->save($this->request->data)) {
				$this->Session->setFlash(__('The clientes has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clientes could not be saved. Please, try again.'));
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
		$this->Clientes->id = $id;
		if (!$this->Clientes->exists()) {
			throw new NotFoundException(__('Invalid clientes'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Clientes->save($this->request->data)) {
				$this->Session->setFlash(__('The clientes has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clientes could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Clientes->read(null, $id);
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
		$this->Clientes->id = $id;
		if (!$this->Clientes->exists()) {
			throw new NotFoundException(__('Invalid clientes'));
		}
		if ($this->Clientes->delete()) {
			$this->Session->setFlash(__('Clientes deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Clientes was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
