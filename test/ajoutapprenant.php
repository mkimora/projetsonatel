<?php
include("index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Ajouter un apprenant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="wth=device-wth, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="index.css">

</head>
<body>
<div class="main">
        <div class="section">
         <div class="container tim-container">
            <div class="tim-title">
            </div> 
<div class="container1">
<center>
  <form action="" method="POST" >
  <div class="form-group">
      <label for="code">Code Promo:</label>
      <select name="code  ">
<option value="promo 1">DWA13</option>
<option value="promo 2">DAO14</option>
<option value="promo 3">RDM15</option>
</select>
    </div>
    <div class="form-group">
      <label for="promo">Promo:</label>
      <select name="promo">
      <?php
      $fichier=fopen("promo.txt","r");
      while($ligne=fgets($fichier))
      {
        $col=explode(";",$ligne);
          echo'<option value='.$col[0].'>'.$col[1].'</option>';
      }
      ?>

</select>
    </div>
    
    <div class="form-group">
      <label for="nom">Nom:</label>
      <input type="text"  placeholder="Entrer nom" name="nom">
    </div>
    <div class="form-group">
      <label for="prenom">Prénom:</label>
      <input type="text"  placeholder="Entrer prénom" name="prenom">
    </div>
    <div class="form-group">
      <label for="date">Date de naissance:</label>
      <input type="date"   placeholder="Entrer Date de naissance"  name="date"> 
    </div>  
    <div class="form-group">
      <label for="numero">Numéro:</label>
      <input type="text"  placeholder="Entrer numéro" name="numero">
    </div>
    <div class="form-group">
      <label for="mail">Email:</label>
      <input type="email"  placeholder="Entrer mail" name="mail">
    </div>
    <div class="form-group">
      <label for="statut">Statut:</label>
      <input type="text"  placeholder="Entrer statut" name="statut">
    </div>
    
<button type="submit" name="submit" class="btn btn-primary">Ajouter</button>
  </form>
  </center>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
</html>
<?php

if(isset($_POST["submit"]))
{
    $code=$_POST["code"];
    $promo=$_POST["promo"];
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $date=$_POST["date"];
    $numero=$_POST["numero"];
    $mail=$_POST["mail"];
    $statut=$_POST["statut"];

    if($fichier=fopen("ajoutapprenant.txt","a+")){
        fwrite($fichier,"\n".$code.";".$promo.";".$nom.";".$prenom.";".$date.";".$numero.";".$mail.";".$statut.";".$code);
        fclose($fichier);
    }
}
?>

<?php
echo ' <div class="container">
          
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Code</th>
      <th>Promo</th>
      <th>Nom</th>
      <th>Prénom</th>
      <th>Date de naissance</th>
      <th>Numéro de téléphone</th>
      <th>Email</th>
      <th>Statut</th>
    </tr>
  </thead>
  <tbody>';

  $fichier=fopen("ajoutapprenant.txt","a+");
  while($ligne=fgets($fichier))
  {
      $col=explode(";",$ligne);

    echo"<tr>
            <td>$col[0]</td>
            <td>$col[1]</td>
            <td>$col[2]</td>
            <td>$col[3]</td>
            <td>$col[4]</td>
            <td>$col[5]</td>
            <td>$col[6]</td>
            <td>$col[7]</td>
        </tr>";
  }
 fclose($fichier);
  echo "   </tbody></table>";

?>
