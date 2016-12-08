<?php

ini_set("include_path", "../../");
include "elib_depend/digilib_api/digilib_std.php";

dev("","");
dev("start","here");
if(!isset($_GET["DIVIJ"])){
    echo 'wrong';
    exit;
}
$getvar = mysql_escape_string(clean_input($_GET["DIVIJ"]));
if($getvar == ""){
    exit;
}

$sql3[0] = 1;
$sql3[1][0] = "DELETE FROM `user_passreset_temp` WHERE onetime_serial='$getvar'";

dev("removing data", $sql3[1][0]);

$ret3 = simonsays($sql3);
if($ret3[0][0]){
    dev("error",$ret3[0][1]);
    die("Here");
}
echo '<script type="text/javascript"> document.location = "../../elib_bin/Account/Account.php";</script>';