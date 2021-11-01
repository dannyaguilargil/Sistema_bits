


//evento de varios contenidos
//evento de escucha a cada uno de los botones
const gallery = document.getElementById('gallery')
gallery.addEventListener('click', (e) => {
    console.log(e.target.textContent) //me muestra el cotenido
    e.target.style.background='blue';
    //e.preventDefault()//evita el envio de formulario
    recibevalores(e.target.textContent);
})
function recibevalores(aux){
    //AQUI RECIBO LOS VALORES PARA NO PERMITIR AGREGAR ESA SILLA
    aux1 = aux
    console.log(aux1)
    
}