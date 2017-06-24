/*function HandleKeyPress(e) {
  var key = e.keyCode || e.which;
  if (key == 13) {
    AgregarPelicula();
  }
}

function AgregarPelicula() {
  var pelicula = document.getElementById("_pelicula");
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
}*/

$("#_LogOut").click(function() {
  var _url = "phpFunctions/EliminarSesion.php";
  $.post( _url);
});

$("#_CargarPelicula").submit(function(event){

  event.preventDefault();

  var _peli = $("#_pelicula");

  if (!_peli.val()) {
    alert("No ingresar peliculas sin titulo.");
  } else {
    var _url = "phpFunctions/AgregarPelicula.php";
    $.get( _url, { nombrePelicula : _peli.val() }).done(function(){
        var table = $("#pelisAgregadasTbl tbody");
        var fila = "<tr><td>nico</td><td><input type='button' value='-' onclick='EliminarPelicula(this)'></td></tr>";
        table.appendChild(fila);
        _peli.val() = " ";
    });
  };
});
