<?php
/**
 * Created by PhpStorm.
 * User: 11701544
 * Date: 27/09/2019
 * Time: 16:18
 */

class Servico_Model
{
private $idservico;
private $nome;
private $duracao;
private $preco;
private $usuario_idusuario;

private $con;

    /**
     * Servico_Model constructor.
     * @param $idservico
     * @param $nome
     * @param $duracao
     * @param $preco
     * @param $usuario_idusuario
     */
    public function __construct($idservico=NULL, $nome=NULL, $duracao=NULL, $preco=NULL, $usuario_idusuario=NULL)
    {
        $this->idservico = $idservico;
        $this->nome = $nome;
        $this->duracao = $duracao;
        $this->preco = $preco;
        $this->usuario_idusuario = $usuario_idusuario;

        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function all(){

        $sql= $this->con->prepare("SELECT * FROM Servico ORDER BY nome");
        $sql->execute();
        return $sql->fetchAll(PDO::FETCH_CLASS);
    }

    public function salvar(){
        $sql = $this->con->prepare("INSERT INTO servico(idservico, nome, duracao, preco) VALUES(null,?,?,?)");
        $sql->execute( array($this->nome,$this->duracao,$this->preco));
    }

    public function read(){

        $sql = $this->con->prepare("SELECT * FROM servico WHERE idservico=?");
        $sql->execute( array($this->idservico) );
        $Servico_Model = $sql->fetchObject();

        if ( $Servico_Model){
            $this->idservico = $Servico_Model->idservico;
            $this->nome = $Servico_Model->nome;
            $this->duracao = $Servico_Model->duracao;
            $this->preco = $Servico_Model->preco;
        }

    }

    public function salvar_update(){
        $sql = $this->con->prepare("UPDATE servico SET nome=?, duracao=?, preco=? WHERE idservico=?");
        $sql->execute( array($this->getNome(), $this->getDuracao(), $this->getPreco(), $this->getIdservico()));
    }

    public function delete(){
        $sql = $this->con->prepare("DELETE FROM servico WHERE idservico=?");
        $sql->execute(array($this->idservico) );
    }

    /**
     * @return mixed
     */
    public function getIdservico()
    {
        return $this->idservico;
    }

    /**
     * @param mixed $idservico
     */
    public function setIdservico($idservico)
    {
        $this->idservico = $idservico;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getDuracao()
    {
        return $this->duracao;
    }

    /**
     * @param mixed $duracao
     */
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;
    }

    /**
     * @return mixed
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     * @param mixed $preco
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     * @return mixed
     */
    public function getUsuarioIdusuario()
    {
        return $this->usuario_idusuario;
    }

    /**
     * @param mixed $usuario_idusuario
     */
    public function setUsuarioIdusuario($usuario_idusuario)
    {
        $this->usuario_idusuario = $usuario_idusuario;
    }
}