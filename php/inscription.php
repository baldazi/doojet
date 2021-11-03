<?php

  require_once "config.php";
  if(isset($_POST['pnom_insc'])&&isset($_POST['nom_insc'])&&isset($_POST['dn_insc'])&&isset($_POST['email_insc'])&&isset($_POST['mp_insc']))
  {
    $email = htmlspecialchars($_POST['email_insc']);
    $mp = htmlspecialchars($_POST['mp_insc']);
    $pnom = htmlspecialchars($_POST['pnom_insc']);
    $nom = htmlspecialchars($_POST['nom_insc']);
    $dn = htmlspecialchars($_POST['dn_insc']);
    $query = $bdd->prepare('SELECT nom_cl,pnom_cl,email_cl,mp_cl from client where email_cl=?');
    $query->execute(array($email));
    $data = $query->fetch();
    $row = $query->rowCount();
    if($row == 0)
    {
      if(filter_var($email,FILTER_VALIDATE_EMAIL))
      {
        $mp = hash('sha256',$mp);
        $insert = $bdd->prepare("INSERT INTO `client` (`id_cl`, `nom_cl`, `pnom_cl`, `email_cl`, `mp_cl`, `nbr_res_cl`, `dn_cl`) VALUES (NULL,:nom,:pnom,:email,:mp,0,:dn)");
        $insert->execute(
          array(
            'nom'=>$nom,
            'pnom'=>$pnom,
            'email'=>$email,
            'mp'=>$mp,
            'dn'=>$dn
          )
        );
        header('Location:../index.php?reg_err=success');
      }else {
          header('Location:../index.php?reg_err=password');
        }
    }else {
      header('Location:../index.php?reg_err=already');
    }
  }

?>
