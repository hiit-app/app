$(document).ready(function(){

$("html").click(function(){
	//alert("asdf")
	var kg= $("#kg").val();
	var reserva= $("#reserva").val();

	var datos= '
<table><th>'+kg+'</th><th>'+reserva+'</th></table>
	';

	$("#agregando").append(datos);
})
})
