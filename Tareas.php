<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO FCFM-CHATS</title>

    <link rel="stylesheet" href="Inicio.css">
    <link rel ="stylesheet" href ="http://localhost/POI-PROYECTO/assets/css/bootstrap.min.css">
    <?php include('Bootstrap.php') ?>

</head>

<body>
    

<!-------------------------------------      NAVEGADOR     ------------------------------------------------>

<?php include('NavBar.php') ?>
   <!----------------------------------      SLIDE BAR     ------------------------------------------------>

   <?php include('SlideBar.php') ?>



   <main class="content" style="margin-left:230px; height:400px; width:1100px;">
   <div class="container p-0">
    

   <table class="table">
  <thead>
    <tr>
      <th scope="col">Fecha de entrega</th>
      <th scope="col">Materia</th>
      <th scope="col">Calificacion</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">03/10/2022</th>
      <td>POI</td>
      <td>-----</td>
      <td ><a class="btn btn-warning" href="#" role="button">Sin entregar</a></td>
    </tr>
    <tr>
      <th scope="row">05/12/2022</th>
      <td>PROWEB2</td>
      <td>Sin calificar</td>
      <td ><a class="btn btn-info" href="#" role="button">Entregado</a></td>
    </tr>
    <tr>
    <th scope="row">23/11/2022</th>
      <td>Administracion de proyectos</td>
      <td>Sin calificar</td>
      <td ><a class="btn btn-info" href="#" role="button">Entregado</a></td>
    </tr>
    <tr>
      <th scope="row">03/10/2022</th>
      <td>POI</td>
      <td>-----</td>
      <td ><a class="btn btn-warning" href="#" role="button">Sin entregar</a></td>
    </tr>
    <tr>
      <th scope="row">13/11/2022</th>
      <td>PROWEB2</td>
      <td>Sin calificar</td>
      <td ><a class="btn btn-info" href="#" role="button">Entregado</a></td>
    </tr>
    <tr>
    <th scope="row">09/10/2022</th>
      <td>Actuacion y direccion</td>
      <td>Sin calificar</td>
      <td ><a class="btn btn-info" href="#" role="button">Entregado</a></td>
    </tr>
  </tbody>
</table>

</div>
</main>
    
    
    <script>
     src="archivos.js"
    </script>

   </body>