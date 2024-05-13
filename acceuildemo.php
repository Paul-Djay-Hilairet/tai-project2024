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
      <a href="#" class="w3-button w3-block">Commande en cours</a>
    </div>
    <div class="w3-col s3">
      <a href="#plans" class="w3-button w3-block">Historique commandes</a>
    </div>
    <div class="w3-col s3">
      <a href="Catalogue_fournisseurs.php" class="w3-button w3-block">Catalogue fournisseurs </a>
    </div>
    <div class="w3-col s3">
      <a href="#contact" class="w3-button w3-block">Nouvelle commande</a>
    </div>
  </div>
</div>

<!-- Content -->
<div class="w3-content" style="max-width:1100px;margin-top:80px;margin-bottom:80px">

  <div class="w3-panel">
    <h1><b>Commandes en cours</b></h1>
    
  </div>

  <!-- Slideshow -->
  <div class="container">
    <h1>Commandes en cours</h1>
    <div class="commands">
        <div class="command">
            <div class="command-details">
                <p class="command-number">Référence commande: XXXFFP6354CD</p>
                <p>Fournisseur: Mokuzai</p>
                <p>Date de commande: 16/04/2024</p>
                <p>État livraison commande: <span class="status received">Reçue</span></p>
            </div>
            <div class="buttons-container">
                <button class="button archive">Archiver</button>
                <button class="button delete">Supprimer</button>
                <button class="button details-btn">Fiche technique détaillée</button>
            </div>
        </div>
        <!-- Ajoutez autant de commandes que nécessaire -->
    </div>
</div>

<!-- Fenêtre modale -->
<div class="modal-container" id="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h1>Fiche technique détaillée</h1>
            <button class="close-btn" id="closeBtn">&times;</button>
        </div>
        <div class="modal-body">
    <div class="info-panel">
        <p>Numéro de fiche: 001</p>
        <p>Nom du contrôleur: John Doe</p>
        <p>Référence commande: XXXFFP6354CD</p>
        <p>Date de commande: 16/04/2024</p>
        <p>Fournisseur: Mokuzai</p>
        <p>Nombre de critères validés: 10</p>
    </div>
    <div class="table-panel">
        <table class="table">
            <thead>
                <tr>
                    <th>Critères techniques</th>
                    <th>Évaluation</th>
                    <th>Commentaires</th>
                </tr>
            </thead>
            <tbody>
                <!-- Ajoutez les lignes du tableau ici -->
                <tr>
                    <td>Spécification 1</td>
                    <td>★★★★☆</td>
                    <td>Commentaire 1</td>
                </tr>
                <tr>
                    <td>Spécification 2</td>
                    <td>★★★☆☆</td>
                    <td>Commentaire 2</td>
                </tr>
                <!-- Ajoutez autant de lignes que nécessaire -->
            </tbody>
        </table>
    </div>

        <div class="modal-footer">
            <button class="button return-btn" id="returnBtn">Retour</button>
        </div>
    </div>
</div>
  
  

  </div>
  
 
  <!-- Grid -->
  <div class="w3-row-padding" id="plans">
    <div class="w3-center w3-padding-64">
      <h3>Historique commandes</h3>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16"><b>10GB</b> Storage</li>
        <li class="w3-padding-16"><b>10</b> Emails</li>
        <li class="w3-padding-16"><b>10</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 10</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Pro</li>
        <li class="w3-padding-16"><b>25GB</b> Storage</li>
        <li class="w3-padding-16"><b>25</b> Emails</li>
        <li class="w3-padding-16"><b>25</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 25</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>

    <div class="w3-third w3-margin-bottom">
      <ul class="w3-ul w3-border w3-center w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16"><b>50GB</b> Storage</li>
        <li class="w3-padding-16"><b>50</b> Emails</li>
        <li class="w3-padding-16"><b>50</b> Domains</li>
        <li class="w3-padding-16"><b>Endless</b> Support</li>
        <li class="w3-padding-16">
          <h2 class="w3-wide">$ 50</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-green w3-padding-large">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>

  
  <!-- Contact -->
  <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact Us</span>
  </div>

  <form class="w3-container" action="/action_page.php" target="_blank">
    <div class="w3-section">
      <label>Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" required>
    </div>
    <div class="w3-section">
      <label>Email</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email" required>
    </div>
    <div class="w3-section">
      <label>Subject</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Subject" required>
    </div>
    <div class="w3-section">
      <label>Message</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" required>
    </div>
    <button type="submit" class="w3-button w3-block w3-black">Send</button>
  </form>

</div>

<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  <h4>Footer</h4>
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>


<script>

// Fonction pour ouvrir la fenêtre modale
function openModal() {
    modal.style.display = "block";
}

// Fonction pour fermer la fenêtre modale
function closeModal() {
    modal.style.display = "none";
}

// Fonction pour ajouter ou soustraire à l'index des diapositives et afficher la diapositive correspondante
function plusDivs(n) {
    showDivs(slideIndex += n);
}

// Écoutez les clics sur le bouton de fermeture et le bouton de retour
closeBtn.addEventListener("click", closeModal);
returnBtn.addEventListener("click", closeModal);

// Écoutez les clics sur les boutons "Fiche technique détaillée"
const detailsBtns = document.querySelectorAll(".details-btn");
detailsBtns.forEach(btn => {
    btn.addEventListener("click", openModal);
});

// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}

</script>


</body>
</html>
