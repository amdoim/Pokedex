<?php
    class  PokemonsModel extends Api{


       public function BuscaIdPokemons($id){
            
        $pokemon=$this->getDados($id);
        return $pokemon;

        }
        
        public function BuscaPokemons($offset){
            
            $pokemon=$this->getAll($offset);
            return $pokemon;
    
            }

        public function getUrlPokemon($url){
            $pokemon=$this->getUrl($url);
            return $pokemon;
        }

        public function BuscaSpecies($specie){
            $pokemon=$this->getSpecies($specie);
            return $pokemon;
        }
    }
?>