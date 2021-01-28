<?php


class ApiPokemons{   

    public function getAllPokemons($offset)///busca os pokemons por  offset com limite de 9 
    {
     
            $url="https://pokeapi.co/api/v2/pokemon?offset=".$offset."&limit=9";
            $ch = curl_init($url); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
            $pokemons = json_decode(curl_exec($ch));
            
        
       

        return $pokemons->results;
    }

    public function getPokemons($id)/// metodo busca dados de um pokemon atraves do id
    {
            $url="https://pokeapi.co/api/v2/pokemon/".$id;
            $ch = curl_init($url); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
            $pokemons = json_decode(curl_exec($ch));
            
        
       

        return $pokemons;
    }

    public function getSpecies($id)///metodo busca species do pokemon, este metodo criado para pegar as evoluçoes de cada pokemon
    {
            $url="https://pokeapi.co/api/v2/pokemon-species/".$id;
            $ch = curl_init($url); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
            $pokemons = json_decode(curl_exec($ch));
            
        
       

        return $pokemons;
    }

    public function getUrlPokemon($url)///metodo de busca por url//busca os dados de evoçução e especies e id tambem 
    {
            $ch = curl_init($url); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
            $pokemons = json_decode(curl_exec($ch));
            
        
       

        return $pokemons;
    }
}


?>