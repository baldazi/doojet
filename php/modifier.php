<?php

  require_once "config.php";
  if(isset($_POST['pnom_dn'])&&isset($_POST['nom_dn'])&&isset($_POST['dn_dn'])&&isset($_POST['email_dn'])&&isset($_POST['mp_dn']))
  {
    $id = $_POST['id_dn'];
    $email = htmlspecialchars($_POST['email_dn']);
    $mp = htmlspecialchars($_POST['mp_dn']);
    $pnom = htmlspecialchars($_POST['pnom_dn']);
    $nom = htmlspecialchars($_POST['nom_dn']);
    $dn = htmlspecialchars($_POST['dn_dn']);
      if(filter_var($email,FILTER_VALIDATE_EMAIL))
      {
        $mp = hash('sha256',$mp);
        $insert = $bdd->prepare("UPDATE `client` SET `nom_cl`=:nom, `pnom_cl`=:pnom, `email_cl`=:email, `mp_cl`=:mp, `dn_cl`=:dn WHERE `client`.`id_cl` = :id");
        $insert->execute(
          array(
            'nom'=>$nom,
            'pnom'=>$pnom,
            'email'=>$email,
            'mp'=>$mp,
            'dn'=>$dn,
            'id'=>$id
          )
        );
        header('Location:landing.php?mod_err=success');
      }else {
          header('Location:landing.php?mod_err=email');
        }
  }

?>
