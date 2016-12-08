<?php
/*show_thread.php
========================================
Designed and Developed by Sal64dd
contact: sal.uncd@gmail.com
========================================
*/
//if(!isset($_GET["thread_id"])){
//    header('Location: '."../Home/home.php");
//}

ini_set("include_path", "../../");
include "elib_depend/digilib_api/digilib_std.php";
$GLOBALS['std']['meta']['title'] = 'Digital Library | DCQ';
digilib_std_Header();

echo'<div class="comment hd_divs">
    <h3>Thread: </h3>
    <hr></div>';
echo '<style>
.body-cont .hd_divs{
    display: block; width: auto;
    height: auto;
    padding:3px;
    text-align: left;
    font-family: display_3_r;
    color:#333;
    font-size: 18px; 
    margin:8px;
}
.body-cont .hd_divs h3{
    font-family: display_4_r;
    font-size: 28px;
    text-align: left;
    color: #cdcdcd;
    margin-top:10px;
}
.body-cont .hd_divs h1{
    font-family: display_1_r;
    font-size: 24px;
    text-align: left;
    color: #3EC6EF;
    padding:5px;
    text-shadow: 0px 0px 2px #3EC6EF;
}
.body-cont .hd_divs .quote_in_sum{
    float:right;
    margin:20px; 
    margin-left: 30px; 
    width:300px; height:auto; 
    font-size:28px; color: #FF8930; 
    font-family: display_1_i;
    text-shadow: 0px 0px 1px #FF8930;
}
.body-cont .hd_divs p{
    font-family: display_3_r;
    font-size: 18px;
    text-align: left;
    color: #555;
    padding:5px;
    word-spacing: 3px;
    line-height: 24px;
    letter-spacing:1px;
}
.body-cont .hd_divs hr{
    border: none;
    border-top: solid 1px #cdcdcd;
}
<style>';

digilib_std_Footer();