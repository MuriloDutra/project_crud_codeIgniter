<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
    </head>
    <body>
        <div class="container">
            <h1>Título a definir</h1>
            <?php 
                echo form_open("fornecedor/index");

                echo form_label("Nome", "nome");
                echo form_input(array(
                    "name" => "nome",
                    "class" => "form-control",
                    "id" => "nome",
                    "maxlength" => "255"
                ));

                echo form_label("E-mail", "email");
                echo form_input(array(
                    "name" => "email",
                    "class" => "form-control",
                    "id" => "email",
                    "maxlength" => "255"
                ));

                echo form_label("Telefone", "telefone");
                echo form_input(array(
                    "name" => "telefone",
                    "class" => "form-control",
                    "id" => "telefone",
                    "maxlength" => "14"
                ));

                echo form_label("CEP", "cep");
                echo form_input(array(
                    "name" => "cep",
                    "class" => "form-control",
                    "placeholder" => "Exemplo: 12345678",
                    "id" => "cep",
                    "maxlength" => "8"
                ));

                echo form_label("Logradouro", "logradouro");
                echo form_input(array(
                    "name" => "logradouro",
                    "class" => "form-control",
                    "placeholder" => "Exemplo: Avenida Francisco Glicério",
                    "id" => "logradouro",
                    "maxlength" => "255"
                ));

                echo form_label("Número", "numero");
                echo form_input(array(
                    "name" => "numero",
                    "class" => "form-control",
                    "placeholder" => "Exemplo: 2601",
                    "id" => "numero",
                    "maxlength" => "10"
                ));

                echo form_label("Bairro", "bairro");
                echo form_input(array(
                    "name" => "bairro",
                    "class" => "form-control",
                    "placeholder" => "Exemplo: Conceição",
                    "id" => "bairro",
                    "maxlength" => "255"
                ));

                echo form_label("Município", "municipio");
                echo form_input(array(
                    "name" => "municipio",
                    "class" => "form-control",
                    "placeholder" => "Exemplo: Campinas",
                    "id" => "municipio",
                    "maxlength" => "255"
                ));

                echo form_label("Estado", "estado");
                echo form_input(array(
                    "name" => "estado",
                    "class" => "form-control",
                    "placeholder" => "Exemplo: São Paulo",
                    "id" => "estado",
                    "maxlength" => "255"
                ));

                echo form_label("País", "pais");
                echo form_input(array(
                    "name" => "pais",
                    "class" => "form-control",
                    "placeholder" => "Exemplo: Brasil",
                    "id" => "pais",
                    "maxlength" => "255"
                ));

                echo form_label("Responsável por vendas", "vendas");
                echo form_input(array(
                    "name" => "responsavelVendas",
                    "class" => "form-control",
                    "id" => "vendas",
                    "maxlength" => "255"
                ));

                echo form_label("CNPJ/CPF", "cnpj_cpf");
                echo form_input(array(
                    "name" => "cnpj_cpf",
                    "class" => "form-control",                   
                    "id" => "cnpj_cpf",
                    "maxlength" => "20"
                ));

                echo form_button(array(
                    "class" => "btn btn-primary",
                    "content" => "Cadastrar",
                    "type" => "subimit"
                ));

                echo form_close();
            ?>
        </div>
    </body>
</html>