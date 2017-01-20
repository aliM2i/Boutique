<?php
session_start();
$pdo = new PDO("mysql:host=localhost;dbname=boutique","root", "");
//$sql =  $pdo->query ("SELECT film.*, genre.intitule as ge,pays.nom, film.id as identifiant "
//     . "FROM film JOIN genre ON film.genre_id=genre.id JOIN pays ON film.pays_id=pays.id ")->fetchAll();
$genres = $pdo->query("SELECT * FROM genre")->fetchAll();
$paysx = $pdo->query("SELECT * FROM pays")->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <script src="ajax/chglist.js"></script>
</head>
<body>
    
    

    <!-- Navigation -->
    <?php include '_menu.php'; ?>


<div class="container">
  <h2>Rechercher un ou plusieurs films</h2>
  <form  class="form-horizontal" id="filtre">
   
      <div class="form-group">
      <label class="control-label col-sm-2" >Titre:</label>
      <div class="col-sm-10">
      <input type="text" name="titre" id="titre1" >
      </div>
    </div>
   
      <div class="form-group">
      <label class="control-label col-sm-2" >Annee</label>
      <div class="col-sm-10">          
        <input type="number" name="annee" id="annee1" >
      </div>
    </div>
      
    <div class="form-group">        
    <label class="control-label col-sm-2" >Genre</label>
        <div class="col-sm-10"> 
        </select><select name="genre"  id="genre1" >   
        <?php
        foreach ($genres as $genre) {
        ?>
            <option
                value="<?php echo $genre["id"]; ?>"><?php echo $genre["intitule"]; ?> </option>
            <?php } 
        ?>
        </select>
        </div>   
    </div>
      
    <div class="form-group">
      <label class="control-label col-sm-2" >Pays</label>
      <div class="col-sm-10">
          <select name="pays">
          <?php
        foreach ($paysx as $pays) {
        ?>
            <option
                value="<?php echo $pays["id"]; ?>"><?php echo $pays["nom"]; ?> </option>
            <?php } 
        ?>
            </select>
      </div>
    </div>     
      
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button id="Chglist" class="btn btn-success">Rechercher</button>
      </div>
    </div>
  </form>
  
  <h2>Liste des films</h2>    
  <p>Exercice utilisation SQL</p>                  
  <table class="table table-striped" div"resultat">
    <thead>
    <a href="ajouterFilm1.php" type="button" class="btn btn-success">Ajouter film</a>
      <tr>
        <th>Id</th>
        <th>Intitulé</th>
         <th>Nom</th>
        <th>Genre</th>
      </tr>
    </thead>

    <tbody>
     
       
    </tbody>

  </table>
</div>
 <?php include '_footer.php'; ?>
</body>
</html>