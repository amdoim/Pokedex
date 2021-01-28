<?php
require_once 'conexao.php';
class usuarios{
    private $con;


    public function __construct()
    {
        $this->con = Conexao::getConexao();
    }

public function getUsuarios()
{
    $dados =array();
    $cmd=$this->con->query('SELECT * FROM login');
    $dados = $cmd->fetchAll(PDO::FETCH_ASSOC);
    return $dados;
}
}