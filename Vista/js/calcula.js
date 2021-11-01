function calcula_tripulacion(){
    //AQUI MULTIPLICO LA CANTIDAD POR EL VALOR DE CADA VUELO PARA HACER COSTO DE COMBUSTIBLE
    var totalvuelos = document.getElementById("cantidad").value   
    var valorvuelo = 2000000;
    var aux = parseInt(totalvuelos)*parseInt(valorvuelo);
    alert(aux)
}