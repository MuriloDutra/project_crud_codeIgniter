<html>
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h1>Fornecedores cadastrados</h1>
            <table class="table table-striped table-bordered">
            <thead>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Editar</th>
                <th>Detalhes</th>
                <th>Deletar</th>
            </thead>
            <tbody>
                <?php 
                    foreach($fornecedores as $fornecedor) : ?>
                    <tr>
                        <td><?=$fornecedor['nome']?></td>
                        <td><?=$fornecedor['email']?></td>
                        <td>
                            <form action="formulario-edita.php" method="post">
                                <input type="hidden" name="id" value="<?=$fornecedor['id']?>">
                                <button><i class="material-icons">settings</i></button>
                            </form>
                        </td>
                        <td>
                            <form action="formulario-detalhes.php" method="post">
                                <input type="hidden" name="id" value="<?=$fornecedor['id']?>">
                                <button><i class="material-icons">info</i></button>
                            </form>
                        </td>
                        <td>
                            <form action="confirma.php" method="post">
                                <input type="hidden" name="id" value="<?=$fornecedor['id']?>">
                                <input type="hidden" name="nome" value="<?=$fornecedor['nome']?>">
                                <button><i class="material-icons">delete</i></button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            </table>
        </div>
    </body>
</html>