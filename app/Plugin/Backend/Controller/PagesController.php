<?php
class PagesController extends BackendAppController {
	var $name = 'Pages';
	var $uses = array('Backend.Page', 'Backend.Faq');
	var $components = array('Session', 'Auth', 'Backend.General');
	var $paginate = array();
	//var $helpers = array('Form');
			
	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('index', 'create', 'pages', 'change_status');
	}
	
	function index(){
		/*Set Bradcrumb*/
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'pages/index';
		$breadcrumb['Pages'] = 'javascript:void(0)';
		$this->set('breadcrumb', $breadcrumb);
		
		$conditions = array();
		$conditions['Page.active'] = array(1,0);
		$this->paginate['Page']['order'] = array('id'=>'ASC');
		$this->paginate['Page']['recursive'] = 4;
		$this->paginate['Page']['limit'] = 20;
		$page_data = $this->paginate('Page', $conditions);
		
		$this->set('page_data', $page_data);
		
	}
	function create( $page_id = null ){
	/*Set Bradcrumb*/
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'pages/create';
		$breadcrumb['Add Page'] = 'javascript:void(0)';
		$this->set('breadcrumb', $breadcrumb);
		
		$this->set('page_id', $page_id);
		if(!empty($this->data)){
				$this->Page->set($this->data);
				$this->Page->setValidation('NewPage');
				if($this->Page->validates()){
					if(empty($page_id)){
						$this->request->data['Page']['url'] = $this->General->parseSlug($this->data['Page']['title']);
						$this->Page->create();
					}
					$this->Page->save($this->data);echo '<pre>';
					if(empty($page_id)){
					$this->Session->setFlash(__('New page has been created.'), null, null,'success');
					}else{
					$this->Session->setFlash(__('Page has been updated.'), null, null,'success');
					}
					$this->redirect(array('controller'=>'pages', 'action'=>'index'));
				}
		
		}else{
			if(!empty($page_id)){
				$this->request->data = $this->Page->findById( $page_id );
			}
		}
		$metaRecord = array();
		$this->loadModel('MetaTag');
		$metaRecord =  $this->MetaTag->find('first', array('conditions'=>array('MetaTag.type'=>'Page', 'MetaTag.target_id'=>$page_id)));
		$this->set('metaRecord', $metaRecord);
	}
	function change_status( $page_id = null, $status = null ){
		if(empty($status)){
			$status = 0;
		}
		if(!empty($page_id)){
				$this->Page->updateAll(
							array('Page.active'=> $status),
							array('Page.id'=> $page_id)
					);
						
					
		}
		$this->Session->setFlash(__('Page status has been updated.'), null, null,'success');
		$this->redirect(array('controller'=>'pages', 'action'=>'index'));
	}
	
	function delete( $page_id = null){
		if(!empty($page_id)){
			$this->Page->delete($page_id);
		}
		$this->Session->setFlash(__('Page has been deleted'), null, null, 'success');
		$this->redirect(array('controller'=>'pages', 'action'=>'index'));
	}
	
	
	public function faq() {
		$conditions = array();
		$conditions['Faq.active'] = array(1,0);
		$this->paginate['Faq']['order'] = array('id'=>'ASC');
		$this->paginate['Faq']['recursive'] = 0;
		$this->paginate['Faq']['limit'] = 20;
		$faq_data = $this->paginate('Faq', $conditions);
		
		$this->set('faq_data', $faq_data);
	}
	
	public function create_faq( $faq_id = null ){
		/*Set Bradcrumb*/
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'pages/index';
		$breadcrumb['FAQ'] = Configure::read('AdminSiteUrl').'pages/faq';
		if(!empty($faq_id)){
			$breadcrumb['Edit'] = 'javascript:void(0)';
		}else{
			$breadcrumb['Create'] = 'javascript:void(0)';
		}
		$this->set('breadcrumb', $breadcrumb);
		
		$this->set('faq_id', $faq_id);
		
		if(!empty($this->data)){
			$this->Faq->set($this->data);
			$this->Faq->setValidation('faq');
			if($this->Faq->validates()){
				if(empty($faq_id)){
					$this->request->data['Faq']['url'] = $this->General->parseSlug($this->data['Faq']['title']);
					$this->Faq->create();
				}
				$this->Faq->save($this->data);
				if(empty($faq_id)){
					$this->Session->setFlash(__('Faq content has been created.'), null, null,'success');
				}else{
					$this->Session->setFlash(__('Faq content has been updated.'), null, null,'success');
				}
				$this->redirect(array('controller'=>'pages', 'action'=>'faq'));
			}
			
		}else{
			if(!empty($faq_id)){
				$this->request->data = $this->Faq->findById($faq_id);
			}
		}
	}
	
	
	function change_faq_status( $faq_id = null, $status = null ){
		if(empty($status)){
			$status = 0;
		}
		if(!empty($faq_id)){
				$this->Faq->updateAll(
							array('Faq.active'=> $status),
							array('Faq.id'=> $faq_id)
					);
						
					
		}
		$this->Session->setFlash(__('Faq status has been updated.'), null, null,'success');
		$this->redirect(array('controller'=>'pages', 'action'=>'faq'));
	}
	
	function expandable_delete( $faq_id = null ){
		$this->loadModel('Backend.Faq');
		if(!empty($faq_id)){
			$this->Faq->deleteAll(
				array('Faq.id'=>$faq_id)
			);
		}
		$this->Session->setFlash(__('Faq has been deleted'), null, null, 'success');
		$this->redirect(array('controller'=>'pages', 'action'=>'faq'));
	}
	
	
	
};?>