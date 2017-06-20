<?php
  include 'DBManage.php';

  function GuardarPelicula($usuario, $pelicula) {
    return GuardarPeliculaPara($usuario, $pelicula);
  }

  function PelisQueVio($usuario) {
    return PeliculasQueVio($usuario);
  }

  function ParesPorPelicula() {
    //Devuelve un lista de array ['Pelicula', 'Usuario1', 'Usuario2']
    return ParesQueVieronLaMismaPelicula();
  }
?>
