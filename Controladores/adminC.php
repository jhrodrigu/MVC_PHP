<?php 

  class AdminC{

    public function IngresoC(){

      if(isset($_POST["usuarioI"])){

        $datosC =array("usuario"=>$_POST["usuarioI"], "clave"=>$_POST["claveI"]);

        $tablaBD = "administradores";

        $repuesta = AdminM::IngresoM($datosC, $tablaBD);
      
          if($repuesta["usuario"] == $_POST["usuarioI"] && $repuesta["clave"] == $_POST["claveI"]){

            session_start();

            $_SESSION["ingreso"] == true;

            header("location:index.php?ruta=empleados");
          }else{
            echo "Error al ingresar";
          }

      }
    }
  }

?>