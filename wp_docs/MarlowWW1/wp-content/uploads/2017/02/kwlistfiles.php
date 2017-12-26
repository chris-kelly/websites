<?php include ('common/cache1sec.php');

// kwdlistfiles.php function lists all files within the directory its is placed and subdirectory 
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

if(isset($_GET['filetype']))
{
  $filetype=$_GET['filetype'];

  if($filetype=='image'){$filetypes=array('.jpg','.gif','.png','.bmp','.jpeg');}
  else if($filetype=='directory'){$filetypes[0]='directory';}
  else if($filetype=='all'){$filetypes[0]='all';}
  else{$filetypes[0]='.'.$filetype;}

}else{$filetype='none'; $filetypes[0]='none';}

if(isset($_GET['limit'])){$limit=$_GET['limit'];}else{$limit=1000;} // max loop limit

$listcount=0;
$filelist1[0]='no files or directories';

// level 1

$j=0;
$i[$j]=0;
$directory[$j]='';
$storedfiles[$j]=scandir($fl.$directory[$j]);

while ( ($i[$j]<count($storedfiles[$j])) && ($i[$j]<$limit))
{
  $temp=strrchr($storedfiles[$j][$i[$j]],"."); // file extension
  if($temp){$thisfiletype=strtolower($temp);}else{$thisfiletype='directory';}
  
  if( (in_array($thisfiletype,$filetypes)) || (in_array('all',$filetypes)) && ($storedfiles[$j][$i[$j]]!='.') && ($storedfiles[$j][$i[$j]]!='..'))
  {
    $filelist1[$listcount]=$directory[$j].'/'.$storedfiles[$j][$i[$j]];
    $listcount++;
  }else{}

    /* test
    echo $storedfiles[$j][$i[$j]].' - ';
    if(is_dir($fl.$storedfiles[$j][$i[$j]]) ){echo ' dir ('.$fl.$storedfiles[$j][$i[$j]].')';}else{echo ' file ';}
    test end */ 

  // level 2
  if( (is_dir($fl.$storedfiles[$j][$i[$j]])) && ($storedfiles[$j][$i[$j]]!='.') && ($storedfiles[$j][$i[$j]]!='..') )
  {

    $k=$j;
    $j++;
    $i[$j]=0;
    $directory[$j]=$fl.$storedfiles[$k][$i[$k]];
    $storedfiles[$j]=scandir($directory[$j]);

    while ( ($i[$j]<count($storedfiles[$j])) && ($i[$j]<$limit))
    {
      $temp=strrchr($storedfiles[$j][$i[$j]],"."); // file extension
      if($temp){$thisfiletype=strtolower($temp);}else{$thisfiletype='directory';}
  
      if( (in_array($thisfiletype,$filetypes)) || (in_array('all',$filetypes)) && ($storedfiles[$j][$i[$j]]!='.') && ($storedfiles[$j][$i[$j]]!='..'))
      {
        $filelist1[$listcount]=$directory[$j].'/'.$storedfiles[$j][$i[$j]];
        $listcount++;
      }else{}

      // level 3
      if( (is_dir($directory[$j].'/'.$storedfiles[$j][$i[$j]])) && ($storedfiles[$j][$i[$j]]!='.') && ($storedfiles[$j][$i[$j]]!='..') )
      {

        include('kwlistfiles_incla.php');

        while ( ($i[$j]<count($storedfiles[$j])) && ($i[$j]<$limit))
        {

          include('kwlistfiles_inclb.php');

        // level 4
        if( (is_dir($directory[$j].'/'.$storedfiles[$j][$i[$j]])) && ($storedfiles[$j][$i[$j]]!='.') && ($storedfiles[$j][$i[$j]]!='..') )
        {

          include('kwlistfiles_incla.php');

          while ( ($i[$j]<count($storedfiles[$j])) && ($i[$j]<$limit))
          {

            include('kwlistfiles_inclb.php');


          // level 5
          if( (is_dir($directory[$j].'/'.$storedfiles[$j][$i[$j]])) && ($storedfiles[$j][$i[$j]]!='.') && ($storedfiles[$j][$i[$j]]!='..') )
          {

            include('kwlistfiles_incla.php');

            while ( ($i[$j]<count($storedfiles[$j])) && ($i[$j]<$limit))
            {

              include('kwlistfiles_inclb.php');

            // level 6
            if( (is_dir($directory[$j].'/'.$storedfiles[$j][$i[$j]])) && ($storedfiles[$j][$i[$j]]!='.') && ($storedfiles[$j][$i[$j]]!='..') )
            {

              include('kwlistfiles_incla.php');

              while ( ($i[$j]<count($storedfiles[$j])) && ($i[$j]<$limit))
              {

                include('kwlistfiles_inclb.php');

              // level 7
              if( (is_dir($directory[$j].'/'.$storedfiles[$j][$i[$j]])) && ($storedfiles[$j][$i[$j]]!='.') && ($storedfiles[$j][$i[$j]]!='..') )
              {

                include('kwlistfiles_incla.php');

                while ( ($i[$j]<count($storedfiles[$j])) && ($i[$j]<$limit))
                {

                  include('kwlistfiles_inclb.php');
  
                // level 8
                if( (is_dir($directory[$j].'/'.$storedfiles[$j][$i[$j]])) && ($storedfiles[$j][$i[$j]]!='.') && ($storedfiles[$j][$i[$j]]!='..') )
                {

                  include('kwlistfiles_incla.php');

                  while ( ($i[$j]<count($storedfiles[$j])) && ($i[$j]<$limit))
                  {

                    include('kwlistfiles_inclb.php');
  
                  // level 9
                  if( (is_dir($directory[$j].'/'.$storedfiles[$j][$i[$j]])) && ($storedfiles[$j][$i[$j]]!='.') && ($storedfiles[$j][$i[$j]]!='..') )
                  {

                    include('kwlistfiles_incla.php');

                    while ( ($i[$j]<count($storedfiles[$j])) && ($i[$j]<$limit))
                    {

                      include('kwlistfiles_inclb.php');
  
                    // level 10
                    if( (is_dir($directory[$j].'/'.$storedfiles[$j][$i[$j]])) && ($storedfiles[$j][$i[$j]]!='.') && ($storedfiles[$j][$i[$j]]!='..') )
                    {

                      include('kwlistfiles_incla.php');

                      while ( ($i[$j]<count($storedfiles[$j])) && ($i[$j]<$limit))
                      {

                        include('kwlistfiles_inclb.php');
  
//

//

                      $j=9; // level 10 while
                      $i[$j]++;
                      } // end level 10 while
                }else{} // end level 10 if

                    $j=8; // level 9 while
                    $i[$j]++;
                    } // end level 9 while
              }else{} // end level 9 if

                  $j=7; // level 8 while
                  $i[$j]++;
                  } // end level 8 while
            }else{} // end level 8 if

                $j=6; // level 7 while
                $i[$j]++;
                } // end level 7 while
          }else{} // end level 7 if

              $j=5; // level 6 while
              $i[$j]++;
              } // end level 6 while
          }else{} // end level 6 if

            $j=4; // level 5 while
            $i[$j]++;
            } // end level 5 while
          }else{} // end level 5 if


          $j=3; // level 4 while
          $i[$j]++;
          } // end level 4 while
        }else{} // end level 4 if

        $j=2; // level 3 while
        $i[$j]++;
        } // end level 3 while       
      }else{} // end level 3 if

    $j=1; // level 2 while
    $i[$j]++;
    } // end level 2 while
  }else{} // end level 2 if

$j=0; // level 1 while - reset $j for this level as come out of deeper (higher $j) level
$i[$j]++;
} // end level 1 while


include ('common/header_adminbasic.php');

echo '
<style type="text/css">
p {line-height:1.1; margin:0;padding:0}
</style>

</head>

<body>

<div>
';
echo '<p>'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'</p><p>&nbsp;</p>';

if($filetype=='none')
{
  echo '
  <form method="GET" action="kwlistfiles.php">
  <p class="lh13">File List options: 
  <a href="kwlistfiles.php?filetype=all"> All </a>,
  <a href="kwlistfiles.php?filetype=image"> Images </a>,
  <a href="kwlistfiles.php?filetype=directory"> Directories </a>,<br />
  or input file extension (no dot) <input type="text" name="filetype"/><input type="submit" value="Submit"/> ,<br />
  <a href="kwdisplayfiles.php"> or Explore </a>
  </p>
  </form>';
}else
{
  echo '<p> <a href="kwlistfiles.php">Back to kwlistfiles options </a>, <a href="kwdisplayfiles.php"> Explore </a> </p><p style="font-size:4pt">&nbsp;</p>';
  echo '<p> Filter: '.$filetype.'</p>';

  $i=0;
  while ($i<count($filelist1))
  {
   echo '<p>'.$filelist1[$i].'</p>';
   $i++;
  }


$filelist2=implode(",\r",$filelist1);
$textfile1=fopen('files_for_download/filelist.csv',"w+"); //w+ = Read/Write. Opens and clears the contents of file; or creates a new file if it doesn't exist
fwrite($textfile1,$filelist2); // writes the file list in this file.
fclose($textfile1);

echo '
<p>&nbsp;</p>
<p><a href="files_for_download/filelist.csv"> Download list in a .csv file </a></p>
<p>&nbsp;</p>
';

}

echo '
<p>&nbsp;</p><p><a href="logout.php"> Log Out </a></p><p>&nbsp;</p>
</div>

</body>
</html>
';

} // end of login if
?>