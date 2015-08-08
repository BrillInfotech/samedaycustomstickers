<?php
class CouponsController extends BackendAppController {
	var $name = 'Coupons';
	var $uses = array('Backend.Coupon');
	var $components = array('Session', 'Auth', 'Backend.General');
	var $paginate = array();
	//var $helpers = array('Form');
	
	function beforeFilter(){
		parent::beforeFilter();
	}
	
	function index(){
		/*Set Bradcrumb*/
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'Coupons/index';
		$breadcrumb['Coupons'] = 'javascript:void(0)';
		$this->set('breadcrumb', $breadcrumb);
	
		$conditions = array();
		$this->paginate['Coupon']['order'] = array('id'=>'ASC');
		$this->paginate['Coupon']['recursive'] = 4;
		$this->paginate['Coupon']['limit'] = 20;
		$coupon_data = $this->paginate('Coupon', $conditions);
		
		$this->set('coupon_data', $coupon_data);
	}
	
	function create( $coupon_id = null ){
		/*Set Bradcrumb*/
		$breadcrumb['Home'] = Configure::read('AdminSiteUrl').'coupons/index';
		$breadcrumb['Coupon'] = Configure::read('AdminSiteUrl').'coupons/create';
		if(!empty($coupon_id)){
			$breadcrumb['Edit'] = 'javascript:void(0)';
		}else{
			$breadcrumb['Create'] = 'javascript:void(0)';
		}
		$this->set('breadcrumb', $breadcrumb);
		
		$this->set('coupon_id', $coupon_id);
		
		if(!empty($this->data)){
			$this->Coupon->set($this->data);
			$this->Coupon->setValidation('NewCoupon');
			if($this->Coupon->validates()){
				if(empty($coupon_id)){
					$this->Coupon->create();
				}
				$this->Coupon->save($this->data);
				if(empty($coupon_id)){
					$this->Session->setFlash(__('Coupon has been created.'), null, null,'success');
				}else{
					$this->Session->setFlash(__('Coupon has been updated.'), null, null,'success');
				}
				$this->redirect(array('controller'=>'coupons', 'action'=>'index'));
			}
			
		}else{
			if(!empty($coupon_id)){
				$this->request->data = $this->Coupon->findById($coupon_id);
			}
		}
	}
	
	function delete_coupon($coupon_id = null){
				$this->loadModel('Backend.Coupon');
				if(!empty($coupon_id)){
				$this->Coupon->delete($coupon_id);
				}
				$this->Session->setFlash(__('Coupon record has been deleted'), null, null, 'success');
				$this->redirect(array('controller' => 'coupons', 'action' => 'index'));
	}
	
	function change_status( $coupon_id = null, $status = null ){
		if(empty($status)){
			$status = 0;
		}
		if(!empty($coupon_id)){
				$this->Coupon->updateAll(
							array('Coupon.active'=> $status),
							array('Coupon.id'=> $coupon_id)
					);
						
					
		}
		$this->Session->setFlash(__('Coupon status has been updated.'), null, null,'success');
		$this->redirect(array('controller'=>'coupons', 'action'=>'index'));
	}
};?>