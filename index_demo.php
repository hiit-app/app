<!DOCTYPE html>
<html lang="en" style="height:100%">
<?php include("header.php"); ?>


<body style="height:100%" >
	<div id="header">
           <div id="volver" class="leftButton" onclick="toggleMenu()"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span></div>
	    
	    <h1><a href="javascript:void()">ENTRENAMIENTO</a></h1>
    </div>




<div id="menutorsopierna" style="display:none"><nav><table ><th id="torso" style="width:30%; cursor: pointer;">Torso</th> <th id="pierna" style="cursor: pointer;; width:30%; opacity: 0.5;">Pierna</th></table></nav></div>

<div id="afd" style="height:100%">
     <div class="blend"><h4 style="cursor: pointer;" id="blend">Entreno Aeróbico</h4></div>
     <div class="blend1"><h4 style="cursor: pointer;" id="blend1">Fuerza</h4></div>
     <div class="blend2"><h4 style="cursor: pointer;" id="blend2">Estiramientos</h4></div>
  </div>


    <!-- ACA UBICO MENU QUE DICE LOS EJERCICIOS A HACER -->
<div id="menu_a">
<div>
<ul>
<li><a href="about.html">Press Banca</a></li>
<li><a href="blog.html">Jalones Nuca</a></li>
<li><a href="contact.html">Dominadas</a></li>
</ul>
</div>
<div id="nav">
<ul>
<li><a href="consulting-clinic.html">Remo</a></li>
<li><a href="on-call.html">Press Francés</a></li>
<li><a href="development.html">Tricep Polea</a></li>
<li><a href="http://www.oreilly.com">Hombro </a></li>
</ul>
</div>
</div>

<div id="menu_b">
<div>
<ul>
<li><a href="about.html" id="hola">Sentadilla</a></li>
<li><a href="blog.html">HipThrust</a></li>
<li><a href="contact.html">Peso Muerto</a></li>
</ul>
</div>
<div id="nav">
<ul>
<li><a href="consulting-clinic.html">Zancada</a></li>
<li><a href="on-call.html">Cuadriceps</a></li>
<li><a href="development.html">Femorales</a></li>
<li><a href="http://www.oreilly.com">Gemelos</a></li>
</ul>
</div>
</div>
<!-- ARRIBA UBICO MENU QUE DICE LOS EJERCICIOS A HACER -->


  
</body>




<script>

/*var variable= document.getElementById("hola");
variable.addEventListener("click", (event)=>{
	event.preventDefault();
	$("html").load("haciendotorsopierna.php")
})*/



	$(document).ready(function(){


		$("#blend1").click(function(){
$("#volver").attr("id", "volver_menu");




var clase= $(this).attr('id');
$("#afd").css("display", "none");
$("#menutorsopierna").css("display", "block")
$("#menu_a").css("display", "block");
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


$("#volver_menu").click(function(){
	$("#menu_a").css("display", "none");
	$("#menu_b").css("display", "none");
	$("#menutorsopierna").css("display", "none");
	$("#afd").css("display", "block");
})
}

</script>



</html>