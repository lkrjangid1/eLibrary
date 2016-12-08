<?php
/*quick.php
========================================
Designed and Developed by Sal64dd
contact: sal.uncd@gmail.com
========================================
*/
ini_set("include_path", "../../");
include "elib_depend/digilib_api/digilib_std.php";
$GLOBALS['std']['meta']['title'] = 'Digital Library | QuickLinks';
digilib_std_Header();
?>

<div id="mot_main_container">
    <h1>Trade of Usreoth ver_0.1</h1>
    <hr>
    <div id="mot_gplane">
    </div>
</div>
<style>
    #mot_main_container{
        display: block;
        position: relative;
        width:640px;
        height:480px;
        left: calc((100% - 640px) / 2);
        border-radius: 8px;
        box-shadow: 0px 0px 8px #888;
        overflow: hidden;
        background: black;
    }
    #mot_main_container h1{
        color: white;
        font-family: mics_5_r;
        font-size: 18px;
        color: #0f0;
        text-align:left;
        margin:5px;
    }
</style>
<?php
digilib_std_Footer();
?>
