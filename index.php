<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <script src="jquery.js"></script>
    <title>PHP-EXOS-FONCTIONS-2</title>
  </head>
  <body>
    <h1>EXO1</h1>
    <p>
     <!--Faire appel à une fonction Javascript pour afficher celle-ci en PHP  -->
    <?php
     function toto($hello ='Message alert error fail'){
    ?>
     <script>
       alert('<?php echo $hello?>');
     </script>
     <?php
      }
     toto();
     ?>
    </p>
    <h1>EXO2</h1>
    <p>
      <!--Ecrire une fonction qui permet de transformer chacun des éléments du tableau de manière que le premier
 caractère soit en majuscule et les autres en minuscules, quelle que soit la casse initiale
 des éléments, même si elle est mixte.  -->
 <!--Test  -->
    <?php
    $exo = "patrick est un foRmateur d'Un certain niveau...";
    $exo = ucfirst(strtolower($exo));
     echo $exo;
     ?>
     <?php

     $array = tableau("michel a un chien muy bonito", "denise MANGE dU PudDing");
      $array=[0];
    //  var_dump($array);
      $array= ucfirst(strtolower(($array));
       echo $array;
 ?>
 <!--Vrai exo  -->
 <?php
  $sarkozy = array('goRilLe', 'BaBouIn', 'CaPucIn');

  function change(&$sarkozy){
     }foreach ($sarkozy as $hollande){

      $hollande = array_map(strtolower,$sarkozy);
      $royal = array_map(ucfirst, $hollande);
    };
   print_r($sarkozy);
   print_r($hollande);
   print_r($royal);

   ?>

    </p>
  </body>
</html>
