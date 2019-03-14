<?php 
    class Fornecedor_model extends CI_Model
    {
        public function retornaTodos()
        {
            return $this->db->get("fornecedor")->result_array();
        }

        public function adicionaFornecedor($fornecedor)
        {
            $this->db->insert("fornecedor", $fornecedor);
        }

        public function buscaPorId($id)
        {
            $this->db->where("id", $id);
            $fornecedor = $this->db->get("fornecedor")->row_array();

            return $fornecedor;
        }

        public function atualizaFornecedor($fornecedor)
        {
            $this->db->where("id", $fornecedor['id']);
            $this->db->set($fornecedor);
            $this->db->update("fornecedor");
        }
    }