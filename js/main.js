function HandleKeyPress(e) {
  var key = e.keyCode || e.which;
  if (key == 13) {
    AgregarPelicula();
  }
}

function AgregarPelicula() {
  var pelicula = document.getElementById("peliculaInt");
  var table = document.getElementById("pelisAgregadasTbl");

  var row = table.insertRow(table.rows.length);

  var data1 = row.insertCell(0);
  var data2 = row.insertCell(1);
  
  data1.innerHTML = pelicula.value;
  data2.innerHTML = "<input type='button' value='-' onclick='EliminarPelicula(this)'>";
  pelicula.value ="";
}

function EliminarPelicula(elemento) {
  var i = elemento.parentNode.parentNode.rowIndex;
  document.getElementById("pelisAgregadasTbl").deleteRow(i);
}
