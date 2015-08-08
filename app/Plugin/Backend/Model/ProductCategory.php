<?php
class ProductCategory extends BackendAppModel {

	var $name = 'ProductCategory';
	var $useTable = 'product_categories';
	var $actsAs = array('Multivalidatable');

};?>