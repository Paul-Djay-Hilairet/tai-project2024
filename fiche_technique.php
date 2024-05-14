<!DOCTYPE html>
<html lang="fr">



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
            echo "<p>Nom produit: " . $row['name'] . "</h2>";
            echo "<p>Prix: " . $row['prix'] . "</p>";
            echo "<p>Fournisseur: " . $row['fournisseur'] . "</p>";
            echo "<p>Longueur de lame: " . $row['Longueur_lame'] . " cm</p>";
            echo "<p>Matiere lame: " . $row['Materiau_lame'] . " </p>";
            echo "<p>Type de lame: " . $row['Type_lame'] . " </p>";
            echo "<p>Manche de lame: " . $row['Manche'] . " </p>";
            echo "<p>Poids de lame: " . $row['Poids'] . " grammes</p>";
            echo "<p>Origine de lame: " . $row['Origine'] . "</p>";

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

</body>
</html>
