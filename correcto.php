<?php

//Booleana que se pondrá a false si algún campo tiene un error
$flagCorrecto = true;

//Asigno todas las variables del form para trabajar de manera más cómoda con ellas
$personaEmpresa = $_POST["personaEmpresa"];
$nombre = $_POST["first_name"];
$apellidos = $_POST["last_name"];
$nif = $_POST["nif"];
$tipoContacto = $_POST["tipoContacto"];
$paginaWeb = $_POST["paginaWeb"];
$direccion = $_POST["street"];
$poblacion = $_POST["poblacion"];
$cp=$_POST["zip"];
$provincia = $_POST["provincia"];
$pais = $_POST["pais"];
$tfnMovil = $_POST["phone"];
$email = $_POST["your_email"];
$terminosYCondiciones = $_POST["checkbox"];

//Funcion para comprobar que un campo esté vacío o no
function comprobarVacio($campoFormulario) {
  if(empty($campoFormulario)){
   $flagCorrecto=false;
   echo "campo vacío";
   echo "<br>";
  }
}

//Funcion para comprobar que se ha marcado la casilla de términos y condiciones
function comprobarTerminosYCondiciones($terminos){
  if(!isset($terminos)){
    $flagCorrecto=false;
  }
}

//Comprobamos las campos que hay posibilidad de que estén vacíos
comprobarVacio($nombre);
comprobarVacio($apellidos);
comprobarVacio($nif);
comprobarVacio($direccion);
comprobarVacio($poblacion);
comprobarVacio($cp);
comprobarVacio($provincia);
comprobarVacio($pais);
comprobarVacio($tfnMovil);
comprobarVacio($email);

//Comprobamos que los términos y condiciones han sido aceptados
comprobarTerminosYCondiciones($terminosYCondiciones);

if($flagCorrecto){
  echo "TODO CORRECTO";
}else{
  ECHO "HAY CAMPOS CON ERRORES";
}