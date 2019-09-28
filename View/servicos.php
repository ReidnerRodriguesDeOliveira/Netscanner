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
                <h4 class="center teal-text">Todos os serviços<i class="material-icons">account_circle</i></h4>
                <a class="btn btn-primary" href="?classe=ServicoNet&acao=Create">Criar novo serviço</a>
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>nome</th>
                                <th>duração</th>
                                <th>preço</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($Servico_Model as $Servico_Model){ ?>
                                <tr title="">
                                    
                                    <TD><?=$Servico_Model->nome?></TD>
                                    <td><?=$Servico_Model->duracao?></td>
                                    <td><?=$Servico_Model->preco?></td>
                                    <td>
                                        <a class="btn btn-primary" href="?classe=ServicoNet&acao=read&idservico=<?=$Servico_Model->idservico?>">Ver</a><br><br>
                                        <a class="btn btn-primary" href="?classe=ServicoNet&acao=update&idservico=<?=$Servico_Model->idservico?>">Alterar</a><br><br>
                                        <a class="btn btn-primary" href="?classe=ServicoNet&acao=delete&idservico=<?=$Servico_Model->idservico?>">Deletar</a><br><br>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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
