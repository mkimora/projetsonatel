<?php
include("index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Exclusion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
<div class="main">
        <div class="section">
         <div class="container tim-container">
            <div class="tim-title">
            
            </div> 
                    </div>
<div class="main">
        <div class="section">
         <div class="container tim-container">
            <div class="tim-title">
                <h2>Exclusion</h2>
            </div> 
            <div class="container">
 
  <form action="" method="post">
    <div class="form-group">
      <label for="name">Nom:</label>
      <input type="text" class="form-control" placeholder="Entrer Nom" name="name" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Veuillez remplir ce champ</div>
      </div>
    
     <div class="form-group">
      <label for="date">Date de naissance:</label>
      <input type="date" class="form-control" placeholder="Entrer Date de naissance" name="date" min="1989-11-20" value="1989-11-20" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Veuillez remplir ce champ</div>
      </div>

      <div class="form-group">
      <label for="number">Numéro de téléphone:</label>
      <input type="number" class="form-control" placeholder="Entrer Numéro de téléphone" name="number" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Veuillez remplir ce champ.</div>
    </div>

    <div class="form-group">
      <label for="mail">Adresse Email:</label>
      <input type="text" class="form-control"  placeholder="Entrer Email" name="mail" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Veuillez remplir ce champ</div>
    </div>

    <div class="form-group">
      <label for="statut">Statut</label>
      <input type="text" class="form-control"  placeholder="Entrer Statut" name="statut" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Veuillez remplir ce champ</div>
    </div>
    <select name="code  ">
<option value="promo 1">DWA13</option>
<option value="promo 2">DAO14</option>
<option value="promo 3">RDM15</option>
</select>
    <button type="submit" class="btn btn-primary">Exclure</button>
  </form>
</div>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</body>
</html>           


