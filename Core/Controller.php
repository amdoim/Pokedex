<?php


class Controller{
    public $dados;
    public $dados2;

    public function carregarTemplate($nomeView,$dadosModel=array(),$dados2=array())
    {
        $this->dados =$dadosModel;
        $this->dados2=$dados2;
        require 'View/template.php';
    }

    public function carregaViewNoTemplate($nomeView,$dadosModel=array())
    {
        extract($dadosModel);
        require 'View/'.$nomeView.'.php';
    }

}

?>