<?php
 session_start();
 if (!isset($_SESSION["id"])) {
    header("location: /home/login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/2.0.46/css/materialdesignicons.css"
        integrity="sha256-snZ0BFhOCNB7Mw15J65uW3noOMhUmuZwzLDJF8l2EiM=" crossorigin="anonymous" />
    <link rel="stylesheet" href="../public/css/style.css">
    <title>Chat App</title>
</head>

<body>
    <header class="top-bar">
        <div class="logo">
            <!-- <a id="btnContactos" onclick="" class="text-white"><span
                    class="mdi mdi-account-multiple mdi-36px"></span></a> -->
            <a id="btnContactos" onclick="" class="hover-cursor text-white"><span
                    class="mdi mdi-exit-to-app mdi-36px"></span></a>
            <a id="myBtn" class="hover-cursor text-white"><span
                    class="mdi mdi-account-settings-variant mdi-36px"></span></a>
        </div>
        </div>
        <div class="perfiles">
            <img src="../public/img/Foto-perfil.jpg" alt="" class="img-perfil">
            <p>Nombre del contacto</p>
        </div>
    </header>

    <div class="sidebar" id="divSidebar">
        <div class="input-group" style="width: 100%;">
            <input class="form-control" type="text" name="" id="txtbusqueda">
        </div>

        <ul class="contact-list" style="margin-top: 35px;" id="ulContactos">
        <!-- Contenido generado por JS -->
        </ul>
    </div>
    <div class="container mensajes">
        <div class="mensaje-recibido mensaje">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum esse sequi laboriosam aut debitis nobis ab
            repellendus, voluptatibus similique error aliquam doloribus cumque eveniet rerum quasi quis tenetur earum
            temporibus?
        </div>
        <div class="mensaje-enviado mensaje">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum obcaecati perferendis possimus dolorem fuga
            doloremque vel explicabo dignissimos, reprehenderit aperiam sint voluptatibus, ipsa nemo beatae amet animi
            corrupti ipsam commodi!

        </div>
        <div class="mensaje-recibido mensaje">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum esse sequi laboriosam aut debitis nobis ab
            repellendus, voluptatibus similique error aliquam doloribus cumque eveniet rerum quasi quis tenetur earum
            temporibus?
        </div>
        <div class="mensaje-enviado mensaje">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum obcaecati perferendis possimus dolorem fuga
            doloremque vel explicabo dignissimos, reprehenderit aperiam sint voluptatibus, ipsa nemo beatae amet animi
            corrupti ipsam commodi!

        </div>
        <div class="mensaje-recibido mensaje">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum esse sequi laboriosam aut debitis nobis ab
            repellendus, voluptatibus similique error aliquam doloribus cumque eveniet rerum quasi quis tenetur earum
            temporibus?
        </div>
        <div class="mensaje-enviado mensaje">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum obcaecati perferendis possimus dolorem fuga
            doloremque vel explicabo dignissimos, reprehenderit aperiam sint voluptatibus, ipsa nemo beatae amet animi
            corrupti ipsam commodi!

        </div>
        <div class="mensaje-recibido mensaje">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum esse sequi laboriosam aut debitis nobis ab
            repellendus, voluptatibus similique error aliquam doloribus cumque eveniet rerum quasi quis tenetur earum
            temporibus?
        </div>

        <div class="mensaje-enviado mensaje">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum obcaecati perferendis possimus dolorem fuga
            doloremque vel explicabo dignissimos, reprehenderit aperiam sint voluptatibus, ipsa nemo beatae amet animi
            corrupti ipsam commodi!

        </div>

        <div class="mensaje-recibido mensaje">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, suscipit.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, suscipit.
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quae, suscipit.

        </div>

        <div class="mensaje-enviado mensaje">

            Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum obcaecati perferendis possimus dolorem fuga
            doloremque vel explicabo dignissimos, reprehenderit aperiam sint voluptatibus, ipsa nemo beatae amet animi
            corrupti ipsam commodi!

        </div>

        <div class="chat">
            <input type="text">
            <button type="submit" id="btnEnviar">Enviar</button>
        </div>

    </div>

    <!-- modal -->
    <div class="fondo-modal d-none">
        <div class="div-modal">
            <div style="width: 100%; padding: 0 40px 0 40px;">
                <input type="text" class="input-modal">
            </div>

            <ul class="modal-list">
                <li>Lorem, ipsum.</li>
                <li>Lorem, ipsum.</li>
                <li>Lorem,ipsum.</li>
                <li>Lorem, ipsum.</li>
            </ul>
        </div>
    </div>


<!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
  </div>
</div>

    <script>
        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0]; 
        btn.onclick = function () {
            modal.style.display = "block";
        }
        span.onclick = function () {
            modal.style.display = "none";
        }
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }


                     

    </script>


    <script src="../public/js/script.js"></script>
</body>

</html>