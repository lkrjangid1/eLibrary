<?php

ini_set("include_path", "../../");
include "elib_depend/digilib_api/digilib_std.php";

dev("","");
dev("start","here");
if(!isset($_GET["DIVIJ"])){
    echo 'wrong';
    exit;
}
$getvar = $_GET["DIVIJ"];
if($getvar == ""){
    exit;
}
dev("got the var","$getvar");
$sql[0] = 1;
$sql[1][0] = "SELECT * FROM `user_passreset_temp` WHERE onetime_serial='$getvar'";
dev("getting data", $sql[1][0]);
$ret1 = simonsays($sql);
if($ret1[0][0]){
    dev("error",$ret1[0][1]);
    die("");
}
if( !$ret1[1][0]->num_rows ){
    dev("error","no match");
    die("");
}
dev("Fetching Assocs","");
$row = $ret1[1][0]->fetch_assoc();
$sql2[0] = 1;
$sql2[1][0] = ($row["sql_data"]);

dev("","");
dev("got data", mysql_escape_string($sql2[1][0]));
dev("","");

dev("Running query","");

$ret2 = simonsays($sql2);
if($ret2[0][0]){
    dev("error",$ret2[0][1]);
}
dev("Done","");
dev("","");
$sql3[0] = 1;
$sql3[1][0] = "DELETE FROM `user_passreset_temp` WHERE onetime_serial='$getvar'";

dev("removing data", $sql3[1][0]);

$ret3 = simonsays($sql3);
if($ret3[0][0]){
    dev("error",$ret3[0][1]);
    die("Here");
}
echo '<script type="text/javascript"> document.location = "../../elib_bin/Account/Account.php";</script>';