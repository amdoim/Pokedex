

<?php


class pokemonsControle extends Controle{

   

    public function pokemon($id)
    {
        $Pokemons=array();
        $api=new ApiPokemons();
        ////pegando os dados do pokemon
        $Pokemons=$api->getPokemons($id);
        ///pegando os dados da especies para monstrar a evolução
        $dados=$api->getSpecies($id);
        ///filtrando os dados de evolução do pokemon
        $dados=$api->getUrlPokemon($dados->evolution_chain->url);
        $pok1=$api->getUrlPokemon($dados->chain->species->url);////pega o dado antes da evolucao
        $pok1=$api->getPokemons($pok1->id);///buscando o pokemon
        $pok2=$api->getUrlPokemon($dados->chain->evolves_to[0]->species->url);////pega o dado da 1º evolucao
        $pok2=$api->getPokemons($pok2->id);
        $pok3=$api->getUrlPokemon($dados->chain->evolves_to[0]->evolves_to[0]->species->url);////pega o dado  da 2º evolucao
        $pok3=$api->getPokemons($pok3->id);
        
    

        $this->CarregarPokemon('pokemon',$Pokemons,$pok1,$pok2,$pok3);

    }
}