
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Conformités</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /* Style général */
        html,body,h1,h2,h3,h4 {
            font-family: "Lato", sans-serif;
            margin: 0;
            padding: 0;
        }
        /* Style pour le conteneur principal */
        .container {
            margin-top: 50px; /* Ajoute un espace en haut de la page */
            padding: 20px; /* Ajoute un espace autour du contenu */
        }
        /* Style pour le tableau */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #364b62;
            color: #fff;
        }
        /* Style pour les liens */
        a {
            text-decoration: none;
            color: inherit; /* Utilise la couleur par défaut du texte */
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
    <div class="w3-col s3">
      <a href="page_conformité_admin.php" class="w3-button w3-block">Conformité commande</a>
    </div>
    </div>
</div>

<!-- Contenu principal -->
<div class="container">

    <?php
    // Connexion à la base de données
    require __DIR__. "/model/php/env_settings.php";  

    // Connexion
    $conn = mysqli_connect($host, $user, $pwd, $dbname);

    // Vérifier la connexion
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Requête SQL pour récupérer les conformités
    $sql = "SELECT * FROM conformite";
    $result = mysqli_query($conn, $sql);

    // Affichage du tableau HTML
    echo "<table>
    <tr>
        <th>ID</th>
        <th>Note longueur lame</th>
        <th>Note matière lame</th>
        <th>Note type lame</th>
        <th>Note manche</th>
        <th>Note poids</th>
        <th>Commentaire</th>
        <th>Modification</th>
        <th>Suppression</th>
    </tr>";

    if (mysqli_num_rows($result) > 0) {
        // Afficher chaque ligne de résultat
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['eval_long_lame'] . "</td>";
            echo "<td>" . $row['eval_mat_lame'] . "</td>";
            echo "<td>" . $row['eval_type_lame'] . "</td>";
            echo "<td>" . $row['eval_manche'] . "</td>";
            echo "<td>" . $row['eval_poids'] . "</td>";
            echo "<td>" . $row['commentaire'] . "</td>";
            echo "<td><a href='fiche_technique_admin.php?id=" . $row['id'] . "'>Modifier</a></td>";
            echo "<td><a href='supprimer_évaluation_admin.php?id=" . $row['id'] . "' onclick='return confirm(\"Êtes-vous sûr de vouloir supprimer cette évaluation ?\");'>Supprimer</a></td>";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='9'>Aucun résultat trouvé</td></tr>";
    }

    echo "</table>";

    // Fermer la connexion à la base de données
    mysqli_close($conn);
    ?>
    
</div>

</body>
</html>
