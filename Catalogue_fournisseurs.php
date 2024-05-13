php
<!DOCTYPE html>
<html>
<head>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="css page commercial">
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
      <a href="acceuildemo.php" class="w3-button w3-block">Commande en cours</a>
    </div>
    <div class="w3-col s3">
      <a href="#plans" class="w3-button w3-block">Historique commandes</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block">Catalogue fournisseurs </a>
    </div>
    <div class="w3-col s3">
      <a href="#contact" class="w3-button w3-block">Nouvelle commande</a>
    </div>
  </div>
</div>

<!-- Grid -->
  
<div class="w3-row-padding" id="about">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Catalogue fournisseurs</span>
    </div>




<table class="fournisseur-table">
    <thead>
        <tr>
            <th>#</th>
            <th>Fournisseur</th>
            <th>Pays</th>
            <th>Contact</th>
            <th>Actions</th> <!-- Nouvelle colonne pour les actions -->
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Supplier A</td>
            <td>Country A</td>
            <td>Contact A</td>
            <td>
                <a href="#" class="action-icon edit-icon">✏️</a> <!-- Icône pour modifier -->
                <a href="#" class="action-icon delete-icon">🗑️</a> <!-- Icône pour supprimer -->
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Supplier B</td>
            <td>Country B</td>
            <td>Contact B</td>
            <td>
                <a href="#" class="action-icon edit-icon">✏️</a>
                <a href="#" class="action-icon delete-icon">🗑️</a>
            </td>
        </tr>
        <!-- Ajoutez plus de lignes ici au besoin -->
    </tbody>
</table>

<div class="w3-bar">
    <a href="#" class="w3-bar-item w3-button tablink">Ajouter un fournisseur</a>
</div>
   
  </div>
  
  </body>
</html>