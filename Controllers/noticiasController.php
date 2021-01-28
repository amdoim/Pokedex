<?php

class noticiasController extends Controller
{
public function index(){

    // chama um View
    
    // $u = new usuarios();
    // $dados=$u->getDadosUser();
    $n= new usuarios();
    $dados=$n->getUsuarios();
  
    $this->carregarTemplate('noticias',array(),$dados);
}    
public function getNoticias(){

    // chama um View
    
    
    
    $this->carregarTemplate('getNoticias');
}    



}
