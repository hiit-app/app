<!DOCTYPE html>
<html lang="en" style="height:100%">
<?php include("header.php"); ?>


<body style="height:100%" >
	<div id="header">
<div id="volver" class="leftButton" onclick="toggleMenu()"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></div>
	    
	    <h1><a href="javascript:void()">ENTRENAMIENTO</a></h1>
    </div>

<style>
	
</style>


<div id="menutorsopierna1" class="navegacion" style="display:none; text-align:center;height:35px"><nav>blabla</nav></div>

<div id="menutorsopierna" style="display:none; width:100%; ">
<style>
	

	#navegacion_torsoypierna_input{
		margin-left:auto; 
    margin-right:auto;
    
	}
</style>
	<nav style="">
		<table id="navegacion_torsoypierna_input"  >
			<th id="torso" style="width:30%; cursor: pointer;">Torso</th> 
			<th id="pierna" style="cursor: pointer;; width:30%; opacity: 0.5;">Pierna</th>
		</table>
	</nav>
</div>

<div id="afd" style="height:100%; padding:0px">
     <div class="blend"><h4 style="cursor: pointer;" id="blend">Entreno Aeróbico</h4></div>
     <div class="blend1"><h4 style="cursor: pointer;" id="blend1">Fuerza</h4></div>
     <div class="blend2"><h4 style="cursor: pointer;" id="blend2">Estiramientos</h4></div>
  </div>

 <?php include("percepcion.php"); ?>
    <!-- ACA UBICO MENU QUE DICE LOS EJERCICIOS A HACER -->
<div id="menu_a">
<div>
<ul>
<li><a href="about.html" class="escala_esfuerzo" >Press Banca</a></li>
<li><a href="blog.html" class="escala_esfuerzo" >Jalones Nuca</a></li>
<li><a href="contact.html" class="escala_esfuerzo" >Dominadas</a></li>
</ul>
</div>
<div id="nav">
<ul>
<li><a href="consulting-clinic.html" class="escala_esfuerzo">Remo</a></li>
<li><a href="on-call.html" class="escala_esfuerzo">Press Francés</a></li>
<li><a href="development.html" class="escala_esfuerzo">Tricep Polea</a></li>
<li><a href="http://www.oreilly.com" class="escala_esfuerzo">Hombro </a></li>
</ul>
</div>
</div>

<div id="menu_b">
<div>
<ul>
<li><a href="about.html" class="escala_esfuerzo">Sentadilla</a></li>
<li><a href="blog.html" class="escala_esfuerzo">HipThrust</a></li>
<li><a href="contact.html" class="escala_esfuerzo">Peso Muerto</a></li>
</ul>
</div>
<div id="nav">
<ul>
<li><a href="consulting-clinic.html" class="escala_esfuerzo">Zancada</a></li>
<li><a href="on-call.html" class="escala_esfuerzo">Cuadriceps</a></li>
<li><a href="development.html" class="escala_esfuerzo">Femorales</a></li>
<li><a href="http://www.oreilly.com" class="escala_esfuerzo">Gemelos</a></li>
</ul>
</div>
</div>
<!-- ARRIBA UBICO MENU QUE DICE LOS EJERCICIOS A HACER -->


  
</body>




<script>

/*Menu donde se elige entre torso o pierna, y estan 
dispuestos los ejercicios como pressbanca, dominadas, etc... */

$(".escala_esfuerzo").click(function(){
	event.preventDefault();
$("#menutorsopierna1").css("display", "block")
$("#menutorsopierna1").text("Series de Activación")
$("#menutorsopierna").css("display", "none")
//alert(this.text)
	$("#menu_a").css("display", "none");
	$("#menu_b").css("display", "none");

$(".ejercicio").text(this.text);
$("#rm").text("3RM");  // aca se pone el texto del rm
	$("#agregar_escala").css("display", "block");
	$(".Menu_ejercicio_seleccionado_parte_de_arriba").css("margin", "-20px")
	$(".Menu_ejercicio_seleccionado_parte_de_arriba").css("display", "block");
})












	$(document).ready(function(){


		$("#blend1").click(function(){
$("#volver").attr("id", "volver_menu");




var clase= $(this).attr('id');
$("#afd").css("display", "none");
$("#menutorsopierna").css("display", "block")
/*Aca se agrega codigo que tiene que ver con eleccion en menu principal,
se elige fuerza hasta ahora febrero 2017, y se cambian menus... */

$("#menu_a").css("display", "block");
//$(".navegacion").css("display", "none")
		})

$("#pierna").click(function(){
	$("#menu_a").css("display", "none");
	$("#menu_b").css("display", "block");
	$(this).css("opacity","1");
	$("#torso").css("opacity", 0.5);
})

$("#torso").click(function(){
	$("#menu_b").css("display", "none");
	$("#menu_a").css("display", "block");
	$(this).css("opacity","1");
	$("#pierna").css("opacity", 0.5);
})

	})



	function toggleMenu(){

//alert($("#menutorsopierna1").text())
if($("#menutorsopierna1").text() == "Series de Entreno"){
/*Abajo se ubica código que limpia los input de kgs, el nav, ..*/










	alert("No Salgas Cuando se está haciendo el entreno!");


/*Arriba se ubica código que limpia los input de kgs, el nav, ..*/

}else if($("#agregar_escala").css("display")=="block"){

$("#menutorsopierna").css("display", "block");
    $("#menutorsopierna1").css("display", "none");
	
	$(".Menu_ejercicio_seleccionado_parte_de_arriba").css("display", "none");
    $("#menu_a").css("display", "block");
	$("#agregar_escala").css("display", "none");

}else{


	$("#menu_a").css("display", "none");
	$("#menu_b").css("display", "none");
	$("#menutorsopierna").css("display", "none");
	$("#afd").css("display", "block");



}


if(document.getElementById("series_activacion") && !($("#menutorsopierna1").text() == "Series de Entreno")){

    $("#menutorsopierna").css("display", "block");
    $("#menutorsopierna1").css("display", "none");
	$("section").empty();
    $("section").remove();
    $("br").remove();

}



} //termina function toggle

</script>



</html>