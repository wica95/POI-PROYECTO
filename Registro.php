<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRARSE-FCFM CHATS</title>
    
    <link rel="stylesheet" href="registro.css">

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


<!--font-family: 'Righteous', cursive;-->

</head>
<body>
  <p style="background-image: url('IMG/wallpaper.jpg'); width:1352px; height:1000px; margin-left:-3px; margin-top:-10px;"></p>
 


<div class="container-fluid px-1 py-5 mx-auto" style="margin-top:-1100px; width:1300px;">
    <div class="row d-flex justify-content-center">
        <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
         

            <div class="card">
                <h1 class="text-center mb-4" style="font-family: 'Share Tech Mono', monospace; font-size:50px; font-weight: bolder;">FCFM-CHATS</h1>
                <h6 class="text-center mb-4">REGISTRATE AHORA</h6>
                <form class="form-card" onsubmit="event.preventDefault()">
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Nombre<span class="text-danger"> *</span></label> <input type="text" id="nombre" name="nombre" placeholder="Ingrese primer nombre" onblur="validate(1)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Segundo Nombre<span class="text-danger"> *</span></label> <input type="text" id="nombre2" name="nombre2" placeholder="Ingrese segundo nombre" onblur="validate(2)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Apellido Paterno<span class="text-danger"> *</span></label> <input type="text" id="apPat" name="apPat" placeholder="Ingrese apellido paterno" onblur="validate(3)"> </div>
                        <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Apellido Materno<span class="text-danger"> *</span></label> <input type="text" id="apMat" name="apMat" placeholder="Ingrese apellido materno" onblur="validate(4)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                        <div class="form-group col-12 flex-column d-flex"> <label class="form-control-label px-3">Email<span class="text-danger"> *</span></label> <input type="text" id="email" name="email" placeholder="ejemplo@hotmail.com" onblur="validate(5)"> </div>
                    </div>
                    <div class="row justify-content-between text-left">
                      <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Matricula<span class="text-danger"> *</span></label> <input type="text" id="usuario" name="usuario" placeholder="1664215" onblur="validate(6)"> </div>

                    </div>
                    <div class="row justify-content-between text-left">
                      <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Contraseña<span class="text-danger"> *</span></label> <input type="password" id="contraseña" name="contraseña" placeholder="*********" onblur="validate(7)"> </div>
                      <div class="form-group col-sm-6 flex-column d-flex"> <label class="form-control-label px-3">Carrera<span class="text-danger"> *</span></label> 
                      <select class="form-select" aria-label="Default select example" id="carrera" onblur="validate(8)">
                        <option selected>Selccione una carrera...</option>
                        <option value="1">LMAD</option>
                        <option value="2">LSTI</option>
                        <option value="3">LM</option>
                        <option value="3">LF</option>
                        <option value="3">LCC</option>
                        <option value="3">LA</option>
                      </select>
                    </div>
                  </div>
                    <br></br>
                   <br>
                    <div>

                      <h6 style="margin-left:-500px;">Ingrese una Foto</h6>
                    <input type="file" style="margin-left:-200px; " name="adjunto" id="upload" onchange="readURL(this)" accept=".jpeg,.jpg,.png" multiple >

                    <img src="IMG/Imagen1.jpg" name="adjunto" id="avatar" style="margin-left:5px;" alt="avatar" class="avatar"><br>
                   
                 
                    <div class="form-group col-sm-6"><a type="submit" href="InicioSesion.php" class="btn btn-primary btnAction" style="margin-top:-200px;width:150px; margin-left:500px;">Registrarse</a>

                    </div>

                    </div>
                </form>
            </div>


        </div>
    </div>
</div>

<script  src="form.js"></script>

</body>
</html>