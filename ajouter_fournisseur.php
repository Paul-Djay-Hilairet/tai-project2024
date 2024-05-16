<!DOCTYPE html>
<html>
<head>
    <title>Ajouter Fournisseur</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
        /* Style pour le formulaire */
        form {
            width: 100%;
            max-width: 600px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        input[type=text], input[type=submit] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
        }
        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type=submit]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
    <div class="w3-row w3-large w3-light-grey">
        <div class="w3-col s3">
            <a href="index.php" class="w3-button w3-block">Commande en cours</a>
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

<!-- Contenu principal -->
<div class="container">
    <h2>Ajouter un nouveau fournisseur</h2>
    <form action="ajouter_fournisseur.php" method="post">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required>
        
        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" required>
        
        <label for="adresse">Adresse:</label>
        <input type="text" id="adresse" name="adresse" required>
        
        <input type="submit" value="Ajouter Fournisseur">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Connexion à la base de données
        $host = "localhost";
        $dbname = "tai_app_2023_2024_ant";
        $user = "tai_app_2023_2024_ant";
        $pwd = "Y5I07L0SE2";

// Connexion
        $conn = mysqli_connect($host, $user, $pwd, $dbname);
        
        // Vérifier la connexion
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        
        // Préparer et exécuter la requête SQL
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $contact = mysqli_real_escape_string($conn, $_POST['contact']);
        $adresse = mysqli_real_escape_string($conn, $_POST['adresse']);
        
        $sql = "INSERT INTO fournisseur (name, contact, Adresse) VALUES ('$name', '$contact', '$adresse')";
        
        if (mysqli_query($conn, $sql)) {
            echo "Nouveau fournisseur ajouté avec succès";
        } else {
            echo "Erreur: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        // Fermer la connexion à la base de données
        mysqli_close($conn);
    }
    ?>
</div>

</body>
</html>
