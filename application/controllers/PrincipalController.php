<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PrincipalController extends CI_Controller{
	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->smarty->assign("prueba",1);
		$this->smarty->display("principal.tpl");
	}
}