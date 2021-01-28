<?php

class Api{   

    const API ="https://pokeapi.co/api/v2/pokemon"; 

    public function getAll($offset)///busca os pokemons por  offset com limite de 9 
    {
     
            $url=self::API."?offset=".$offset."&limit=9";
            $ch = curl_init($url); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
            $pokemons = json_decode(curl_exec($ch));
            
        
       

        return $pokemons->results;
    }

    public function getDados($id)/// metodo busca dados de um pokemon atraves do id
    {
        $url=self::API."/".$id;
            $ch = curl_init($url); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
            $dados = json_decode(curl_exec($ch));
            
        
       

        return $dados;
    }

    public function getSpecies($id)///metodo busca species do pokemon, este metodo criado para pegar as evoluçoes de cada pokemon
    {
        $url=self::API."-species/".$id;
            $ch = curl_init($url); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
            $dados = json_decode(curl_exec($ch));
            
        
       

        return $dados;
    }

    public function getUrl($url)///metodo de busca por url//busca os dados de evoçução e especies e id tambem 
    {
            $ch = curl_init($url); 
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
            $dados = json_decode(curl_exec($ch));
            
        
       

        return $dados;
    }
}


?>