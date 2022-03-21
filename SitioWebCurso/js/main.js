console.log("Bienvenido a nuestra página web"); // Impresión en consola

// Inhabilitar clic derecho

document.oncontextmenu = function(){

    alert("Prohibido usar el clic derecho");
    return false;

}

// Restricción para copiar texto

setTimeout(() => {

    document.body.oncopy = function(){

        alert('No es posible copiar el texto. Copyright TecBytes & LozanoSoft.');
        return false;

    };

}, 200); // Retraso de 200 milisegundos

// Manipulación de las opciones del menú

function hoverOpcion(idControl){
    document.getElementById(idControl).style.fontSize='22px';
}

function outOpcion(idControl){
    document.getElementById(idControl).style.fontSize='16px';
}

// Manipulación del audio

setTimeout(() => { var audio = document.getElementById("audio"); }, 200); // Retraso de 200 milisegundos

// Carga de la galería

var rutaImagenes = [
    "img/juggernaut.jpg",
    "img/astronautas.jpg",
    "img/lego.jpg",
    "img/comics.jpg",
    "img/hongo.jpg",
    "img/batman.jpg"
];

function cargaGaleria(){

    for(let i = 1; i <= rutaImagenes.length; i += 1){

        document.getElementById("contenedor__imagenes__galeria").innerHTML += (`
            <div class='imagen__galeria'>
                <img src='${rutaImagenes[i - 1]}' id='img${i}' onmouseover="javascript: hoverImage('img${i}');" onmouseout="javascript: outImage('img${i}', '${rutaImagenes[i - 1]}');">
            </div>`
        );

    }

}

// Manipulación de imágenes

function hoverImage(idImg){
    document.getElementById(idImg).src = 'img/hover.jpg';
}

function outImage(idImg, rutaOriginal){
    document.getElementById(idImg).src = rutaOriginal;
}

// Validación de datos

function confirmarDatos(){

  var emailRegex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

  if(!isNaN(document.getElementById("nombre").value)){ // isNaN intenta convertir el valor a un número; si puede devuelve false

    alert("El nombre no tiene un formato válido.");
    return false;

  }

  if(!isNaN(document.getElementById("apellidos").value)){ // isNaN intenta convertir el valor a un número; si puede devuelve false

    alert("El apellido no tiene un formato válido.");
    return false;

  }

  if(isNaN(document.getElementById("telefono").value)){ // isNaN intenta convertir el valor a un número; si no puede devuelve true

    alert("El número telefónico no tiene un formato válido.");
    return false;

  }

  if(!emailRegex.test(document.getElementById("email").value)){ // Si la prueba regex fallas

    alert("El correo electrónico no tiene un formato válido.");
    return false;

  }

}

// Manipulación de enlaces

function obtenerEnlace(idEnlace){
    document.getElementById(idEnlace).href = "https://www." + idEnlace + ".com";
}

setTimeout(() => {

    obtenerEnlace('facebook');
    obtenerEnlace('instagram');
    obtenerEnlace('twitter');

}, 200); // Retraso de 200 milisegundos
