<?php
    $id = $this->input->post("id");
    $nome = $this->input->post("nome");
?>
<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?= base_url("css/index.css") ?>">
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
    </head>
    <body>
        <div class="container">

            <div id="cabecalho">
                <h1>Deletar fornecedor</h1>
                <ul class="nav navbar-nav">
                    <li><a href="<?= base_url("index.php") ?>">Lista de fornecedores</a></li>
                </ul>
            </div>
            
            <div id="confirma">
                <p>Confirma deletar o fornecedor, <?=$nome?>?</p>
                <?php 
                    echo form_open("fornecedor/deletaFornecedor");
                    echo form_input(array(
                        "type" => "hidden",
                        "name" => "id",
                        "value" => $id
                    ));

                    echo form_button(array(
                        "name" => "btnSim",
                        "type" => "submit",
                        "class" => "btn btn-primary",
                        "content" => "Sim"
                    ));
                    echo form_close();

                    echo form_open("/");
                    echo form_button(array(
                        "name" => "btnNao",
                        "type" => "submit",
                        "class" => "btn btn-danger",
                        "content" => "Não"
                    ));
                    echo form_close();
                ?>
            </div>

        </div>
    </body>
</html>