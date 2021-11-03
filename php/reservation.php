<?php
  require_once "config.php";
  if(isset($_POST['fres_dd'])!=""&&isset($_POST['fres_hd'])!=""&&isset($_POST['fres_df'])!=""&&isset($_POST['fres_hf'])!="")
  {
    $dd = htmlspecialchars($_POST['fres_dd']);
    $hd = htmlspecialchars($_POST['fres_hd']);
    $df = htmlspecialchars($_POST['fres_df']);
    $hf = htmlspecialchars($_POST['fres_hf']);
    $eq = htmlspecialchars($_POST['fres_eq']);
    $mo = htmlspecialchars($_POST['fres_mo']);
    $id = htmlspecialchars($_POST['fres_id']);
    $ac = htmlspecialchars($_POST['fres_act']);
    if ($dd=="") {
      header('Location:landing.php?err_res=date');
    }
    elseif($eq==0){
      header('Location:landing.php?err_res=equip');
    }else{
    $insert = $bdd->prepare("INSERT INTO `reservation` (`id_res`, `dd_re`, `hd_re`, `df_re`, `hf_re`, `nbr_mnt_re`, `act_re`, `id_cl`, `id_eq`, `id_pl`) VALUES (NULL, :dd, :hd, :df, :hf, '1', :ac, :id, :eq, :mo);");
    $insert->execute(
      array(
        'dd'=>$dd,
        'hd'=>$hd,
        'df'=>$df,
        'hf'=>$hf,
        'ac'=>$ac,
        'id'=>$id,
        'eq'=>$eq,
        'mo'=>$mo
      )
    );
    header('Location:landing.php?err_res=success');
  }
  }else header('Location:landing.php?err_res=activ');
?>
