<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">    
    <meta  http-equiv = " X-UA-Compatible " content = " IE = edge , chrome = 1 "/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemóns</title>

    <link rel="stylesheet" href="http://localhost/MedLynx/estilo/estilo.css"type="text/css" >
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>
<body>
<section class="main-content-section">
  <center><h3 onclick="inicio();">
    Pokédex</h3></center>
 
   
<?php
    $this->CarregarViewIndex($nomeView);
    $dados=@$this->nomePokemon[8]->id;
?>
</section>

<div class="row">
<input type="button" class="button-default" id="carregar" value="Proximos" onclick="carregar()">
  </div>
</body>

<footer>
<section class="hero is-info is-small">
      <div class="hero-body">
        <div class="container has-text-centered">
          <p class="title"> 
          </p>
         
        </div>
      </div>
    </section>
</footer>
</html>

<script>
   function carregar(){
     
    window.location.href = "/MedLynx/home/carregar/<?=$dados+9?>";
   }

   function  inicio(){
     
     window.location.href = "/MedLynx/";
    }

  

</script>

