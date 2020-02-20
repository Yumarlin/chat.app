var destinatarioSeleccionado=0
window.onload = function () {
    let boton = document.getElementById("btnContactos");

    let busqueda = document.getElementById("txtbusqueda");
    busqueda.onkeyup = function () {
        buscarContactos(busqueda.value)

    }

    boton.onclick = function () {
        if (confirm("¿Seguro que desea salir?")) {
            window.location = "/home/action_logout.php"
        }
    }
  buscarContactos("")

}

function buscarContactos(busqueda) {
    fetch("/contacto/action_buscar.php?busqueda=" + busqueda + "&id=1")
        .then(function (data) {
            return data.json()
        }).then(function (data) {
            let template= ""
            for (const i of data) {
                template +=`   
                <li>
                  <div>
                    <img src="../public/img/user.jpg" alt="">
                 </div>
                       <div class="contact-list-detail">
                          <strong style="display: block;">
                               ${i.nombre} ${i.apellidos}
                         </strong>
                         <span>Ultimo mensaje recibido abc</span>
                  </div>
                </li>`
            }
            document.getElementById("ulContactos").innerHTML=template
        })

        

}