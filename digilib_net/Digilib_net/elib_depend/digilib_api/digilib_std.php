<?php 
/*digilib_std.php
========================================
Designed and Developed by Sal64dd
contact: sal.uncd@gmail.com
========================================
Function List: 
	digilib_std_Header();
	digilib_std_Footer();
*/
require_once "elib_depend/digilib_api/config.php";
require_once "elib_depend/digilib_api/config_std.php";
include_once("elib_depend/digilib_api/fx_high/UI.php");
include_once("elib_depend/digilib_api/digilib_dev.php");
include_once("elib_depend/digilib_api/digilib_user.class");
require_once 'elib_depend/digilib_api/htmlpurifier/library/HTMLPurifier.auto.php';

function digilib_std_Header(){
	include('elib_depend/digilib_api/std/meta.obj');
	include('elib_depend/digilib_api/std/header.obj');
	include('elib_depend/digilib_api/std/navibar.obj');

}
function digilib_std_Footer(){
	include('elib_depend/digilib_api/std/footer.obj');
	include('elib_depend/digilib_api/std/para.obj');
}

?>