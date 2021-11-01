function verCookies(){
    alert("Cookies actuales:\n"+document.cookie);
}

function crearModifCookie(){
    var nombre = prompt("Introduzca el nombre de la cookie");
    var valor = prompt("Introduzca su valor");
    var expiracion = parseInt(prompt("Introduzca el número de días para que expire"));
    setCookie(nombre, valor, expiracion);
    verCookies();
}

function leerCookie(){
    var nombre = prompt("Introduzca el nombre de la cookie a consultar");
    var resultado = getCookie(nombre);
    alert(resultado);
}

function borrarCookie(){
    var nombre = prompt("Introduzca el nombre de la cookie a borrar");
    deleteCookie(nombre);
    verCookies();
}

function deleteCookie(nombre){
    setCookie(nombre,"",0);
}