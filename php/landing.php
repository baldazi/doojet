<!DOCTYPE html>
<?php
  session_start();
  require_once 'config.php';

 ?>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Doo - Jet</title>
<!--framework-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<!--local-->
    <link rel="stylesheet" href="../css/master.css">
    <script type="text/javascript" src="../js/main.js"></script>
  </head>
  <body>
      <div role="heading">
<!--navigation-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container-fluid">
              <a href="landing.php" class="navbar-brand"><i class="fas fa-home"></i></a>
              <button class="navbar-toggler" name="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!--Navigator items-->
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
<!--Consulter-->
                    <li class="nav-item"><a href="#" class="btn text-white" role="button" data-bs-toggle="modal" data-bs-target="#modalEquip">Equipement</a></li>
                    <li class="nav-item"><a href="#" class="btn text-white" role="button" data-bs-toggle="modal" data-bs-target="#modalPerso">Personnel</a></li>

                    <li class="nav-item px-3">
<!--rechercher-->
                      <form method="post" action="landing.php">
                        <div class="input-group">
                          <input type="search" class="form-control" size="120" placeholder="rechercher..." name="entR" id="entRCH">
                          <button class="btn-primary btn" name="subR"><i class="fas fa-search"></i></button>
                        </div>
                        <div id="typeRCH">
                          <div class="form-check typeR_sw">
                            <input type="radio" name="choix_r" value="1" class="form-check-input" id="choix_r1">
                            <label for="choix_r1" class="choix_rr">Equipement</label>
                          </div>
                          <div class="form-check typeR_sw">
                            <input type="radio" name="choix_r" value="2" class="form-check-input" id="choix_r2">
                            <label for="choix_r2" class="choix_rr">Personnel</label>
                          </div>
                          <div class="form-check typeR_sw">
                            <input type="radio" name="choix_r" value="3" class="form-check-input" id="choix_r3">
                            <label for="choix_r3" class="choix_rr">Reservation</label>
                          </div>
                          <input type="radio" name="choix_r" value="0" class="form-check-input" id="choix_r0" checked>
                        </div>
                      </form>
                    </li>
<!--utilisateur-->
                    <li class="nav-item dropdown px-2">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="badge bg-dark"><i class="fas fa-user"></i><?php echo $_SESSION['user']; ?></span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalDonne">
                          Mon compte
                        </a></li>
                        <li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalReservation">Mes reservations</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="deconnexion.php">Deconnexion</a></li>
                        <li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalSuppression">Supprimer mon compte</a></li>
                      </ul>
                    </li>
<!--menu information-->
                    <li class="nav-item">
                        <i class="fas fa-info-circle text-info disabled d-none"></i>
                    </li>
                  </ul>
              </div>
            </div>
          </nav>
<!--formulaire de donnees-->
          <div class="modal" id="modalDonne">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body bg-secondary">
                  <button type="button" class="btn-close btn-light" data-bs-dismiss="modal" id="closeDn"></button>
                  <button type="button" class="btn btn-danger" id="btnModifDn"><i class="fas fa-edit"></i></button>
<!--form-->
            <form method="post" action="modifier.php" id="formDn">
              <div class="form-floating mb-3">
                <input type="text" class="form-control" name="pnom_dn" id="pnomDn" placeholder="entrer votre prenom" disabled value="<?php echo $_SESSION['user']; ?>">
                <label for="pnomDn">Prénom</label>
              </div>
                <div class="form-floating mb-3">
                        <input type="text" class="form-control" name="nom_dn" id="nomDn" placeholder="entrer votre prenom" disabled value="<?php echo $_SESSION['nom_cl']; ?>">
                        <label for="nomDn">Nom</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="date" class="form-control" name="dn_dn" id="dnDn" placeholder="entrer date de naissance" disabled value="<?php echo $_SESSION['dn_cl']; ?>">
                        <label for="dnDn">Date de naissance</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="emailInc" placeholder="entrer votre email" disabled name="email_dn" value="<?php echo $_SESSION['email_cl']; ?>">
                        <label for="emailInc">Email</label>
                      </div>
                      <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="passInc" placeholder="mot de passe" name="mp_dn" required disabled>
                        <label for="passInc">mot de passe</label>
                      </div>
                      <input type="hidden" name="id_dn" value="<?php echo $_SESSION['id'] ; ?>">
                      <center><input type="submit" class="btn btn-success" value="modifier" disabled></center>
                    </form>
                  </div>
                </div>
              </div>
            </div>
<!--formulaire mes Reservation-->
            <div class="modal" id="modalReservation">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-body bg-:light">
                    <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"></button>
            <!--form-->
                  <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Activité</th>
                    <th>Moniteur</th>
                    <th>Equipement</th>
                  </tr>
                </thead>
                  <tbody>
                <?php
                    $query = $bdd->prepare("SELECT * FROM reservation WHERE id_cl = ?");
                    $query->execute(array($_SESSION['id']));
                    $data = $query->fetchAll(PDO::FETCH_ASSOC);
                    $rn = 1;
                    $activ = ["sky nautique","WakeBoard","Bouée tractée"];
                      foreach ($data as $data_c) {
                        echo '
                        <tr>
                          <td scope="row">'.$rn.'</td>
                          <td>'.$data_c['dd_re'].'</td>
                          <td>'.$activ[$data_c['act_re']-1].'</td>';
                          $queryp = $bdd->prepare("SELECT * FROM personnel WHERE id_pl = ?");
                          $queryp->execute(array($data_c['id_pl']));
                          $dp = $queryp->fetch();
                          echo
                          '<td>'.$dp['nom_pl'].'</td>';
                          $querye = $bdd->prepare("SELECT * FROM equipement WHERE id_eq = ?");
                          $querye->execute(array($data_c['id_eq']));
                          $de = $querye->fetch();
                          echo
                          '<td>'.$de['nom_eq'].'</td>
                        </tr>';
                        $rn++;
                      }
                  ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
<!-- Suppression du compte -->
          <div class="modal fade" id="modalSuppression" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                  Voulez-vous supprimer votre compte?
                </div>
                <div class="modal-footer">
                  <form action="supprimer.php" method="post">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <input type="hidden" name="id" value="<?php echo $_SESSION['id']; ?>">
                    <button type="submit" class="btn btn-primary">Supprimer</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
<!--consulter equipement-->
          <div class="modal" id="modalEquip">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body bg-:light">
                  <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"></button>
<!--form-->
                <table class="table table-striped">
              <thead>
                <tr>
                  <th>image</th>
                  <th>nom</th>
                  <th>description</th>
                  <th>puissance</th>
                  <th>coût</th>
                </tr>
              </thead>
                <tbody>
              <?php
                  $query = $bdd->prepare("SELECT * FROM equipement");
                  $query->execute();
                  $data = $query->fetchAll(PDO::FETCH_ASSOC);
                    foreach ($data as $data_c) {
                      echo '
                      <tr>
                        <td><img src="'.$data_c['file'].'" class="img-fluid" alt=""></td>
                        <td>'.$data_c['nom_eq'].'</td>
                        <td>'.$data_c['desc_eq'].'</td>
                        <td>'.$data_c['pui_eq'].'</td>
                        <td>'.$data_c['cht_eq'].'Eur/h</td>
                      </tr>';
                    }
                ?>
                </tbody>
              </table>
                </div>
              </div>
            </div>
          </div>
<!--consulter personnel-->
          <div class="modal" id="modalPerso">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body bg-light">
                  <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"></button>
<!--form-->
                    <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Numéro SS</th>
                      <th>Date d'embauche</th>
                      <th>Permis BEE</th>
                      <th>Permis PTC</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                      $query = $bdd->prepare("SELECT * FROM personnel");
                      $query->execute();
                      $data = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach ($data as $data_c) {
                          echo '
                          <tr>
                            <td>'.$data_c['nom_pl'].'</td>
                            <td>'.$data_c['nss_pl'].'</td>
                            <td>'.$data_c['dt_emb_pl'].'</td>
                            <td>'.$data_c['st_bee_pl'].'</td>
                            <td>'.$data_c['st_ptc_pl'].'</td>
                          </tr>';
                        }
                    ?>
                    </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
      </div>
<!--Reservation done or die-->
      <?php
        if(isset($_GET['err_res'])){
          $err = htmlspecialchars($_GET['err_res']);
          switch($err){
            case "date":
              echo '<div class="alert alert-warning text-center"><strong>choisir une date<strong></div>';
              break;
            case "equip":
              echo '<div class="alert alert-danger">choisir un equipement </div>';
              break;
            case "success":
              echo '<div class="alert alert-success text-center">reservation effectuée avec success</div>';
              break;
            case "activ":
              echo '<div class="alert alert-danger">choisir une activité </div>';
              break;
          }
        }
       ?>

      <div class="row body-content container-fluid mt-1" role="main">
<?php
//zone du resultat de la recherche
    if(isset($_POST['subR'])){
      echo '<div class="col-md-8 bg-light">';
      $resultat = htmlspecialchars($_POST['entR']);
      $el = htmlspecialchars($_POST['choix_r']);
      echo '
         <center><i>Résultat de la recherche :</i><strong>'.$resultat.'</strong></center>
      ';
      //*********Equipement*****************
      if(!$el){
        echo "<h1>faite un choix de recherche<h1>";
      }else{
        #**********************EQUIP*********************************
        switch($el){
          case 1:
            $query = $bdd->prepare("SELECT * FROM equipement WHERE nom_eq LIKE '%$resultat%'");
            $query->execute();
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
            if($query->rowCount() != 0)
            {
              foreach ($data as $data_c) {
                echo '<div class="card res_eq " style="width: 18rem;">
                  <img src="'.$data_c['file'].'" class="card-img-top" alt="">
                  <div class="card-body bg-dark">
                    <h3 class="card-title" >'.$data_c['nom_eq'].'</h3>
                    <span>description :</span>'.$data_c['desc_eq'].'
                    <br/><span>puissance : </span>'.$data_c['pui_eq'].'<strong>CV</strong><br/>
                    <span>coût : </span>'.$data_c['cht_eq'].' EUR/hr
                  </div>
                </div>';
              }
            }else{
              echo "<h1>pas d'élements associé à votre recherche</h1>";
            }
            break;
      //**************Personnel***************
      case 2:
        $query = $bdd->prepare("SELECT * FROM personnel WHERE nom_pl LIKE '%$resultat%'");
        $query->execute();
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        if($query->rowCount() != 0)
        {
          foreach ($data as $data_c) {
            echo '<div class="card res_eq " style="width: 20rem;">
              <div class="card-header">
                <i class="fas fa-user-tie fa-3x text-center text-secondary"></i>
                <p class="card-title h3 text-dark text-center" >'.$data_c['nom_pl'].'</p>
              </div>
              <div class="card-body bg-dark">
                <span>numero de sécurité sociale :</span>'.$data_c['nss_pl'].'
                <span>Date d\'embauche: </span>'.$data_c['dt_emb_pl'].'<br/>
                <span>Permis <i>bee</i>: </span>'.$data_c['st_bee_pl'].'<br/>
                <span>Permis <i>côtier</i>: </span>'.$data_c['st_ptc_pl'].'<br/>
              </div>
            </div>';
          }
        }else{
          echo "<h1>pas d'élements associé à votre recherche</h1>";
        }
        break;
      }
    }
  }else{
      echo '
      <!--image carousel-->
      <div id="carouselExampleIndicators" class="carousel slide col-md-8" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="../img/i1.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/i2.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="../img/i3.jpg" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>

      ';
    }
     ?>
        </div>
<!--reservation-->
        <div class="col-md-4 mb-5 offset-md-1">
          <h2 style="color:#fff">reservation</h2>
<!--formulaire de reservation-->
          <form method="post" action="reservation.php">
            <div class="input-group mb-3">
              <input type="text" class="form-control dateRES" placeholder="date de debut" disabled>
              <input type="hidden" class="dateRES" name="fres_dd">
              <input type="text" class="form-control heurdRES" placeholder="heure de debut" disabled>
              <input type="hidden" class="heurdRES" name="fres_hd">
              <span><button class="btn btn-outline-secondary" type='button' data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fas fa-calendar"></i></button></span>
            </div>
            <div class="input-group mb-3">
              <input type="text" class="form-control dateRES" placeholder="date de fin" disabled>
              <input type="hidden" class="dateRES" name="fres_df">
              <input type="text" class="form-control heurfRES" placeholder="heure de fin" disabled>
              <input type="hidden" class="heurfRES" name="fres_hf">
            </div>
            <select class="form-select mb-3" name="fres_act">
              <option disabled selected value="0"><i>Choisir une activité</i></option>
              <option value="1">Ski-nautique</option>
              <option value="2">WakeBoard</option>
              <option value="3">Bouée tractée</option>
            </select>
            <select class="form-select mb-3" name="fres_eq" required>
              <option selected disabled value="0">choisir un equipement</option>
              <?php
                  $query_sel_eq = $bdd->prepare('SELECT id_eq,nom_eq from equipement');
                  $query_sel_eq->execute();
                  $data_sel_eq = $query_sel_eq->fetchAll(PDO::FETCH_ASSOC);
                  $row_sel_eq = $query_sel_eq->rowCount();
                  for($i=0;$i <$row_sel_eq ;$i++){
                  echo '<option value="'.$data_sel_eq[$i]['id_eq'].'">'.$data_sel_eq[$i]['nom_eq'].'</option>';
                }
               ?>
            </select>
            <div class="form-check m-3">
              <input type="checkbox" class="form-check-input" id="ckMon">
              <label for="ckMon" class="form-check-label" style="color:#fff">Demander un moniteur</label>
            </div>
            <input type="hidden" name="fres_mo" value="0" id="resHD">
          <select class="form-select mb-3" id="slMon" name="fres_mo">
            <option selected disabled value="0">choisir un moniteur</option>
            <?php
                $query_sel_eq = $bdd->prepare('SELECT id_pl,nom_pl from personnel');
                $query_sel_eq->execute();
                $data_sel_eq = $query_sel_eq->fetchAll(PDO::FETCH_ASSOC);
                $row_sel_eq = $query_sel_eq->rowCount();
                for($i=0;$i <$row_sel_eq ;$i++){
                echo '<option value="'.$data_sel_eq[$i]['id_pl'].'">'.$data_sel_eq[$i]['nom_pl'].'</option>';
              }
             ?>
          </select>
          <input type="hidden" name="fres_id" value="<?php echo $_SESSION['id']; ?>">
          <button type="submit" class="btn btn-outline-success w-100"><i class="fas fa-sign-in-alt"></i></button>
          </form>
        </div>
      </div>

<!--calendrier de rdv -->
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" role="heading">
        <div class="offcanvas-header">
          <p id="offcanvasRightLabel" class="h2 text-warning p-2"></p>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
<!--cotenu du calendrier -->
            <?php include "calendrier.php" ?>
          </div>
        </div>
<!--fin-->
  </body>
</html>
