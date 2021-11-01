function validar(){
   var contenido = document.getElementById("correopagador").value;

   //AQUI QUIERO VALIDAR LOS BANCOS
    
   const elem = "@"
   const busc = contenido.search(elem)

   if(busc==-1){
    console.log("PAGO NO VALIDO")
    Swal.fire({
      position: 'top-end',
      icon: 'error',
      title: 'PAGO NO VALIDO',
      showConfirmButton: false,
      timer: 10000

      })
      
    
   }else{
    console.log("PAGO REALIZADO")
    Swal.fire({
        position: 'top-end',
        icon: 'success',
        title: 'PAGO REALIZADO',
        showConfirmButton: false,
        timer: 10000
      })
   }
   }


