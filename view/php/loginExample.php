<!-- 
    Example HTML file to showcase a simple login form which uses
        - a php controller script (logic-related aspects) that calls a php model script (data-related aspects)
        - a php view script (UI-related aspects)

* @author: w.delamare
* @date: Dec. 2023
 -->

 <?php
    // do all necessary includes first
    // __DIR__ allows you to use relative paths explicitly
    // here, the file is in the same folder as the includes.php file (view/)
    include_once __DIR__ . '/includes.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="view/css/example.css">
        <title>Login Example</title>
    </head>
    <body>
        <main>
            <h3>WELCOME TO GESTICOM</h3>
            <p>Login Admin : admin.Gesticom password:123</p>
            <p>Login Controleur : ctlr.Gesticom password:revelation</p>
            <p>Login Commercial : commerce.Gesticom password:EatMyShorts</p>
            <p>Login Commercial 2 : commercial2.Gesticom password:456</p>

        </main>
        
        <!-- PHP only used to display stuff -->
        <?php include_header(); ?>

        <?php 
            // if an error happened
           
        ?>

        <form method="post" action="index.php">
        
            <fieldset>
                
                <img src="logo.png" alt="Login Image" style="display:block; margin:auto; width:100px; height:100px;">
                <input type="text" placeholder="login" id="login" name="login">
                
                <input type="password" placeholder='password' id='pwd' name="pwd">
                <button type="submit">Submit</button>
            </fieldset>
        </form>

        <?php include_footer(); ?>

    </body>


    