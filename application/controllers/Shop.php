<?php

class Shop extends CI_Controller{

	private $_user;

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('User');

		$this->_user = '梁間博翔';
	}

	public function greet()
	{
		echo 'Hello, ' . $this->_user . '.';
		$test = $this->User->getUser();
		
		var_dump($test);
	}
}