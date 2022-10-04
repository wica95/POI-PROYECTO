<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAT Grupal</title>

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
                    <a href="ChatPersonal.php">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Chat Personal</span>
                    </a>
                </li>
                <li>
                    <a href="ChatGrupal.php" class="active">
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
    

<!---------------------------------   CHATS GRUPALES     -------------------------------------->


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
                            <div class="d-flex align-items-start">
                                <img src="IMG/grupal1.jpg" class="rounded-circle mr-1" alt="grupo1" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    Equipo Dinamita
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                                <img src="IMG/grupal4.jpg" class="rounded-circle mr-1" alt="grupo1" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    OV - PROYECT
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                                <img src="IMG/grupal3.jpg" class="rounded-circle mr-1" alt="grupo1" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    POI proyecto
                                </div>
                            </div>
                        </a>

                        <a href="#" class="list-group-item list-group-item-action border-0">
                            <div class="d-flex align-items-start">
                                <img src="IMG/grupal2.png" class="rounded-circle mr-1" alt="grupo1" width="40" height="40">
                                <div class="flex-grow-1 ml-3">
                                    Animacion PROYECTO
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
                                    <img src="IMG/grupal1.jpg" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                </div>
                                <div class="flex-grow-1 pl-3">
                                    <strong>Equipo Dinamita</strong>
                                    <div class="text-muted small"><em>Vanessa Valenciano,Luis Rodriguez,David Torres,Guillermo Partida,Anamika Roy,Karla Treviño</em></div>
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
                                        Hola! buenas tardes chavos! vamos a trabajar para el proyecto
                                    </div>
                                </div>
    

                                <div class="chat-message-left pb-4">
                                    <div>
                                        <img src="IMG/imagen4.jpg" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:42 pm</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                        <div class="font-weight-bold mb-1">Vanessa Valenciano</div>
                                        Hola compañera, claro si quieres nos juntamos en la escuela para trabajar ahi 
                                    </div>
                                </div>

                                <div class="chat-message-left pb-4">
                                    <div>
                                        <img src="IMG/imagen6.jpg" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:43 pm</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                        <div class="font-weight-bold mb-1">Luis Rodriguez</div>
                                        Hola, a mi me parece bien
                                    </div>
                                </div>

                                <div class="chat-message-right mb-4">
                                    <div>
                                        <img src="IMG/imagen2.jpg" class="rounded-circle mr-1" alt="Anamika" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:44 pm</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                        les parece bien mañana en la tarde?
                                    </div>
                                </div>
    
                                <div class="chat-message-left pb-4">
                                    <div>
                                        <img src="IMG/imagen6.jpg" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:45 pm</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                        <div class="font-weight-bold mb-1">Luis Rodriguez</div>
                                      no hay problema
                                    </div>
                                </div>

                                <div class="chat-message-left pb-4">
                                    <div>
                                        <img src="IMG/imagen5.jpg" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:46 pm</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                        <div class="font-weight-bold mb-1">Guillermo Partida</div>
                                        si saliendo de clases nos juntamos
                                    </div>
                                </div>
    
                                <div class="chat-message-right mb-4">
                                    <div>
                                        <img src="IMG/imagen2.jpg" class="rounded-circle mr-1" alt="Chris Wood" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:47 pm</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 mr-3">
                                        Muy bien nos vemos mañana entonces.
                                    </div>
                                </div>
    
                                <div class="chat-message-left pb-4">
                                    <div>
                                        <img src="IMG/imagen3.jpg" class="rounded-circle mr-1" alt="Sharon Lessman" width="40" height="40">
                                        <div class="text-muted small text-nowrap mt-2">2:48 pm</div>
                                    </div>
                                    <div class="flex-shrink-1 bg-light rounded py-2 px-3 ml-3">
                                        <div class="font-weight-bold mb-1">David Torres</div>
                                    Claro! tengo libre el Viernes en la tarde
                                    </div>
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

  </script>
</body>
</html>