<?php
/*study_home.php
========================================
Designed and Developed by Sal64dd
contact: sal.uncd@gmail.com
========================================
*/
ini_set("include_path", "../../");
include "elib_depend/digilib_api/digilib_std.php";
$GLOBALS['std']['meta']['title'] = 'Digital Library | StudyZone';
$std['meta']['bin']['links']= '<link rel="stylesheet" type="text/css" href="elib_bin/Studyzone/study_style.css">';
$std['meta']['bin']['scripts'] ='';
digilib_std_Header();
function prt_studySidebar(&$list){
    echo '<div class="sidebar">';
    for($i=0;$i<$list[0];$i++){
        echo '<form action="elib_bin/Studyzone/study_home.php" method="get">
        <input type="text" hidden="true" name="stdtab" value="'.$i.'">
        <input type="submit" value="'.$list[1][$i].'">
    </form>';
    }
    echo '</div><div class="root">';
    $default_flag=0;
    for($i=0;$i<$list[0];$i++){
        if(isset($_GET["stdtab"])){
            if($_GET["stdtab"]==$i){
                $list[2][$i]();
                $default_flag=$i+1;
                break;
        }}
    }
    if(!$default_flag){
        $list[2][0]();
        $default_flag=1;
    }
    echo '<style>.body-cont .sidebar form:nth-of-type('.$default_flag.')
    {background: #fff;box-shadow: 0px 0px 8px rgba(100,100,100,0.5);}
    </style>';
    
}

include "elib_custom/StudyZone_home.sal";

echo '</div>';
digilib_std_Footer();
?>

