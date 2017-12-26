<?php #cache1hour sets to load a fresh page rather than cached page 1 hour from when first cached

// include in page before any output

Header("Cache-Control: must-revalidate");
$offset= 60 * 60;
$ExpStr= "Expires: " . gmdate("D, d M Y H:i:s", time() + $offset) . " GMT";
Header($ExpStr);

?>