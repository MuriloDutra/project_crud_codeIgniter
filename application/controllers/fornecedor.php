<?php 
    if( ! defined('BASEPATH')) exit('No direct script access allowed');

    class fornecedor extends CI_Controller
    {
        public function index()
        {
            $this->load->model("fornecedor_model");
            $fornecedores = $this->fornecedor_model->retornaTodos();
            
            $dados = array("fornecedores" => $fornecedores);
            $this->load->view('index.php', $dados);
        }

        // ADICIONA NOVO FORNECEDOR
        public function adiciona()
        {
            $this->load->view("fornecedor/form-adiciona-fornecedor.php");
        }

        public function novoFornecedor()
        {
            $fornecedor = array(
                "nome" => $this->input->post("nome"),
                "email" => $this->input->post("email"),
                "telefone" => $this->input->post("telefone"),
                "cep" => $this->input->post("cep"),
                "logradouro" => $this->input->post("logradouro"),
                "numero" => $this->input->post("bairro"),
                "municipio" => $this->input->post("municipio"),
                "estado" => $this->input->post("estado"),
                "pais" => $this->input->post("pais"),
                "responsavelVendas" => $this->input->post("responsavelVendas"),
                "cnpj_cpf" => $this->input->post("cnpj_cpf")
            );

            $this->load->model("fornecedor_model");
            $this->fornecedor_model->adicionaFornecedor($fornecedor);
            
            redirect("/");
        }

        // EDITA FORNECEDOR
        public function edita()
        {
            $id = $this->input->post("id");

            $this->load->model("fornecedor_model");

            $fornecedor = $this->fornecedor_model->buscaPorId($id);
            $dados = array("fornecedor" => $fornecedor);

            $this->load->view("fornecedor/form-edita-fornecedor.php", $dados);
        }

        public function editaFornecedor()
        {
            $fornecedor = array(
                "id" => $this->input->post("id"),
                "nome" => $this->input->post("nome"),
                "email" => $this->input->post("email"),
                "telefone" => $this->input->post("telefone"),
                "cep" => $this->input->post("cep"),
                "logradouro" => $this->input->post("logradouro"),
                "numero" => $this->input->post("bairro"),
                "municipio" => $this->input->post("municipio"),
                "estado" => $this->input->post("estado"),
                "pais" => $this->input->post("pais"),
                "responsavelVendas" => $this->input->post("responsavelVendas"),
                "cnpj_cpf" => $this->input->post("cnpj_cpf")
            );

            $this->load->model("fornecedor_model");
            $this->fornecedor_model->atualizaFornecedor($fornecedor);

            redirect("/");
        }

        // DETALHES FORNECEDOR
        public function detalhes()
        {
            $this->load->view("fornecedor/form-detalhes-fornecedor.php");
        }

        public function deleta()
        {
            $this->load->view("fornecedor/confirmaDelete.php");
        }
    }