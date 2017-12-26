<?php /* kwfilelist_inclb.php  */

      $temp=strrchr($storedfiles[$j][$i[$j]],"."); // file extension
      if($temp){$thisfiletype=strtolower($temp);}else{$thisfiletype='directory';}
  
      if( (in_array($thisfiletype,$filetypes)) || (in_array('all',$filetypes)) && ($storedfiles[$j][$i[$j]]!='.') && ($storedfiles[$j][$i[$j]]!='..'))
      {
        $filelist1[$listcount]=$directory[$j].'/'.$storedfiles[$j][$i[$j]];
        $listcount++;
      }else{}

?>