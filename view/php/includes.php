<?php
/**
 * Simple PHP script example to showcase hwo HTML content
 * can be re-used across multiple HTML filess
 * 
 * @author: w.delamare
 * @date: Dec. 2023
 */

    function include_header() {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
        <title>Login Gesticom</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="login.css">
        <style>
        html,h1,h2,h3,h4 {font-family:"Lato", sans-serif}
        .mySlides {display:none}
        .w3-tag, .fa {cursor:pointer}
        .w3-tag {height:15px;width:15px;padding:0;margin-top:6px}
        </style>
        </head>
    
        <body>
        <header>
            <h1>Bienvenue sur Gesticome</h1>
        </header>
        <nav>
            <h2>Menu du jour </h2>
        </nav>
        
        <?php
    }


    function include_footer() {
        ?>
        <footer>
            Copyright!©️TAI <a href="mailto:">Contact</a>
        </footer>
        <?php
    }


    function include_error_message($message) {
        echo "<p class='error_message'>" . $message . "</p>";
    }


?>