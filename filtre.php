<?php
$pdo = new PDO("mysql:host=localhost;dbname=boutique", "root", "");

$sql = "SELECT p.*, c.* "
        . "FROM produit p "
        . "JOIN categorie c ON p.id_cat=c.id ";

$cpt = 0;

if (isset($_GET['nom']) && !empty($_GET['nom'])) {
    $nom = $_GET['nom'];
    $sql .= "WHERE p.nom LIKE '%$nom%'";
    $cpt = 1;
}

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    if ($cpt = 1) {
        $sql .= " AND";
        $sql .= " c.id='$id'";
    } else {
        $sql .= " WHERE";
        $sql .= " c.id='$id'";
        $cpt = 1;
    }
}

// Execute request SQL
$prod = $pdo->query($sql)->fetchAll();
s
    ?>

    <tr>
        <td><?php echo $p["id"]; ?></td>
        <td><?php echo $p["nom"]; ?></td>
        <td><?php echo $p["intitule"]; ?></td>
        <td><?php echo $p["description"]; ?></td>
        <td><?php echo $p["prix"]; ?></td>       
        <td><a href="ajoutePanier.php?id=<?php echo $p["id"];?>">Ajouter au panier</a></td>
    </tr>

    <?php
}
?>

