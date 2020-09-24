
const botones = document.querySelectorAll('.bEliminar');

botones.forEach(boton => {
        boton.addEventListener("click", function(){
            
            const matricula = this.dataset.matricula;
            const confirm = window.confirm('Desea eliminar el usuario '+ matricula );
            // console.log('hola desde el boton');
            if (confirm) {
                //solicitud AJAX
                httpRequest("http://localhost/PHP/phpmvc/consulta/eliminarUsuario/"+ matricula, function(){
                    // console.log(this.responseText);
                    
                    document.getElementById('respuesta').innerHTML = this.responseText;
                    const tbody = document.getElementById("tbody-usuarios");
                    const fila = document.getElementById("fila-"+ matricula);
                    tbody.removeChild(fila);
                });

            }
        });
});

function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET",url);
    http.send();

    http.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            callback.apply(http);
        }
    }
}


//Menu responsive
$(document).ready(function(){
    $('.menu-movil').on('click',function(){
        $('.navegacion-principal').slideToggle();
    });
});