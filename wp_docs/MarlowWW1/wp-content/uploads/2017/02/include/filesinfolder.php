<?php

// $directory variable is set in parent kwdisplayfiles.php


echo '<table><tr>
<td style="width:300px">
<div onclick="location.href=\'kwdisplayfiles.php?directory=' .dirname($directory). '/\'" style="cursor:pointer" class="floatleft"><p><img src="images/FolderUp.gif" class="floatleft"/> Up One Level </p></div>
<div style="width:16px" class="floatleft"> <p>&nbsp;</p></div>
<div onclick="location.href=\'kwdisplayfiles.php?directory=' . $folder1 . '/\'" style="cursor:pointer" class="floatleft"><p><img src="images/FolderUp.gif" class="floatleft"/> Top Level </p></div>
<div class="clearleft"></div>

</td>
<td style="width:70px"><p class="center"><b> Filesize </b><br/> Kb </p></td>
<td style="width:90px"><p class="center"><b> Dimensions </b><br/> W x H px </p></td>
<td style="width:100px"><p class="left" style="margin-left:10px">&nbsp;</br>&nbsp;  </p></td>
<td style="width:100px"><p class="left" style="margin-left:10px">&nbsp;</br>&nbsp;  </p></td>
<td style="width:100px"><p class="left" style="margin-left:10px">&nbsp;</br>&nbsp;  </p></td>
</tr>';

// display open folder and directory name
echo '<tr><td class="itemlist"><p><img src="images/FolderOpened.gif" class="floatleft"> '.$directory.'</p></td><td colspan="3"></td></tr>';
$storedfiles=scandir($fl.$directory);

// list directories first
$i=0;
	while ($i<count($storedfiles))
	{
		$directory1=$directory.$storedfiles[$i];
		if ( is_dir($fl.$directory1) && ($storedfiles[$i]!=='.') && ($storedfiles[$i]!=='..') )
		{
		echo '<tr><td  class="itemlist"><div onclick="location.href=\'kwdisplayfiles.php?directory=' . $directory1 . '/\'" style="cursor:pointer"><p style="margin-left:16px"><img src="images/Folder.gif" class="floatleft"/> '.$storedfiles[$i].'</p></div></td><td  class="itemlist"></td><td  class="itemlist"></td><td  class="itemlist"></td></tr>';
		} else { }
	$i++;
	}

// then loop through again and list files
$i=0;
	while ($i<count($storedfiles))
	{
		$directory1=$directory.$storedfiles[$i];
		if ( is_dir($fl.$directory1 )) { }
		else {
		$imagesize=getimagesize($fl.$directory1);

		$j=0; $infooroptions='';

			// if file extension is an image, display thumbnail, otherwise display the extension as a text.
			$ext=strtolower(substr($directory1,strlen($directory1)-3,strlen($directory1))); // gets the file extension (ie last three letters of the string)
			if( ($ext=='jpg') || ($ext=='png') || ($ext=='gif') || ($ext=='bmp') ) 
			{
				if( (filesize($fl.$directory1)>500000) )
				{
					$pwidth=100; $pheight=0;
					$thumb='<div style="width:100px; height;60px" onclick="lgpic(\''.$fl.$directory1.'\',\''.$pwidth.'\',\''.$pheight.'\')" class="pointer"><p class="f14 bold">show</p></div>';
				}
				else
				{
					$thumb='<div style="width:100px; height:100px; overflow:hidden"><img src="'.$fl.$directory1.'" style="width:100px" class="floatleft"/></div>';
				}
				$pwidth=$imagesize[0]; $pheight=$imagesize[1];
				if( ($pwidth>$pwidthmax) || ($pheight>$pheightmax) )
				{
					if( ($pwidth/$pwidthmax)>($pheight/$pheightmax) ){$pwidth=$pwidthmax; $pheight=0;} else {$pheight=$pheightmax; $pwidth=0;}
				}
				else{}
				$option1='<div style="width:100px; height;60px" onclick="lgpic(\''.$fl.$directory1.'\',\''.$pwidth.'\',\''.$pheight.'\')" class="pointer"><p class="f14 bold">enlarge</p></div>';
				$option2='<div style="width:100px; height;60px" onclick="fullpic(\''.$fl.$directory1.'\')" class="pointer"><p class="f14 bold">full&nbsp;size</p></div>';
			} 
			else 
			{
				$thumb='<div style="width:80px; height:60px" class="floatleft bord01"><p class="center" style="margin-top:20px"> '.$ext.' file </p></div>';
				$option1=''; $option2='';
				if( ($ext=='pdf') || ($ext=='doc') || ($ext=='docx') || ($ext=='rtf') || ($ext=='txt') ) {$option2='<div style="width:100px; height;60px"><p class="f14 bold"><a href="'.$fl.$directory1.'" target="_blank">open</a></p></div>';} else {}
			}
		
		

		echo '<tr>
		<td  class="itemlist"><p style="margin-left:16px"> '.$storedfiles[$i].'&nbsp; </p></td>
		<td class="center itemlist"><p class="center "> '.round(filesize($fl.$directory1)/1000,1).' &nbsp;</p></td>
		<td class="center itemlist"><p class="center ">'.$imagesize[0].' x '.$imagesize[1] .'</p></td>
		<td class="center itemlist">'. $thumb .'</td>
		<td class="center itemlist">'. $option1 .'</td>
		<td class="center itemlist">'. $option2 .'</td>
		</tr>';
		}
	$i++;
	}

echo '</table>';

?>