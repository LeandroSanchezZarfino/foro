<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class PublicacionController extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->model("Mongo_model");

	}
	public function index(){

	}

	public function abmPublicacion(){
		$id = $this->input->post("id");
		
		if($id == ""){//nueva publicacion
			$imagenes = $this->obtenerRutasImagenes();
			$data = array("aprobada"=>"false",
							"titulo"=>htmlspecialchars($this->input->post("titulo"), ENT_QUOTES, 'UTF-8'),
							"descripcion"=>htmlspecialchars($this->input->post("descripcion"), ENT_QUOTES, 'UTF-8'),
							"imagenes" => $imagenes,
							"usuario_id"=>$this->session->usuario_id,
							"usuario"=>$this->session->usuario,
							"fecha"=>date("d-m-Y"),
							"likes"=>array(),
							"comentarios"=>array()
						);
			$this->Mongo_model->insert("publicaciones",$data);
		}else{
			$imagenes = $this->obtenerRutasImagenes();
			$data = array("aprobada"=>"false",
						"titulo"=>htmlspecialchars($this->input->post("titulo"), ENT_QUOTES, 'UTF-8'),
						"descripcion"=>htmlspecialchars($this->input->post("descripcion"), ENT_QUOTES, 'UTF-8')
					);
			if($imagenes != "")
				$data["imagenes"] = $imagenes;
			$this->Mongo_model->update("publicaciones",$data,array("_id"=>new MongoDB\BSON\ObjectID("$id")),false,true);
		}
		header('Location:'.base_url().'publicacionCreada'); 
	}
	public function validar(){
		if($this->session->perfil == PERFIL_ADMIN){
			if(isset($this->session->usuario_id))$this->smarty->assign("session_id",$this->session->usuario_id);
			$publicaciones = $this->Mongo_model->select("publicaciones",array("aprobada"=>"false"));
			$this->smarty->assign("publicaciones",$publicaciones);
			$this->smarty->assign("perfil",$this->session->perfil);
			$this->smarty->assign("titulo","Publicaciones pendientes de aprobación");

			$this->smarty->display("principal.tpl");
		}else{
			header('Location:'.base_url());
		}
	}
	public function obtenerRutasImagenes(){
		try{
			$target_dir = "public/uploads/";
			$target_file = $target_dir .uniqid(). basename($_FILES["imagenes"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
		    $check = getimagesize($_FILES["imagenes"]["tmp_name"]);
		    if($check === false) {
		        $uploadOk = 0;
		    }
		    if ($_FILES["imagenes"]["size"] > 5000000) {
			    $uploadOk = 0;
			}
			if(strpos("jpg.png.jpeg.gif",$imageFileType) == false){
			    $uploadOk = 0;
			}
			if($uploadOk == 1) {
			    if (move_uploaded_file($_FILES["imagenes"]["tmp_name"], $target_file)) {
			    	return $target_file;
			    } else {
			    	return "";
			    }
			}
		}catch(Exception $e){
			return "";
		}
	}

	public function getPublicacion(){
		$id = $this->input->post("id");
		echo json_encode($this->Mongo_model->select("publicaciones",array("_id"=>new MongoDB\BSON\ObjectID("$id")))[0]);
	}

	public function aceptar($id){
		if($this->session->perfil == PERFIL_ADMIN){
			$data = array("aprobada"=>"true");
			$this->Mongo_model->update("publicaciones",$data,array("_id"=>new MongoDB\BSON\ObjectID("$id")));
			header('Location:'.base_url()."validarPublicaciones");
		}else{
			header('Location:'.base_url());
		}
	}
	public function rechazar($id){
		if($this->session->perfil == PERFIL_ADMIN){
			$this->Mongo_model->delete("publicaciones",array("_id"=>new MongoDB\BSON\ObjectID("$id")));
			header('Location:'.base_url()."validarPublicaciones");
		}else{
			header('Location:'.base_url());
		}
	}

	public function enviarComentario(){
		if(isset($this->session->usuario_id)){
			$id = $this->input->post("id");
			$comentario = $this->input->post("comentario");
			$info = array("comentario"=>$comentario,"usuario"=>$this->session->usuario,"fecha"=>date("d-m-Y"));
			$data = array("comentarios"=>$info);
			$this->Mongo_model->insertInArray("publicaciones",$data,array("_id"=>new MongoDB\BSON\ObjectID("$id")));
			echo json_encode($info);
		}
		echo "";
	}

	public function darLike(){
		if(isset($this->session->usuario_id)){
			$id = $this->input->post("id");
			$data = array("likes"=>array("usuario"=>$this->session->usuario));
			$this->Mongo_model->insertInArray("publicaciones",$data,array("_id"=>new MongoDB\BSON\ObjectID("$id")));
		}	
	}

}