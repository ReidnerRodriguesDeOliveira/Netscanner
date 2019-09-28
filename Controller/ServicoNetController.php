<?php
require_once 'model/Servico_Model.php';

class ServicoNetController
{
    public function all(){

        $obj = new Servico_Model();
        $Servico_Model = $obj->all();
        include "view/servicos.php";
    }

    public function Create(){
        include "view/Cadastro_servico.php";
    }
    public function salvar(){
        $Servico_Model = new Servico_Model();

        if ( isset($_POST['nome'])  ) {
        $Servico_Model->setPreco($_POST['preco']);
        $Servico_Model->setDuracao($_POST['Duracao']);
        $Servico_Model->setNome($_POST['nome']);
        $Servico_Model->salvar();

    header("?classe=ServicoNet&acao=all");
        }
     include 'view/inicial.php';
    }

    public function Update(){
        $Servico_Model = new Servico_Model($_GET['idservico']);
        $Servico_Model->read();
        include "view/Update_servico.php";
    }

    public function update_salvar(){
    $servico_model = new Servico_Model($_POST['idservico']);
        if ( isset($_POST['nome'])  ) {
            $servico_model->setIdservico($_POST['idservico']);
            $servico_model->setNome($_POST['nome']);
            $servico_model->setDuracao($_POST['duracao']);
            $servico_model->setPreco($_POST['preco']);
            $servico_model->salvar_update();
            header("Location: ./?classe=ServicoNet&acao=all");
        }

        include 'view/inicial.php';
    }

    public function read(){
        $Servico_Model = new Servico_Model($_GET['idservico']);
        $Servico_Model->read();
        include 'view/Read_servico.php';
    }

    public function delete(){
        $Servico_Model = new Servico_Model($_GET['idservico']);
        $Servico_Model->delete();
        include 'view/inicial.php';
    }
}