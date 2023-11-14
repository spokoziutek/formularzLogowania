<?php
    session_start();
    $dataCorrectness = '';

    require('config.php');
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $login = $_POST['login'] ?? '';
        $password = $_POST['password'] ?? '';

        if (checkLoginData($login, $password)){
            $dataCorrectness = 'Loging in';
            $_SESSION['logged_in'] = true; // Ustaw flagę zalogowania w sesji
            header("Location: index.php");
            exit();
        }
        else{
            $dataCorrectness = "Incorrect login or password.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b170ec3cfc.js" crossorigin="anonymous"></script>

    <style>
        body{
            font-family: 'Roboto', sans-serif;
            background-color: #F5F7F8;
        }

        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>
</head>
<body>
    <div class="container mt-5 p-5 border rounded shadow">
        <div class="container pt-2 text-center">
            <h3>Sign in with (soon)</h3>
            <button type="button" class="btn btn-primary btn-floating mx-1 rounded-circle shadow">
                <i class="fab fa-facebook-f"></i>
            </button>


            <button type="button" class="btn btn-primary btn-floating mx-1 rounded-circle shadow">
                <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1 rounded-circle shadow">
                <i class="fab fa-linkedin-in"></i>
            </button>

            <div class="divider d-flex align-items-center my-4">
                <p class="text-center fw-bold mx-3 mb-0">Or</p>
            </div>
        </div>

        <form method="post" action="">

            <!--Pary logowania to:
                u1  -  password1,
                u2  -  password2,
                u3  -  password3 -->
            <div class="form-group mb-4">
                <input type="text" class="form-control form-control-lg shadow" name="login" id="login" placeholder="Login" required>
            </div>

            <div class="form-group mb-4">
                <input type="password" class="form-control form-control-lg shadow" name="password" id="password" placeholder="Password" required>
            </div>

            <input class="form-check-input me-2" type="radio" disabled />
            <label class="form-check-label">Remember me</label>
            <p style= "color: red;"><?php echo $dataCorrectness ?></p>

            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg shadow mb-5"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            </div>
        </form>
    </div>
</body>
</html>
