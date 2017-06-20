<?php
  include 'Conexion.php';
  include 'Encriptador.php';

  function RegistrarPersona($nombre, $apellido, $usuario, $pass) {
    //Creo una instancia a la base de datos.
    $conexion = InstanciarConexion();

    //Encriptación de la password.
    $passEncripted = Encriptar($pass);

    //Creo el texto del insert.
    $queryInsert = "INSERT INTO PERSONA (USUARIO, CLAVE, NOMBRE, APELLIDO) VALUES('$usuario', '$passEncripted', '$nombre', '$apellido')";

    //Ejecuto la query.
    $result = pg_query($queryInsert) or die('No se ha podido realizar el registro: ' . pg_last_error());

    //Cierro la Conexion.
    pg_close($conexion);

    return TRUE;
  }

  function LogInFor($usuario, $pass) {
    //Creo una instancia a la base de datos.
    $conexion = InstanciarConexion();

    //Encriptación de la password.
    $passEncripted = Encriptar($pass);

    //Creo el texto del insert.
    $queryInsert = "SELECT 'X' FROM PERSONA WHERE USUARIO = '$usuario' AND CLAVE = '$passEncripted'";

    //Ejecuto la query.
    $result = pg_query($queryInsert) or die('No se ha podido realizar el registro: ' . pg_last_error());

    while($row = pg_fetch_row($result)) {
      $_registrado = $row[0];
    }

    //Cierro la Conexion.
    pg_close($conexion);

    return !empty($_registrado);
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

  function GuardarPeliculaPara($usuario, $pelicula) {
    //Creo una instancia a la base de datos.
    $_conexion = InstanciarConexion() or die("Imposible instanciar la conexion.");

    //Texto de query.
    $_queryInsertPelicula = "INSERT INTO PELIS_QUE_VIO (USUARIO, PELICULA_ID) VALUES('$usuario', '$pelicula')";

    //Ejecuto la consulta.
    $_resultado = pg_query($_queryInsertPelicula);

    //Guarldo la lista de errores.
    $_errores = pg_last_error($_conexion);

    //Cierro conexion.
    pg_close($_conexion);

    if(empty($_errores)) {
      return TRUE;
    } else {
      return FALSE;
    }
  }

  function PeliculasQueVio($user) {
    //Creo una instancia a la base de datos.
    $_conexion = InstanciarConexion() or die('Imposible instanciar la conexion.');

    //Text de la Query.
    $_queryPeliculasParaUser = "SELECT PELICULA_ID FROM PELIS_QUE_VIO WHERE USUARIO = '$user'";

    //Ejecuto la Query.
    $_resultado = pg_query($_queryPeliculasParaUser);

    //Cierro la Conexion.
    pg_close($conexion);

    return $_resultado;
  }

  function ParesQueVieronLaMismaPelicula() {
    //Creo una Instancia a la base de datos.
    $_conexion = InstanciarConexion() or die("error");

    //Texto de la query.
    $_queryParesPeliculas = "SELECT DISTINCT PQV1.USUARIO, PQV2.USUARIO FROM PELIS_QUE_VIO PQV1, PELIS_QUE_VIO PQV2 WHERE NOT EXISTS (SELECT 'X' FROM PELIS_QUE_VIO PQV3 WHERE PQV1.USUARIO = PQV3.USUARIO AND NOT EXISTS (SELECT 'X' FROM PELIS_QUE_VIO PQV4 WHERE PQV3.PELICULA_ID = PQV4.PELICULA_ID AND PQV4.USUARIO = PQV2.USUARIO)) AND NOT EXISTS (SELECT 'X' FROM PELIS_QUE_VIO PQV5 WHERE PQV1.USUARIO = PQV5.USUARIO AND NOT EXISTS (SELECT 'X' FROM PELIS_QUE_VIO PQV6 WHERE PQV5.PELICULA_ID = PQV6.PELICULA_ID AND PQV6.USUARIO = PQV2.USUARIO)) AND PQV1.USUARIO > PQV2.USUARIO";

    //Ejecuto la query.
    $_result = pg_query($_queryParesPeliculas);

    //Cierro la conexion.
    pg_close($conexion);

    return $_result;
  }
?>
