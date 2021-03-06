<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Caravan - Planos</title>
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
 <?php include("header.php")?>
 <!-- End  Navbar-->

    <!-- Plan -->
    <section class="container">
        <!-- Title -->
        <div class="text-center my-5">
            <span class="h6 d-block">SEU PLANO, SUA VIAGEM</span>
            <h2 class="display-4 text-primary">Escolha o Plano</h2>
        </div>
        <!-- end Title -->

        <!-- Plans -->
        <div class="row">
            <div class="col-md mb-5">
                <div class="bg-light rounded p-4 box-shadow">
                    <h2>Gold</h2>
                    <ul class="lista-plano list-unstyled">
                        <li><span data-toggle="tooltip" data-placement="right"
                                title="Isso mesmo, são 30 dias totais durante a viagem.">→ 30 dias de viagem</span></li>
                        <li>→ 3 destinos diferentes</li>
                        <li>→ Tudo pago pela empresa</li>
                        <li>→ Ingressos para festas</li>
                    </ul>
                    <form action="">
                        <div class="form-group">
                            <select class="form-control bg-light" id="inputCidades">
                                <option>Selecione a cidade</option>
                                <option>California</option>
                                <option>Paris</option>
                                <option>Dublin</option>
                            </select>
                        </div>
                    </form>
                    <div class="row mt-4 align-items-center">
                        <div class="col">
                            <a href="inscricao.html" class="btn btn-primary btn-lg btn-block">
                                Comprar Plano
                            </a>
                        </div>
                        <div class="col">
                            <span class="h4">R$5.000</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md mb-5">
                <div class="bg-light rounded p-4 box-shadow">
                    <h2>Platinum <span class="badge badge-success">Novo</span></h2>
                    <ul class="lista-plano list-unstyled">
                        <li>→ 60 dias de viagem</li>
                        <li>→ 6 destinos diferentes</li>
                        <li>→ Tudo pago pela empresa</li>
                        <li>→ Ingressos para festas</li>
                    </ul>
                    <form action="">
                        <div class="form-group">
                            <select class="form-control bg-light" id="inputCidades">
                                <option>Selecione a cidade</option>
                                <option>California</option>
                                <option>Paris</option>
                                <option>Dublin</option>
                            </select>
                        </div>
                    </form>
                    <div class="row mt-4 align-items-center">
                        <div class="col">
                            <a href="inscricao.html" class="btn btn-primary btn-lg btn-block">
                                Comprar Plano
                            </a>
                        </div>
                        <div class="col">
                            <span class="h4">R$7.500</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End plans -->

    </section>
    <!-- End plan -->

    <!-- Footer -->
    <?php include("footer.php")?>
    <!-- End footer -->

    <!-- End content -->

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