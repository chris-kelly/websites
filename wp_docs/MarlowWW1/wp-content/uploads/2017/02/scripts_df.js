
function lgpic(picture,pwidth,pheight)
{
	var obj=document.getElementById("panel2");
	var text1="";
	document.getElementById("panel2").innerHTML = text1 ;
	var obj=document.getElementById("panel1");
	if(pwidth==0){var psize='height:'+pheight;}else{var psize='width:'+pwidth;}
	var text1="<div alt='' title='' class='pointer' onClick='closepanel1()'> ";
	text1=text1+"<img src="+picture+" alt='' title='' style='border:solid 30px white; "+psize+"px' /> ";
	text1=text1+"<p class='f12 bgwhite'> &nbsp;<img src='images/close.gif' alt='close' title='close'/></p> </div>"
	document.getElementById("panel1").innerHTML = text1 ;	
}

function fullpic(picture)
{
	var obj=document.getElementById("panel1");
	var text1="";
	document.getElementById("panel1").innerHTML = text1 ;
	var obj=document.getElementById("panel2");
	var text1="<div alt='' title='' class='pointer' onClick='closepanel1()'> ";
	text1=text1+"<img src="+picture+" alt='' title='' style='border:solid 30px white' /> ";
	text1=text1+"<p class='f12 bgwhite'> &nbsp;<img src='images/close.gif' alt='close' title='close'/></p> </div>"
	document.getElementById("panel2").innerHTML = text1 ;
	window.scrollTo (0,0);	
}

//

function closepanel1()
{
	var obj=document.getElementById("panel1");
	var text1="";
	document.getElementById("panel1").innerHTML = text1 ;	
	var obj=document.getElementById("panel2");
	var text1="";
	document.getElementById("panel2").innerHTML = text1 ;
}