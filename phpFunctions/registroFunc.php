<?php
  include 'Conexion.php';
  function ExisteUsuario($usuario) {
    //Crea la instancia a la base de datos.
    $conexion = InstanciarConexion();

    //Escribo la consulta.
    $query = "SELECT 'X' FROM PERSONA WHERE USUARIO = '$usuario'";
    
    //Ejecuto la query.
    $_result = pg_query($query) or die("Falla al momento de consultar por el usuario ingresado.");
   
    //Consulto el redultado.
    while($_row = pg_fetch_row($_result)) {
      $_resultado = $_row[0];
    }

    return !empty($_resultado);
  }
?>

