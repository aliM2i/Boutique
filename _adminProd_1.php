<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=boutique","root", "");
//$sql =  $pdo->query ("SELECT film.*, genre.intitule as ge,pays.nom, film.id as identifiant "
//     . "FROM film JOIN genre ON film.genre_id=genre.id JOIN pays ON film.pays_id=pays.id ")->fetchAll();
$prod = $pdo->query("SELECT p.*,c.nom nom_cat FROM produit as p JOIN categorie as c ON p.id_cat=c.id")->fetchAll();
$cat = $pdo->query("SELECT * FROM  categorie")->fetchAll();
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
 <style>
     input
      {
        border: 1px solid #ff0000;
        margin: 10px;
        padding: 10px;
      }
	  
      form-control
      {
        border: 1px solid #00ff00;
        margin: 2px;
        padding: 2px;
        height: 70px;
        align-content:  line-height: 1.42857;
      } 
     
 </style>
</head>
<body>   

    <!-- Navigation -->
    <?php include '_menu.php'; ?>


<div class="container">
  <h2>Ajout/suppression/mlodification de produits</h2>
   
  
  <form  class="form-horizontal" id="ajoutCli" action="_adminCliModif.php" method="POST">   
       
         
         <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
        <button id="chargeProduit" class="btn btn-success">Rechercher un produit</button>
         </div>
        </div>
        
        <div class="row">
        <div class="form-group">
        <label class="control-label col-sm-2" >Id:</label>
        <div class="col-sm-10">
        <input type="text" name="Id"  class="form-control" id="id1" >
        </div>
        
                
        <div class="form-group">
        <label class="control-label col-sm-2" >Nom</label>
        <div class="col-sm-10">
        <input type="text" name="nom" class="form-control" id="nom1" >
        </div>
        
            <div class="form-group">   
                
        <label class="control-label col-sm-2" >Catégorie</label>
            <div class="col-sm-10"> 
            </select><select name="cat"  id="cat1" >   
            <?php
            foreach ($cat as $c) {
            ?>
                <option class="form-control"
                    value="<?php echo $c["id"]; ?>"><?php echo $c["nom"]; ?> </option>
                <?php } 
            ?>
            </select>
            </div>   
        </div>
         
        <div class="form-group">
        <label class="control-label col-sm-2" >Description</label>
        <div class="col-sm-10">
        <input type="text" name="description" class="form-control" id="des1" >
        </div>
        
          <div class="form-group">
        <label class="control-label col-sm-2" >Prix</label>
        <div class="col-sm-10">
        <input type="text" name="prix" class="form-control" id="prix1" >
        </div>
          
           <!--  Bouton d'ajout de catégorie --> 
        
    </div>
  </form>
  
       <!--  Affichage des catégories catégorie --> 
  <h2>Liste des Produits</h2>    
  <p></p>                  
  <table class="table table-striped"  div="resultat">
    <thead>
        
          <a href="_adminProdAjout.php" type="button" class="btn btn-success">Ajouter Produit</a>
  
    </div>
      <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Catégorie</th>
        <th>Description</th>
        <th>Prix</th>
      </tr>
       <?php
        foreach ($prod as $p) {
        ?>
        <tr>
            <th>     
                <?php echo $p["id"];?>             
            </th>
            <th>              
                <?php echo $p["nom"];?>
            </th> 
            <th>              
                <?php echo $p["nom"];?>
            </th> 
            <th>              
                <?php echo $p["description"];?>
            </th> 
            <th>              
                <?php echo $p["prix"];?>
            </th> 
                
            <th>                   	
                <a href="_adminProdSup.php?id=<?php echo $c["id"];?>">Supprimer</a>
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