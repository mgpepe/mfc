<?php
App::uses('AppController', 'Controller');
/**
 * FormContacts Controller
 *
 * @property FormContact $FormContact
 * @property PaginatorComponent $Paginator
 */
class FormContactsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'RequestHandler');
/**
 * index method
 *
 * @return void
 */
	// public function index() {
	// 	$this->FormContact->recursive = 0;
	// 	$this->set('formContacts', $this->Paginator->paginate());
	// }




	/**
	 *
	 * @project : JobsAdvent
	 * @author  : Petar Petrov
	 *
	 */
	function mrmiyagiprawnsyou(){
		$this->FormContact->recursive = 0;
		$this->set('formContacts', $this->Paginator->paginate());
	}

	/**
	 *
	 * @project : JobsAdvent
	 * @author  : Petar Petrov
	 *
	 */
	function submit_ajax(){
		$response['success']=false;
		if ($this->request->is('post')) {
			if ($this->request->data) {
				if ($this->FormContact->save($this->request->data)){
					try{
						App::uses('CakeEmail', 'Network/Email');
						$Email = new CakeEmail();
						$Email->template('hello', 'default');
						$Email->emailFormat('html');
						$Email->from(array('me@miyagi.com' => 'My Site'));
						$Email->to('petrov.petar@gmail.com');
						$Email->viewVars(array('name' => $this->request->data['FormContact']['name']));
						$Email->viewVars(array('email' => $this->request->data['FormContact']['email']));
						$Email->viewVars(array('message' => $this->request->data['FormContact']['message']));
						if($Email->send() ){
							$response['success']=true;
						}
					}catch (Exception $e){}
					$response['success']=true; // even if mail fails, results were saved, form should go away
				}else{
					foreach ($this->FormContact->validationErrors as $error) {
						$response['message']=$error[0];
						break;
					}
				}
			}
		}
		$this->autoRender = false; 
		$this->RequestHandler->respondAs('json');
		echo json_encode($response);
		return;
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function view($id = null) {
	// 	if (!$this->FormContact->exists($id)) {
	// 		throw new NotFoundException(__('Invalid form contact'));
	// 	}
	// 	$options = array('conditions' => array('FormContact.' . $this->FormContact->primaryKey => $id));
	// 	$this->set('formContact', $this->FormContact->find('first', $options));
	// }

/**
 * add method
 *
 * @return void
 */
	public function add() {
		// if ($this->request->is('post')) {
		// 	$this->FormContact->create();
		// 	if ($this->FormContact->save($this->request->data)) {
		// 		$this->Session->setFlash(__('The form contact has been saved.'));
		// 		return $this->redirect(array('action' => 'index'));
		// 	} else {
		// 		$this->Session->setFlash(__('The form contact could not be saved. Please, try again.'));
		// 	}
		// }
		$this->loadModel('GalleryImage');
		$galleryImages = $this->GalleryImage->find('all');
		$this->loadModel('FoodImage');
		$foodImages = $this->FoodImage->find('all');
		$this->set(compact('galleryImages', 'foodImages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function edit($id = null) {
	// 	if (!$this->FormContact->exists($id)) {
	// 		throw new NotFoundException(__('Invalid form contact'));
	// 	}
	// 	if ($this->request->is(array('post', 'put'))) {
	// 		if ($this->FormContact->save($this->request->data)) {
	// 			$this->Session->setFlash(__('The form contact has been saved.'));
	// 			return $this->redirect(array('action' => 'index'));
	// 		} else {
	// 			$this->Session->setFlash(__('The form contact could not be saved. Please, try again.'));
	// 		}
	// 	} else {
	// 		$options = array('conditions' => array('FormContact.' . $this->FormContact->primaryKey => $id));
	// 		$this->request->data = $this->FormContact->find('first', $options);
	// 	}
	// }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	// public function delete($id = null) {
	// 	$this->FormContact->id = $id;
	// 	if (!$this->FormContact->exists()) {
	// 		throw new NotFoundException(__('Invalid form contact'));
	// 	}
	// 	$this->request->onlyAllow('post', 'delete');
	// 	if ($this->FormContact->delete()) {
	// 		$this->Session->setFlash(__('The form contact has been deleted.'));
	// 	} else {
	// 		$this->Session->setFlash(__('The form contact could not be deleted. Please, try again.'));
	// 	}
	// 	return $this->redirect(array('action' => 'index'));
	// }
}
