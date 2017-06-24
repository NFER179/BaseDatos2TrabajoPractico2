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

    $_n = 1;
    

    echo "<tbody>";
    while($_row = pg_fetch_row($_pelisvistas)) {
      echo $_n%2==0 ? "<tr class='alt'>" : "<tr>";
      echo "<td>" . $_row[0] . "</td>";
//      echo "<td style='width:10px;height:10px;'><input type='button' value='-'></td>";
      echo "</tr>";
      $_n = $_n + 1;
    }
    echo "<tbody>";
  }

  function ArmarTablaPeliculasVistas(){
    $_paresPorPelicula = ParesPorPelicula();

    echo "<table>";
    echo "<thead>";
    echo "<tr><th colspan='2' align='center'>Pares que vieron las mismas peliculas</th></tr>";
    echo "<tr> <th align='center'>Usuario1</th> <th align='center'>Usuario2</th> </tr>";
    echo "</thead>";
    echo "<tbody>";

    $_n = 1;

    while($_row = pg_fetch_row($_paresPorPelicula)) {
      echo $_n%2==0 ? "<tr class='alt'>" : "<tr>";
      echo "<td>" . $_row[0] . "</td><td>" . $_row[1] . "</td>";
      echo "</tr>";
    }

    echo "<tbody>";
    echo "</table>";
    
  }
?>

