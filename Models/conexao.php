<?php

class Conexao
{
    private static $instancia;
    private  function __construct(){

    }

    public static function getConexao()
    {
        if(!isset(self::$instancia))
        {
            $dbName='escolaist';
            $host= 'localhost';
            $user="root";
            $pass="";

            try {
                //code...
                self::$instancia= new PDO('mysql:dbname='.$dbName.';host='.$host,$user,$pass);
            } catch (Exception $th) {
                //throw $th;
                echo 'erro: '.$th;
            }
        }
        return self::$instancia;

    }
}


?>