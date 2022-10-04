<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO FCFM-CHATS</title>

    <link rel ="stylesheet" href ="http://localhost/POI-PROYECTO/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="Inicio.css">
    <link rel="stylesheet" href="Grupo_A.css">

    <?php include('Bootstrap.php') ?>

</head>
<body>

<!-------------------------------------      NAVEGADOR     ------------------------------------------------>

<?php include('NavBar.php') ?>
   <!----------------------------------      SLIDE BAR     ------------------------------------------------>

   <?php include('SlideBar.php') ?>

<!-------------------------------------    GRUPO  ------------------------------------------------>

<div class="apartado">


<img src="IMG/grupo1.jpg" alt="grupo" style="max-height:180px; max-width:180px; border-radius:5px; margin-left:30px; margin-top:30px; margin-bottom:30px;">
<br>
<h3 style="font-weight:bold;">BDM</h3>
<p style="text-align:center;  font-style: oblique;">Base de Datos Multimedia</p>
<br>
              
<hr>

<h6 style="font-weight:bold;">Canales</h6>

                  <div class="options" style="font-size:15px;">
                    <a class="dropdown-item" href="#">General</a>
                    <a class="dropdown-item" href="#">Subgrupo 1</a>
                    <a class="dropdown-item" href="#">Subgrupo 2</a>
                    
                   
                  </div>

</div>

<div class="apartado2">

<div class="menu-grupo">

<img src="IMG/grupo1.jpg" alt="grupo" class="usuario-foto">
<h6 style="font-weight:bold; margin-left:100px; margin-top:-30px;">Archivos</h6>

<form action="Grupo_A.php">
<div class="btn-group">
 
<main class="content" style="margin-left:30px; height:100px; width:1100px;">
   <div class="container p-0">
    

   <table class="table table-hover" style=" width:78%">
  <thead>
    <tr>
      <th scope="col">Fecha en que se subio</th>
      <th scope="col">Nombre</th>
      <th scope="col">Descargar</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">03/10/2022</th>
      <td>POI</td>
      <td ><a class="btn btn-light" href="#" role="button">Descargar</a></td>
    
    </tr>
    <tr>
      <th scope="row">05/12/2022</th>
      <td>PROWEB2</td>
      <td ><a class="btn btn-light" href="#" role="button">Descargar</a></td>
    
    </tr>
    <tr>
    <th scope="row">23/11/2022</th>
      <td>Administracion de proyectos</td>
      <td ><a class="btn btn-light" href="#" role="button">Descargar</a></td>
    </tr>
    <tr>
      <th scope="row">03/10/2022</th>
      <td>POI</td>
      <td ><a class="btn btn-light" href="#" role="button">Descargar</a></td>
    </tr>
    <tr>
      <th scope="row">13/11/2022</th>
      <td>PROWEB2</td>
      <td ><a class="btn btn-light" href="#" role="button">Descargar</a></td>
    </tr>
    <tr>
    <th scope="row">09/10/2022</th>
      <td>Actuacion y direccion</td>
      <td ><a class="btn btn-light" href="#" role="button">Descargar</a></td>
    </tr>
  </tbody>
</table>

</div>
</main>

  </form>
</div>
</div>



    
  <script>

  </script>
</body>
</html>