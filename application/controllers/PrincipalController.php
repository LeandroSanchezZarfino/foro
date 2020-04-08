<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PrincipalController extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->smarty->assign("mostrar_estado",false);
		$this->load->model("Mongo_model");
		$this->smarty->assign("publicacionCreada",false);
		if(isset($this->session->usuario_id))$this->smarty->assign("session_id",$this->session->usuario_id);
		if(isset($this->session->perfil))$this->smarty->assign("perfil",$this->session->perfil);
	}

	public function index(){
		$publicaciones = $this->Mongo_model->select("publicaciones",array("aprobada"=>"true"));
		$this->smarty->assign("titulo","Publicaciones recientes");
		$this->smarty->assign("publicaciones",$publicaciones);
		$this->smarty->display("principal.tpl");
	}
	public function misPublicaciones(){
		$publicaciones = $this->Mongo_model->select("publicaciones",array("usuario"=>$this->session->usuario));
		$this->smarty->assign("titulo","Mis publicaciones");
		$this->smarty->assign("publicaciones",$publicaciones);
		$this->smarty->assign("mostrar_estado",true);
		$this->smarty->display("principal.tpl");
	}
	public function busquedaPublicaciones(){
		$busqueda = $this->input->get("parametro");
		$publicaciones = $this->Mongo_model->select("publicaciones",array("aprobada"=>"true","titulo"=>new \MongoDB\BSON\Regex($busqueda)));
		$this->smarty->assign("titulo","Busqueda de publicaciones");
		$this->smarty->assign("publicaciones",$publicaciones);
		$this->smarty->display("principal.tpl");	
	}

	public function publicacionCreada(){
		$this->smarty->assign("publicacionCreada",true);
		$this->index();
	}
}