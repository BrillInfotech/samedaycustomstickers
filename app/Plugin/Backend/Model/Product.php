<?php
class Product extends BackendAppModel {

	var $name = 'Product';
	var $useTable = 'products';
	var $actsAs = array('Multivalidatable');

};?>