<?php
Class MY_Controller extends CI_Controller{
	//bien gui du lieu sang ben view
	public $data = array();

	//My_controller để kế thừa tất cả các controller
	function __construct(){
		//kế thừa từ CI_Controller
		parent::__construct();
		$this-> load-> library('cart');

		$controller = $this->uri->segment(1);
		switch($controller){
			case 'Manager' :
			{
				$this->load->helper('admin');
				
				break;
			}
			default:
			{
				$this->load->helper('admin');
				
			}
		}
	}
}