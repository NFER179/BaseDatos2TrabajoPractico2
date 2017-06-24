<?php
  function InstanciarConexion() {
    $host = "localhost";
    $port = "5432";
    $dbname = "TrabajoPractico2";
    $user = "postgres";
    $pass = "";

    $connect = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass") or die('No se ha podido conectar: ' . pg_last_error());

    return $connect;
  }
?>

