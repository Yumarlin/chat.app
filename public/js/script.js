var destinatarioSeleccionado = 0
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
    document.getElementById("btnEnviar").onclick = function () {
        let remitenteID = document.getElementById("txtID").value
        let destinatarioID = destinatarioSeleccionado
        let mensaje = document.getElementById("txtMensaje").value
        let form = new FormData()
        form.append("remitenteID", remitenteID)
        form.append("destinatarioID", destinatarioID)
        form.append("mensaje", mensaje)

        fetch("/mensajes/action_registrar.php", {
            method: "POST",
            body: form

        }).then(function (result) {
            return result.text()
        }).then(function (data) {
            console.log(data)
        })

    }
    buscarContactos("")

}

function buscarContactos(busqueda) {
    fetch("/contacto/action_buscar.php?busqueda=" + busqueda + "&id=1")
        .then(function (data) {
            return data.json()
        }).then(function (data) {
            let template = ""
            for (const i of data) {
                template += `   
                <li onclick="seleccionarContacto (${i.ID})">
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
            document.getElementById("ulContactos").innerHTML = template
        })
}

function seleccionarContacto(id) {
    destinatarioSeleccionado = id
    cargarMensajes();
}

function cargarMensajes() {
    fetch("/mensajes/action_buscar.php?remitenteID=" + document.getElementById("txtID").value + "&destinatarioID=" + destinatarioSeleccionado)
        .then(function (res) {
            return res.json()

        }).then(function (data) {
            console.log(data)
            let template = ""
            for (const item of data) {
                let clase = (item.remitenteID == document.getElementById("txtID").value) ? "mensaje-enviado" : "mensaje-recibido"
                console.log(item.remitenteID)
                template += `
                    <div class="${clase} mensaje">
                    ${item.mensaje}
                </div>
            `
            }
            document.getElementById("divMensajes").innerHTML = template
        })
}