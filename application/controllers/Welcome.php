<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{

		$this->load->model("Mongo_model");
		$data = array("titulo"=>"mete dos?","Autor"=>"Leandro Sánchez","likes"=>["Pablo","Pedro","Juan","Maria"]);
		$this->Mongo_model->insert("publicaciones",$data);
		$resultado = $this->Mongo_model->select("publicaciones");
		$this->Mongo_model->update("publicaciones",array("sub-titulo"=>"Nuevo titulo de prueba"),array("titulo"=>"Prueba de insert"),false,false);
		//$result = $this->Mongo_model->select("publicaciones");
		//echo json_encode($result);


	}
}
