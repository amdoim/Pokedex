

<?php


class pokemonsController extends Controller{

   

    public function pokemon($id)
    {
        $Pokemons=array();



        $modelPoke=new PokemonsModel();

        ////pegando os dados do pokemon
        $Pokemons=$modelPoke->BuscaIdPokemons($id);

        ///pegando os dados da especies para monstrar a evolução
        $dados=$modelPoke->BuscaSpecies($id);

        ///filtrando os dados de evolução do pokemon
        $dados=$modelPoke->getUrlPokemon($dados->evolution_chain->url);

        // echo '<pre>';
        //     print_r($dados);
        // echo '</pre>';
        // exit;
        

        $pok1=$modelPoke->getUrlPokemon($dados->chain->species->url);////pega o dado antes da evolucao

        $pok1=$modelPoke->BuscaIdPokemons($pok1->id);///buscando o pokemon

        $pok2=$modelPoke->getUrlPokemon($dados->chain->evolves_to[0]->species->url);////pega o dado da 1º evolucao

        $pok2=$modelPoke->BuscaIdPokemons($pok2->id);
        if(!empty($dados->chain->evolves_to[0]->evolves_to)){

        $pok3=$modelPoke->getUrlPokemon($dados->chain->evolves_to[0]->evolves_to[0]->species->url);////pega o dado  da 2º evolucao

        $pok3=$modelPoke->BuscaIdPokemons($pok3->id);

        }else
        {
            $pok3=[];
        }

        $this->CarregarPokemon('pokemon',$Pokemons,$pok1,$pok2,$pok3);

    }
}