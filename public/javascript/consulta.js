const botones = document.querySelectorAll(".eliminar");

botones.forEach(boton => {
    boton.addEventListener("click", function(){
        const id = this.dataset.id;
        const nombre = this.dataset.nombre;
        
        const confirm = window.confirm("¿Deseas eliminar al usuario " + nombre + "?");

        if(confirm){
            httpRequest("http://localhost/Propi3dad/consulta/eliminarUsuario/" + id, function(){
                //console.log(this.responseText);
                document.querySelector("#respuesta").innerHTML = this.responseText;

                const tbody = document.querySelector("#tbodyUsuarios");
                const fila = document.querySelector("#fila-" + id);

                tbody.removeChild(fila);
            });
        }
    })
});

function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();

    http.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            callback.apply(http);
        }
    }
}