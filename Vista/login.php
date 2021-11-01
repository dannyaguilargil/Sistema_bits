
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/principal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>bits colombia</title>
</head>
<body background="imgs/q8TdY.jpg" >
<header>
    <nav>
       <h1>Arrolinea bits colombia</h1>
    </nav>
    <h3 id="tit">viaja con placer</h3>
</header>

<div id="botones" class="container">
    <a class="fas fa-home btn btn-light" href="index.php">Inicio</a>
    <a class="fas fa-plane-departure btn btn-light" href="vuelos.html">Vuelos</a>
    
</div>


<div id="form2">
        <div class="row">
        <form action="">
            <div class="col-3"></div>
        <div class="container col-sm-3 col-md-3 col-lg-3 col-xl-3">
        
            <h3 class="text-center">Iniciar session</h3>
            <label class="form-control-label">Nombre de usuario</label>
            <input type="text" class="form-control" name="nombre_usuario1" id="nombre_usuario1"><br>
            <label class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="Contrasena1" id="Contrasena1"><br>
            <button type="submit" class="text-center btn btn-success" onclick="logincookie();">Iniciar session</button>
        
        </div>
        </form>
        </div>
        </div>



<div id="form" class="text-center">
    <form class="form-control" method="post" action="../Controlador/registrar.php">
        
        

        <div class="row">
       <div class="col-4">
        </div> 

        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
        <h3 class="text-center"> Registrarse</h3>
        <br>


        <label class="form-control-label" for="nombre_usuario">Nombre de usuario</label>
        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario"><br>

        <label class="form-label">Cedula</label>
        <input class="form-control" type="number" name="cedula_usuario" id="cedula_usuario"><br>


        <label class="form-label" for="Email_Usuario">Email</label>
        <input type="email" class="form-control" id="email_usuario" name="email_usuario"><br>

        <label class="form-label" for="Numero_telefono">Telefono</label>
        <input type="number" class="form-control" name="numero_telefono" id="numero_telefono"><br>

        <label class="form-label" for="Contrasena">Contraseña</label>
        <input type="password" class="form-control" name="contrasena" id="contrasena">
        <div id="" class="form-text">Confirma contraseña</div>
        <input type="password" class="form-control" ><br>


        <button type="submit" class="btn btn-success"  id="btnRegistrar" name="btnRegistrar">  Registrarse</button>

        </div>

        </form>



 </div>

        
    
<footer>

</footer>
    <script>
        function logincookie(){
        if( document.cookie = "testcookie"){
        testcookie = "recepcion";
        document.cookie = "testcookie=" + encodeURIComponent( testcookie );
        var creada = document.cookie
        console.log(document.cookie)
        window.open('index.php');
        }
        else{
            alert("tiene que estar loguiado")
        }
    }
    </script>

   <!-- <script>
        function generocookie(){
        const nombre =  document.getElementById("nombre_usuario")
        document.cookie="username=nombre";
    }
    </script> -->
</body>
</html>