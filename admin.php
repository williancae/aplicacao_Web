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

<nav class="navbar fixed-top navbar-expand-md navbar-light bg-light py-3 box-shadow">
    <a class="navbar-brand" href="index.php">
        <img src="img/caravan.svg" alt="Caravan">
    </a>

    <!-- data- : manipulado pelo js -->
    <!-- aria- : acessibilidade -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-md-2 active " >
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="">Admin <img src="img/icones/user-solid.svg" style="margin-left: 6px; margin-bottom: 10px;" height="20px"></a>
            </li>
        </ul>
    </div>
</nav>
<!-- Button trigger modal -->

<!-- Modal -->
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




<!-- Table  ===========     Dublin -->
<section class="container">
    <!-- Title -->
    <div class="text-center my-5">
        <h2 class="display-4 text-primary">Próximos Eventos "Paris"</h2>
    </div>
    <!-- Title -->



<!-- Modal ADD     -->
<div class="d-flex bd-highlight">
<button type="button" class="btn btn-success mb-3 ml-auto" data-toggle="modal" data-target="#exampleModal1">
  Adicionar Novo
</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModal1Label" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModal1Label">Adicionar Evento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
            <label for="Evento">Evento</label>
            <input type="text" class="form-control" placeholder="Nome Do Evento">
            <div class="row my-2">
                <div class="col-md-8">
                <label for="Endereco">Endereço</label>
                <input type="text" class="form-control" placeholder="Endereço do Evento">
                </div>
                <div class="col-md-4">
                <label for="Endereco">Data</label>
                <input type="text" class="form-control" placeholder="Data">
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal ADD -->



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
                <th scope="row">23/10</th>
                <td>Julien Baker</td>
                <td>The Academy</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>
            </tr>
            <tr>
                <th scope="row">25/10</th>
                <td>Lucy Rose</td>
                <td>Olympia</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
            <tr>
                <th scope="row">27/10</th>
                <td>Bon Iver</td>
                <td>Whelans</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
            <tr>
                <th scope="row">23/10</th>
                <td>Julien Baker</td>
                <td>The Academy</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
            <tr>
                <th scope="row">25/10</th>
                <td>Lucy Rose</td>
                <td>Olympia</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
            <tr>
                <th scope="row">27/10</th>
                <td>Bon Iver</td>
                <td>Whelans</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
        </tbody>
    </table>
    <!-- End table -->
</section>
<!-- End table -->

<!-- Table  ===========     Dublin -->
<section class="container">
    <!-- Title -->
    <div class="text-center my-5">
        <h2 class="display-4 text-primary">Próximos Eventos "California"</h2>
    </div>
    <!-- end Title -->

    <!-- Table -->
    <table class="table table-hover table-responsive-md text-center">
        <thead>
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Evento</th>
                <th scope="col">Local</th>
                <th scope="col">Ticket</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">23/10</th>
                <td>Julien Baker</td>
                <td>The Academy</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
            <tr>
                <th scope="row">25/10</th>
                <td>Lucy Rose</td>
                <td>Olympia</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
            <tr>
                <th scope="row">27/10</th>
                <td>Bon Iver</td>
                <td>Whelans</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
            <tr>
                <th scope="row">23/10</th>
                <td>Julien Baker</td>
                <td>The Academy</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
            <tr>
                <th scope="row">25/10</th>
                <td>Lucy Rose</td>
                <td>Olympia</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
            <tr>
                <th scope="row">27/10</th>
                <td>Bon Iver</td>
                <td>Whelans</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
        </tbody>
    </table>
    <!-- End table -->
</section>
<!-- End table -->



<!-- Table  ===========     Dublin -->
<section class="container">
    <!-- Title -->
    <div class="text-center my-5">
        <h2 class="display-4 text-primary">Próximos Eventos "Dublin"</h2>
    </div>
    <!-- end Title -->

    <!-- Table -->
    <table class="table table-hover table-responsive-md text-center">
        <thead>
            <tr>
                <th scope="col">Data</th>
                <th scope="col">Evento</th>
                <th scope="col">Local</th>
                <th scope="col">Ticket</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">23/10</th>
                <td>Julien Baker</td>
                <td>The Academy</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
            <tr>
                <th scope="row">25/10</th>
                <td>Lucy Rose</td>
                <td>Olympia</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
            <tr>
                <th scope="row">27/10</th>
                <td>Bon Iver</td>
                <td>Whelans</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
            <tr>
                <th scope="row">23/10</th>
                <td>Julien Baker</td>
                <td>The Academy</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
            <tr>
                <th scope="row">25/10</th>
                <td>Lucy Rose</td>
                <td>Olympia</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
            <tr>
                <th scope="row">27/10</th>
                <td>Bon Iver</td>
                <td>Whelans</td>
                <td><a href="" class="btn btn-warning btn-sm">Editar</a><a href="" class="btn btn-danger ml-1 btn-sm">Exluir</a></td>

            </tr>
        </tbody>
    </table>
    <!-- End table -->
</section>
<!-- End table -->





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