<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class LoginController extends CI_Controller{
	public $key= "$#%&";
	public function __construct(){
		parent::__construct();
		$this->load->model("Usuario_model");

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
		if($contrasenia != $recontrasenia){
			$this->response(400,"Las Contraseñas no coinciden");
			die;
		}else{
			$usuario = htmlspecialchars($usuario , ENT_QUOTES, 'UTF-8');
			$mail = htmlspecialchars($mail , ENT_QUOTES, 'UTF-8');
			$contrasenia = hash('sha256', $this->key.$contrasenia);
			$data = array("usuario"=>$usuario,"mail"=>$mail,"contrasenia"=>$contrasenia,"perfil_id"=>PERFIL_NORMAL);
			try{
				$usuario = $this->Usuario_model->insert($data);
				//acá se enviaria mail de confirmación si se pide.
				$this->session->usuario_id = $usuario->id;
				$this->session->usuario = $usuario->usuario;
				$this->session->perfil = $usuario->perfil_id;

				$this->response(200,"Login Ok");
			}catch(Exception $e){
				$this->response(400,"Usuario en uso, por favor, pruebe con otro");
			}
		}
	}
	public function logout(){
		session_destroy();
		header('Location:'.base_url());
	}
	public function acreditar(){
		$usuario = $this->input->post("usuario");
		$contrasenia = $this->input->post("contrasenia");
		$contrasenia = hash('sha256', $this->key.$contrasenia);
		$existe = $this->Usuario_model->existe(array("usuario"=>$usuario,"contrasenia"=>$contrasenia));
		if($existe){
			$usuario = $this->Usuario_model->select(array("usuario"=>$usuario,"contrasenia"=>$contrasenia));
			$this->session->usuario_id = $usuario->id;
			$this->session->usuario = $usuario->usuario;
			$this->session->perfil = $usuario->perfil_id;

			$this->response(200,"Login Ok");
		}else{
			$this->response(400,"Usuario o Contraseña inválido");
		}
	}
}