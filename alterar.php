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

    // var_dump($editarCalifornia);
    // include("conexao.php");
    $editarCalifornia = selectIdCalifornia($_POST["id"]);
    // var_dump($editarCalifornia);
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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="data" value=<?= $editarCalifornia["data"] ?> id=""></td>
                    <td><input type="text" name="evento" id="" value=<?= $editarCalifornia["evento"] ?>></td>
                    <td><input type="text" name="local" id="" value=<?= $editarCalifornia["local"] ?>></td>
                    <td>
                        <input type="hidden" name="california" value="alterar">
                        <input type="hidden" name="id" value=<?= $editarCalifornia["id"] ?>>
                        <input type="submit" name="enviar" value="Enviar">
                    </td>
                </tr>
                <?php
                ?>
            </tbody>
        </table>
    </form>
</body>

</html>