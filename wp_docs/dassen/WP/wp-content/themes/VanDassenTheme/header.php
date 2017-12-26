<html>

<head>
<title>DassenVanDassen</title>
<meta name="description" content="Crochet reinvented.">
<meta name="keywords" content="">
<meta name="Google sitemap" content="/google_sitemap.xml.gz">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

<link href="stylesheet.css" rel="stylesheet" type="text/css">

<style>
@font-face { font-family: baskvill; src: url('fonts/BASKVILL.woff'); }
@font-face { font-family: eraslght; src: url('fonts/ERASLGHT.woff'); }
@font-face { font-family: calibril; src: url('fonts/calibril.woff'); }
.text { font-family: calibril; }
@font-face { font-family: gothics; src: url('fonts/GOTHIC.woff'); }
</style>

<script type="text/javascript" src="java/jquery.js"></script>
<script type="text/javascript">
$(window).scroll(function () {
	var height = $('body').height();
    var scrollTop = $(window).scrollTop();
    if(scrollTop>106){
        $('#menubar').css({ 'position': 'fixed', 'top' : '0', 'left' : '0', 'right' : '0', 'margin' : '0 auto', 'opacity': '0.95', 'box-shadow': '0px 0px 15px rgba(0,0,0,0.3)'});
	$('#title').css({ 'visibility': 'hidden'});
	$('#content').css({ 'margin-top': '35'});
	$('#logo_DVD').css({ 'visibility': 'visible'});
	$('#signorm').css({ 'z-index': '0'});
    } else {
        $('#menubar').css({ 'position': 'relative', 'top': '6', 'opacity': '0.95', 'box-shadow': 'none'});
	$('#title').css({ 'visibility': 'visible'});
	$('#content').css({ 'margin-top': '0'});
	$('#logo_DVD').css({ 'visibility': 'hidden'});
	$('#signorm').css({ 'z-index': '3'});
    }
});
</script>

<?php wp_head(); ?> 
</head>

<body style="margin:0; padding:0; background:white">
<div id="title" class="title" style="text-align:center"><a href="index.php" class=title><span class="title_1">D</span><span class="title_2">ASSEN</span><span class="title_1">V</span><span class="title_2">AN</span><span class="title_1">D</span><span class="title_2">ASSEN</span></a></div>
<img id=signorm class="signorm" src="http://dassen.christopher-kelly.co.uk/images/signature.png" style="position:absolute; top: 120px; left:75%; width:180px; z-index:3; ">

<nav id="menubar" class="menubar">
<ul>
	<li>ABOUT US<ul>
		<li><a href="?page_id=98">About Joanna</a></li>
		<li><a href="?page_id=140">About Louis</a></li>
		<li><a href="?page_id=264">About Chris & Ross</a></li>
		<li><a href="?page_id=252">The Blog</a></li>
<li><a href="?page_id=380">Contact us</a></li>
		</ul>
	</li>
	<li>TUTORIALS<ul>
		<li><a href="?page_id=148">Learn & Lunch</a>
		<li><a href="?page_id=378">Learn to Crochet</a></li>
		<li><a href="?page_id=478">One-to-one</a></li>
		<li><a href="?page_id=373">Online tutorial - 1</a></li>
		<li><a href="">Online tutorial - 2</a></li>
		</ul>
	</li>
	<li>SHOP THE COLLECTION<ul>
		<li><a href="">Coming Soon</a></li>	
		</ul>
	<li>GALLERY<ul>
		<li><a href="?page_id=2">Soft Launch Party</a></li>
		</ul>
	</li>
</ul>
<!-- COMMENTED OUT <div id="logo_DVD" style="display:inline-block; position:relative; top:-35px; left:-20px; font-family:baskvill; visibility:hidden"><a href="http://dassen.christopher-kelly.co.uk/WP/" class="logo_DVD">DASSENVANDASSEN</a></div> -->
</nav>