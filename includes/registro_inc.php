<?php include('../classes/dbh.classes.php');
session_start();

    if(isset($_POST["submit"])){
        
            $Nombre = $_POST['Nombre'];
    
            $Email = $_POST['Email'];
           
            $Matricula = $_POST['Matricula'];
            $Password = $_POST['Password'];
            $FotoPerfil = $_POST['FotoPerfil'];
          

            $consulta = $conn->prepare("INSERT INTO ALUMNO(full_name,email,matricula,pass,foto_perfil)  VALUES (:Nombre,:Email,:Matricula,:Password,:FotoPerfil)");


            $consulta->bindParam(':Nombre',$Nombre); 
            
         
            $consulta->bindParam(':Email',$Email); 
           
            $consulta->bindParam(':Matricula',$Matricula); 
            $consulta->bindParam(':Password',$Password);
            $consulta->bindParam(':FotoPerfil',$FotoPerfil); 
      
     

    }





?>


