<?php include ('common/cache1sec.php');



// kwdisplayfiles.php function displays files in a given directory
// 'directory' should be set via $_GET. 
// This file is general .. all specific items are set in parameters.php

$fl='../';  // relative to folder that includes files for display

if( (isset($_COOKIE['kwflist']))&&($_COOKIE['kwflist']=='z2xc') ){$login='y';}else{$login='n';}
if($login!='y')
{
  $title='log in required';
  include ('common/header_adminbasic.php');

  echo '</head><body><p>&nbsp;</p><p><a href="index.php"> Log in required </a></p><p>&nbsp;</p></body></head>';
  
}else
{

include ('parameters.php');

include ('common/header_adminbasic.php');

echo '
<script type="text/javascript" src="scripts_df.js"></script>
<style type="text/css">
#panel1 {position:fixed; top:0px; right:0px; background:white}
#panel2 {position:absolute; top:0px; right:0px; background:white}
.pointer {cursor:pointer}
</style>
</head>
<body>
<div id="panel1"></div><div id="panel2"></div>
';

// $directory is passed through in links to return to the same file folder
if (    ( isset($_GET['directory'])) && ( substr($_GET['directory'], 0, strlen($folder1)) == $folder1 )     )
{ $directory = $_GET['directory']; }
else
{ $directory = $folder1.'/';}

	if ( !isset($folder1) ){$folder1=$directory;} else {} // sets $folder1 to the first directory level set.

	echo '<div style="width:950px; margin:auto"> <!-- Overall div -->';

	// start of specific page content

	include('common/admin_toplinks.php');

/* test
echo $directory;
*/

	echo '
	<p class="f8">&nbsp;</p>

	<div style="width:985px; margin:auto"><p class="f18 navy mgn05 left"> Display files in selected folder</p></div>

	<p class="f8">&nbsp;</p>

	<p style="text-align:left; margin-top:15px;margin-bottom:15px" class="f12"> This page displays files in a selected folder. For image files you can choose to display an enlarged or full size image, click on that to close it. For .pdf files, you can choose to open them in a separate window. </p>
	<p style="text-align:left; margin-top:15px;margin-bottom:15px" class="f12"> Click on the folder <img src="images/Folder.gif"/> to view its contents. Click on <img src="images/FolderUp.gif" /> to move higher up in the folder hieracy.</p>

	<p class="f8">&nbsp;</p>

	';

	include('include/filesinfolder.php');


// end of specific page content

echo '</div> <!-- end of overall div -->';

include ('common/footer_adminbasic.php');

} // end of login if

?>