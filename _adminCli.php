<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=boutique","root", "");
//$sql =  $pdo->query ("SELECT film.*, genre.intitule as ge,pays.nom, film.id as identifiant "
//     . "FROM film JOIN genre ON film.genre_id=genre.id JOIN pays ON film.pays_id=pays.id ")->fetchAll();
$client = $pdo->query("SELECT * FROM categorie")->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <!--<script src="ajax/chglist.js"></script>-->
</head>
<body>   

    <!-- Navigation -->
    <?php include '_menu.php'; ?>


<div class="container">
  <h2>Ajout/suppression/mlodification de clients</h2>
  <form  class="form-horizontal" id="ajoutCli" action="_adminCliModif.php" method="POST">   
       
        <!--  Champ d'ajout de catégorie -->  
        <div class="form-group">
        <label class="control-label col-sm-2" >Nom:</label>
        <div class="col-sm-10">
        <input type="text" name="nom" id="cat1" >
        </div>
        
        <div class="form-group">
        <label class="control-label col-sm-2" >Prénom:</label>
        <div class="col-sm-10">
        <input type="text" name="prenom" id="cat1" >
        </div>
        
        <div class="form-group">
        <label class="control-label col-sm-2" >Email</label>
        <div class="col-sm-10">
        <input type="text" name="email" id="cat1" >
        </div>
        
        <div class="form-group">
        <label class="control-label col-sm-2" >Téléphone</label>
        <div class="col-sm-10">
        <input type="text" name="tel" id="cat1" >
        </div>
          <div class="form-group">
        <label class="control-label col-sm-2" >Num & Voie</label>
        <div class="col-sm-10">
        <input type="text" name="num_voie" id="cat1" >
        </div>
          <div class="form-group">
        <label class="control-label col-sm-2" >CP</label>
        <div class="col-sm-10">
        <input type="text" name="cp" id="cat1" >
        </div>
          <div class="form-group">
        <label class="control-label col-sm-2" >Ville</label>
        <div class="col-sm-10">
        <input type="text" name="ville" id="cat1" >
        </div>
          <div class="form-group">
        <label class="control-label col-sm-2" >Pays</label>
        <div class="col-sm-10">
        <input type="text" name="pays" id="cat1" >
        </div>
   
     <!--  Bouton d'ajout de catégorie --> 
        <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">          
           <button type="submit" class="btn btn-success">Ajouter la catégorie</button>
        </div>
    </div>
  </form>
  
       <!--  Affichage des catégories catégorie --> 
  <h2>Liste des Catégories</h2>    
  <p></p>                  
  <table class="table table-striped"  div="resultat">
    <thead>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
       <!-- <button id="ChargCat" class="btn btn-success">Rechercher</button>-->
      </div>
    </div>
      <tr>
        <th>Id</th>
        <th>Catégorie</th>
        <th>Supprimer?</th>
      </tr>
       <?php
        foreach ($categorie as $cat) {
        ?>
        <tr>
            <th>     
            <?php echo $cat["id"]."          "; ?> <?php echo $cat["nom"];?> '<button type="button" class="btn btn-danger">Supprimer</button>;'
            <?php } 
            ?>
            <th>  
            
    </thead>
    <tbody>
     
       
    </tbody>

  </table>
</div>
 <?php include '_footer.php'; ?>
</body>
</html>