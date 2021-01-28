

<?php


class homeController extends Controller{

    public function index()
    {
        $Pokemons=array();
        $modelPoke=new PokemonsModel();
        $dados=$modelPoke->BuscaPokemons(0);
        // $pkCount = (is_array($dados) ? count($dados) : 0);
        foreach ($dados as $key => $value) {
         
            $pok=$modelPoke->getUrlPokemon($value->url);    
            array_push($Pokemons,$pok);
            
        }
       
       

        $this->CarregarIndex('home',$dados,$Pokemons);

    }

    public function carregar($offset)
    {
        $Pokemons=array();
        $modelPoke=new PokemonsModel();
        $dados=$modelPoke->BuscaPokemons($offset);
        // $pkCount = (is_array($dados) ? count($dados) : 0);
        foreach ($dados as $key => $value) {
         
            $pok=$modelPoke->getUrlPokemon($value->url);    
            array_push($Pokemons,$pok);
            
        }
       
       

        $this->CarregarIndex('home',$dados,$Pokemons);

    }

    
}
