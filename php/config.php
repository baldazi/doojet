<?php
  try{
    $bdd = new PDO('mysql:host=localhost;dbname=doojet','root','');
  }catch(Exception $e){
    die($e->getMessage());
  }
 ?>
