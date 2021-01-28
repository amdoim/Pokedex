<?php

class Rota{
    
    ///construtir da classe
    public function __construct()
    {
        $this->run();
    }
    
    public function run()
    {
        $parametro=array();
        ///pegando paramentros na url 
        if(isset($_GET['pag']))
        {
            $url=$_GET['pag'];
            
        }
        if(isset($_POST['recarregar'])){
            $url="home/carregar/".$_POST['carregar'];
            echo $url;
            exit;
        }
///verificando e validando os paramentros passados atraves da url
        if(!empty($url))
        {
            //quebrando a string e transfomando em array
            $url=explode('/',$url);
            $controle= $url[0].'controle';

            //remover remover a primeira posição e realinha o vetor 
            array_shift($url);

            if(isset($url[0]) && !empty($url[0]))
            {
                $metodo=$url[0];
                array_shift($url);
            }else{
                $metodo='index';
            }
            if(count($url)>0)
            {
                $parametro=$url;
            }
        
    }else
    {
        $controle='homeControle';
        $metodo='index';
        
    }

    $caminho="MedLynx/Controle/".$controle.'.php';

    if(!file_exists($caminho) && !method_exists($controle,$metodo))
    {
        $controle='homeControle';
        $metodo='index';
        $parametro=array();
    }

    $control= new $controle;
    
    // chamando o metodo dentro da classe 
    // passando o array com o objeto e o nome do metodo
    call_user_func_array(array($control,$metodo), $parametro);

}
}

?>