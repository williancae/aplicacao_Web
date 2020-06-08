<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Caravan</title>
</head>

<body>

    <!-- Modal -->
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

    <!-- Content -->

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
                        <input type="text" class="form-control" placeholder="E-mail" aria-label="Email"
                            aria-describedby="Email">
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

    <!-- Benefits -->
    <section class="py-5 bg-light text-center">
        <div class="container">

            <!-- Title -->
            <div class="my-5">
                <span class="h6 d-block">TUDO DE MELHOR PARA VOCÊ</span>
                <h2 class="display-4 text-primary">Aproveite as Vantagens</h2>
            </div>
            <!-- End title -->

            <!-- Benefits -->
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="icon d-flex justify-content-center">
                        <img src="img/icones/passaporte.svg" alt="Passaporte">
                    </div>
                    <h3>Documentos</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="icon d-flex justify-content-center">
                        <img src="img/icones/passagens.svg" alt="Passagens">
                    </div>
                    <h3>Passagens</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="icon d-flex justify-content-center">
                        <img src="img/icones/translado.svg" alt="Translado">
                    </div>
                    <h3>Translado</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="icon d-flex justify-content-center">
                        <img src="img/icones/turismo.svg" alt="Turismo">
                    </div>
                    <h3>Turismo</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="icon d-flex justify-content-center">
                        <img src="img/icones/bagagens.svg" alt="Bagagens">
                    </div>
                    <h3>Bagagens</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="icon d-flex justify-content-center">
                        <img src="img/icones/praias.svg" alt="Praias">
                    </div>
                    <h3>Praias</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
            <!-- End benefits -->

            <!-- Button Comprar plano-->
            <a href="planos.php" class="btn btn-primary btn-lg mt-4">Comprar Plano</a>
            <!-- End button Comprar plano-->

        </div>
    </section>
    <!-- End benefits -->

    <!-- Quote -->
    <section id="home-quote" class="p-5">
        <blockquote class="blockquote text-center text-white p-md-5 p-3">
            <p class="display-4"><em>
                    "A felicidade não está na estrada que a algum lugar. A felicidade é a própria estrada."
                </em></p>
            <footer class="blockquote-footer text-white">
                Bob Dylan
            </footer>
        </blockquote>
    </section>
    <!-- End quote -->
    <!-- Questions -->
    <section class="container">
        <!-- Title -->
        <div class="my-5 text-center">
            <span class="h6 d-block">AINDA ESTÁ COM DÚVIDAS?</span>
            <h2 class="display-4 text-primary">Perguntas Fequentes</h2>
        </div>
        <!-- End title -->

        <!-- Questions Collapse-->
        <div class="row justify-content-center">
            <div class="col-md-6" id="perguntasFrequentes" data-children=".pergunta">
                <!-- Question 1 -->
                <div class="pergunta py-2">
                    <a class="lead collapsed text-decoration-none" href="#pergunta1" data-toggle="collapse"
                        data-parent="#perguntasFrequentes" aria-expanded="true" aria-controls="pergunta1">
                        → É possível cancelar a viagem?
                    </a>
                    <div id="pergunta1" class="collapse show" role="tabpanel">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum
                            scelerisque.
                            Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.
                        </p>
                    </div>
                </div>
                <div class="dropdown-divider"></div>

                <!-- Question 2 -->
                <div class="pergunta py-2">
                    <a class="lead collapsed text-decoration-none" href="#pergunta2" data-toggle="collapse"
                        data-parent="#perguntasFrequentes" aria-expanded="true" aria-controls="pergunta2">
                        → Qual a garantia que tenho se perder o voo?
                    </a>
                    <div id="pergunta2" class="collapse" role="tabpanel">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum
                            scelerisque.
                            Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.
                        </p>
                    </div>
                </div>
                <div class="dropdown-divider"></div>

                <!-- Question 3 -->
                <div class="pergunta py-2">
                    <a class="lead collapsed text-decoration-none" href="#pergunta3" data-toggle="collapse"
                        data-parent="#perguntasFrequentes" aria-expanded="true" aria-controls="pergunta3">
                        → Qual a principal forma de viagem?
                    </a>
                    <div id="pergunta3" class="collapse" role="tabpanel">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum
                            scelerisque.
                            Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.
                        </p>
                    </div>
                </div>
                <div class="dropdown-divider"></div>

                <!-- Question 4 -->
                <div class="pergunta py-2">
                    <a class="lead collapsed text-decoration-none" href="#pergunta4" data-toggle="collapse"
                        data-parent="#perguntasFrequentes" aria-expanded="true" aria-controls="pergunta4">
                        → Qual o melhor destino de viagem?
                    </a>
                    <div id="pergunta4" class="collapse" role="tabpanel">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum
                            scelerisque.
                            Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.
                        </p>
                    </div>
                </div>
                <div class="dropdown-divider"></div>

                <!-- Question 5 -->
                <div class="pergunta py-2">
                    <a class="lead collapsed text-decoration-none" href="#pergunta5" data-toggle="collapse"
                        data-parent="#perguntasFrequentes" aria-expanded="true" aria-controls="pergunta5">
                        → Vocês dão descontos para grupos grandes?
                    </a>
                    <div id="pergunta5" class="collapse" role="tabpanel">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed pretium lorem non vestibulum
                            scelerisque.
                            Proin a vestibulum sem, eget tristique massa. Aliquam lacinia rhoncus nibh quis ornare.
                        </p>
                    </div>
                </div>
                <div class="dropdown-divider"></div>
            </div>
        </div>
        <!-- End questions collapse-->

        <div class="text-center my-4">
            <p class="small m-1">FALE CONOSCO PARA MAIS DÚVIDAS</p>
            <a class="btn btn-primary btn-lg" href="contato.php">Entre em contato</a>
        </div>
    </section>
    <!-- End questions -->
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