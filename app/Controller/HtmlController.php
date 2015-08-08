<?php
App::uses('AppController', 'Controller');

class HtmlController extends AppController {
	
	public $uses = array();
	public $components = array('General');
	public $helpers = array('Text');

	function index(){
		$this->layout = 'html';
	}
	function account_summery(){
		$this->layout = 'html';
	}
	function banner(){
		$this->layout = 'html';
	}
	function category(){
		$this->layout = 'html';
	}
	function category_details(){
		$this->layout = 'html';
	}
	function contact(){
		$this->layout = 'html';
	}
	function deliverydate(){
		$this->layout = 'html';
	}
	function login(){
		$this->layout = 'html';
	}
	function my_cart(){
		$this->layout = 'html';
	}
	function password(){
		$this->layout = 'html';
	}
	function payment_info(){
		$this->layout = 'html';
	}
	function placeorder(){
		$this->layout = 'html';
	}
	function refer(){
		$this->layout = 'html';
	}
	function shipping_info(){
		$this->layout = 'html';
	}
	function signup(){
		$this->layout = 'html';
	}
	function upload_art(){
		$this->layout = 'html';
	}
	
	
}?>
