<?php #cache10mins sets to load a fresh page rather than cached page 10 mins from when first cached

// include in page before any output

Header("Cache-Control: must-revalidate");
$offset= 60 * 10;
$ExpStr= "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
Header($ExpStr);

?>