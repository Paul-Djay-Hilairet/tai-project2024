page_commercial_html
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Nouvelle Commande</title>
        
        <link rel="stylesheet" type="text/css" href="design_page_commercial.css">
    </head>
    <body>
        <div class="container">
            <h1>Nouvelle commande</h1>
            <div class="panel">
            <div class="panel-left">
            <h2>Fournisseurs</h2>
            <form action="submit.php" method="post">
            <label for="supplier">Name:</label>
            <select name="supplier" id="supplier">
            <option value="Mokuzai">Mokuzai</option>
            <option value="Kiwadushi">Kiwadushi</option>
        </select>
        <button type="submit" name="apply">Apply</button>
        </form>
        </div>
        <div class="panel-right">
            <h2>Commande X</h2>
            <form action="submit.php" method="post">
                <label for="ref">Référence commande:</label>
                <input type="text" id="ref" name="ref" required>
                <label for="date">Date de commande:</label>
                <input type="date" id="date" name="date" required>
                <button type="submit" name="add">Ajouter à la liste</button>
            </form>
        </div>
        </div>
        <a href="#" class="edit-link">Éditer fiche technique détaillée</a>
        </div>
    </body>
</html>