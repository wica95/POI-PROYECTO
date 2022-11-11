<?php include('./templates/header.php');
include('./classes/dbh.classes.php');
session_start();

$ID_noticia=$_GET['ID_CHAT'];
$ID_usuario=null;

if(isset($_SESSION['ID'])){
    $ID_usuario=$_SESSION['ID'];
}


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo  "<title>Chats Personales</title>"?>


    <link rel="stylesheet" href="Inicio.css">
    <link rel="stylesheet" href="ChatPersonal.css">

    <?php include('Bootstrap.php') ?>

</head>
<body>

<!-------------------------------------      NAVEGADOR     ------------------------------------------------>

<?php include('NavBar.php') ?>

      <!----------------------------------      SLIDE BAR     ------------------------------------------------>
    <div class="wrapper">
        <!--Top menu -->
        <div class="sidebar">
           <!--profile image & text--> 
           
        <div class="profile">
            <img src="IMG/imagen2.jpg" alt="profile_picture">
            <h3>Anamika Roy</h3>
            <p>LMAD</p>
        </div>
            <!--menu item-->

            <ul>
                <li>
                    <a href="Inicio.php">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                
                <li>
                    <a href="ChatPersonal.php" class="active">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Chat Personal</span>
                    </a>
                </li>
                <li>
                    <a href="ChatGrupal.php">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Chat Grupal</span>
                    </a>
                </li>
                <li>
                    <a href="Tareas.php">
                        <span class="icon"></span>
                        <i style="margin-left:-35px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-text-fill" viewBox="0 0 16 16">
                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM4.5 9a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM4 10.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 1 0-1h4a.5.5 0 0 1 0 1h-4z"/>
                          </svg>
                        </i>
                        <span class="item" style="margin-left:15px;">Tareas</span>
                    </a>
                </li>
                <br><br><br>
                <br><br><br><br>
                <div class="combo">
                    <hr>
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="icon"><i class="fas fa-cog"></i></span>
                    <span class="item">Configuracion</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="margin-left:30px; color:black; background-color: rgb(231, 224, 214); border-color: rgb(177, 171, 171);">
                    <a class="dropdown-item" href="#">Editar Perfil</a>
                    <a class="dropdown-item" href="#">Eliminar Perfil</a>
                    <a class="dropdown-item" href="InicioSesion.php">Cerrar Sesion</a>
                  </div>

                </div>
            </ul>

           

        </div>

    </div>
    

<!---------------------------------   CHATS PERSONALES     -------------------------------------->
<?php 

            $consulta_coments = $conn->prepare("SELECT * FROM ver_mensajes");
            $consulta_coments->setFetchMode(PDO::FETCH_ASSOC);
            $consulta_coments->execute();

            $ussername_coments; $foto_coments; $ID_coments;  $ID_usuario_coments; $ID_chat_coments; $texto_coments; $Fecha_coments; 

            while($res_coments=$consulta_coments->fetch()){

                $res_coments["Ussername"];
                $res_coments["Foto_Perfil"];
                $res_coments["ID_Mensaje"];
                $res_coments["ID_usuario"];            
                $res_coments["Mensaje"];
                $res_coments["Fecha"];
                
                if($res_coments["ID_chat"] == $ID_chat){

                    $ussername_coments = $res_coments["Ussername"];
                    $foto_coments = $res_coments["Foto_Perfil"];
                    $ID_coments = $res_coments["ID_Mensaje"];
                    $ID_usuario_coments = $res_coments["ID_usuario"];                 
                    $texto_coments = $res_coments["Mensaje"];
                    $Fecha_coments = $res_coments["Fecha"];
            
            ?>

    <main class="content" style="margin-left:230px; height:400px; width:1100px;">
        <div class="container p-0">
    
            <div class="card">
                <div class="row g-0">
                    <div class="col-12 col-lg-5 col-xl-3 border-right">
    
                        <div class="px-4 d-none d-md-block">
                            <div class="d-flex align-items-center">
                                <div class="flex-grow-1">
                                    <input type="text" class="form-control my-3" placeholder="Buscar...">
                                </div>
                            </div>
                        </div>
    
                        <div class="chat-usuario p-4">
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="badge bg-success float-right">5</div>
                            <div class="d-flex align-items-start">
                                <img src="IMG/imagen4.jpg" class="rounded-circle mr-1" alt="Vanessa Valenciano" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    Vanessa Valenciano
                                    <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="badge bg-success float-right">2</div>
                            <div class="d-flex align-items-start">
                                <img src="IMG/imagen5.jpg" class="rounded-circle mr-1" alt="Guillermo Partida" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                   Guillermo Partida
                                    <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                                <img src="IMG/imagen3.jpg" class="rounded-circle mr-1" alt="David Torres" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                   David Torres
                                    <div class="small"><span class="fas fa-circle chat-online"></span> Online</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                                <img src="IMG/imagen6.jpg" class="rounded-circle mr-1" alt="Luis Rodriguez" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    Luis Rodriguez
                                    <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                                <img src="IMG/imagen7.jpg" class="rounded-circle mr-1" alt="Yessica Cavazos" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    Yessica Cavazos
                                    <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                                <img src="IMG/imagen8.jpg" class="rounded-circle mr-1" alt="Karla Treviño" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    Karla Treviño
                                    <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                                <img src="IMG/imagen9.jpg" class="rounded-circle mr-1" alt="Debanhi Carrillo" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    Debanhi Carrillo
                                    <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                                <img src="IMG/avatar.jpeg" class="rounded-circle mr-1" alt="Jennifer Chang" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    Jennifer Chang
                                    <div class="small"><span class="fas fa-circle chat-offline"></span> Offline</div>
                                </div>
                            </div>
                        </a>
                      </div>
                        <hr class="d-block d-lg-none mt-1 mb-0">
                    </div>
                    <div class="col-12 col-lg-7 col-xl-9">
                        <div class="py-2 px-4 border-bottom d-none d-lg-block">
                            <div class="d-flex align-items-center py-1">
                                <div class="position-relative">
                                    <img src="IMG/imagen3.jpg" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                </div>
                                <div class="flex-grow-1 pl-3">
                                    <strong>David Torres</strong>
                                    <div class="text-muted small"><em>Online</em></div>
                                </div>
                         
                                <div>
                                    <button class="btn btn-primary btn-lg mr-1 px-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-folder-fill" viewBox="0 0 16 16">
                                        <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                                      </svg></button>
                                    
                                    <button class="btn btn-info btn-lg mr-1 px-3 d-none d-md-inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-video feather-lg"><polygon points="23 7 16 12 23 17 23 7"></polygon><rect x="1" y="5" width="15" height="14" rx="2" ry="2"></rect></svg></button>
                                </div>                                
                            </div>
                            </div>
         
    
                            <div class="position-relative">
                                <div class="chat-messages p-4">
    
        
                                    <div class="chat-message-right mb-4">
                                        <div>
                                            <img src="IMG/imagen2.jpg" class="rounded-circle mr-1" alt="Anamika" width="40" height="40">
                                            <div class="text-muted small text-nowrap mt-2">2:41 am</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                            Hola! buenas tardes, ¿como has estado?
                                        </div>
                                    </div>
        
                                    <div class="chat-message-left pb-4">
                                        <div>
                                            <img src="IMG/imagen3.jpg" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                            <div class="text-muted small text-nowrap mt-2">2:42 am</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                            <div class="font-weight-bold mb-1">David Torres</div>
                                            Hola que tal, estoy muy bien gracias por preguntar,¿que tal estas tu?
                                        </div>
                                    </div>
    
                                    <div class="chat-message-right mb-4">
                                        <div>
                                            <img src="IMG/imagen2.jpg" class="rounded-circle mr-1" alt="Anamika" width="40" height="40">
                                            <div class="text-muted small text-nowrap mt-2">2:43 am</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                            Estoy muy bien, algo cansada por el proyecto de POI, ya quiero terminar jajaja
                                        </div>
                                    </div>
        
                                    <div class="chat-message-left pb-4">
                                        <div>
                                            <img src="IMG/imagen3.jpg" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                            <div class="text-muted small text-nowrap mt-2">2:44 am</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                            <div class="font-weight-bold mb-1">David Torres</div>
                                            Oh ya veo, si ocupas ayuda puedes decirme con todo gusto y te ayudo,si? espero que puedas terminar tu proyecto mucho exito
                                        </div>
                                    </div>
        
                                    <div class="chat-message-right mb-4">
                                        <div>
                                            <img src="IMG/imagen2.jpg" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                            <div class="text-muted small text-nowrap mt-2">2:45 am</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                            Gracias en verdad lo aprecio mucho tu ayuda, crees que un dia nos podamos juntar para trabajar juntos?
                                        </div>
                                    </div>
        
                                    <div class="chat-message-left pb-4">
                                        <div>
                                            <img src="IMG/imagen3.jpg" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                            <div class="text-muted small text-nowrap mt-2">2:46 am</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                            <div class="font-weight-bold mb-1">David Torres</div>
                                        Claro! tengo libre el Viernes en la tarde, te parece bien si trabajamos en la escuela?
                                        </div>
                                    </div>
    
                                    <div class="chat-message-right mb-4">
                                        <div>
                                            <img src="IMG/imagen2.jpg" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                            <div class="text-muted small text-nowrap mt-2">2:47 am</div>
                                        </div>
                                        <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                            Muchas gracias David,me parece bien el Viernes en la tarde:)                                    </div>
                                    </div>
    
                                   
                                </div>
                            </div>
    
                        <div class="flex-grow-0 py-3 px-4 border-top">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Escriba un mensaje...">
                                <button class="btn btn-primary">Enviar</button>
                            </div>
                        </div>
    
    
                    </div>
                </div>
            </div>
        </div>
        
    
    </main>
    
    
  <script>
   src="archivos.js"
  </script>
</body>
</html>