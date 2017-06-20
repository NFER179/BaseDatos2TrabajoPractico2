<?php
  include 'Pelicula.php';

  function GuardarPeliculasVistas($usuario, $pelicula) {
    if(GuardarPelicula($usuario, $pelicula)) {
      return "Se guardo correctamente.";
    } else {
      return "Hubo un problema al guardar.";
    }
  }

  function PeliculasVistas($usuario) {
    $_pelisvistas = PelisQueVio($usuario);

    while($_row = pg_fetch_row($_pelisvistas)) {
      echo "<tr>";
      echo "<td>" . $_row[0] . "</td>";
      echo "</tr>";
    }
  }

  function ArmarTablaPeliculasVistas(){
    $_paresPorPelicula = ParesPorPelicula();

    echo "<table>";
    echo "<tr><th colspan='2'>Pares que vieron las mismas peliculas</th></tr>";
    echo "<tr> <th>Usuario1</th> <th>Usuario2</th> </tr>";

    while($_row = pg_fetch_row($_paresPorPelicula)) {
      echo "<tr>";
      echo "<td>" . $_row[0] . "</td><td>" . $_row[1] . "</td>";
      echo "</tr>";
    }

    echo "</table>";
    
  }
?>
