<?php
require_once 'model/Usuario_Model.php';

class UsuarioNetController
{
    public function cadastro(){
        include "view/cadastro.php";

    }

    public function login(){
        include 'view/login.php';
    }

    public function create(){
        $Usuario_Model = new Usuario_Model();

        if ( isset($_POST['email'])  ) {
        $Usuario_Model->setEmail($_POST['email']);
        $Usuario_Model->setSenha($_POST['senha']);
        $Usuario_Model->setNome($_POST['nome']);
        $Usuario_Model->save_create();

       header("?classe=UsuarioNet&acao=login");
        }
        include 'view/login.php';
       
    }

    public function confirmar_login(){
        $Usuario_Model = new Usuario_Model();

        if ( isset($_POST['email'])  ) {
        $Usuario_Model->setEmail($_POST['email']);
        $Usuario_Model->setSenha($_POST['senha']);
        $Usuario_Model->confirmar_login();

        header("?classe=UsuarioNet&acao=login");
        }


        if($Usuario_Model->row = 1){
            include 'view/inicial.php';
        }else{
            include 'view/login.php';
        }
    }

    public function inicial(){
        include 'view/inicial.php';
    }
}