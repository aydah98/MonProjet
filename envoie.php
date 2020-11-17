<?php
if(isset($_POST['valider_le_document']))
{
$target_file =  basename($_FILES["fichierXML"]["name"]);
$uploadOk = 1;
$xmlFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if ($uploadOk == 0) {
  echo "Le Fichier n'a pas été uploader.";
} else {
  if (move_uploaded_file($_FILES["fichierXML"]["name"], $target_file)) {
    echo "le fichier". htmlspecialchars( basename( $_FILES["fichierXML"]["name"])). " a ete uploader.";
    $xml=simplexml_load_file($_FILES["fichierXML"]["name"]) or die("erreur");
 } else {
    echo "Oups!! il y a eut une erreur .";
  }
}
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resteau</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,300|Open+Sans:400,600,700,300" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>gestionnaire</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>

<header  style="min-height: 200px;">
    <div class="bg-color">
      <!--nav-->
      <nav class="nav navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
              <a href="index.php" class="navbar-brand">O'Resto</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
                 <li class="active"><a href="index.php">Accueil</a></li>
                 <li><a href="formulaire.php">Ajouter un Resto</a></li>
               <li> <a href="nosResto.php">Nos Resto</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>

<div class="container">
<h2> Faire un Envoie</h2>
<form method="POST" action="envoie.php" enctype="multipart/form-data">
<div class="form-group">
<label for="fichierXML"></label>
<input type="file" name="fichierXML" placeholder="selectionner le document a valide" class="form-control">
<button type="submit" name="valider_le_document"> Enregistrer</button>
</form>
</body>
</html>
