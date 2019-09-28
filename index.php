
<?php include 'inc/config.php'?>
<?php
$classe = isset($_GET['classe']) ? $_GET['classe'] : 'UsuarioNet';
$acao = isset($_GET['acao']) ? $_GET['acao'] : 'login';
$_GET['id'] = isset($_GET['id']) ? $_GET['id'] : '1';

include "Controller/".$classe."Controller.php";

$controller = $classe."Controller";
$app = new $controller();
$app->$acao();
?>
