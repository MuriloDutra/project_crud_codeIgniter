<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
        <link rel="stylesheet" href="css/index.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Fornecedores cadastrados</h1>
            <?php 
                echo form_open("fornecedor/adiciona");
                
                echo form_button(array(
                    "class" => "btn btn-primary",
                    "content" => "Adicionar fornecedor",
                    "type" => "submit"
                ));

                echo form_close();
            ?>
            <table id="tabela" class="table table-striped table-bordered">
            <thead>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Editar</th>
                <th>Detalhes</th>
                <th>Deletar</th>
            </thead>
            <tbody>
                <?php foreach($fornecedores as $fornecedor) : ?>
                    <tr>
                        <td><?=$fornecedor['nome']?></td>
                        <td><?=$fornecedor['email']?></td>
                        <td>
                            <?php 
                                echo form_open("fornecedor/edita");

                                echo form_input(array(
                                    "name" => "id",
                                    "type" => "hidden",
                                    "value" => $fornecedor['id']));

                                echo form_button(array(
                                    "class" => "btn",
                                    "type" => "submit",
                                    "content" => "<i class='material-icons'>settings</i>"));

                                echo form_close();
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo form_open("fornecedor/detalhes");
                                
                                echo form_input(array(
                                    "name" => "id",
                                    "type" => "hidden",
                                    "value" => $fornecedor['id']));
                                    
                                echo form_button(array(
                                    "class" => "btn",
                                    "type" => "submit",
                                    "content" => "<i class='material-icons'>info</i>"));

                                echo form_close();
                            ?>
                        </td>
                        <td>
                            <?php 
                                echo form_open("fornecedor/deleta");

                                echo form_input(array(
                                    "name" => "id",
                                    "type" => "hidden",
                                    "value" => $fornecedor['id']));

                                echo form_button(array(
                                    "class" => "btn",
                                    "type" => "submit",
                                    "content" => "<i class='material-icons'>delete</i>"));

                                echo form_close();
                            ?>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            </table>
        </div>
    </body>
</html>