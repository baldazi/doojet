<?php
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=doojet','root','');
  }catch(Exception $e){
    echo $e->getMessage();
    die();
  }
?>
