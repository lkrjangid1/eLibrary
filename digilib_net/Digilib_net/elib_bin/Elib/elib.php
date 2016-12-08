<?php
/*elib.php
========================================
Designed and Developed by Sal64dd
contact: sal.uncd@gmail.com
========================================
*/
ini_set("include_path", "../../");
include "elib_depend/digilib_api/digilib_std.php";
$GLOBALS['std']['meta']['title'] = 'Digital Library | Elibrary';
$std['meta']['bin']['links']= '<link rel="stylesheet" type="text/css" href="elib_bin/Elib/elib.css">';
$std['meta']['bin']['scripts'] ='<script src="elib_bin/Elib/elib.js"></script>';
digilib_std_Header();
include("elib_custom/Elib_home.sal");
digilib_std_Footer();
?>