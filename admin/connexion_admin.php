<?php
  session_start();
  require_once "config_admin.php";
  if(isset($_POST['nss'])&&isset($_POST['dn']))
  {
    $nss = htmlspecialchars($_POST['nss']);
    $dn = htmlspecialchars($_POST['dn']);
    $sql = "SELECT * FROM personnel WHERE nss_pl = ?";
    $query = $bdd->prepare($sql);
    $query->execute(array($nss));
    $data = $query->fetch();
    echo '<pre>'.print_r($data).'</pre>';
    header('Location:admin.php');
  }else
  {
    header('Location:index.php');
  }
?>
