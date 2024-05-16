supprimer_commande

<?php
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

// Vérifier si l'ID est passé en paramètre
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    
    // Requête SQL pour supprimer le fournisseur
    $sql = "DELETE FROM commande WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        echo "Commande e avec succès.";
    } else {
        echo "Erreur: " . mysqli_error($conn);
    }
} else {
    echo "ID de la commande non spécifié.";
}

// Fermer la connexion à la base de données
mysqli_close($conn);

// Rediriger vers la page principale après la suppression
header("Location: acceuildemo.php");
exit();
?>