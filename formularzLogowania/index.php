<?php
    session_start();

    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
        
        echo '';

    } else {
        // Jeśli użytkownik nie jest zalogowany, przekieruj go na stronę logowania lub wyświetl komunikat o braku dostępu
        header("Location: logowanie.php");
        exit();
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Success</title>

    <style>
        img{
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container text-center">
        <h1>Login successful!</h1>
        <h1><a href="logout.php">Log out</a></h1>
        <img class="img-fluid" src="https://ih1.redbubble.net/image.490263180.2295/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg" alt="thumbs up">
    </div> 
</body>
</html>
