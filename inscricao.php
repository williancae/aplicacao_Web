<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Caravan - Inscricao</title>
</head>

<body>

    <!-- Modal -->
    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLoginTitulo" aria-hidden="true">
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

    <!-- navBar -->
    <?php include("header.php")?>
    <!-- Fim Navbar -->

    <!-- Content -->

    <!-- Questions -->
    <section class="container">
        <!-- Title -->
        <div class="my-5 text-center">
            <span class="h6 d-block">PROGRAME A VIAGEM DO SEU SONHO?</span>
            <h1 class="display-4 text-primary">INSCREVA-SE</h1>
        </div>
        <!-- End title -->

        <!-- Form -->
        <div class="row">
            <form class="col-lg-6" action="">
                <div class="form-row">
                    <!-- Part 1 -->
                    <div class="form-group col-md-6">
                        <label for="inputNome">Nome</label>
                        <input type="text" class="form-control" id="inputNome" placeholder="Nome Completo">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCPF">CPF</label>
                        <input type="text" class="form-control" id="inputCPF" placeholder="xxx.xxx.xxx-xx">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputEmail">Email</label>
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSenha">Senha</label>
                        <input type="password" class="form-control" id="inputSenha" placeholder="Senha de acesso">
                    </div>
                    <div class="form-group col-12">
                        <label for="inputEndereco">Endereço</label>
                        <input type="text" class="form-control" id="inputEndereco" placeholder="Número, nome da rua e bairro">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputCidade">Cidade</label>
                        <input type="text" class="form-control" id="inputCidade">
                    </div>
                    <div class="form-group col-md-3 col-6">
                        <label for="inputEstado">Estado</label>
                        <select class="form-control" id="inputEstado">
                            <option>Selecione o Estado</option>
                            <option>Rio de Janeiro</option>
                            <option>São Paulo</option>
                            <option>Paraná</option>
                            <option>Ceará</option>
                            <option>Acre</option>
                            <option>Santa Catarina</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3 col-6">
                        <label for="inputCEP">CEP</label>
                        <input type="text" class="form-control" id="inputCEP" placeholder="xxxxx-xxx">
                    </div>
                </div>
                <!-- End part 1 -->
                <!-- Part 2 -->
                <div class="bg-light rounded box-shadow p-3 form-group">
                    <h2 class="h6 text-primary">FORMA DE PAGAMENTO</h2>
                    <nav class="nav btn-group mb-3" id="formaPagamento" role="tablist">
                        <button type="button" class="btn btn-secondary active btn-sm" data-toggle="tab" id="nav-cartao-tab" href="#nav-cartao" role="tab" aria-controls="nav-cartao" aria-selected="true">Cartão de Crédito</button>
                        <button type="button" class="btn btn-secondary btn-sm" data-toggle="tab" id="nav-boleto-tab" href="#nav-boleto" role="tab" aria-controls="nav-boleto" aria-selected="false">Boleto
                            Bancário</button>
                    </nav>
                    <div class="tab-content" id="formaPagamentoConteudo">
                        <div class="tab-pane fade show active" id="nav-cartao" role="tabpanel" aria-labelledby="nav-cartao-tab">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputNomeCartao">Nome no Cartão</label>
                                    <input type="text" class="form-control" id="inputNomeCartao" placeholder="Nome Impresso no cartão">
                                </div>
                                <div class="form-group col-md-3 col-6">
                                    <label for="inputMes">Mês</label>
                                    <select class="form-control" id="inputMes">
                                        <option>Expira mês...</option>
                                        <option>01 / Janeiro</option>
                                        <option>02 / Fevereiro</option>
                                        <option>03 / Março</option>
                                        <option>04 / Abril</option>
                                        <option>05 / Maio</option>
                                        <option>06 / Junho</option>
                                        <option>07 / Julho</option>
                                        <option>08 / Agosto</option>
                                        <option>09 / Setembro</option>
                                        <option>10 / Outubro</option>
                                        <option>11 / Novembro</option>
                                        <option>12 / Dezembro</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-3 col-6">
                                    <label for="inputAno">Ano</label>
                                    <select class="form-control" id="inputAno">
                                        <option>Expira ano...</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                        <option>2026</option>
                                        <option>2027</option>
                                        <option>2028</option>
                                        <option>2029</option>
                                        <option>2030</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputNumeroCartao">Número do Cartão</label>
                                    <input type="text" class="form-control" id="inputNumeroCartao" placeholder="5555 5555 5555 555">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCodigoCartao">Código de Segurança</label>
                                    <input type="text" class="form-control" id="inputCodigoCartao" placeholder="XXX">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-boleto" role="tabpanel" aria-labelledby="nav-boleto-tab">
                            <p class="lead">Clique em contratar plano que enviaremos um boleto para o seu email.</p>
                        </div>
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Concordo com os <a href="">Termos e
                            Condições</a></label>
                </div>
                <button type="submit" class="btn btn-primary btn-lg">Contratar Plano</button>
                <!-- End part 2 -->
            </form>

            <!-- Plan right -->
            <div class="col-lg-5 mx-auto order-first order-lg-1 mb-5">
                <h2 class="h6 text-primary">PLANO ESCOLHIDO</h2>
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
                    <div class="row mt-4 ">
                        <div class="col">
                            <span class="h4">R$7.500</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End plan right -->
        </div>
        <!-- End form -->


    </section>
    <!-- End questions -->

   <!-- Footer -->
   <?php include("footer.php")?>
    <!-- End footer -->

    <!-- End content -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/app.js"></script>
</body>

</html>