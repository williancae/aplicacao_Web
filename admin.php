<?php

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

<nav class="navbar fixed-top navbar-expand-md navbar-light bg-light py-3 box-shadow">
    <a class="navbar-brand" href="index.php">
        <img src="img/caravan.svg" alt="Caravan">
    </a>


    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href=" #">
                    Locais
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="adminCalifornia.php">California</a>
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
<!-- Button trigger modal -->

<!-- Carousel and Info -->
<section class="container-fluid">
    <div class="row bg-dark text-white">
        <div class="col-lg-7 p-0">
            <!-- Carousel -->
            <div id="carouselCidades" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselCidades" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselCidades" data-slide-to="1"></li>
                    <li data-target="#carouselCidades" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/california.jpg" class="d-block w-100" alt="California">
                        <div class="carousel-caption">
                            <h3 class="display-4">California</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/paris.jpg" class="d-block w-100" alt="Paris">
                        <div class="carousel-caption">
                            <h3 class="display-4">Paris</h3>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/dublin.jpg" class="d-block w-100" alt="Dublin">
                        <div class="carousel-caption">
                            <h3 class="display-4">Dublin</h3>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselCidades" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselCidades" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
            <!-- End carousel -->
        </div>
        <div class="col-lg-5 p-4 align-self-center">
            <h1 class="display-4">Realize a viagem do seu sonho</h1>
            <p class="lead">O melhor local para viajar é com a Caravan, mais de 5.000 excursões concluídas.</p>
            <form action="">
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control" placeholder="E-mail" aria-label="Email" aria-describedby="Email">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="button-addon2">
                            Inscreva-se
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End carousel and Info -->


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