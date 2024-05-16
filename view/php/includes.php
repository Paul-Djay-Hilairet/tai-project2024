<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Gesticom</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap">
    <link rel="stylesheet" href="/view/css/example.css">
    <style>
        html, h1, h2, h3, h4 {font-family: 'Lato', sans-serif}
        .mySlides {display: none}
        .w3-tag, .fa {cursor: pointer}
        .w3-tag {height: 15px; width: 15px; padding: 0; margin-top: 6px}
        body {
            font-family: 'Lato', sans-serif;
            background-color: #f0f2f5;
            color: #333;
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            max-width: 400px;
            width: 100%;
            padding: 20px;
            background: #ffffff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }
        .error-message {
            color: #d9534f;
            margin-bottom: 10px;
            font-weight: 500;
        }
        footer {
            margin-top: 20px;
            text-align: center;
            font-size: 14px;
        }
        footer a {
            color: #007bff;
            text-decoration: none;
        }
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php
function include_header() {
    ?>
    <header class="w3-container w3-white">
        <h1>Bienvenue sur Gesticom</h1>
    </header>
    <?php
}

function include_footer() {
    ?>
    <footer class="w3-container w3-light-grey w3-padding-16">
        <p>&copy; TAI <a href="mailto:">Contact</a></p>
    </footer>
    <?php
}

function include_error_message($message) {
    echo "<div class='w3-panel w3-red w3-display-container'><span onclick='this.parentElement.style.display=\"none\"' class='w3-button w3-large w3-display-topright'>&times;</span><p>$message</p></div>";
}
?>

<div class="container">
    <?php include_header(); ?>
    <?php if (isset($something_to_say)) include_error_message($something_to_say); ?>
    <form method="post" action="" class="w3-container">
        <div class="w3-section">
            <label for="login"><b>Login</b></label>
            <input class="w3-input w3-border w3-margin-bottom" type="text" name="login" placeholder="Enter Login" required>

            <label for="pwd"><b>Password</b></label>
            <input class="w3-input w3-border" type="password" name="pwd" placeholder="Enter Password" required>

            <button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit">Login</button>
        </div>
    </form>
    <?php include_footer(); ?>
</div>

</body>
</html>
