<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../public/css/registro.css">
    <title>Registro</title>
</head>
<body>
    <div class="container">
        <div class="div-registro">

        
            <form action="/contacto/action_registrar.php" method="post">

                <h2>Registro</h2>

                <hr>


                <label for="nombre"><b>Nombre</b></label>
                <input class="control-formulario" type="text" placeholder="Introduzca su nombre" name="nombre" required>

                <label for="nombre"><b>Apellidos</b></label>
                <input class="control-formulario" type="text" placeholder="Introduzca sus Apellidos" name="apellidos" required>


                <label for="nombre"><b>Sexo</b></label>
                <select class="control-formulario" name="sexo" id="">
                    <option value="F">Femenino</option>
                    <option value="M">Masculino</option>
                </select>
                
                <label for="nombre"><b>Telefono</b></label>
                <input class="control-formulario" type="phone" placeholder="Introduzca su Telefono" name="telefono" required>

                <label for="nombre"><b>E-mail</b></label>
                <input class="control-formulario" type="email" placeholder="Introduzca su Email" name="email" required>


                <label for="psw"><b>Contraseña</b></label>
                <input class="control-formulario" type="password" placeholder="Escriba su Contraseña" name="password" required>

               

                <button type="submit" class="registerbtn">Registrarse</button>
            </form>
            <div class="container signin">
                <p>¿Ya tienes una cuenta? <a href="/home/login.php">Iniciar session</a>.</p>
            </div>
        </div>

        
    </div>






</body>
</html>