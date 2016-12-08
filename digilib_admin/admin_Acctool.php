<?php
/*search.php
========================================
Designed and Developed by Sal64dd
contact: sal.uncd@gmail.com
========================================
*/

session_start();
include "addlibBook_v2.obj";
include "addstudyBook_v2.obj";
ini_set("include_path", "../digilib_net/Digilib_net/");
include "elib_depend/digilib_api/digilib_std.php";
$GLOBALS['std']['meta']['title'] = 'Digital Library | Search';

prt_head();

function prt_head(){
    echo '
<b>Digilib Content Accumulator Tool</b>
<i> ver 2.6.1 beta</i>
<br>
Developed by Sal64dd
<hr>
';
}

if(isset($_SESSION["USR_MOD"]["stat"])){
    if($_SESSION["USR_MOD"]["stat"]==1){
        Acc_mains();
    }
    else{Log_in();}}
else{Log_in();}
function Log_in(){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        if($_POST["email_id"]=="" || $_POST["pass_code"]=="" || $_POST["cap_code"]==""){
            echo '<i>*All field Required.</i><br>';
        }
        else{
            if(strcasecmp(" ".clean_input($_POST["cap_code"]), $_SESSION["capcode"])){
                echo '<i>*Captcha Incorrect.</i><br>';
            }
            elseif(!filter_var($_POST["email_id"], FILTER_VALIDATE_EMAIL)){
                echo '<i>*Email id Invalid.</i><br>';
            }
            else{
                //get user
                $logInQuery = 'SELECT `student_id`, `pass`, `first_name`, `last_name`,is_mod FROM `user_student_info` where `email_id`=\''.$_POST["email_id"].'\' AND `is_mod`>=1 AND `registered`=1;';
                
                $signin_db = new mysqli($GLOBALS["db_MYSQL_SERVER"], $GLOBALS["db_MYSQL_USER"], 
                                 $GLOBALS["db_MYSQL_Pass"], $GLOBALS["db_MYSQL_DB"]);
                if($signin_db->connect_errno > 0){
                    echo '*Unable to connect to database. Try again later!';
                }
                
                if(!$signin_result = $signin_db->query($logInQuery)){
                    echo '*There was an error in the Server. Please try again later.';
                }
                if($signin_result->num_rows == 0){
                }
                else{
                    $verif_row=$signin_result->fetch_assoc();
                    if($verif_row["pass"]!=digilib_twister128($_POST["pass_code"])){
                    }
                    else{
                        $_SESSION["USR_MOD"]["student_id"]=$verif_row["student_id"];
                        $_SESSION["USR_MOD"]["email_id"]=$_POST["email_id"];
                        $_SESSION["USR_MOD"]["first_name"]=$verif_row["first_name"];
                        $_SESSION["USR_MOD"]["last_name"]=$verif_row["last_name"];
                        $_SESSION["USR_MOD"]["mod_rank"]=$verif_row["is_mod"];
                        $_SESSION["USR_MOD"]["stat"]=1;
                        
                        $signin_result->free();
                        $signin_db->close();
                        
                        echo '<script>location.reload();</script>';
                    }
                    $signin_db->close();
                }
            }
            
        }
    }
    
    echo '<br>
    <form class="ufrm_m" action="admin_Acctool.php" method="POST">
    <input type="text" name="email_id" placeholder="Email"><br>
    <input type="password" name="pass_code" placeholder="password"><br><br>
    <img src="../digilib_net/digilib_net/elib_bin/Account/Cap.php"><br>
    <input type="text" name="cap_code"><br><br>
    <input type="submit" value="Login">
    </form>
    ';
    
}

function Acc_mains(){
    
    if(isset($_GET["logout"])){
        if($_GET["logout"]==logout){
            session_destroy();
            echo '<script>location.reload();</script>';
            return 0;
        }
    }
    
    echo '
    Status 
    <form id="pagectrl" method="GET" hidden style="display:none" action="admin_Acctool.php">
        <input type="text" id="selectpage" name="navi">
        <input type="submit" id="sendpagectrl">
    </form>
    [ 
    <span style="white-space: nowrap">
        <select id="pagesel" onchange="selectpage.value=this.value; pagectrl.submit();">
          <option value="1">eLibrary</option>
          <option value="2">StudyZone</option>
          <option value="3">QuickLinks</option>
          <option value="4">BMS</option>
          <option value="5">DCQMS</option>
        </select>
    ';

    if(isset($_GET["navi"])){
        echo'
        <script>
            pagesel.value='.$_GET["navi"].';
        </script>
        ';
    }
    else{
        $_GET["navi"]=1;
        echo'
        <script>
            pagesel.value='.$_GET["navi"].';
        </script>
        ';

    }

    echo'

    <script>
        var pagesel = document.getElementById("pagesel");
        var pagectrl = document.getElementById("pagectrl");
        var selectpage = document.getElementById("selectpage");

    </script>

    </span> 
    ] [ 
    <span style="white-space: nowrap">

        <form id="usrctrl" method="GET" style="display: inline-block" action="admin_Acctool.php">
            <input type="submit" name="logout" value="logout">
        </form></span> 


    ]
    <hr>
    <div class="sidebr" style="display:inline-block; width:130px;height:800px; border: dashed 1px #666;
    margin-right:30px; vertical-align:top; padding:5px">';
    AccNavi();
    echo '</div>
    <div class="frmdd" style="display:inline-block; width:calc(100% - 180px);height:auto; vertical-align:top">';
    Accforms(); 
    echo '</div>';
}

function Accforms(){
    
    if(!isset($_GET["navi"])){
        $_GET["navi"]=1;
    } 
    if($_GET["navi"]==1){
       dbooks();
    }
    elseif($_GET["navi"]==2){
       nbooks();
    }
    elseif($_GET["navi"]==3){
        qlinks();
    }
    elseif($_GET["navi"]==4){
        bms();
    }
    elseif($_GET["navi"]==5){
        dcqms();
    }
    else{
        dbooks();
    }
    
}
function AccNavi(){
    
    if(!isset($_GET["navi"])){
        $_GET["navi"]=1;
    } 
    if($_GET["navi"]==1){
        dbooks_navi();
    }
    elseif($_GET["navi"]==2){
        nbooks_navi();
    }
    elseif($_GET["navi"]==3){
        qlinks_navi();
    }
    elseif($_GET["navi"]==4){
        bms_navi();
    }
    elseif($_GET["navi"]==5){
        dcqms_navi();
    }
    else{               
      dbooks_navi();
    }
    
}

function nBookss(){
    if(!isset($_GET["tab"])){
        $_GET["tab"]=1;
    }
    if($_GET["tab"]==2){
            //change row
            if(isset($_SESSION["nBook"]["A_stat"])){
                if($_SESSION["nBook"]["A_stat"]==1){
                    echo '<b style="color:green"><i>Content Successfully Stored!</i></b>
                    <hr>';
                    $_SESSION["nBook"]["A_stat"]=0;
                }
            }
            $_nfrm2=array("frm"=>array("p_code"=>1, "err"=>""), 
                          "NBk_1"=>"", "NBk_2"=>"", "NBk_3"=>"", "NBk_4"=>"",
                          "NBk_5"=>"", "NBk_6"=>"", "NBk_7"=>"0", "NBk_8"=>"0",
                          "NBk_9"=>"", "NBk_10"=>0);

            if(!isset($_POST["NBk_1"]) || !isset($_POST["NBk_5"])){
                $_nfrm2["frm"]["p_code"]=1;
                $_nfrm2["frm"]["err"]="Fields with `*` are required.";
            }
            elseif($_POST["NBk_1"]=="" || $_POST["NBk_5"]==""){    
                $_nfrm2["frm"]["p_code"]=1;
                $_nfrm2["frm"]["err"]="Fields with `*` are required.";
            }
            else{

                //form handling
                ///*
                if($_POST["NBk_1"]!=clean_input($_POST["NBk_1"])){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Invalid Book title.";
                }
                elseif($_POST["NBk_5"]!=clean_input($_POST["NBk_5"]) || !preg_match("/^[0-9]*$/",$_POST["NBk_5"])){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Invalid grade/class field.";
                }
                else{
                    //title
                    $_nfrm2["NBk_1"]=$_POST["NBk_1"];

                    //class
                    $_nfrm2["NBk_5"]=$_POST["NBk_5"];

                    $_nfrm2["frm"]["p_code"]=0;

                    //check other fields

                    //download link
                    if(isset($_POST["NBk_2"])){
                        if($_POST["NBk_2"]!="" && 
                           preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",
                                      $_POST["NBk_2"])){
                            $_nfrm2["NBk_2"]=$_POST["NBk_2"];
                        }
                        elseif($_POST["NBk_2"]!=""){
                            $_nfrm2["frm"]["p_code"]=1;
                            $_nfrm2["frm"]["err"]="Invalid Download link.";
                        }
                    }

                    //buy link
                    if(isset($_POST["NBk_3"])){
                        if($_POST["NBk_3"]!="" && 
                           preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",
                                      $_POST["NBk_3"])){
                            $_nfrm2["NBk_3"]=$_POST["NBk_3"];
                        }
                        elseif($_POST["NBk_3"]!=""){
                            $_nfrm2["frm"]["p_code"]=1;
                            $_nfrm2["frm"]["err"]="Invalid buy link.";
                        }
                    }

                    //chapters
                    if(isset($_POST["NBk_4"])){
                        if($_POST["NBk_4"]!="" && 
                           preg_match("/^[0-9]*$/",
                                      $_POST["NBk_4"])){
                            $_nfrm2["NBk_4"]=$_POST["NBk_4"];
                        }
                        elseif($_POST["NBk_4"]!=""){
                            $_nfrm2["frm"]["p_code"]=1;
                            $_nfrm2["frm"]["err"]="Invalid Chapters field.";
                        }
                    }

                    //size
                    if($_nfrm2["NBk_2"]!=""){
                        if(!isset($_POST["NBk_6"])){
                            $_nfrm2["frm"]["p_code"]=1;
                            $_nfrm2["frm"]["err"]="Size field required if download link is provided.";
                        }
                        elseif($_POST["NBk_6"]=="" && !preg_match('#\d+(?:\.\d{1,2})?#',$_POST["NBk_6"])){
                            $_nfrm2["frm"]["p_code"]=1;
                            $_nfrm2["frm"]["err"]="Invalid value in Size field.";
                        }
                        else{
                            $_nfrm2["NBk_6"]=$_POST["NBk_6"];
                        }
                    }

                    //is avail
                    if(isset($_POST["NBk_7"])){
                        if($_POST["NBk_7"]=="1"){
                            $_nfrm2["NBk_7"]="1";
                        }
                    }
                    if(isset($_POST["NBk_8"])){
                        if($_POST["NBk_8"]=="1"){
                            $_nfrm2["NBk_8"]="1";
                        }
                    }

                    //chapter info
                    if(isset($_POST["NBk_9"])){
                        if($_POST["NBk_9"]!=""){
                            $_nfrm2["NBk_9"]=clean_input($_POST["NBk_9"]);
                        }
                        elseif($_POST["NBk_9"]!=""){
                            $_nfrm2["frm"]["p_code"]=1;
                            $_nfrm2["frm"]["err"]="Invalid Chapters Info field.";
                        }
                    }
                    
                    if(isset($_FILES["NBk_10"]["type"])){
                        $ext = "jpg";
                        $temp_loc="temp/temp_nbcs_01/";
                        $upload_exts = end(explode(".", $_FILES["NBk_10"]["name"]));
                        if ($_FILES["NBk_10"]["type"] === "image/jpeg" && $_FILES["NBk_10"]["size"] <= 76800 && $upload_exts==$ext){
                            if($_FILES["file"]["error"] > 0){
                                $_nfrm2["frm"]["p_code"]=1;
                                $_nfrm2["frm"]["err"]="File Upload Error:".$_FILES["NBk_10"]["error"];}
                            else{
                                if (file_exists($temp_loc."NCERT_BOOK_COVER".session_id()."jpg")){
                                    $_nfrm2["frm"]["p_code"]=1;
                                    $_nfrm2["frm"]["err"]="SERVER UNDERWORK-file already exists: RESTART SESSION.";}
                                else{$_nfrm2["Nbk_10"]=1;}}}
                        elseif($_FILES["NBk_10"]["type"]!=""){
                            $_nfrm2["frm"]["p_code"]=1;
                            $_nfrm2["frm"]["err"]="Image format is invalid.";}
            }
                    
                    // */

            //updating data
            if($_nfrm2["frm"]["p_code"]==0){
                //Query string
                ///*
                $qusta = '
    #NCERT BOOK CONTENT UPDATE QUERY-------------------------------------------
    #'.$_SESSION["USR_MOD"]["student_id"].'|'.$_SESSION["USR_MOD"]["email_id"].'
    #'.$_SERVER['REMOTE_ADDR'].'|'.$_SERVER['HTTP_USER_AGENT'].'|'.$_SERVER['HTTP_REFERER'].'
    #'.date("h:i:sa").'|'.date("Y.m.d").'
    #I('.$_nfrm2["Nbk_10"].')
    UPDATE `ncert_book_info` SET `book_title`=\''.$_nfrm2["NBk_1"].'\', `book_link`=\''.$_nfrm2["NBk_2"].'\', `buy_link`=\''.$_nfrm2["NBk_3"].'\', `chapter_no`=\''.$_nfrm2["NBk_4"].'\', `grade`=\''.$_nfrm2["NBk_5"].'\', `chapter_info`=\''.$_nfrm2["NBk_9"].'\', `size`=\''.$_nfrm2["NBk_6"].'\', `isAvailLib`=\''.$_nfrm2["NBk_7"].'\', `isAvailDown`=\''.$_nfrm2["NBk_8"].'\'
    WHERE `book_id`=\''.$_SESSION["nbk_upd"]["book_id"].'\';
    #------------------------------------------------------------------
    ';
                // */ 
                
                //Write to files
                ///*
                $nBook = fopen("Acc_log/books/nBook.sql", "a") or die("Unable to open main Content File!");
                fwrite($nBook, $qusta);
                fclose($nBook);

                $nBook_usrBackup_file = fopen("Acc_log/backup/nBook_".$_SESSION["USR_MOD"]["student_id"]."_".date("Y-m-d").'_'.date("h-is-a").".sql", "a") or die("Unable to create Backup Content File!");
                fwrite($nBook_usrBackup_file, $qusta);
                fclose($nBook_usrBackup_file);

                $log_file = fopen("Acc_log/log/user.sql", "a") or die("Unable to open main log File!");
                $log_txt='
    @'.$_SESSION["USR_MOD"]["student_id"].'>Update_Syn(Book_'.$_SESSION["USR_MOD"]["student_id"].'_'.date("Y-m-d").'_'.date("h-is-a").'.sql);
    ';
                fwrite($log_file, $log_txt);
                fclose($log_file);
                
                // */

                //run the SQL
                ///*
                $nbk_db = new mysqli($GLOBALS["db_MYSQL_SERVER"], $GLOBALS["db_MYSQL_USER"], 
                             $GLOBALS["db_MYSQL_Pass"], $GLOBALS["db_MYSQL_DB"]);
                if($nbk_db->connect_errno > 0){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Can't connect to SQL, backed to Acc file.";
                }
                if(!$nbk_result = $nbk_db->query($qusta)){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Can't connect to SQL, backed to Acc file";
                }
                
                if($_nfrm2["Nbk_10"]==1){
            
                        $nbk_cvrloc=$GLOBALS["rootdir"]."elib_database/database_study/cover/";
                        if(!$nbk_pid_res=$nbk_db->query("SELECT book_id FROM `ncert_book_info` WHERE book_title='".$_nfrm2['NBk_1']."';")){
                            $_nfrm2["frm"]["p_code"]=1;
                            $_nfrm2["frm"]["err"]="Can't connect to SQL, can't find result!";
                        }
                        else{
                            $nbk_pid=$nbk_pid_res->fetch_assoc();
                            move_uploaded_file($_FILES["NBk_10"]["tmp_name"], $nbk_cvrloc.$nbk_pid["book_id"].".jpg");
                        }


                }
                
                $nbk_db->close();

                $_SESSION["nBook"]["A_stat"]=1;
                echo '<script>window.location = "'.strtok($_SERVER["REQUEST_URI"],'?').'?navi=2&tab=2'.(isset($_GET["book_id"])?"&book_id=".$_GET["book_id"]:"").'";</script>';
                return 0;
                
                
                // */


            }}}
            
        if($_nfrm2["frm"]["p_code"]==1){
                
    //getting content row data
    ///*
    echo '
        <div class="Nbk_sql_view_selector" 
        style="display:inline-block;vertical-align:top; width:150px; height: 800px; 
        background:#eee; overflow-X: scroll;overflow-Y:scroll padding:5px">
        ';
        $nbk_chg_db = new mysqli($GLOBALS["db_MYSQL_SERVER"], $GLOBALS["db_MYSQL_USER"], 
                         $GLOBALS["db_MYSQL_Pass"], $GLOBALS["db_MYSQL_DB"]);
            if($nbk_chg_db->connect_errno > 0){
                $_nfrm2["frm"]["p_code"]=1;
                $_nfrm2["frm"]["err"]="Can't connect to SQL";
            }
            else{
            if(!$nbk_chg_res12 = $nbk_chg_db->query("SELECT book_id, book_title FROM ncert_book_info where grade=12")){
                $_nfrm2["frm"]["p_code"]=1;
                $_nfrm2["frm"]["err"]="Can't connect to SQL";
            }
            else{
                echo "Class 12:<hr><ul>";
                for($i=1;$i<=$nbk_chg_res12->num_rows;$i++){
                    $nbk_chg_primer12=$nbk_chg_res12->fetch_assoc();
                    echo '<li><a style="display:block" href="admin_Acctool.php?navi=2&tab=2&book_id='.$nbk_chg_primer12["book_id"].'">'.$nbk_chg_primer12["book_title"].'</a></li>';
                }
                echo'</ul>';
            }
            if(!$nbk_chg_res11 = $nbk_chg_db->query("SELECT book_id, book_title FROM ncert_book_info where grade=11")){
                $_nfrm2["frm"]["p_code"]=1;
                $_nfrm2["frm"]["err"]="Can't connect to SQL";
            }
            else{
                echo "Class 11:<hr><ul>";
                for($i=1;$i<=$nbk_chg_res11->num_rows;$i++){
                    $nbk_chg_primer11=$nbk_chg_res11->fetch_assoc();
                    echo '<li><a style="display:block" href="admin_Acctool.php?navi=2&tab=2&book_id='.$nbk_chg_primer11["book_id"].'">'.$nbk_chg_primer11["book_title"].'</a></li>';
                }
                echo'</ul>';
            }
            if(!$nbk_chg_res10 = $nbk_chg_db->query("SELECT book_id, book_title FROM ncert_book_info where grade=10")){
                $_nfrm2["frm"]["p_code"]=1;
                $_nfrm2["frm"]["err"]="Can't connect to SQL";
            }
            else{
                echo "Class 10:<hr><ul>";
                for($i=1;$i<=$nbk_chg_res10->num_rows;$i++){
                    $nbk_chg_primer10=$nbk_chg_res10->fetch_assoc();
                    echo '<li><a style="display:block" href="admin_Acctool.php?navi=2&tab=2&book_id='.$nbk_chg_primer10["book_id"].'">'.$nbk_chg_primer10["book_title"].'</a></li>';
                }
                echo'</ul>';
            }
            if(!$nbk_chg_res9 = $nbk_chg_db->query("SELECT book_id, book_title FROM ncert_book_info where grade=9")){
                $_nfrm2["frm"]["p_code"]=1;
                $_nfrm2["frm"]["err"]="Can't connect to SQL";
            }
            else{
                echo "Class 9:<hr><ul>";
                for($i=1;$i<=$nbk_chg_res9->num_rows;$i++){
                    $nbk_chg_primer9=$nbk_chg_res9->fetch_assoc();
                    echo '<li><a style="display:block" href="admin_Acctool.php?navi=2&tab=2&book_id='.$nbk_chg_primer9["book_id"].'">'.$nbk_chg_primer9["book_title"].'</a></li>';
                }
                echo'</ul>';
            }
            }

    $nbk_chg_db->close();
    // */

    //getting data in the selected row
    if(isset($_GET["book_id"])){
        if($_GET["book_id"]!=""){
            $nbk_get_db = new mysqli($GLOBALS["db_MYSQL_SERVER"], $GLOBALS["db_MYSQL_USER"], 
                         $GLOBALS["db_MYSQL_Pass"], $GLOBALS["db_MYSQL_DB"]);
            if($nbk_chg_db->connect_errno > 0){
                $_nfrm2["frm"]["p_code"]=1;
                $_nfrm2["frm"]["err"]="Can't connect to SQL";
            }
            else{
                if(!$nbk_get_res = $nbk_get_db->query("SELECT book_title,book_link,buy_link,chapter_no,grade,size,isAvailLib,isAvailDown,chapter_info FROM ncert_book_info WHERE book_id='".$_GET["book_id"]."'")){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Can't connect to SQL";
                }
                else{
                    if($nbk_get_res->num_rows==1){
                        $nbk_get_primer=$nbk_get_res->fetch_assoc();
                        $_SESSION["nbk_upd"]["book_id"]=clean_input($_GET["book_id"]);
                        $_POST["NBk_1"]=$nbk_get_primer["book_title"];
                        $_POST["NBk_2"]=$nbk_get_primer["book_link"];
                        $_POST["NBk_3"]=$nbk_get_primer["buy_link"];
                        $_POST["NBk_4"]=$nbk_get_primer["chapter_no"];
                        $_POST["NBk_5"]=$nbk_get_primer["grade"];
                        $_POST["NBk_6"]=$nbk_get_primer["size"];
                        $_POST["NBk_7"]=$nbk_get_primer["isAvailLib"];
                        $_POST["NBk_8"]=$nbk_get_primer["isAvailDown"];
                        $_POST["NBk_9"]=$nbk_get_primer["chapter_info"];
                        $_POST["NBk_10"]=clean_input("../digilib_net/Digilib_net/elib_database/database_study/cover/".$_GET["book_id"].".jpg");
                        
                }}}}}

    //form
    ///*
    echo '</div>
    <form id="NcertBooks_ctrl" method="POST" action="admin_Acctool.php?navi=2&tab=2'.(isset($_GET["book_id"])?"&book_id=".$_GET["book_id"]:"").'" enctype="multipart/form-data" 
    style="display:inline-block;vertical-align:top; width:300px; height: auto;">
        <input type="text" hidden id="selectpage" name="navi" value="2">

        <p><b><i>'.$_nfrm2["frm"]["err"].'</i></b></p>

        <p>* Book title: <input type="text" name="NBk_1" value="'.(isset($_POST["NBk_1"])?$_POST["NBk_1"]:"").'"></p>

        <p>Download link: <input type="text" name="NBk_2" value="'.(isset($_POST["NBk_2"])?$_POST["NBk_2"]:"").'"></p>
        <p>Buy link: <input type="text" name="NBk_3" value="'.(isset($_POST["NBk_3"])?$_POST["NBk_3"]:"").'"></p>

        <p>Chapters: <input type="text" name="NBk_4" value="'.(isset($_POST["NBk_4"])?$_POST["NBk_4"]:"").'"></p>

        <p>* Grade/Class: 
        <select name="NBk_5" id="nfrm2_NBk5">
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select></p>
        <script>
            var nfrm2_NBk5 = document.getElementById("nfrm2_NBk5");';

        if(isset($_POST["NBk_1"])){
            echo 'nfrm2_NBk5.value='.$_POST["NBk_5"].';';
        }

        echo '</script>
        <p>Size(in Megabytes): <input type="text" name="NBk_6" value="'.(isset($_POST["NBk_6"])?$_POST["NBk_6"]:"").'"></p>

        <p>Is Available in Library: <input type="checkbox" value="1" name="NBk_7" 
        '.(isset($_POST["NBk_7"])?($_POST["NBk_7"]==1?'checked':''):'').' 
        ></p>
        <p>Is Available as Download: <input type="checkbox" value="1" name="NBk_8" 
        '.(isset($_POST["NBk_8"])?($_POST["NBk_8"]==1?'checked':''):'').' 
        ></p>

        <p>Chapter Info: 
        <p style="white-space:nowrap">
        E.g.: <pre >Chapter 1 Relations And Functions|link|Chapter 2 Inverse Trigonometric Functions|link</pre>
        </p>
        <textarea id="nfrm2_NBk_9" name="NBk_9" form="NcertBooks_ctrl"></textarea>
        <script>
            document.getElementById("nfrm2_NBk_9").value = "'.(isset($_POST["NBk_9"])?$_POST["NBk_9"]:"").'";
        </script>
        </p>

        <p>Book Cover(less than 300x400, 75kb, jpg): <input type="file" name="NBk_10" id="NBk_10"></p>
        <img src="'.$_POST["NBk_10"].'" style="display:block; width:300px; height:400px">

        <input type="submit">

    </form>';
    
        // */
    }
    }
        
    elseif($_GET["tab"]==4){
        //Delete row
        if(isset($_SESSION["nBook"]["A_stat"])){
                if($_SESSION["nBook"]["A_stat"]==1){
                    echo '<b style="color:RED"><i>Content Deleted!</i></b>
                    <hr>';
                    $_SESSION["nBook"]["A_stat"]=0;
                }
        }
        $_nfrm2=array("frm"=>array("p_code"=>1, "err"=>"nothing"), 
                      "NBk_1"=>"");

        if(!isset($_POST["NBk_1"])){
            $_nfrm2["frm"]["p_code"]=1;
            $_nfrm2["frm"]["err"]="Fields with `*` are required.";
        }
        elseif($_POST["NBk_1"]==""){    
            $_nfrm2["frm"]["p_code"]=1;
            $_nfrm2["frm"]["err"]="Fields with `*` are required.";
        }
        else{

            //form handling
            ///*
            if($_POST["NBk_1"]!=clean_input($_POST["NBk_1"])){
                $_nfrm2["frm"]["p_code"]=1;
                $_nfrm2["frm"]["err"]="Invalid Book title.";
            }
            else{
                //title
                $_nfrm2["NBk_1"]=$_POST["NBk_1"];
                $_nfrm2["frm"]["p_code"]=0;
            }
        }
        
                    
                    // */

            //deleting data
            if($_nfrm2["frm"]["p_code"]==0){
                //Query string
                ///*
                $qusta = '
    #NCERT BOOK CONTENT DELETE QUERY-------------------------------------------
    #'.$_SESSION["USR_MOD"]["student_id"].'|'.$_SESSION["USR_MOD"]["email_id"].'
    #'.$_SERVER['REMOTE_ADDR'].'|'.$_SERVER['HTTP_USER_AGENT'].'|'.$_SERVER['HTTP_REFERER'].'
    #'.date("h:i:sa").'|'.date("Y.m.d").'
    DELETE FROM `ncert_book_info` WHERE `book_id`=\''.$_SESSION["nbk_upd"]["book_id"].'\';
    #------------------------------------------------------------------
    ';
                // */ 
                
                //Write to files
                ///*
                $nBook = fopen("Acc_log/books/nBook.sql", "a") or die("Unable to open main Content File!");
                fwrite($nBook, $qusta);
                fclose($nBook);

                $nBook_usrBackup_file = fopen("Acc_log/backup/nBook_".$_SESSION["USR_MOD"]["student_id"]."_".date("Y-m-d").'_'.date("h-is-a").".sql", "a") or die("Unable to create Backup Content File!");
                fwrite($nBook_usrBackup_file, $qusta);
                fclose($nBook_usrBackup_file);

                $log_file = fopen("Acc_log/log/user.sql", "a") or die("Unable to open main log File!");
                $log_txt='
    @'.$_SESSION["USR_MOD"]["student_id"].'>Delete_Syn(Book_'.$_SESSION["USR_MOD"]["student_id"].'_'.date("Y-m-d").'_'.date("h-is-a").'.sql);
    ';
                fwrite($log_file, $log_txt);
                fclose($log_file);
                
                // */

                //run the SQL
                ///*
                $nbk_db = new mysqli($GLOBALS["db_MYSQL_SERVER"], $GLOBALS["db_MYSQL_USER"], 
                             $GLOBALS["db_MYSQL_Pass"], $GLOBALS["db_MYSQL_DB"]);
                if($nbk_db->connect_errno > 0){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Can't connect to SQL, backed to Acc file.";
                }
                if(!$nbk_result = $nbk_db->query($qusta)){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Can't connect to SQL, backed to Acc file";
                }
                
                //delete image
                $imgpath = $GLOBALS["rootdir"]."elib_database/database_study/cover/".$_SESSION["nbk_upd"]["book_id"].".jpg";
                if(!unlink($imgpath)){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Can't delete cover file";
                }
                
                $nbk_db->close();
                
                $_SESSION["nBook"]["A_stat"]=1;
                echo '<script>window.location = "'.strtok($_SERVER["REQUEST_URI"],'?').'?navi=2&tab=4'.(isset($_GET["book_id"])?"&book_id=".$_GET["book_id"]:"").'";</script>';
                return 0;
                
                
                // */


            }
            
        if($_nfrm2["frm"]["p_code"]==1){
                
    //getting content row data
    ///*
    echo '
        <div class="Nbk_sql_view_selector" 
        style="display:inline-block;vertical-align:top; width:150px; height: 800px; 
        background:#eee; overflow-X: scroll;overflow-Y:scroll padding:5px">
        ';
        $nbk_chg_db = new mysqli($GLOBALS["db_MYSQL_SERVER"], $GLOBALS["db_MYSQL_USER"], 
                         $GLOBALS["db_MYSQL_Pass"], $GLOBALS["db_MYSQL_DB"]);
            if($nbk_chg_db->connect_errno > 0){
                $_nfrm2["frm"]["p_code"]=1;
                $_nfrm2["frm"]["err"]="Can't connect to SQL";
            }
            else{
            if(!$nbk_chg_res12 = $nbk_chg_db->query("SELECT book_id, book_title FROM ncert_book_info where grade=12")){
                $_nfrm2["frm"]["p_code"]=1;
                $_nfrm2["frm"]["err"]="Can't connect to SQL";
            }
            else{
                echo "Class 12:<hr><ul>";
                for($i=1;$i<=$nbk_chg_res12->num_rows;$i++){
                    $nbk_chg_primer12=$nbk_chg_res12->fetch_assoc();
                    echo '<li><a style="display:block" href="admin_Acctool.php?navi=2&tab=4&book_id='.$nbk_chg_primer12["book_id"].'">'.$nbk_chg_primer12["book_title"].'</a></li>';
                }
                echo'</ul>';
            }
            if(!$nbk_chg_res11 = $nbk_chg_db->query("SELECT book_id, book_title FROM ncert_book_info where grade=11")){
                $_nfrm2["frm"]["p_code"]=1;
                $_nfrm2["frm"]["err"]="Can't connect to SQL";
            }
            else{
                echo "Class 11:<hr><ul>";
                for($i=1;$i<=$nbk_chg_res11->num_rows;$i++){
                    $nbk_chg_primer11=$nbk_chg_res11->fetch_assoc();
                    echo '<li><a style="display:block" href="admin_Acctool.php?navi=2&tab=4&book_id='.$nbk_chg_primer11["book_id"].'">'.$nbk_chg_primer11["book_title"].'</a></li>';
                }
                echo'</ul>';
            }
            if(!$nbk_chg_res10 = $nbk_chg_db->query("SELECT book_id, book_title FROM ncert_book_info where grade=10")){
                $_nfrm2["frm"]["p_code"]=1;
                $_nfrm2["frm"]["err"]="Can't connect to SQL";
            }
            else{
                echo "Class 10:<hr><ul>";
                for($i=1;$i<=$nbk_chg_res10->num_rows;$i++){
                    $nbk_chg_primer10=$nbk_chg_res10->fetch_assoc();
                    echo '<li><a style="display:block" href="admin_Acctool.php?navi=2&tab=4&book_id='.$nbk_chg_primer10["book_id"].'">'.$nbk_chg_primer10["book_title"].'</a></li>';
                }
                echo'</ul>';
            }
            if(!$nbk_chg_res9 = $nbk_chg_db->query("SELECT book_id, book_title FROM ncert_book_info where grade=9")){
                $_nfrm2["frm"]["p_code"]=1;
                $_nfrm2["frm"]["err"]="Can't connect to SQL";
            }
            else{
                echo "Class 9:<hr><ul>";
                for($i=1;$i<=$nbk_chg_res9->num_rows;$i++){
                    $nbk_chg_primer9=$nbk_chg_res9->fetch_assoc();
                    echo '<li><a style="display:block" href="admin_Acctool.php?navi=2&tab=4&book_id='.$nbk_chg_primer9["book_id"].'">'.$nbk_chg_primer9["book_title"].'</a></li>';
                }
                echo'</ul>';
            }
            }

    $nbk_chg_db->close();
    // */

    //getting data in the selected row
    if(isset($_GET["book_id"])){
        if($_GET["book_id"]!=""){
            $nbk_get_db = new mysqli($GLOBALS["db_MYSQL_SERVER"], $GLOBALS["db_MYSQL_USER"], 
                         $GLOBALS["db_MYSQL_Pass"], $GLOBALS["db_MYSQL_DB"]);
            if($nbk_chg_db->connect_errno > 0){
                $_nfrm2["frm"]["p_code"]=1;
                $_nfrm2["frm"]["err"]="Can't connect to SQL";
            }
            else{
                if(!$nbk_get_res = $nbk_get_db->query("SELECT book_title FROM ncert_book_info WHERE book_id='".$_GET["book_id"]."'")){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Can't connect to SQL";
                }
                else{
                    if($nbk_get_res->num_rows==1){
                        $nbk_get_primer=$nbk_get_res->fetch_assoc();
                        $_SESSION["nbk_upd"]["book_id"]=clean_input($_GET["book_id"]);
                        $_POST["NBk_1"]=$nbk_get_primer["book_title"];
                        
                }}}}}

    //form
    ///*
    echo '</div>
    <form id="NcertBooks_ctrl" method="POST" action="admin_Acctool.php?navi=2&tab=4'.(isset($_GET["book_id"])?"&book_id=".$_GET["book_id"]:"").'" 
    style="display:inline-block;vertical-align:top; width:300px; height: auto;">
        <input type="text" hidden id="selectpage" name="navi" value="2">

        <p><b><i>'.$_nfrm2["frm"]["err"].'</i></b></p>

        <p>* Delete Book: <input type="text" name="NBk_1" value="'.(isset($_POST["NBk_1"])?$_POST["NBk_1"]:"").'"></p>
        <p>And related data. NON-RECOVERABLE.</p>
        <input type="submit" value=" DELETE ">

    </form>';
    
        // */
    }
    }

    elseif($_GET["tab"]==5){
            
        }
        
    else{
    //Form Handling
    ///*
    if(!isset($_POST["NBk_1"]) || !isset($_POST["NBk_5"])){
        $_nfrm2["frm"]["p_code"]=1;
        $_nfrm2["frm"]["err"]="Fields with `*` are required.";
    }
    elseif($_POST["NBk_1"]=="" || $_POST["NBk_5"]==""){    
        $_nfrm2["frm"]["p_code"]=1;
        $_nfrm2["frm"]["err"]="Fields with `*` are required.";
    }
    else{
        if($_POST["NBk_1"]!=clean_input($_POST["NBk_1"])){
            $_nfrm2["frm"]["p_code"]=1;
            $_nfrm2["frm"]["err"]="Invalid Book title.";
        }
        elseif($_POST["NBk_5"]!=clean_input($_POST["NBk_5"]) || !preg_match("/^[0-9]*$/",$_POST["NBk_5"])){
            $_nfrm2["frm"]["p_code"]=1;
            $_nfrm2["frm"]["err"]="Invalid grade/class field.";
        }

        else{
            //title
            $_nfrm2["NBk_1"]=$_POST["NBk_1"];

            //class
            $_nfrm2["NBk_5"]=$_POST["NBk_5"];

            $_nfrm2["frm"]["p_code"]=0;

            //check other fields

            //download link
            if(isset($_POST["NBk_2"])){
                if($_POST["NBk_2"]!="" && 
                   preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",
                              $_POST["NBk_2"])){
                    $_nfrm2["NBk_2"]=clean_input($_POST["NBk_2"]);
                }
                elseif($_POST["NBk_2"]!=""){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Invalid Download link.";
                }
            }

            //buy link
            if(isset($_POST["NBk_3"])){
                if($_POST["NBk_3"]!="" && 
                   preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",
                              $_POST["NBk_3"])){
                    $_nfrm2["NBk_3"]=clean_input($_POST["NBk_3"]);
                }
                elseif($_POST["NBk_3"]!=""){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Invalid buy link.";
                }
            }

            //chapters
            if(isset($_POST["NBk_4"])){
                if($_POST["NBk_4"]!="" && 
                   preg_match("/^[0-9]*$/",
                              $_POST["NBk_4"])){
                    $_nfrm2["NBk_4"]=clean_input($_POST["NBk_4"]);
                }
                elseif($_POST["NBk_4"]!=""){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Invalid Chapters field.";
                }
            }

            //size
            if($_nfrm2["NBk_2"]!=""){
                if(!isset($_POST["NBk_6"])){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Size field required if download link is provided.";
                }
                elseif($_POST["NBk_6"]=="" && !preg_match('#\d+(?:\.\d{1,2})?#',$_POST["NBk_6"])){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Invalid value in Size field.";
                }
                else{
                    $_nfrm2["NBk_6"]=clean_input($_POST["NBk_6"]);
                }
            }

            //is avail
            if(isset($_POST["NBk_7"])){
                if($_POST["NBk_7"]=="1"){
                    $_nfrm2["NBk_7"]="1";
                }
            }
            if(isset($_POST["NBk_8"])){
                if($_POST["NBk_8"]=="1"){
                    $_nfrm2["NBk_8"]="1";
                }
            }

            //chapter info
            if(isset($_POST["NBk_9"])){
                if($_POST["NBk_9"]!=""){
                    $_nfrm2["NBk_9"]=clean_input($_POST["NBk_9"]);
                }
                elseif($_POST["NBk_9"]!=""){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Invalid Chapters Info field.";
                }
            }

            //Bookcover
            if(isset($_FILES["NBk_10"]["type"])){
                $ext = "jpg";
                $temp_loc="temp/temp_nbcs_01/";
                $upload_exts = end(explode(".", $_FILES["NBk_10"]["name"]));
                if ($_FILES["NBk_10"]["type"] === "image/jpeg" && $_FILES["NBk_10"]["size"] <= 76800 && $upload_exts==$ext){
                    if($_FILES["file"]["error"] > 0){
                        $_nfrm2["frm"]["p_code"]=1;
                        $_nfrm2["frm"]["err"]="File Upload Error:".$_FILES["NBk_10"]["error"];}
                    else{
                        if (file_exists($temp_loc."NCERT_BOOK_COVER".session_id()."jpg")){
                            $_nfrm2["frm"]["p_code"]=1;
                            $_nfrm2["frm"]["err"]="SERVER UNDERWORK-file already exists: RESTART SESSION.";}
                        else{$_nfrm2["Nbk_10"]=1;}}}
                 elseif($_FILES["NBk_10"]["type"]!=""){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Image format is invalid.";}
            }

            // */
    //uploading and working upon data
    if($_nfrm2["frm"]["p_code"]==0){
        ///*
        $qusta = '
    #NCERT BOOK INSERT QUERY-------------------------------------------
    #'.$_SESSION["USR_MOD"]["student_id"].'|'.$_SESSION["USR_MOD"]["email_id"].'
    #'.$_SERVER['REMOTE_ADDR'].'|'.$_SERVER['HTTP_USER_AGENT'].'|'.$_SERVER['HTTP_REFERER'].'
    #'.date("h:i:sa").'|'.date("Y.m.d").'
    #I('.$_nfrm2["Nbk_10"].')
    INSERT INTO `ncert_book_info` (`book_title`, `book_link`, `buy_link`, `chapter_no`, `grade`, `chapter_info`, `size`, `isAvailLib`, `isAvailDown`) VALUES (\''.$_nfrm2["NBk_1"].'\', \''.$_nfrm2["NBk_2"].'\', \''.$_nfrm2["NBk_3"].'\', \''.$_nfrm2["NBk_4"].'\', \''.$_nfrm2["NBk_5"].'\', \''.$_nfrm2["NBk_9"].'\', \''.$_nfrm2["NBk_6"].'\', \''.$_nfrm2["NBk_7"].'\', \''.$_nfrm2["NBk_8"].'\');
    #------------------------------------------------------------------
    ';
        // */ Query String
        
        ///*
        //Writing to Acc file
        $nBook_backupfile = fopen("Acc_log/books/nBook.sql", "a") or 
                            die("Unable to open Acc file, Try again later!");
        fwrite($nBook_backupfile, $qusta);
        fclose($nBook_backupfile);
        
        //Writing to Backup file
        $nBook_usrBackup_file = fopen("Acc_log/backup/nBook_".$_SESSION["USR_MOD"]["student_id"]."_".date("Y-m-d").'_'.date("h-is-a").".sql", "a") or die("Unable to create Backup Content File!");
        fwrite($nBook_usrBackup_file, $qusta);
        fclose($nBook_usrBackup_file);

        //Writing to log file
        $log_file = fopen("Acc_log/log/user.sql", "a") or die("Unable to open main log File!");
        $log_txt=
                '@'.$_SESSION["USR_MOD"]["student_id"]+
                '>Insert_Syn(nBook_'.$_SESSION["USR_MOD"]["student_id"].'_'+
                date("Y-m-d").'_'.date("h-is-a").'.sql);';
        fwrite($log_file, $log_txt);
        fclose($log_file);
        // */ Writing to Data Files

        ///*
        $nbk_db = new mysqli($GLOBALS["db_MYSQL_SERVER"], $GLOBALS["db_MYSQL_USER"], 
                     $GLOBALS["db_MYSQL_Pass"], $GLOBALS["db_MYSQL_DB"]);
        if($nbk_db->connect_errno > 0){
            $_nfrm2["frm"]["p_code"]=1;
            $_nfrm2["frm"]["err"]="Can't connect to SQL, backed to Acc file.";
        }
        if(!$nbk_db->query($qusta)){
            $_nfrm2["frm"]["p_code"]=1;
            $_nfrm2["frm"]["err"]="Can't write to SQL, backed to Acc file";
        }
         
        if($_nfrm2["Nbk_10"]==1){
            
                $nbk_cvrloc=$GLOBALS["rootdir"]."elib_database/database_study/cover/";
                if(!$nbk_pid_res=$nbk_db->query("SELECT book_id FROM `ncert_book_info` WHERE book_title='".$_nfrm2['NBk_1']."';")){
                    $_nfrm2["frm"]["p_code"]=1;
                    $_nfrm2["frm"]["err"]="Can't connect to SQL, can't find result!";
                }
                else{
                    $nbk_pid=$nbk_pid_res->fetch_assoc();
                    move_uploaded_file($_FILES["NBk_10"]["tmp_name"], $nbk_cvrloc.$nbk_pid["book_id"].".jpg");
                }
                
            
        }
       
        $nbk_db->close();
        
        
        // */Updating the Database

        $_SESSION["nBook"]["A_stat"]=1;
        echo '<script>window.location = "'.strtok($_SERVER["REQUEST_URI"],'?').'?navi=2&tab=1";</script>';
        return 0;
    }}}
    //html form
    if($_nfrm2["frm"]["p_code"]==1){
        //form
    }    
    /*end of tab*/}
    
}