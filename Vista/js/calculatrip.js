//funcion para calcular aleatoriamente el sueldo de la tripulacion
function generarnumero(){
    var inferior = 1500000;
    var superior = 2500000;
    //console.log("genero")
    aleatorio(inferior,superior);
}

function aleatorio(inferior, superior) {
    var numPosibilidades = superior - inferior;
    var aleatorio = Math.random() * (numPosibilidades + 1);
    aleatorio = Math.floor(aleatorio);
    //console.log( inferior + aleatorio);
    var cantidad = 9; //total de la tripulacion
    var total_generado = inferior + aleatorio
    console.log("sueldo generado"+total_generado)
    var generado = total_generado;
    //texto.InnerHTML = generado;
    //console.log(texto.InnerHTML);
    //var pol = document.createElement("div");
    alert("sueldo que se ganaron"+cantidad*total_generado);

}

// calculatripu(min,max){

 //   var totalempleados = 8;
    
//}