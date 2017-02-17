<html>
<head>
<link rel="stylesheet" href="screen.css" type="text/css" />
<link rel="stylesheet" type="text/css"
href="android.css" media="only screen and (max-width: 600px)" />
<link rel="stylesheet" type="text/css"
href="desktop.css" media="screen and (min-width: 601px)" />
<!--[if IE]>
<link rel="stylesheet" type="text/css" href="desktop.css" media="all" />
<![endif]-->
<meta name="viewport" content="user-scalable=no, width=device-width" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<title>Jonathan Stark</title>
<script>
	
	if (window.innerWidth && window.innerWidth <= 600) {
$(document).ready(function(){
$('#header ul').addClass('hide');
$('#header').append(
'<div class="leftButton" onclick="toggleMenu()">Menu</div>');
});
function toggleMenu() {
$('#header ul').toggleClass('hide');
$('#header .leftButton').toggleClass('pressed');
}
}
</script>


<style>

	#header div.pressed {
-webkit-border-image: url(images/button_clicked.png) 0 8 0 8;
}
	body {
background-color: #ddd; /* Background color */
color: #222; /* Foreground color used for text */
font-family: Helvetica;
font-size: 14px;
margin: 0; /* Amount of negative space around the
outside of the body */
padding: 0; /* Amount of negative space around the
inside of the body */
}
#header h1 {
margin: 0;
padding: 0;
}
#header h1 a {
background-color: red;
border-bottom: 1px solid #666;
color: #222;
display: block;
font-size: 20px;
font-weight: bold;
padding: 10px 0;
text-align: center;
text-decoration: none;
}
#header ul {
list-style: none;
margin: 10px;
padding: 0;
}

#header ul li a {
background-color: #FFFFFF;
border: 1px solid #999999;
color: #222222;
display: block;
font-size: 17px;
font-weight: bold;
margin-bottom: -1px;
padding: 12px 10px;
text-decoration: none;
}


#content, #sidebar {
padding: 10px;
}
#footer {
display: none;
}
#header h1 a {
text-shadow: 0px 1px 1px #fff;
background-image: -webkit-gradient(linear, left top, left bottom, from(#ccc), to(#999));
}
#header ul li:first-child a {
-webkit-border-top-left-radius: 8px;
-webkit-border-top-right-radius: 8px;
}
#header ul li:last-child a {
-webkit-border-bottom-left-radius: 8px;
-webkit-border-bottom-right-radius: 8px;
}
#header ul.hide {
display: none;
}


#header div.leftButton {
position: absolute;
top: 7px;
left: 6px;
height: 30px;
font-weight: bold;
text-align: center;
color: white;
text-shadow: rgba (0,0,0,0.6) 0px -1px 1px;
line-height: 28px;
border-width: 0 8px 0 8px;
-webkit-border-image: url(images/button.png) 0 8 0 8;
}
</style>


</head>
<body>	
<div id="container">
<div id="header">
	<div class="leftButton" onclick="toggleMenu()">Menu</div>
<h1><a href="./">Jonathan Stark</a></h1>


<div id="utility">
<ul>
<li><a href="about.html"><div class="blend"></div></a></li>
<li><a href="blog.html">Blog</a></li>
<li><a href="contact.html">Contact</a></li>
</ul>
</div>
<div id="nav">
<ul>
<li><a href="consulting-clinic.html">Consulting Clinic</a></li>
<li><a href="on-call.html">On Call</a></li>
<li><a href="development.html">Development</a></li>
<li><a href="http://www.oreilly.com">O'Reilly Media, Inc.</a></li>
</ul>
</div>
</div>




<div id="content">
<h2>About</h2>
<p>Jonathan Stark is a web developer, speaker, and author. His
consulting firm, Jonathan Stark Consulting, Inc., has attracted
clients such as Staples, Turner Broadcasting, and the PGA Tour.
...
</p>

<div class="blend"></div>
  <div class="blend1"></div>
  <div class="blend"></div>
   <style type="text/css">
.blend {
    min-height: 100px;
    background-image: url("images/bear.jpg");
    background-color: #148;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-blend-mode: luminosity;
    margin: 3px;
}
.blend1 {
    min-height: 100px;
    background-image: url("images/elephants.jpg");
    background-color: #148;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    background-blend-mode: luminosity;
    margin: 3px;
}
  </style>	


</div>
<div id="sidebar">
<img alt="Manga Portrait of Jonathan Stark"
src="jonathanstark-manga-small.png"/>
<p>Jonathan Stark is a mobile and web application developer who the
Wall Street Journal has called an expert on publishing desktop
data to the web.</p>
</div>
<div id="footer">
<ul>
<li><a href="services.html">Services</a></li>
<li><a href="about.html">About</a></li>
<li><a href="blog.html">Blog</a></li>
</ul>
<p class="subtle">Jonathan Stark Consulting, Inc.</p>
</div>
</div>
</body>
</html>
