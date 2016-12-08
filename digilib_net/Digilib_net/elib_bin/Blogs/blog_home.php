<?php
/*blog_home.php
========================================
Designed and Developed by Sal64dd
contact: sal.uncd@gmail.com
========================================
*/
ini_set("include_path", "../../");
include "elib_depend/digilib_api/digilib_std.php";
$GLOBALS['std']['meta']['title'] = 'Digital Library | Blogs';
digilib_std_Header();
include("elib_custom/Blogs_home.sal");
digilib_std_Footer();
?>

