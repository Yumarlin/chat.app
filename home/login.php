<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/login.css">
    <title>Login</title>
</head>

<body>

    <div class="container">
        <div class="div-login">

            <div class="image-container">
                <img class="login-icon" src="../public/img/login.png" alt="">
            </div>


            <form action="/contacto/action_login.php" method="POST">
                <hr>
                <label for="usuario"><b>Usuario</b></label>
                <input type="text" placeholder="Introduzca su usuario" name="usuario" required>
                <label for="password"><b>Contraseña</b></label>
                <input type="password" placeholder="Escriba su Contraseña" name="password" required>
                <button type="submit" class="registerbtn">LOGIN</button>
                
                <?php if (isset($_GET["error"])): ?>
                <p style="color: red; text-align:center">Usuario Y Contraseña no coinciden</p>
                <?php  endif; ?>

            </form>
            <div class="container signin">
                <p>¿No tienes una cuenta? <a href="/home/registro.php">Registrate</a>.</p>
            </div>
        </div>


    </div>







</body>

</html>