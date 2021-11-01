<?php
        include '../Controlador/conexion.php';
        $consulta="SELECT * FROM vuelos";
        $resultado=mysqli_query($mysqli,$consulta);
        if($resultado){
            while($row = $resultado->fetch_array()){
                $id_vuelo = $row['Id_vuelo'];
                $ciudad_origen_vuelo = $row['Ciudad_origen_vuelo'];
                $fecha_vuelo = $row['Fecha_vuelo'];
                $ciudad_destino_vuelo = $row['Ciudad_destino_vuelo'];
           
                
                ?>
                <div style="text-align: center;">
                    <h4 style="color:green" >Id del vuelo: <?php echo $id_vuelo; ?></h4>
                <div style="text-align: center;">
                    <p style="color: white;">
                        <b style="color: black;">ORIGEN:</b><?php echo $ciudad_origen_vuelo?><br>
                        <b></b><?php echo $fecha_vuelo?><br>
                        <b><b><?php echo $ciudad_destino_vuelo?><br>
                        
                    </p>
                </div>
                </div>
                <?php
                
            }

        }
    ?>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Css/principal.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
        <title>Consulta de todo los vuelos</title>
    </head>
    <body background="../Vista/imgs/q8TdY.jpg">
        
    </body>
    </html>
