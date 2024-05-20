
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
        
        .container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
}

.commands table {
    width: 125%;
    border-collapse: collapse;
}

.commands th, .commands td {
    padding: 12px;
    text-align: left;
}

.commands th {
    background-color: #364b62;
    color: #fff;
}

.commands tr:nth-child(even) {
    background-color: #f2f2f2;
}

.commands tr:hover {
    background-color: #ddd;
}

.actions {
    display: flex;
    justify-content: space-between;
}

.delete-btn, .details-btn {
    padding: 5px 5px;
    border: none;
    border-radius: 40px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.delete-btn {
    background-color: #dc3545;
    color: #fff;
}

.delete-btn:hover {
    background-color: #c82333;
}

.details-btn {
    padding: 10px 10px;
    background-color: #007bff;
    color: #fff;
}

.details-btn:hover {
    background-color: #0056b3;
}

.delete-btn {
    padding: 5px 5px;
    border: none;
    border-radius: 40px;
    cursor: pointer;
    transition: background-color 0.3s;
    background-color: transparent;
}

.delete-btn::before {
    content: "\f1f8"; /* Code unicode de l'icône de poubelle */
    font-family: "Font Awesome"; /* Utilisation de Font Awesome pour les icônes */
    font-size: 20px;
    color: #dc3545;
}

.delete-btn:hover {
    background-color: #f8d7da;
}

    </style>

</head>
<body>

<!-- Links (sit on top) -->
    <div class="w3-top">
        <div class="w3-row w3-large w3-light-grey">
    <div class="w3-col s3">
      <a href="page_accueil_admin.php" class="w3-button w3-block">Commandes en cours</a>
    </div>
    <div class="w3-col s3">
      <a href="page_historique_commande_admin.php" class="w3-button w3-block">Historique commandes</a>
    </div>
    <div class="w3-col s3">
      <a href="page_catalogue_admin.php" class="w3-button w3-block">Catalogue fournisseurs </a>
    </div>
    <div class="w3-col s3">
      <a href="page_nouvelle_commande_admin.php" class="w3-button w3-block">Nouvelle commande</a>
    </div>
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">
<div class="w3-col s2">
            <a href="index.php" class="w3-button w3-block w3-right">Déconnexion</a>
</div>
  <div class="w3-panel">
    <h1><b>Bienvenue Administrateur</b></h1>
    <h1><b>Commandes en cours</b></h1>
    
</div>


  <!-- Slideshowe -->
<?php
// Connexion à la base de données

require __DIR__. "/model/php/env_settings.php";


// Connexion
$conn = mysqli_connect($host, $user, $pwd, $dbname);

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
FROM commande INNER JOIN user ON commande.id_user = user.id INNER JOIN fournisseur ON commande.id_fournisseur = fournisseur.id";
$result = mysqli_query($conn, $sql);
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
                <form method="post" action="supprimer_commande_admin.php">
                    <input type="hidden" name="command_id" value="' . $row['id'] . '">
                    
                </form>
                
                <a href="fiche_technique_admin.php?id_product=' . $row['id_product'] . '" class="details-btn">Fiche technique</a>
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



  
  

  </div>


</body>
</html>
