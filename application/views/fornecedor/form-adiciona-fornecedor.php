<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?= base_url("css/index.css") ?>">
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
    </head>
    <body>
        <div class="container">
            <div id="cabecalho">
                <h1>Adicionar fornecedor</h1>
                <ul class="nav navbar-nav">
                    <li><a href="<?= base_url("index.php") ?>">Lista de fornecedores</a></li>
                </ul>
            </div>
            <?php 
                echo form_open("fornecedor/novoFornecedor");

                //chamada para o formulario base
                include("formulario-base.php");

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