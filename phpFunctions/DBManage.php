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

  function RegistrarPersona($nombre, $apellido, $usuario, $pass) {
    //Creo una instancia a la base de datos.
    $conexion = InstanciarConexion();

    //Encriptación de la password.
    $passIncript = $pass . "incrip";

    //Creo el texto del insert.
    $queryInsert = "INSERT INTO PERSONA (USUARIO, CLAVE, NOMBRE, APELLIDO) VALUES('$usuario', '$passIncript', '$nombre', '$apellido')";

    //Ejecuto la query.
    $result = pg_query($queryInsert) or die('No se ha podido realizar el registro: ' . pg_last_error());

    //Cierro la Conexion.
    pg_close($conexion);

    return "TRUE";
  }

  function ObtenerNombre($usuario) {
    //Creo una instancia a la base de datos.
    $conexion = InstanciarConexion() or die('Imposible instanciar.');

    //Text de query.
    $query = "SELECT APELLIDO, NOMBRE FROM PERSONA WHERE USUARIO='$usuario'";

    //Ejecuto query
    $result = pg_query($query) or die('No se ha podido obtener el nombre del usuario: ' . pg_last_error());

    while($row = pg_fetch_row($result)) {
      $nombre = $row[0] . ', ' . $row[1];
    }

    //cierro la conexion.
    pg_close($conexion);

    return $nombre;
  }

  function CargarPelicula($usuario, $pelicula) {
    //Creo una instancia a la base de datos.
    $conexion = InstanciarConexion() or die('Imposible instanciar.');

    //Text de query.
    $queryInsertPeli = "INSERT INTO PELIS_QUE_VIO(PELICULA_ID, USUARIO) VALUES('$pelicula', '$usuario');";

    //Ejecuto la query.
    $result = pg_query($queryInsertPeli) or die('No se ha podido registrar la pelicula: ' . pg_last_error());

    //Cierro la Conexion.
    pg_close($conexion);

    return "TRUE";
  }

  function ArmarTabla($usuario) {
    //Creo una instancia a la base de datos.
    $conexion = InstanciarConexion() or die('Imposible instanciar.'); 
  }
?>
