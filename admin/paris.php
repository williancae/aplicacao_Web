<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Caravan - Local</title>
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginTitulo"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalLoginTitulo">Entre na sua Conta</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="loginEmail">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="loginSenha">Senha</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar na Conta</button>
                        <small class="text-muted form-text">Esqueceu a senha? <a href="">Clique Aqui</a></small>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal -->

    <!-- Navbar -->
    <?php include("headerAdmin.php")?>
    <!-- End  Navbar-->

    <!-- Galery -->
    <section class="container">
        <!-- Title -->
        <div class="text-center my-5">
            <span class="h6 d-block">O MELHOR DESTINO DA SUA VIAGEM</span>
            <h2 class="display-4 text-primary">Descubra Paris</h2>
        </div>
        <!-- end Title -->

        <!-- Images -->
        <div class="row">
            <div class="col-md">
                <img class="img-fluid mb-4" src="../img/local/foto-1.jpg" alt="">
                <img class="img-fluid mb-4" src="../img/local/foto-2.jpg" alt="">
                <img class="img-fluid mb-4" src="../img/local/foto-3.jpg" alt="">
            </div>
            <div class="col-md">
                <img class="img-fluid mb-4" src="../img/local/foto-4.jpg" alt="">
                <img class="img-fluid mb-4" src="../img/local/foto-5.jpg" alt="">
            </div>
            <div class="col-md">
                <img class="img-fluid mb-4" src="../img/local/foto-6.jpg" alt="">
                <img class="img-fluid mb-4" src="../img/local/foto-7.jpg" alt="">
            </div>
        </div>
        <!-- End images -->
    </section>
    <!-- End galery -->

    <!-- Table -->
    <section class="container">
        <!-- Title -->
        <div class="text-center my-5">
            <span class="h6 d-block">DESCUBRA O QUE ACONTECE NA CIDADE</span>
            <h2 class="display-4 text-primary">Próximos Eventos</h2>
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
                    <td><a href="" class="btn btn-outline-secondary btn-sm">Comprar Ticket</a></td>
                </tr>
                <tr>
                    <th scope="row">25/10</th>
                    <td>Lucy Rose</td>
                    <td>Olympia</td>
                    <td><a href="" class="btn btn-outline-secondary btn-sm">Comprar Ticket</a></td>
                </tr>
                <tr>
                    <th scope="row">27/10</th>
                    <td>Bon Iver</td>
                    <td>Whelans</td>
                    <td><a href="" class="btn btn-outline-secondary btn-sm">Comprar Ticket</a></td>
                </tr>
                <tr>
                    <th scope="row">23/10</th>
                    <td>Julien Baker</td>
                    <td>The Academy</td>
                    <td><a href="" class="btn btn-outline-secondary btn-sm">Comprar Ticket</a></td>
                </tr>
                <tr>
                    <th scope="row">25/10</th>
                    <td>Lucy Rose</td>
                    <td>Olympia</td>
                    <td><a href="" class="btn btn-outline-secondary btn-sm">Comprar Ticket</a></td>
                </tr>
                <tr>
                    <th scope="row">27/10</th>
                    <td>Bon Iver</td>
                    <td>Whelans</td>
                    <td><a href="" class="btn btn-outline-secondary btn-sm">Comprar Ticket</a></td>
                </tr>
            </tbody>
        </table>
        <!-- End table -->
    </section>
    <!-- End table -->

    <!-- Footer -->
    <?php include("footer.php")?>
    <!-- End footer -->
  

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>