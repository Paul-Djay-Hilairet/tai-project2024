
<?php
// Connexion à la base de données
require __DIR__. "/model/php/env_settings.php";  


// Connexion
$conn = mysqli_connect($host, $user, $pwd, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id_fournisseur = $_POST['id_fournisseur'];
  $id_product = $_POST['id_product'];
  $id_user = $_POST['id_user'];
  $reference = $_POST['reference'];
  $date_commande = date("d/m/Y");

  $sql = "INSERT INTO commande (id_fournisseur, id_product, id_user, reference, Date_commande, Etat_livraison)
  VALUES ('$id_fournisseur', '$id_product', '$id_user', '$reference', '$date_commande', 'En cours')";

  if ($conn->query($sql) === TRUE) {
    echo "Nouvelle commande créée avec succès";
  } else {
    echo "Erreur: " . $sql . "<br>" . $conn->error;
  }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Nouvelle Commande</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
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
      <a href="page_accueil_controleur.php" class="w3-button w3-block">Commandes en cours</a>
    </div>
    <div class="w3-col s3">
      <a href="page_historique_commande_controleur.php" class="w3-button w3-block">Historique commandes</a>
    </div>
    <div class="w3-col s3">
      <a href="page_catalogue_fournisseur_controleur.php" class="w3-button w3-block">Catalogue fournisseurs</a>
    </div>
    <div class="w3-col s3">
      <a href="page_conformité_controleur.php" class="w3-button w3-block">Conformité commande</a>
    </div>
  </div>
</div>

<!-- Formulaire de commande -->
<div class="w3-center" style="margin-top:80px">
<div class="w3-col s2">
        <a href="index.php" class="w3-button w3-block w3-right">Déconnexion</a>
    </div>
  <h2 class="w3-panel">  Nouvelle Évaluation Conformité </h2>
  <form action="page_nouvelle_commande_commercial.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
    <h2 class="w3-center">Formulaire de Conformité</h2>

    <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
      <div class="w3-rest">
        <select class="w3-select w3-border" name="id_user">
          <option value="" disabled selected>Choisissez un utilisateur</option>
          <?php
          $result = $conn->query("SELECT id, name FROM user");
          while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
          }
          ?>
        </select>
      </div>
    </div>

    <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-truck"></i></div>
      <div class="w3-rest">
        <select class="w3-select w3-border" name="id_fournisseur">
          <option value="" disabled selected>Choisissez un fournisseur</option>
          <?php
          $result = $conn->query("SELECT id, name FROM fournisseur");
          while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
          }
          ?>
        </select>
      </div>
    </div>

    <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-cube"></i></div>
      <div class="w3-rest">
        <select class="w3-select w3-border" name="id_product">
          <option value="" disabled selected>Choisissez un produit</option>
          <?php
          $result = $conn->query("SELECT id, name FROM product");
          while ($row = $result->fetch_assoc()) {
            echo "<option value='" . $row['id'] . "'>" . $row['name'] . "</option>";
          }
          ?>
        </select>
      </div>
    </div>

    <div class="w3-row w3-section">
      <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-file"></i></div>
      <div class="w3-rest">
        <input class="w3-input w3-border" name="reference" type="text" placeholder="Référence de la commande">
      </div>
    </div>

    <button class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">Valider</button>
  </form>
</div>

</body>
</html>

<?php
$conn->close();
?>
