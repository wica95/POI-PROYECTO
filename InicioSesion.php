<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCFM CHATS</title>
    
    <link rel="stylesheet" href="InicioSesion.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


</head>
<body>
  <p style="background-image: url('IMG/wallpaper.jpg'); width:1365px; height:655px;"></p>
 


<div class="container-fluid px-1 py-5 mx-auto" style="margin-top:-750px; width:800px;">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
         

            <div class="card">
                <h1 class="text-center mb-4" style="font-family: 'Share Tech Mono', monospace; font-size:50px; font-weight: bolder;">FCFM-CHATS</h1>
                <h6 class="text-center mb-4">INICIO DE SESION</h6>
                <form class="form-card" onsubmit="event.preventDefault()">

                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="ejemplo@hotmail.com" onblur="validate(1)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                      <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Contraseña<span class="text-danger"> *</span></label> <input type="password" id="contraseña" name="contraseña" placeholder="********" style="width:370px;" onblur="validate(2)"> </div>
                     
                  </div>
                    
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Recordar Contraseña
                        </label>
                      </div>
                      <br></br>
                    <div>
                    <a class="form-group col-sm-6"><a type="submit" href="Inicio.php" class="btn btn-primary btnAction" style="margin-top:-50px;width:150px; margin-left:-20px;">Entrar</a>

                    </a>
                    
                    </div>
                   <a type="button" id="link" href="Registro.php" style="margin-left:15px;" class="btn btn-link">¿No tienes cuenta?</a>
                
                </form>
            </div>


        </div>
    </div>
</div>

<script  src="InicioSesion.js"></script>

</body>
</html>
