<?php include ('common/cache1sec.php');

// kwdisplayfiles.php function displays files in a given directory
// 'directory' should be set via $_GET. 
// This file is general .. all specific items are set in parameters.php

$fl='../';  // relative to folder that includes files for display

include ('parameters.php');

if( (isset($_COOKIE['kwflist']))&&($_COOKIE['kwflist']=='z2xc') )
{
  $login='y';
}
else
{

  if(isset($_POST['password']))
  {
    $pass=$_POST['password'];
    if(hash('sha256', $pass)==$pwcheck){$login='y';}else{$login='n';}
    setcookie('kwflist','z2xc',0, '/', '', 0, 0);
  }else{$login='n';}

}

include ('common/header_adminbasic.php');

echo '
</head>
<body>
<div>
';

if($login!='y')
{
  echo '
  <form method="POST" action="index.php">
  <p><input type="password" name="password" /><input type="submit" value="Log In"/></p>
  </form>
  ';
}
else
{
  echo '<p>&nbsp;</p><p> <a href="kwdisplayfiles.php" > Continue </a></p><p>&nbsp;</p>';
}

echo '
</div>
</body>
</html>
';
