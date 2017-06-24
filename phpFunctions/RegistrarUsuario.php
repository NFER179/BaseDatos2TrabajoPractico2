<?php
  include 'DBManage.php';

  $_nombre = $_POST["nombre"];
  $_apellido = $_POST["apellido"];
  $_usuario = $_POST["usuario"];
  $_pass = $_POST["pass"];

  if (RegistrarPersona($_nombre, $_apellido, $_usuario, $_pass)) {
    session_start();
    $_SESSION["user"] = $_usuario;
    echo TRUE;
  } else {
    echo "motivo de error";
  }
?>
