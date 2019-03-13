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
    }