<?php  include('../classes/registro.classes.php');

    class Control_Registros extends Registros{

          private $nombre;
          private $apellido;
          private $usuario;
          private $email;
          private $fnacimiento;
          private $telefono;
          private $pssw;
          private $fotop;

          public function __construct($nombre,$apellido,$usuario,$email,$fnacimiento,$telefono,$pssw,$fotop){
              $this->nombre=$nombre;
              $this->apellido=$apellido;
              $this->usuario=$usuario;
              $this->email=$email;
              $this->fnacimiento=$fnacimiento;
              $this->telefono=$telefono;
              $this->pssw=$pssw;
              $this->fotop=$fotop;

            


          }

         public function RegistrarUsuario(){

            if($this->emptyInput()==false){
                header("location: ../index.php?error=emptyInput");
                exit();
            }
            if($this->ExisteUsuario()==false){
                header("location: ../index.php?error=ExisteUsuario");
                exit();
            }
            $this->InsertarUsuario($this->nombre,$this->apellido,$this->usuario,$this->email,$this->fnacimiento,$this->telefono,$this->pssw,$this->fotop);
         }



          private function ExisteUsuario(){
            $check;
            if(!$this->UsuarioExiste($this->email)){
                $check=false;
            }
            else{
                $check=true;
            }
            return $check;
          }
          private function emptyInput(){
            $check;
            if(empty($this->pssw)){
                $check=false;
            }
            else{
                $check=true;
            }
            return $check;
          }


    }

?>

