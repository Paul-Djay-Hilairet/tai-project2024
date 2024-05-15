<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fiche Technique du Produit</title>
    <link rel="stylesheet" href="css_fiche_technique.css"> <!-- Assurez-vous de créer et lier ce fichier CSS -->
</head>
<body>

<div class="container">
    <h1>Fiche Technique du Produit</h1>
    <div class="product-details">
            <?php

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "tai";

            $conn = mysqli_connect($servername, $username, $password, $database);

// Vérifier la connexion
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }


// Vérifiez si l'ID du produit est passé en paramètre GET
            if(isset($_GET['id_product'])) {
    // Récupérez l'ID du produit depuis le paramètre GET
                $id_product = $_GET['id_product'];

    
    // Connectez-vous à votre base de données et exécutez une requête pour récupérer les données du produit correspondant à l'ID
    // Assumez que vous avez déjà établi la connexion à la base de données et que vous avez $conn comme connexion active

    // Préparez la requête SQL
                $sql = "SELECT * FROM product WHERE id = ?";
    
    // Préparez l'instruction SQL
                $stmt = $conn->prepare($sql);

    // Associez les paramètres et exécutez la requête
                $stmt->bind_param("i", $id_product);
                $stmt->execute();
    
    // Récupérez le résultat de la requête
                $result = $stmt->get_result();
    
    // Vérifiez s'il y a des données retournées
                if ($result->num_rows > 0) {
        // Parcourez les données et affichez-les
                    while($row = $result->fetch_assoc()) {
            // Affichez les données du produit
                        echo "<p><strong>Nom produit:<strong> " . $row['name'] . "</p>";
                        echo "<p><strong>Prix:<strong> " . $row['prix'] . "</p>";
                        echo "<p><strong>Fournisseur: <strong>" . $row['fournisseur'] . "</p>";
                        echo "<p><strong>Longueur de lame: <strong>" . $row['Longueur_lame'] . " cm</p>";
                        echo "<p><strong>Matiere lame: <strong>" . $row['Materiau_lame'] . " </p>";
                        echo "<p><strong>Type de lame:<strong> " . $row['Type_lame'] . " </p>";
                        echo "<p><strong>Manche de lame: <strong>" . $row['Manche'] . " </p>";
                        echo "<p><strong>Poids de lame: <strong>" . $row['Poids'] . " grammes</p>";
                        echo "<p><strong>Origine de lame: <strong>" . $row['Origine'] . "</p>";

            // Continuez avec d'autres champs de la table "product"
                    }
                } else {
                    echo "Aucun produit trouvé.";
                }
    
    // Fermez la requête et la connexion
                $stmt->close();
                $conn->close();
            } else {
                echo "ID produit non spécifié.";
            }
            ?>
    </div>
    <div class="modal-footer">
    <a class="button" href="acceuildemo.php">Retour à l'accueil</a>
</div>
</body>
</html>
