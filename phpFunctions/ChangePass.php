<?php
  include 'DBManage.php';
  include 'Encriptador.php';

  $_oldPass = $_POST["oldPass"];
  $_newPass = $_POST["newPass"];

  session_start();

  CambiarContraseña($_SESSION["user"], $_newPass);

  if (ObtenerPassDe($_SESSION["user"]) == Encriptar($_newPass)) {
    echo TRUE;
  } else {
    CambiarContraseña($_SESSION["user"], $_oldPass);
    echo "Error al tratar de cambiar la contraseña.";
  }
?>
