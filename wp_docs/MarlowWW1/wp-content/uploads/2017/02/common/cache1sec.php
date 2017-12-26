<?php #cache1sec will load a fresh page if selected more than 1 sec from when first cached

// include in page before any output

Header("Cache-Control: must-revalidate");
$offset= 1;
$ExpStr= "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
Header($ExpStr);

?>