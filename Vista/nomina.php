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
<body background="imgs/q8TdY.jpg" onload="">
<header>
    <nav>
       <h1>Aerolinea bits colombia</h1>
    </nav>
    <h3 id="tit">viaja con placer</h3>
</header>

<div id="botones" class="container">

<a class="fas fa-home btn btn-light" href="index.php">Inicio</a>
<a class="fas fa-plane-departure btn btn-light" href="vuelos.html">Vuelos</a>
<a class="fab fa-cc-diners-club btn btn-light" href="nomina.php">Nomina</a>    
</div>
<br><br>
<div class="container">
   
    <form class="form-pago form-control">
        <fieldset>Balance financiero</fieldset>
        <div class="row">

            <?php
        include '../Controlador/conexion.php';
        $consulta="SELECT monto from tarjetacredito";
        $resultado=mysqli_query($mysqli,$consulta);
        if($resultado){
            while($row = $resultado->fetch_array()){
                $monto = $row['monto'];
        ?>
           
                <div class="col-3">
                    
                    <b>Ganancias: <?php echo $monto; ?></b><br>

                </div>

                <?php
                
            }

        }
        ?>

        <?php
        
        $resultador=mysqli_query($mysqli,"SELECT COUNT(*) from vuelos");
        $contador = mysqli_num_rows($resultador);
        ?>
                    
       
        <!-- CONSULTA 2 -->
       

        <!-- CONSULTA 3 -->
            
            <div class="col-6">
            
            
            <p>Costos de combustible</p>
            <b>Total vuelos: <?php echo $contador; ?></b>
            <input id="cantidad" class="form-control" type="number" value="<?php echo $contador; ?>">
            <p>Por los 2 milloones de cada vuelo </p>
            <input type="number" value="2000000">
            </div>
        </div><br>
            <button type="submit" class="btn btn-primary" onclick="calcula_tripulacion()" >calcular valor combustible</button>
            <button type="submit" class="btn btn-primary" onclick="generarnumero();" >calcular valor tripulacion</button>
    </form>
</div>
<footer>

</footer>

        <script src="js/calcula.js"></script>
        <script src="js/calculatrip.js"></script>
</body>
</html>