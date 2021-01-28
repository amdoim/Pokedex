<?php

spl_autoload_register(function($nome_arquivo){

    if(file_exists('Controle/'.$nome_arquivo.'.php'))
    {
        require 'Controle/'.$nome_arquivo.'.php';

    }elseif(file_exists('Dado/'.$nome_arquivo.'.php'))
    {
        require 'Dado/'.$nome_arquivo.'.php';
    }
    elseif(file_exists('Rota/'.$nome_arquivo.'.php'))
    {
        require 'Rota/'.$nome_arquivo.'.php';

    }
});