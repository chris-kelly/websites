<html>
<head>
<title>Lucky Punks</title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link href='https://fonts.googleapis.com/css?family=Amatic+SC:700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>

<script>

function openSubmenu() {
    
    var v = document.getElementById("submenu");
    if (v.className != "no_show")
       {v.className = "no_show"}
    else {v.className = "show"}
    
    var w = document.getElementById("rotate1");
    if (w.className != "rotatesmall")
       {w.className = "rotatesmall"}
    else {w.className = "rotateoff"}

    var x = document.getElementById("rotate2");
    if (x.className != "rotatebig")
       {x.className = "rotatebig"}
    else {x.className = "rotateoff"}
    
    var y = document.getElementById("top");
    if (y.className != "not_visible")
       {y.className = "not_visible"}
    else {y.className = "visible"}

    var z = document.getElementById("bottom");
    if (z.className != "not_visible")
       {z.className = "not_visible"}
    else {z.className = "visible"}  

}

</script>

</head>
<body>
<div id="wrapper">
<div id="header">
<nav onclick="openSubmenu()" style="cursor: pointer; border-radius:1vw; z-index:1">
	<div id="top"></div>
	<div style="margin:3vw 0 3vw 0;" id="rotate1"></div>
	<div style="top: -3.7vw" id="rotate2"></div>
	<div id="bottom"></div>
</nav>
<div id="submenu" class="no_show">
	<a href=" http://lucky-punks.com/TestBuild/wordpress/live" style="text-decoration:none; color:white">live</br></a>
	<a href=" http://lucky-punks.com/TestBuild/wordpress/listen" style="text-decoration:none; color:white">listen</br>
	<a href=" http://lucky-punks.com/TestBuild/wordpress/us" style="text-decoration:none; color:white">us</br>
	<a href=" http://lucky-punks.com/TestBuild/wordpress/gallery" style="text-decoration:none; color:white">gallery</br>
</div>

<div id="title">
	<a href="http://lucky-punks.com/TestBuild/wordpress/" style="text-decoration:none; color:white"><div id="headline">LUCKY PUNKS</div></a>
</div>

</div>