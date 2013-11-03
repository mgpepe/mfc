<?php
App::uses('AppController', 'Controller');
/**
 * GalleryImages Controller
 *
 * @property GalleryImage $GalleryImage
 */
class GalleryImagesController extends AppController {

	public $helpers = array('Time');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->GalleryImage->recursive = 0;
		$this->set('galleryImages', $this->paginate());
		if ($this->request->is('post')) {
			$this->GalleryImage->create();
			$filename = $this->request->data['GalleryImage']['filename']['name'];
			$this->request->data['GalleryImage']['extension'] = pathinfo($filename, PATHINFO_EXTENSION);
			$this->request->data['GalleryImage']['original_filename'] = pathinfo($filename, PATHINFO_FILENAME);

			if ($this->GalleryImage->save($this->request->data, true)) {
				$this->Session->setFlash(__('The gallery image has been saved'), 'flash_success');
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gallery image could not be saved. Please, try again.'), 'flash_error');
			}
		}
	}

	

// /**
//  * view method
//  *
//  * @throws NotFoundException
//  * @param string $id
//  * @return void
//  */
// 	public function view($id = null) {
// 		$this->GalleryImage->id = $id;
// 		if (!$this->GalleryImage->exists()) {
// 			throw new NotFoundException(__('Invalid gallery image'));
// 		}
// 		$this->set('galleryImage', $this->GalleryImage->read(null, $id));
// 	}

// /**
//  * add method
//  *
//  * @return void
//  */
// 	public function add() {
// 		if ($this->request->is('post')) {
// 			$this->GalleryImage->create();
// 			$filename = $this->request->data['GalleryImage']['filename']['name'];
// 			$this->request->data['GalleryImage']['extension'] = pathinfo($filename, PATHINFO_EXTENSION);
// 			$this->request->data['GalleryImage']['original_filename'] = pathinfo($filename, PATHINFO_FILENAME);
// 			$this->request->data['GalleryImage']['date_uploaded'] = date('Y-m-d H:i:s') ;
// 			$this->request->data['GalleryImage']['frozen'] = 0 ;
// 			$this->request->data['GalleryImage']['user_id'] = $this->Auth->user('id');

// 			if ($this->request->data['GalleryImage']['title']=='')
// 				$this->request->data['GalleryImage']['title']=$this->request->data['GalleryImage']['original_filename'];

// 			if ($this->GalleryImage->save($this->request->data, true)) {
// 				$this->Session->setFlash(__('The gallery image has been saved'), 'flash_success');
// 				$this->redirect(array('action' => 'index'));
// 			} else {
// 				$this->Session->setFlash(__('The gallery image could not be saved. Please, try again.'), 'flash_error');

// 			}
// 		}
// 		$users = $this->GalleryImage->User->find('list');
// 		$this->set(compact('users'));
// 	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function edit($id = null) {
	// 	$this->GalleryImage->id = $id;
	// 	if (!$this->GalleryImage->exists()) {
	// 		throw new NotFoundException(__('Invalid gallery image'));
	// 	}
	// 	$galleryImage = $this->GalleryImage->findById($id);
	// 	$frozen = $galleryImage['GalleryImage']['frozen'];
	// 	if ($this->request->is('post') || $this->request->is('put')) {
	// 		if( isset($this->request->data['GalleryImage']['filename'] ) && !$frozen){
	// 			if (!empty($this->request->data['GalleryImage']['filename']['name'] )){
	// 				$filename = $this->request->data['GalleryImage']['filename']['name'];
	// 				$this->request->data['GalleryImage']['extension'] = pathinfo($filename, PATHINFO_EXTENSION);
	// 				$this->request->data['GalleryImage']['original_filename'] = pathinfo($filename, PATHINFO_FILENAME);
	// 				$this->request->data['GalleryImage']['date_uploaded'] = date('Y-m-d H:i:s') ;
	// 				$this->request->data['GalleryImage']['frozen'] = 0 ;
	// 				$this->request->data['GalleryImage']['user_id'] = $this->Auth->user('id');
	// 			}
	// 		}


	// 		if ($this->GalleryImage->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The gallery image has been saved'), 'flash_success');
	// 			$this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The gallery image could not be saved. Please, try again.', 'flash_error'));
	// 		}
	// 	} else {
	// 		$this->request->data = $this->GalleryImage->read(null, $id);
	// 	}
	// 	$users = $this->GalleryImage->User->find('list');
	// 	$this->set(compact('users', 'frozen', 'galleryImage'));
	// }

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->GalleryImage->id = $id;
		if (!$this->GalleryImage->exists()) {
			throw new NotFoundException(__('Invalid gallery image'), 'flash_error');
		}
		if ($this->GalleryImage->delete()) {
			$this->Session->setFlash(__('GalleryImage deleted'), 'flash_success');
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('GalleryImage was not deleted'), 'flash_error');
		$this->redirect(array('action' => 'index'));
	}

}
