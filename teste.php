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
    ?>

    <h1>california $$</h1>
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
    </form>
                <?php
                //foreach ($california as $resultado) { ?>

                    <tr>
                        <td><?= $resultado["data"] ?></td>
                        <td><?= $resultado["evento"] ?></td>
                        <td><?= $resultado["local"] ?></td>
                        <form action="alterar.php" name="altera" method="POST">
                            </td><input type="hidden" value=<?= $resultado["id"] ?> name="id" ></td>
                            <td><input type="submit" name="editar" value="Editar"></td>
                            <td>Excluir</td>

                        </form>
                    </tr>
                <?php
                //}
                ?>

            </tbody>
        </table>
    

    </tbody>
    </table>

</body>

</html>