<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include("conexao.php");
    $california = selectCalifornia();
    var_dump($california);
    ?>

    <h1>california$california</h1>
    <button><a href="">Inserir</a></button>
    <form action="conexao.php" method="POST">
        <table border="1">
            <thead>
                <tr>
                    <td>Data</td>
                    <td>Evento</td>
                    <td>Local</td>
                    <td>Editar</td>
                    <td>Excluir</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($california as $resultado){ ?>
                    <tr>
                        <td><?=$resultado["data"]?></td>
                        <td><?=$resultado["evento"]?></td>
                        <td><?=$resultado["local"]?></td>
                        <td>Editar</td>
                        <td>Excluir</td>
                    </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </form>
</body>

</html>