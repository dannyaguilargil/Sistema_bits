<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/infovuelos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <title>bits colombia</title>
</head>
<body background="imgs/q8TdY.jpg">
<header>
    <nav>
       <h1>Aerolinea bits colombia</h1>
    </nav>
    <h3 id="tit">viaja con placer</h3>
</header>

<div id="botones" class="container">

<a class="fas fa-home btn btn-light" href="index.php">Inicio</a>
<a class="fas fa-plane-departure btn btn-light" href="vuelos.html">Vuelos</a>
<a class="fab fa-cc-diners-club btn btn-light" href="nomina.html">Nomina</a>    
</div>
<br><br>

<div class="container" id="container1">
<form class="form-control" method="post" action="../Modelo/consultas_infovuelo.php">

<div class="fvuelos">
<a href="vuelos.html" class="btn btn-success">Solo ida</a>
<a href="vuelos2.html" class="btn btn-success">Ida y vuelta</a>

<select id="ciudades" class="" name="ciudades">
    <option selected>Cucuta</option>
    <option>Cali</option>
    <option>Bucaramanga</option>
    <option>Bogota</option>
    <option>Pereira</option>
    <option>Medellin</option>
    <option>Barranquilla</option>
    <option>Cartagena</option>
    <option>Manizales</option>
    <option>Pasto</option>
    <option>Monteria</option>
    <option>Neiva</option>
  </select>
  <button type="submit" class="btn btn-success"  id="btnRegistrar" name="btnRegistrar">Consultas</button>
  <button type="submit" class="btn btn-danger"  id="btnRegistrar" name="btnRegistrar">Eliminar reservas</button>
  </form>
</div>
<div class="infogeneral">
 
    <!--//AQUI VA LAS CONSULTAS -->
    <label for="">Digite reserva a eliminar</label>
    <input type="text">
    
</div>
</div>

<div class="container">
    <form class="form-pago form-control">
        <div class="gallery" id="gallery">
            <h4>Asientos disponibles</h4>
            <div class="gallery__">1</div>
            <div class="gallery__">2</div>
            <div class="gallery__">3</div>
            <div class="gallery__">4</div>
            <div class="gallery__">5</div>
            <div class="gallery__">6</div>
            <div class="gallery__">7</div>
            <div class="gallery__">8</div>
            <div class="gallery__">9</div>
            <div class="gallery__">10</div>
            <div class="gallery__">11</div>
            <div class="gallery__">12</div>
            
            <div class="gallery__">13</div>
            <div class="gallery__">14</div>
            <div class="gallery__">15</div>
            <div class="gallery__">16</div>
            <div class="gallery__">17</div>
            <div class="gallery__">18</div>
            <div class="gallery__">19</div>
            <div class="gallery__">20</div>
            
            <div class="gallery__">21</div>
            <div class="gallery__">22</div>
            <div class="gallery__">23</div>
            <div class="gallery__">24</div>
            <div class="gallery__">25</div>
            <div class="gallery__">26</div>
            <div class="gallery__">27</div>
            <div class="gallery__">28</div>
            <div class="gallery__">29</div>
            <div class="gallery__">30</div>
            <div class="gallery__">31</div>
            <div class="gallery__">32</div>
            <div class="gallery__">33</div>
            <div class="gallery__">34</div>
            <div class="gallery__">35</div>
            <div class="gallery__">36</div>
            <div class="gallery__">37</div>
            <div class="gallery__">38</div>
            <div class="gallery__">39</div>
            <div class="gallery__">40</div>
            <div class="gallery__">41</div>
            <div class="gallery__">42</div>
            <div class="gallery__">43</div>
            <div class="gallery__">44</div>
            <div class="gallery__">45</div>
            <div class="gallery__">46</div>
            <div class="gallery__">47</div>
            <div class="gallery__">48</div>
            <div class="gallery__">49</div>
            <div class="gallery__">50</div>
        </div>

    </form>
</div>


    <script src="js/infovuelos.js"></script>
</body>
</html>