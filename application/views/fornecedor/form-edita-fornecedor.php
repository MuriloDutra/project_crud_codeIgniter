<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
    </head>
    <body>
        <div class="container">
            <h1>Editar fornecedor</h1>
            <?php
                echo form_open("fornecedor/editaFornecedor");

                include("formulario-base.php");
                
                echo form_button(array(
                    "content" => "Atualizar dados",
                    "class" => "btn btn-primary",
                    "type" => "submit"
                ));

                echo form_close();
            ?>
        </div>
    </body>
</html>