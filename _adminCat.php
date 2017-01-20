<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=boutique","root", "");
//$sql =  $pdo->query ("SELECT film.*, genre.intitule as ge,pays.nom, film.id as identifiant "
//     . "FROM film JOIN genre ON film.genre_id=genre.id JOIN pays ON film.pays_id=pays.id ")->fetchAll();
$categorie = $pdo->query("SELECT * FROM categorie")->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--<script src="ajax/chglist.js"></script>-->
</head>
<body>   

    <!-- Navigation -->
    <?php include '_menu.php'; ?>


<div class="container">
  <h2>Ajout/suppression de catégorie</h2>
  <form  class="form-horizontal" id="ajoutCat" action="_adminCatAjout.php" method="POST">   
       
        <!--  Champ d'ajout de catégorie -->  
        <div class="form-group">
        <label class="control-label col-sm-2" >Catégorie:</label>
        <div class="col-sm-10">
        <input type="text" name="nom" id="cat1" >
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
                <?php echo $cat["id"];?>  
           
            </th>
            <th>  
            
                <?php echo $cat["nom"];?>
            </th> 
                
            <th>                   	
                <a href="_adminCatSup.php?id=<?php echo $cat["id"];?>">Supprimer</a>
            <th> 
             <?php } 
            ?>
    </thead>
    <tbody>
     
       
    </tbody>

  </table>
</div>
 <?php include '_footer.php'; ?>
</body>
</html>