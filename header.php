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
             <li class="nav-item">
                 <a class="nav-link" href="index.php">Home</a>
             </li>
             <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Locais
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="locais/california.php">California</a>
                        <a class="dropdown-item" href="locais/paris.php">Paris</a>
                        <a class="dropdown-item" href="locais/dublin.php">Dublin</a>
                    </div>
                </li>
             <li class="nav-item">
                 <a class="nav-link" href="planos.php">Planos</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="contato.php">Contato</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" data-toggle="modal" data-target="#modalLogin" href="">Login</a>
             </li>
             <li class="nav-item ml-md-2 active">
                 <a class="btn btn-outline-primary" href="inscricao.php">Inscreva-se</a>
             </li>
         </ul>
     </div>
 </nav>