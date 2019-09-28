<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Parallax Template - Materialize</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <style>
  .cor{
    background-color: teal;
  }
  .fonte{
    font-family: 'Montserrat', sans-serif;
    font-weight: 700; line-height: 26.4px;

  }
  .footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: left;
}
  </style>
</head>
<body class="cor">


  <div class="container ">
    <div class="section">
      <div class="row">
        <div class="col s12 center z-depth-2 white hoverable">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4 class="center teal-text">login de usuarios<i class="material-icons">account_circle</i></h4>
          <div class="row">
            <form class="col s12" action="?classe=UsuarioNet&acao=confirmar_login" method="post">
              <div class="row">
                 <div class="input-field col s6">
                    <label>Email</label>
                    <input type="email" name="email" id="email" class="validate" value="">
                  </div>
                  <div class="input-field col s6">
                    <label>Senha</label>
                    <input type="password" name="senha" id="senha" class="validate" value="">
                  </div>
                <div class="row">
                  <div class="col s4">
                    <button type="submit" class="waves-effect waves-light btn-large" name = "entrar" ><i class="material-icons right" >send</i>entrar</button>
                  </div>
                  <div class="col s4">
                    <button type="reset" class="waves-effect waves-light btn-large"><i class="material-icons right">send</i>limpar</button>
                  </div>
                  <div class="col s4">
                    <a href="?classe=UsuarioNet&acao=cadastro" class="waves-effect waves-light btn-large" action=""><i class="material-icons right">send</i>cadastre-se</a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
      
<footer class="page-footer transparent">
    <div class="footer-copyright footer">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
</footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
  <?php

if (isset($_SESSION['Alerta_x'])){
if ($_SESSION['Alerta_x'] == 1){
    echo "<script>alert('Usuario ou senha invalido')</script>";
    unset($_SESSION['Alerta_x']);
}
}

if (isset($_SESSION['Alerta_y'])){
if ($_SESSION['Alerta_y'] == 1){
echo "<script>alert('Cadastrado com sucesso')</script>";
unset($_SESSION['Alerta_y']);
}
}

?>
</html>
