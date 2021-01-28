<?php

class homeController extends Controller
{
public function index(){

    // chama um View
    
    // $u = new usuarios();
    // $dados=$u->getDadosUser();
    
    $this->carregarTemplate('home');
}    



}
