<!DOCTYPE html>
<html>

<head>
    <title>W3.CSS Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        <?php
        /**
         * Example of a simple controller
         * It will call the model to get the data
         * and then decide which view to display (login form or welcome page)
         * 
         * @author: w.delamare
         * @date: Dec. 2023
         */


        // do all necessary includes first
        // __DIR__ allows you to use relative paths explicitly
        require_once(__DIR__ . "/model/php/UserModel.php");



        // Check if the user comes from the form...
        if (isset($_POST['login']) && isset($_POST['pwd'])) {

            // check if all fields have an input
            if (strlen($_POST['login']) > 0 && strlen($_POST['pwd']) > 0) {
                $userModel = new UserModel();
                // Call the model to check if the user exists
                // How is the information stored? In a database? In a file? In a cloud? In a cookie?
                // The controller does not care about that. It just calls the model.
                $result = $userModel->check_login($_POST['login'], $_POST['pwd']);
                // If the search (in the db here) is successful
                if (isset($result['name'])) {
                    // the controller can now redirect to the correct welcome webpage
                    // making sure the firstname and lastname are registered throughout the **session**
                    session_start();
                    $_SESSION['name'] = $result['name'];

                    $_SESSION['id'] = $result['id'];

                    $_SESSION['statut'] = $result['statut'];
            } 
            else {
                // set the error message to be displayed in the view
                $something_to_say = "Invalid login and/or password.";
            }
        } 
        else {
            // set the error message to be displayed in the view
            $something_to_say = "Missing login and/or password";
    }
}

        // If the user wants to logout, simply destroy the session
        // (and hence redirect to the login form)
        if (isset($_POST['logout'])) {
            session_start();
            session_destroy();
        }


        // Now, let's call the view.
        // If something to say, the view will display it
        // Otherwise, the view will simply display the login form
        // the form if not logged in, the welcome page if logged in
        if (isset($_SESSION['statut']) && $_SESSION['statut'] == 1) {
            header('Location:page_accueil_admin.php');
        } elseif (isset($_SESSION['statut']) && $_SESSION['statut'] == 2) {
            header('Location:page_accueil_controleur.php');
        } elseif (isset($_SESSION['statut']) && $_SESSION['statut'] == 3) {
            header('Location:page_accueil_commercial.php');
        } else {
            require_once(__DIR__ . "/view/php/loginExample.php");
        }
