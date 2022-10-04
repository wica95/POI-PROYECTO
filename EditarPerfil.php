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


   <form style=" max-width:500px;">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Usuario</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
 
  <div class="mb-3">
  <label for="formFile" class="form-label">Cambiar foto de perfil</label>
  <input class="form-control" type="file" id="formFile">
</div>
  <button type="submit" class="btn btn-dark">Guardar</button>
</form>



</main>
   </body>