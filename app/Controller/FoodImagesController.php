<?php
App::uses('AppController', 'Controller');
/**
 * FoodImages Controller
 *
 * @property FoodImage $FoodImage
 * @property PaginatorComponent $Paginator
 */
class FoodImagesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FoodImage->recursive = 0;
		$this->set('foodImages', $this->paginate());
		if ($this->request->is('post')) {
			$this->FoodImage->create();
			$filename = $this->request->data['FoodImage']['filename']['name'];
			$this->request->data['FoodImage']['extension'] = pathinfo($filename, PATHINFO_EXTENSION);
			$this->request->data['FoodImage']['original_filename'] = pathinfo($filename, PATHINFO_FILENAME);

			if ($this->FoodImage->save($this->request->data, true)) {
				$this->Session->setFlash(__('The food image has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The food image could not be saved. Please, try again.'), 'flash_error');
			}
		}
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function view($id = null) {
	// 	if (!$this->FoodImage->exists($id)) {
	// 		throw new NotFoundException(__('Invalid food image'));
	// 	}
	// 	$options = array('conditions' => array('FoodImage.' . $this->FoodImage->primaryKey => $id));
	// 	$this->set('foodImage', $this->FoodImage->find('first', $options));
	// }

/**
 * add method
 *
 * @return void
 */
	// public function add() {
	// 	if ($this->request->is('post')) {
	// 		$this->FoodImage->create();
	// 		if ($this->FoodImage->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The food image has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The food image could not be saved. Please, try again.'));
	// 		}
	// 	}
	// }

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function edit($id = null) {
	// 	if (!$this->FoodImage->exists($id)) {
	// 		throw new NotFoundException(__('Invalid food image'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->FoodImage->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The food image has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The food image could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('FoodImage.' . $this->FoodImage->primaryKey => $id));
	// 		$this->request->data = $this->FoodImage->find('first', $options);
	// 	}
	// }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FoodImage->id = $id;
		if (!$this->FoodImage->exists()) {
			throw new NotFoundException(__('Invalid food image'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FoodImage->delete()) {
			$this->Session->setFlash(__('The food image has been deleted.'));
		} else {
			$this->Session->setFlash(__('The food image could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}




}
