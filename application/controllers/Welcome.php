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
		$this->load->view('welcome_message');
	}

    
    public function cadastrar(){

	$name = $this->input->post('name');
	$idade = $this->input->post('idade');

    if(!empty($name) && !empty($idade)){
        foreach ($name as $key => $value ) 
        {
			$data['nome'] = $value;
			$data['idade'] = $idade[$key];
			$this->load->model("welcome_model");
			$this->welcome_model->cadastrar($data);
			
		}
		$this->load->view("welcome_message");

	} 

    }
}
