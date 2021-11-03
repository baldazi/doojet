<!DOCTYPE html>
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
    <link rel="stylesheet" href="css/master.css">
    <script type="text/javascript" src="js/main.js"></script>
  </head>
  <body>
      <div role="heading">
<!--navigation-->
          <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container-fluid">
              <a href="index.php" class="navbar-brand"><i class="fas fa-home"></i></a>
              <button class="navbar-toggler" name="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
<!--Navigator items-->
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item px-3">
<!--rechercher-->
                      <form method="post" action="php/connexion.php">
                        <div class="input-group">
                          <input type="search" class="form-control" size="160" placeholder="rechercher...">
                          <button class="btn-primary btn"><i class="fas fa-search"></i></button>
                        </div>
                      </form>
                    </li>
<!--utilisateur-->
                    <li class="nav-item dropdown px-2">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user"></i>
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalConnexion">
                          s'identifier
                        </a></li>
                        <li><a class="dropdown-item" href="#" role="button" data-bs-toggle="modal" data-bs-target="#modalInscription">s'inscrire</a></li>
                      </ul>
                    </li>
<!--help-->
                    <li class="nav-item">
                      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-question-circle"></i></a>
                    </li>
                  </ul>
              </div>
            </div>
          </nav>

<!--formulaire d'identification-->
          <div class="modal" id="modalConnexion">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body bg-secondary">
                  <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"></button>
<!--form-->
                  <form method="post" action="php/connexion.php">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="emailCon" placeholder="entrer votre email" required name="email_identif">
                      <label for="emailCon">Email</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input type="password" class="form-control" id="passCon" placeholder="mot de passe" name="mp_identif" required>
                      <label for="passCon">mot de passe</label>
                    </div>
                    <center><input type="submit" class="btn btn-outline-primary" value="connexion"></center>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!--formulaire d'inscription-->
                    <div class="modal" id="modalInscription">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-body bg-secondary">
                            <button type="button" class="btn-close btn-light" data-bs-dismiss="modal"></button>
          <!--form-->
                            <form method="post" action="php/inscription.php">
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="pnom_insc" id="pnomIns" placeholder="entrer votre prenom" required>
                                <label for="pnomIns">Prénom</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="nom_insc" id="nomIns" placeholder="entrer votre prenom" required>
                                <label for="nomIns">Nom</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="date" class="form-control" name="dn_insc" id="dnIns" placeholder="entrer date de naissance" required>
                                <label for="dnIns">Date de naissance</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="emailInc" placeholder="entrer votre email" required name="email_insc">
                                <label for="emailInc">Email</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="passInc" placeholder="mot de passe" name="mp_insc" required>
                                <label for="passInc">mot de passe</label>
                              </div>
                              <center><input type="submit" class="btn btn-primary" value="Créer"></center>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
      </div>

      <?php

        if (isset($_GET['login_err'])){
          $err = htmlspecialchars($_GET['login_err']);
          switch($err){
            case 'password':
              ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Erreur</strong> mot de passe incorrect
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              <?php
              break;
              case 'email':
                ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <strong>Erreur</strong> email inccorect
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                break;
                case 'already':
                  ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Erreur</strong> compte non existant
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  <?php
                  break;
          }
        }

      ?>
      <?php

        if (isset($_GET['reg_err'])){
          $err = htmlspecialchars($_GET['reg_err']);
          switch($err){
              case 'success':
                ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  compte créé avec succès
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <?php
                break;
                case 'already':
                  ?>
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    compte déjà existant
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  <?php
                  break;
          }
        }

      ?>

      <div class="row body-content container-fluid mt-1" role="main">
<!--image carousel-->
        <div id="carouselExampleIndicators" class="carousel slide col-md-8" data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/i1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/i2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="img/i3.jpg" class="d-block w-100" alt="...">
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
        </div>
<!--reservation-->
        <div class="col-md-4">
          <h2 style="color:#fff">reservation</h2>
<!--formulaire de reservation-->
          <form method="get">
            <div class="input-group mb-3">
              <input type="date" class="form-control" placeholder="date de debut">
              <input type="time" class="form-control" placeholder="heure de debut">
            </div>
            <div class="input-group mb-3">
              <input type="date" class="form-control" placeholder="date de fin">
              <input type="time" class="form-control" placeholder="heure de fin">
            </div>
            <select class="form-select mb-3">
              <option selected disabled>choisir un equipement</option>
              <option>voiture</option>
              <option value="">velo</option>
            </select>
            <div class="form-check m-3">
              <input type="checkbox" class="form-check-input" id="ckMon">
              <label for="ckMon" class="form-check-label" style="color:#fff">Demander un moniteur</label>
            </div>
          <select class="form-select mb-3" id="slMon">
            <option selected disabled>choisir un moniteur</option>
          </select>
          <button type="submit" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalConnexion"><i class="fas fa-sign-in-alt"></i></button>
        </form>
        </div>
      </div>
  </body>
</html>
