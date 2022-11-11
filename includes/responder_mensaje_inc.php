<?php include('../classes/dbh.classes.php');
session_start();

if(isset($_POST["submit2"])){

    $Respuesta_usuario = $_POST['Respuesta_usuario'];
    $ID_USSER = $_POST['ID_USSER'];
    $ID_Respuesta = $_POST['ID_Respuesta'];
    $ID_CHAT = $_POST['ID_CHAT'];


    $consulta = $conn->prepare("INSERT INTO respuesta_comentarios(id_usuario,id_comentario_padre,texto,creation_date) 
    values('$ID_USSER','$ID_Comentario','$Respuesta_usuario',sysdate())");

    if($consulta->execute()){

        header("location: ../ChatPersonal.php?ID_mensaje=$ID_CHAT");


      }
      else{

       ?> <script type="text/javascript"> alert("Error al enviar respuesta");</script> 
       <?php
      }
    
}



?>