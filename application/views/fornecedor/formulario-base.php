<?php 
    echo form_label("Nome", "nome");
    echo form_input(array(
        "name" => "nome",
        "class" => "form-control",
        "id" => "nome",
        "value" => "",
        "maxlength" => "255"
    ));

    echo form_label("E-mail", "email");
    echo form_input(array(
        "name" => "email",
        "class" => "form-control",
        "id" => "email",
        "value" => "",
        "maxlength" => "255"
    ));

    echo form_label("Telefone", "telefone");
    echo form_input(array(
        "name" => "telefone",
        "class" => "form-control",
        "id" => "telefone",
        "value" => "",
        "maxlength" => "14"
    ));

    echo form_label("CEP", "cep");
    echo form_input(array(
        "name" => "cep",
        "class" => "form-control",
        "placeholder" => "Exemplo: 12345678",
        "id" => "cep",
        "value" => "",
        "maxlength" => "8"
    ));

    echo form_label("Logradouro", "logradouro");
    echo form_input(array(
        "name" => "logradouro",
        "class" => "form-control",
        "placeholder" => "Exemplo: Avenida Francisco Glicério",
        "id" => "logradouro",
        "value" => "",
        "maxlength" => "255"
    ));

    echo form_label("Número", "numero");
    echo form_input(array(
        "name" => "numero",
        "class" => "form-control",
        "placeholder" => "Exemplo: 2601",
        "id" => "numero",
        "value" => "",
        "maxlength" => "10"
    ));

    echo form_label("Bairro", "bairro");
    echo form_input(array(
        "name" => "bairro",
        "class" => "form-control",
        "placeholder" => "Exemplo: Conceição",
        "id" => "bairro",
        "value" => "",
        "maxlength" => "255"
    ));

    echo form_label("Município", "municipio");
    echo form_input(array(
        "name" => "municipio",
        "class" => "form-control",
        "placeholder" => "Exemplo: Campinas",
        "id" => "municipio",
        "value" => "",
        "maxlength" => "255"
    ));

    echo form_label("Estado", "estado");
    echo form_input(array(
        "name" => "estado",
        "class" => "form-control",
        "placeholder" => "Exemplo: São Paulo",
        "id" => "estado",
        "value" => "",
        "maxlength" => "255"
    ));

    echo form_label("País", "pais");
    echo form_input(array(
        "name" => "pais",
        "class" => "form-control",
        "placeholder" => "Exemplo: Brasil",
        "id" => "pais",
        "value" => "",
        "maxlength" => "255"
    ));

    echo form_label("Responsável por vendas", "vendas");
    echo form_input(array(
        "name" => "responsavelVendas",
        "class" => "form-control",
        "id" => "vendas",
        "value" => "",
        "maxlength" => "255"
    ));

    echo form_label("CNPJ/CPF", "cnpj_cpf");
    echo form_input(array(
        "name" => "cnpj_cpf",
        "class" => "form-control",                   
        "id" => "cnpj_cpf",
        "value" => "",
        "maxlength" => "20"
    ));
?>