<?php
  session_start();
  require_once "config.php";
  if(isset($_POST['id'])){

    $id = htmlspecialchars($_POST['id']);
    $query = $bdd->prepare('DELETE FROM `client` WHERE `client`.`id_cl` = ?');
    $query->execute(array($id));
    $query = $bdd->prepare('DELETE FROM `reservation` WHERE `reservation`.`id_cl` = ?');
    $query->execute(array($id));
    header('Location:../index.php?err_supp=success');
  }
?>
