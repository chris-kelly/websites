<?php include ('common/cache1sec.php');

$title='log out';

if( !isset($_COOKIE['kwflist']) ){}
else {setcookie('kwflist','',time()-3600, '/', '', 0, 0);}

include ('parameters.php');
include ('common/header_adminbasic.php');
echo '
</head>
<body>
';
echo '<p>&nbsp;</p><p>'.$homelink.'</p>';
echo '<p>&nbsp;</p><p>Logged out ... &nbsp;&nbsp;&nbsp;<a href="index.php"> Log In </a><p>&nbsp;</p></p>';

?>