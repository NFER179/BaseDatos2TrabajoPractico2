<?php
  include 'DBManage.php';

  $_nomPeli = $_REQUEST["nombrePelicula"];

  session_start();
                 
  CargarPelicula($_SESSION["user"], $_nomPeli);
?>
