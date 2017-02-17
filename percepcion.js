$(document).ready(function(){
	function data_base(){
var db;
var shortName = 'hiit';
var version = '1.0';
var displayName = 'Kilo';
var maxSize = 65536;
db = openDatabase(shortName, version, displayName, maxSize);
db.transaction(
function(transaction) {
transaction.executeSql(
'CREATE TABLE IF NOT EXISTS entries ' +
' (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT, ' +
' date DATE NOT NULL, food TEXT NOT NULL, ' +
' calories INTEGER NOT NULL );'
);
}
);

} // Termina la función
data_base();
$("#ingresa_serie").click(function(){
  
  var kg= $("#kg").val();
  var reserva= $("#reserva").val();

  var datos= 
  '<section id="borrar"><table style="" class="tabla_borrar" id="series_activacion" style="color:white;"><th style="padding-left:8vh" >'+kg+'</th><th style="padding-left:30vh;">'+reserva+'</th></table></section>';

$("ul").append(datos);















/*Aca abajo, dentro del if, se pone el codigo de cuando se alcanza la primera serie de entreno, y se cambia el peso al 90% y se 
empiezan las series ... */
if(document.getElementById("kg").disabled){

//alert("el boton ya esta disabled");


switch($("#reserva").val()){
	case "0":
//termina_serie();
setTimeout(termina_serie, 3000)
alert("Finalizaste la serie");
/*Reiniciar todo */


function termina_serie(){
$("section").empty();
$("section").remove();
$("br").remove();
$("#menutorsopierna1").text("Series de Activación") // Cambia el nav, pone título correpondiente
$("#menutorsopierna1").css("display", "none");
$("#menutorsopierna").css("display", "block");
var boton_kg= document.getElementById("kg");
$("#reserva").val("");
$("#kg").val("");
$("#kg").css("background", "white")
$("#kg").css("color", "black");
boton_kg.disabled= false;
$(".Menu_ejercicio_seleccionado_parte_de_arriba").css("display", "none");
 $("#menu_a").css("display", "block");
	$("#agregar_escala").css("display", "none");
}









	break;

	default:
$("#reserva").val("");
	break;
}



}else{
	




	if(reserva<=1){
/*Aca abajo, dentro del if, se pone el codigo de cuando se alcanza la primera serie de entreno, y se cambia el peso al 90% y se 
empiezan las series ... */


var texto= '<h3>¡Has conseguido tu primera serie de entrenamiento!</h3><br><h6>Ahora comenzarás con el resto de las series. Debes hacer entre 4 y 7 series. Si haces menos quiere decir que calculaste mal tus repeticiones en reserva, debiste haber usado menos peso. Si haces mas de 7 series, quiere decir que exageraste la intensidad de tus repeticiones de reserva: la verdad es que podías cargar mas peso! </h6><br><input onclick="close2" style="z-index:100" type="button" id="close_boton" value="Aceptar">';
$(".modal-body").html(texto)  //Modal que indica el paso a las series de entreno
               $("section").empty();   //borra los elementos de la activacion
               $("section").remove();  //borra los elementos de la activacion
               $("br").remove();       //borra los elementos de la activacion
        $("#menutorsopierna1").text("Series de Entreno") // Cambia el nav, pone título correpondiente
var texto_previo= $(".ejercicio").text();
var texto_rm= $("#rm").text();
//alert(texto_previo)
var boton_kg= document.getElementById("kg");
boton_kg.value= kg*0.9;
$("#reserva").val("");
$("#kg").css("background-image", "-webkit-gradient(linear, left top, left bottom, from(grey), to(black))")
$("#kg").css("color", "white")
boton_kg.disabled= true;
$(".ejercicio").text(texto_previo +" "+texto_rm);
$("#rm").text(kg*0.9+" Kilos")


  //alert(modal.style.display) 
 // $("#modal").attr("id", "modal12");
  var modal = document.getElementById('modal');
  modal.style.display= "block";
//modal.removeEventListener("click", close1);
//document.getElementById("modal").removeEventListener("click", close1, true);
//var boton=document.getElementById("close_boton")
//boton.addEventListener("click", close2, false)	
}else{
	$("#kg").val("");
$("#reserva").val("");
}
}
/*Aca Arriba, dentro del if, se pone el codigo de cuando se alcanza la primera serie de entreno, y se cambia el peso al 90% y se 
empiezan las series ... */
/*Aca Arriba, dentro del if, se pone el codigo de cuando se alcanza la primera serie de entreno, y se cambia el peso al 90% y se 
empiezan las series ... */







 
})
})