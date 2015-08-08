<?php
class CustomersController extends BackendAppController {
	var $name = 'Customers';
	var $uses = array('Backend.Customer');
	var $components = array('Session', 'Auth', 'Backend.General');
	var $paginate = array();
	//var $helpers = array('Form');
			
	function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('index','create','shipping_address','create_shipping_address','delete_shipping_address');
	}
	
	function index(){
		/*Set Bradcrumb*/
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'customers/index';
		$breadcrumb['Customers'] = 'javascript:void(0)';
		$this->set('breadcrumb', $breadcrumb);
		
		$conditions = array();
		$conditions['Customer.active'] = array(1,0);
		$this->paginate['Customer']['order'] = array('id'=>'ASC');
		$this->paginate['Customer']['recursive'] = 4;
		$this->paginate['Customer']['limit'] = 20;
		$customer_data = $this->paginate('Customer', $conditions);
		
		$this->set('customer_data', $customer_data);
		
	}
	function create( $customer_id = null ){
	/*Set Bradcrumb*/
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'dashboard/index';
		$breadcrumb['Customers'] = Configure::read('AdminSiteUrl').'customers/index';
		if(!empty($customer_id)){
			$breadcrumb['Edit'] = 'javascript:void(0)';
		}else{
			$breadcrumb['Create'] = 'javascript:void(0)';
		}
		$this->set('breadcrumb', $breadcrumb);
		
		$this->set('customer_id', $customer_id);
		
		if(!empty($this->data)){
			$this->Customer->set($this->data);
			$this->Customer->setValidation('NewCustomer');
			if($this->Customer->validates()){
				if(empty($customer_id)){
					$this->request->data['Customer']['url'] = $this->General->parseSlug($this->data['Customer']['name']);
					$this->Customer->create();
				}
				if(!empty($this->data['Customer']['confirm_password'])){
					$new_password = Security::hash($this->data['Customer']['confirm_password'], null, true);
					$this->request->data['Customer']['password'] = $new_password;
				}
				$this->Customer->save($this->data, false);
				if(empty($customer_id)){
					$this->Session->setFlash(__('New customer has been created.'), null, null,'success');
				}else{
					$this->Session->setFlash(__('Customer has been updated.'), null, null,'success');
				}
				$this->redirect(array('controller'=>'customers', 'action'=>'index'));
			}
		
		}else{
			if(!empty($customer_id)){
				$this->request->data = $this->Customer->findById( $customer_id );
			}
		}
		$metaRecord = array();
		$this->loadModel('MetaTag');
		$metaRecord =  $this->MetaTag->find('first', array('conditions'=>array('MetaTag.type'=>'Customer', 'MetaTag.target_id'=>$customer_id)));
		$this->set('metaRecord', $metaRecord);
	}
	function change_status( $customer_id = null, $status = null ){
		if(empty($status)){
			$status = 0;
		}
		if(!empty($customer_id)){
				$this->Customer->updateAll(
							array('Customer.active'=> $status),
							array('Customer.id'=> $customer_id)
					);
						
					
		}
		$this->Session->setFlash(__('Customer status has been updated.'), null, null,'success');
		$this->redirect(array('controller'=>'customers', 'action'=>'index'));
	}
	function shipping_address( $customer_id = null){
		/*Set Bradcrumb*/
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'customers/shipping_address';
		$breadcrumb['Customers'] = 'javascript:void(0)';
		$this->set('breadcrumb', $breadcrumb);
		
		if(empty($customer_id)){
			$this->redirect(array('conntroller' => 'customers', 'action' => 'index'));
		}
		
		$this->loadModel('Backend.CustomerShippingAddress');
		$conditions = array();
		$conditions['CustomerShippingAddress.customer_id'] = $customer_id;
		
		$this->paginate['CustomerShippingAddress']['order'] = array('id'=>'ASC');
		$this->paginate['CustomerShippingAddress']['recursive'] = 1;
		$this->paginate['CustomerShippingAddress']['limit'] = 20;
		$customer_address_data = $this->paginate('CustomerShippingAddress', $conditions);
		
		$this->set(compact('customer_address_data', 'customer_id'));
	}	
	
	
	function create_shipping_address($customer_id = null, $shipping_id = null){
			/*Set Bradcrumb*/
			$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'dashboard/index';
			$breadcrumb['Customers'] = Configure::read('AdminSiteUrl').'customers/index';
			$breadcrumb['Shipping Address'] = Configure::read('AdminSiteUrl').'customers/shipping_address/'.$customer_id;
			if(!empty($shipping_id)){
				$breadcrumb['Edit Address'] = 'javascript:void(0)';
			}else{
				$breadcrumb['Create Address'] = 'javascript:void(0)';
			}
			$this->set('breadcrumb', $breadcrumb);
			
			$this->loadModel('Backend.CustomerShippingAddress');
			
			$this->set(compact('customer_id','shipping_id'));
			
			if(!empty($this->data)){
				$this->CustomerShippingAddress->set($this->data);
				$this->CustomerShippingAddress->setValidation('NewCustomer');
				if($this->CustomerShippingAddress->validates()){
					if(empty($shipping_id)){
						$this->CustomerShippingAddress->create();
					}
					$this->request->data['CustomerShippingAddress']['customer_id'] = $customer_id;
					$this->CustomerShippingAddress->save($this->data);
					if(empty($shipping_id)){
						$this->Session->setFlash(__('Customer shipping address has been created.'), null, null,'success');
					}else{
						$this->Session->setFlash(__('Customer shipping address has been updated.'), null, null,'success');
					}
					$this->redirect(array('controller'=>'customers', 'action'=>'shipping_address',$customer_id));
				}
			
			}else{
				if(!empty($shipping_id)){
					$this->request->data = $this->CustomerShippingAddress->findById( $shipping_id );
				}
			}
			$metaRecord = array();
			$this->loadModel('MetaTag');
			$metaRecord =  $this->MetaTag->find('first', array('conditions'=>array('MetaTag.type'=>'CustomerShippingAddress', 'MetaTag.target_id'=>$customer_id)));
			$this->set('metaRecord', $metaRecord);
	}
	
	function delete_shipping_address($customer_id = null, $shipping_id = null){
				$this->loadModel('Backend.CustomerShippingAddress');
				if(!empty($shipping_id)){
					$this->CustomerShippingAddress->delete($shipping_id);
				}
				$this->Session->setFlash(__('Shipping address has been deleted'), null, null, 'success');
				$this->redirect(array('controller' => 'customers', 'action' => 'shipping_address', $customer_id));
	}
	
	function delete_customer($customer_id = null){
				$this->loadModel('Backend.CustomerShippingAddress');
				if(!empty($customer_id)){
					$this->Customer->delete($customer_id);
					$this->CustomerShippingAddress->deleteAll(array('CustomerShippingAddress.customer_id' => $customer_id));
				}
				$this->Session->setFlash(__('Customer record has been deleted'), null, null, 'success');
				$this->redirect(array('controller' => 'customers', 'action' => 'index'));
	}
};?>