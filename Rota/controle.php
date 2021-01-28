<?php
class Controle{
    public $Pokemon;
    public $nomePokemon;
    public $evolucao;
    public $evolucao2;
    public $evolucao3;

    public function CarregarIndex($nomeView,$dados=array(),$AllPokmons=array())
    {
       
        $this->nomePokemon=$AllPokmons;
        
        
        require 'Apresentacao/index.php';
    }
    public function CarregarPokemon($nomeView,$dados=array(),$pok1=array(),$pok2=array(),$pok3=array())
    {
       
        $this->Pokemon=$dados;
        $this->evolucao=$pok1;
        $this->evolucao2=$pok2;
        $this->evolucao3=$pok3;

        
        
        require 'Apresentacao/index.php';
    }

    public function CarregarViewIndex($nomeView,$dados=array())
    {
        extract($dados);
        require 'Apresentacao/'.$nomeView.'.php';
    }

}
?>