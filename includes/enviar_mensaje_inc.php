<?php include('../classes/dbh.classes.php');
session_start();

        if(isset($_POST["submit"])){

            $Comentario_usuario = $_POST['Comentario_usuario'];
            $ID_USSER = $_POST['ID_USSER'];
            $ID_CHAT = $_POST['ID_CHAT'];

            $consulta = $conn->prepare("INSERT INTO comentarios_noticias(usuario_id, chat_id,creation_date, texto) values('$ID_USSER','$ID_NEWS',sysdate(),'$Comentario_usuario')");

            if($consulta->execute()){

                header("location: ../noticia.php?ID_noticia=$ID_NEWS");
        
        
              }
              else{
        
               ?> <script type="text/javascript"> alert("Error al enviar comentario");</script> 
               <?php
              }
            
        }
        
        
        
?>