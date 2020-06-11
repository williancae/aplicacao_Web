<?php
// include("conexao.php");
// $california = selectCalifornia();
// $editarCalifornia = selectIdCalifornia($id);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <title>Caravan</title>
    <i class="fas fa-clock"></i>
</head>
<?php
include("conexao.php");
$editarCalifornia = selectIdCalifornia($_POST["id"]);
var_dump($editarCalifornia)
?>
<!-- ##################################     NAVBAR   ######################################## -->
<nav class="navbar fixed-top navbar-expand-md navbar-light bg-light py-3 box-shadow">
    <a class="navbar-brand" href="index.php">
        <img src="img/caravan.svg" alt="Caravan">
    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown pt-1">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href=" #">
                    Locais
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item " href="admin.php"><strong>Pagina Admin</strong></a>
                    <a class="dropdown-item active" href="adminCalifornia.php">California</a>
                    <a class="dropdown-item" href="adminParis.php">Paris</a>
                    <a class="dropdown-item" href="adminDublin.php">Dublin</a>
                </div>
            </li>
            <li class="nav-item ml-md-2 active ">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="">Admin <img src="img/icones/user-solid.svg" style="margin-left: 6px; margin-bottom: 10px;" height="20px"></a>
            </li>
        </ul>
    </div>
</nav>
<!--  -->
<!--  -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Painel Admin</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Deseja Sair do Painel Administrativo?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Ficar</button>
                <button type="button" class="btn btn-primary">Sair</button>
            </div>
        </div>
    </div>
</div>
<!-- ##################################     NAVBAR   ######################################## -->

<!--  -->

<section class="container">
    <div class="text-center my-5">
        <h2 class="display-4 text-primary">Próximos Eventos "California"</h2>
    </div>
    <table class="table table-hover table-responsive-md text-center">
        <thead>
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Evento</th>
                <th scope="col">Local</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <th scope="row"><input type="text" class="form-control" value="<?= $editarCalifornia['data']; ?>"></th>
                    <td><input type="text" class="form-control" value="<?php echo $editarCalifornia['evento']; ?>"></td>
                    <td><input type="text" class="form-control" value="<?= $editarCalifornia['local']; ?>"></td>
                    <td>
                        <input type="hidden" name="california" value="alterar">
                        <input type="submit"  class="btn btn-warning btn-sm" name="editar" value="Alterar">
                    </td>
                </tr>
        </tbody>
    </table>
</section>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
<script type="text/javascript" src="js/app.js"></script>
<!-- Footer -->
<?php include("footer.php") ?>
<!-- End footer -->