<?php /* kwfilelist_inclb.php  */

    $k=$j;
    $j++;
    $i[$j]=0;
    $directory[$j]=$directory[$k].'/'.$storedfiles[$k][$i[$k]];
    $storedfiles[$j]=scandir($directory[$j]);

?>