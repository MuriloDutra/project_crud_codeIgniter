<?php 
    echo form_input(array(
        "name" => "id",
        "type" => "hidden",
        "value" => $fornecedor['id']
    ));

    echo form_label("Nome", "nome");
    echo form_input(array(
        "name" => "nome",
        "class" => "form-control",
        "id" => "nome",
        "value" => $fornecedor['nome'],
        "maxlength" => "255"
    ));

    echo form_label("E-mail", "email");
    echo form_input(array(
        "name" => "email",
        "class" => "form-control",
        "id" => "email",
        "value" => $fornecedor['email'],
        "maxlength" => "255"
    ));

    echo form_label("Telefone", "telefone");
    echo form_input(array(
        "name" => "telefone",
        "class" => "form-control",
        "id" => "telefone",
        "value" => $fornecedor['telefone'],
        "maxlength" => "14"
    ));

    echo form_label("CEP", "cep");
    echo form_input(array(
        "name" => "cep",
        "class" => "form-control",
        "placeholder" => "Exemplo: 12345678",
        "id" => "cep",
        "value" => $fornecedor['cep'],
        "maxlength" => "8"
    ));

    echo form_label("Logradouro", "logradouro");
    echo form_input(array(
        "name" => "logradouro",
        "class" => "form-control",
        "placeholder" => "Exemplo: Avenida Francisco Glicério",
        "id" => "logradouro",
        "value" => $fornecedor['logradouro'],
        "maxlength" => "255"
    ));

    echo form_label("Número", "numero");
    echo form_input(array(
        "name" => "numero",
        "class" => "form-control",
        "placeholder" => "Exemplo: 2601",
        "id" => "numero",
        "value" => $fornecedor['numero'],
        "maxlength" => "10"
    ));

    echo form_label("Bairro", "bairro");
    echo form_input(array(
        "name" => "bairro",
        "class" => "form-control",
        "placeholder" => "Exemplo: Conceição",
        "id" => "bairro",
        "value" => $fornecedor['bairro'],
        "maxlength" => "255"
    ));

    echo form_label("Município", "municipio");
    echo form_input(array(
        "name" => "municipio",
        "class" => "form-control",
        "placeholder" => "Exemplo: Campinas",
        "id" => "municipio",
        "value" => $fornecedor['municipio'],
        "maxlength" => "255"
    ));

    echo form_label("Estado", "estado");
    echo form_input(array(
        "name" => "estado",
        "class" => "form-control",
        "placeholder" => "Exemplo: São Paulo",
        "id" => "estado",
        "value" => $fornecedor['estado'],
        "maxlength" => "255"
    ));

    echo form_label("País", "pais");
    echo form_input(array(
        "name" => "pais",
        "class" => "form-control",
        "placeholder" => "Exemplo: Brasil",
        "id" => "pais",
        "value" => $fornecedor['pais'],
        "maxlength" => "255"
    ));

    echo form_label("Responsável por vendas", "vendas");
    echo form_input(array(
        "name" => "responsavelVendas",
        "class" => "form-control",
        "id" => "vendas",
        "value" => $fornecedor['responsavelVendas'],
        "maxlength" => "255"
    ));

    echo form_label("CNPJ/CPF", "cnpj_cpf");
    echo form_input(array(
        "name" => "cnpj_cpf",
        "class" => "form-control",                   
        "id" => "cnpj_cpf",
        "value" => $fornecedor['cnpj_cpf'],
        "maxlength" => "20"
    ));
?>