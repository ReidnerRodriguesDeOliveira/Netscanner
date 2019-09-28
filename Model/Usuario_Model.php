<?php
/**
 * Created by PhpStorm.
 * User: 11701544
 * Date: 27/09/2019
 * Time: 16:17
 */

class Usuario_Model
{
private $idusuario;
private $nome;
private $email;
private $senha;

private $con;
private $row;

    /**
     * Usuario_Model constructor.
     * @param $idusuario
     * @param $nome
     * @param $email
     * @param $senha
     */
    public function __construct($idusuario= NULL, $nome= NULL, $email= NULL, $senha= NULL, $con= NULL)
    {
        $this->idusuario = $idusuario;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;

        $this->con = new PDO(SERVIDOR, USUARIO, SENHA);
    }

    public function save_create(){
        $sql = $this->con->prepare("INSERT INTO user(iduser, nome, email, senha) VALUES(null,?,?,?)");
        $sql->execute( array($this->nome,$this->email,MD5($this->senha)));
    }

    public function confirmar_login(){
        $sql = $this->con->prepare("SELECT * FROM user WHERE email=? AND senha=?");
        $sql->execute(array($this->email, MD5($this->senha)));

        $row = $sql->fetchAll(PDO::FETCH_CLASS);
        return $row;
        header("?classe=UsuarioNet&acao=confirmar_login");
    }

    /**
     * @return mixed
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * @param mixed $idusuario
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
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
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
}