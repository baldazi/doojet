<?php
  session_start();
  require_once "config.php";
  if(isset($_POST['email_identif'])&&isset($_POST['mp_identif'])){

    $email = htmlspecialchars($_POST['email_identif']);
    $mp = htmlspecialchars($_POST['mp_identif']);
    $query = $bdd->prepare('SELECT id_cl,nom_cl,pnom_cl,email_cl,mp_cl,dn_cl from client where email_cl=?');
    $query->execute(array($email));
    $data = $query->fetch();
    $row = $query->rowCount();
    if($row == 1){
      if(filter_var($email,FILTER_VALIDATE_EMAIL))
      {
        //hasher mot de passe
        $mp = hash('sha256',$mp);
        if($data["mp_cl"]===$mp)
        {
          $_SESSION['id'] = $data['id_cl'];
          $_SESSION['user'] = $data['pnom_cl'];
          $_SESSION['nom_cl'] = $data['nom_cl'];
          $_SESSION['email_cl'] = $data['email_cl'];
          $_SESSION['dn_cl'] = $data['dn_cl'];
          header('Location:landing.php');
        }else{
          header('Location:../index.php?login_err=password');
        }
      }else{
        header('Location:../index.php?login_err=email');
      }
    }else{
      header('Location:../index.php?login_err=already');
    }
  }else{
    header('Location:../index.php');
  }
?>
