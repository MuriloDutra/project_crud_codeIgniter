<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
    </head>
    <body>
        <div class="container">
            <h1>Adicionar fornecedor</h1>
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