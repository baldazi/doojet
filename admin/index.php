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
    <link rel="stylesheet" href="../css/master.css">
    <script type="text/javascript" src="../js/main.js"></script>
  </head>
  <body>
    <form action="connexion_admin.php" method="post" class="bg-dark p-3 opacity-75">
      <p class="h1 text-muted text-center">connexion en tant que personnel</p>
      <div class="form-floating mb-2">
        <input type="text" class="form-control" id="adminID" placeholder="email" name="nss">
        <label for="adminID">Numero SS</label>
      </div>
      <div class="form-floating mb-2">
        <input type="date" id="adminKEY" class="form-control" placeholder="mot de passe" name="dn">
        <label for="adminKEY">Date d'embauche'</label>
      </div>
      <button type="submit" class="btn btn-primary">connexion</button>
    </form>
  </body>
</html>
