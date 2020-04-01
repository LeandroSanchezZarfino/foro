<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginController extends CI_Controller{
	public $key= "$#%&";
	public function __construct(){
		parent::__construct();
	}

	public function registrar(){
		$usuario = $this->input->post("usuario");
		$mail = $this->input->post("mail");
		$contrasenia = $this->input->post("contrasenia");
		$recontrasenia = $this->input->post("recontrasenia");
		if($recontrasenia == "" || $usuario == ""){
			$this->response(400,"Complete todos los campos");
			die;
		}
		if($usuario != $recontrasenia){
			$this->response(400,"Las Contraseñas no coinciden");
			die;
		}else{
			$usuario = htmlspecialchars($usuario , ENT_QUOTES, 'UTF-8');
			$mail = htmlspecialchars($mail , ENT_QUOTES, 'UTF-8');
			$contrasenia = hash('sha256', $contrasenia);
		}
	}
	public function acreditar(){
		$usuario = $this->input->post("usuario");
		$contrasenia = $this->input->post("contrasenia");
		$this->response(400,"Usuario y Contraseña no coinciden");
	}
}