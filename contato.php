<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Caravan - Contato</title>
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

    <!-- Content -->

    <!-- Contact -->
    <section class="container">
        <!-- Title -->
        <div class="my-5 text-center">
            <span class="h6 d-block">POSSUI ALGUMA DÚVIDA?</span>
            <h1 class="display-4 text-primary">Fale Conosco</h1>
        </div>
        <!-- End title -->

        <div class="row">
            <div class="col-lg mb-5">
                <form class="bg-light rounded p-4 box-shadow">
                    <div class="form-group">
                        <label for="clienteNome">Nome</label>
                        <input type="text" class="form-control" id="clienteNome">
                    </div>
                    <div class="form-group">
                        <label for="clienteEmail">Email</label>
                        <input type="email" class="form-control" id="clienteEmail">
                    </div>
                    <div class="form-group">
                        <label for="clienteMensagem">Mensagem</label>
                        <textarea class="form-control" id="clienteMensagem" rows="4"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
                </form>
            </div>
            <div class="col-lg mb-5">
                <h2 class="h6">NOSSO ENDEREÇO</h2>
                <a href="">
                    <img class="img-fluid box-shadow rounded mb-4" src="img/mapa.png" alt="Endereço da empresa">
                </a>
                <h2 class="h6">DADOS DE CONTATO</h2>
                <ul class="list-unstyled text-secondary">
                    <li>caravan@caravan.com.br</li>
                    <li>21 99999-9999</li>
                    <li>De Seg. à Sex. das 8h às 18h</li>
                </ul>
                <h4 class="h6">REDES SOCIAIS</h4>
                <ul class="list-unstyled text-secondary">
                    <li><a href="" class="btn btn-outline-secondary mb-2 btn-block buttom-max-width btn-sm">
                            Facebook
                        </a></li>
                    <li><a href="" class="btn btn-outline-secondary mb-2 btn-block buttom-max-width btn-sm">
                            Twitter
                        </a></li>
                    <li><a href="" class="btn btn-outline-secondary mb-2 btn-block buttom-max-width btn-sm">
                            Youtube
                        </a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End contact -->

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