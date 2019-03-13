<?php 
    if( ! defined('BASEPATH')) exit('No direct script access allowed');

    class fornecedor extends CI_Controller
    {
        public function index()
        {
            $this->load->model("fornecedor_model");
            $fornecedores = $this->fornecedor_model->retornaTodos();
            
            $dados = array("fornecedores" => $fornecedores);
            $this->load->view('fornecedor/index.php', $dados);
        }
    }