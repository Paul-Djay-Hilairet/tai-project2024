
<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css_accueil_demo.css">
<style>
html,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
.mySlides {display:none}
.w3-tag, .fa {cursor:pointer}
.w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
</style>
</head>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s3">
      <a href="acceuildemo.php" class="w3-button w3-block">Commandes en cours</a>
    </div>
    <div class="w3-col s3">
      <a href="historique_commande.php" class="w3-button w3-block">Historique commandes</a>
    </div>
    <div class="w3-col s3">
      <a href="Catalogue_fournisseurs.php" class="w3-button w3-block">Catalogue fournisseurs </a>
    </div>
    <div class="w3-col s3">
      <a href="nouvelle_commande.php" class="w3-button w3-block">Nouvelle commande</a>
    </div>
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>Historique commandes</b></h1>
    
  </div>


  <!-- Slideshowe -->
  <?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$database = "tai";

// Connexion
$conn = mysqli_connect($servername, $username, $password, $database);

// Vérifier la connexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Traitement du formulaire de suppression de commande
if(isset($_POST['delete_command'])) {
    $command_id = $_POST['command_id'];
    $delete_sql = "DELETE FROM commande WHERE id = $command_id";
    mysqli_query($conn, $delete_sql);
}

// Requête SQL pour récupérer les fournisseurs
$sql = "SELECT commande.*, user.name AS user_name, fournisseur.name AS fournisseur_name 
        FROM commande 
        INNER JOIN user ON commande.id_user = user.id 
        INNER JOIN fournisseur ON commande.id_fournisseur = fournisseur.id
        WHERE commande.Etat_livraison = 'livre'";
$result = mysqli_query($conn, $sql);

// Affichage du tableau HTML
echo '<div class="container">
        
        <div class="commands">
            <table>
                <tr>
                    <th>Utilisateur</th>
                    <th>Référence</th>
                    <th>Fournisseur</th>
                    <th>Date de commande</th>
                    <th>État livraison commande</th>
                </tr>';

// Affichage des données dans le tableau
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['user_name'] . "</td>";
        echo "<td>" . $row['reference'] . "</td>";
        echo "<td>" . $row['fournisseur_name'] . "</td>";
        echo "<td>" . $row['Date_commande'] . "</td>";
        echo "<td>" . $row['Etat_livraison'] . "</td>";
        echo '<td>
                <form method="post" action="">
                    <input type="hidden" name="command_id" value="' . $row['id'] . '">
                    <input type="submit" name="delete_command" value="Supprimer commande">
                </form>
                
                <a href="fiche_technique.php?id_product=' . $row['id_product'] . '" class="details-btn">Fiche technique</a>
              </td>';
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>Aucune commande en cours</td></tr>";
}

echo "</table></div></div>";

// Fermer la connexion à la base de données
mysqli_close($conn);
?>

<!-- Fenêtre modale -->

  
  

  </div>


</body>
</html>
