# Aplicação Web - Projeto PHP

###  Critérios e Requisitos do trabalho:
1. **Avaliação:**
   * Integração com Banco de Dados;
   * Ser desenvolvido em PHP;
   * Interface agradavel;
   * Possuir contole de sessão;
   * Possuir tela de login;
   * Realizar CRUD (Create, Read, Update, Delete) via interface;
   * __*Nota EXTRA:*__ Fazer integração com banco de Dados em nuvem.
<hr><hr>

## Descrição do Projeto
1. **Template**
   * O projeto foi feito em sobre uma template desenvolvida por mim em um curso da plataforma _Origamid_;
   * A template consiste em um site de Turismo e Organização de Eventos;
   * Foi criado como adcional uma tela de login e pagina de adminitrador onde se encontra o CRUD.
2. **PHP e Sql**
   * O projeto é feito em ambiente local (_localhost ou 127.0.0.1_);
   * Com PHP consegui  dar novas funcionalidades ao projeto utilizando PHP estruturado, controle de Sessão e interação da linguagem com o Banco de Dados;
   * **CRUD -** consiste em 4 tabelas, as tabelas de "Cidades" foram implemtadas as funções de criar, visualizar, editar e deletar, na tabela "Admin" onde se encontra o login e a senha da pagina administrativa.
   * **Login -** a tela é de acesso apenas adminitrativo portanto tendo apenas um usuario com o login e senha(Criptografada com MD5 ).
<hr>
<h2>Tela - Login Administrador</h2>
<h3>Login</h3>
<img src="login.png" style="width: 100%;">
1. Para chegar a esta pagina é nescessario inserir na URL o comando <code>/admin.php</code> colando logo após a <code>localhost/aplicacao_Web</code>, tendo como resultado <code>localhost/aplicacao_Web/admin.php</code><br>
2. Feito isso voce será direcionado a essa tela de login exibida acima, para fazer login é nescessarios preencher os campos com <strong>Login:</strong> admin e <strong>Senha:</strong> admin.
<h3>Logout</h3>
<img src="logout.png" style="width: 100%;">
1. No Canto superior direito da tela havera a palavra "Admin" ao clicar sobre ela abrira um modal;<br>
2. Ao abrir o modal o você tera a opção de SAIR ou FICAR;<br>
3. É de extrema importancia fazer o logout ao sair para <strong>finalizar a sessão </strong>devido caso não seja  feito o logout a pagina administriva continuara aberta.
<hr>
<h2>Pagina Administrativa - CRUD</h2>
<h3>CREATE</h3>
<img src="CRUD.png">
