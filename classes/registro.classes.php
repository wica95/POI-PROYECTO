<?php include('../classes/dbh.classes.php');


    class Registros extends Dbh{

        protected function InsertarUsuario($nombre,$apellido,$usuario,$email,$fnacimiento,$telefono,$pswHashed,$fotop){
            $stmt = $this->connect()->prepare("INSERT INTO usuario(nombres,apellidos,ussername_alias,email,fecha_nacimiento,telefono,contraseña,foto_perfil) VALUES(?,?,?,?,?,?,?,?);");

        
        }

        protected function UsuarioExiste($email){
            $stmt = $this->connect()->prepare('SELECT email FROM usuario WHERE email = ?;');
            if(!$stmt->execute(array($email))){
                $stmt=null;
                header("location: ../index.php?error=stmtfailed");
                exit();
            }
            $check;
            if($stmt->rowCount() > 0){
                $check=false;
            }
            else{
                $check=true;
            }
            return $check;
        }

    }


?>