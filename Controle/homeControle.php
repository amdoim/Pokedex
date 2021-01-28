

<?php


class homeControle extends Controle{

    public function index()
    {
        $Pokemons=array();
        $api=new ApiPokemons();
        $dados=$api->getAllPokemons(0);
        // $pkCount = (is_array($dados) ? count($dados) : 0);
        foreach ($dados as $key => $value) {
         
            $pok=$api->getUrlPokemon($value->url);    
            array_push($Pokemons,$pok);
            
        }
       
       

        $this->CarregarIndex('home',$dados,$Pokemons);

    }

    public function carregar($limite)
    {
        $Pokemons=array();
        $api=new ApiPokemons();
        $dados=$api->getAllPokemons($limite);
        // $pkCount = (is_array($dados) ? count($dados) : 0);
        foreach ($dados as $key => $value) {
         
            $pok=$api->getUrlPokemon($value->url);    
            array_push($Pokemons,$pok);
            
        }
       
       

        $this->CarregarIndex('home',$dados,$Pokemons);

    }

    
}
