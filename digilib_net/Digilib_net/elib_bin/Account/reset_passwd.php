<?php session_start();
/*reser_passwd.php
========================================
Designed and Developed by Sal64dd
contact: sal.uncd@gmail.com
========================================
*/

ini_set("include_path", "../../");
include "elib_depend/digilib_api/digilib_std.php";

$GLOBALS['std']['meta']['title'] = 'Digital Library | Password Reset';
digilib_std_Header();

if(!isset($_SESSION["RESET_PASS_REQUEST"])){$_SESSION["RESET_PASS_REQUEST"]=0;}
if(isset($_POST["email-inp-retfrm"])){$_SESSION["RESET_PASS_REQUEST"]=1;}
if(!isset($_SESSION["RESET_PASS_FLAG"])){$_SESSION["RESET_PASS_FLAG"]=0;}
if(!isset($_SESSION["RESET_PASS_DO"])){$_SESSION["RESET_PASS_DO"]=0;}
if(!isset($_SESSION["user_login_status"])){$_SESSION["user_login_status"]=0;}
if(isset($_GET["resetStdToken"])){$_SESSION["RESET_PASS_FLAG"]=1;}

//if already logged in
if($_SESSION["user_login_status"]==1){
    echo '<script type="text/javascript"> document.location = "elib_bin/Account/Account.php";</script>';
}

if($_SERVER["REQUEST_METHOD"]=="POST" && $_SESSION["RESET_PASS_DO"] && $_SESSION["RESET_PASS_FLAG"]){
    if( !isset($_POST["pass-inp-passfrm"]) || !isset($_POST["passc-inp-passfrm"])){
        password_resetForm2("*All Fields Required");
        password_resetForm_css();
        digilib_std_Footer();
        die("");
    }
    if( $_POST["pass-inp-passfrm"]=="" || $_POST["passc-inp-passfrm"]==""){
        password_resetForm2("*All Fields Required");
        password_resetForm_css();
        digilib_std_Footer();
        die("");
    }
    if(strcmp(($_POST["pass-inp-passfrm"]), ($_POST["passc-inp-passfrm"]))){
        password_resetForm2("*All Fields Required");
        password_resetForm_css();
        digilib_std_Footer();
        die("");
    }
    $Newpass = digilib_twister128(($_POST["pass-inp-passfrm"]));
    
    if($_GET["resetStdToken"]==""){
        session_destroy();
         echo '<script type="text/javascript"> document.location = "elib_bin/Account/reset_passwd.php";</script>';
    }
    $token = clean_input($_GET["resetStdToken"]);
    $sql1 = array(1,array("SELECT * FROM  `user_passreset_temp` WHERE onetime_serial='$token'"));
    $ret1 = simonsays($sql1);
    if($ret1[0][0]){
         die("*Can't process your Request.");
    }
    if($ret1[1][0]->num_rows == 0){
         die("*Can't process your Request.");
    }
    $row = $ret1[1][0]->fetch_assoc();
    if(strcmp($row['sql_data'],'KAWA')){
        die("*Invalid request");
    }
    $std_id = $row['user_id'];

    //Everything ok:run change pass sql, get the names, delete the remains and get out of here
    $sql2 = array(3,array("UPDATE `user_student_info` SET pass='$Newpass' WHERE student_id='$std_id'", "SELECT email_id,  first_name, last_name FROM `user_student_info` WHERE student_id='$std_id'", "DELETE FROM `user_passreset_temp` WHERE onetime_serial='$token'"));
    $ret2 = simonsays($sql2);
    if($ret2[0][0]){
         die("*Invalid Request");
    }
    $row2 = $ret2[1][1]->fetch_assoc();
    echo 'Your Password has been successfully reset.';
    simonlends($row2['first_name']." ".$row2['last_name'], $row2['email_id']);
}
elseif($_SESSION["RESET_PASS_FLAG"]){
    if($_GET["resetStdToken"]==""){
         session_destroy();
         echo '<script type="text/javascript"> document.location = "elib_bin/Account/reset_passwd.php";</script>';
    }
    $token = clean_input($_GET["resetStdToken"]);
    $sql1 = array(1,array("SELECT * FROM  `user_passreset_temp` WHERE onetime_serial='$token'"));
    $ret1 = simonsays($sql1);
    if($ret1[0][0]){
         session_destroy();
          echo '<script type="text/javascript"> document.location = "elib_bin/Account/reset_passwd.php";</script>';
    }
    if($ret1[1][0]->num_rows == 0){
         session_destroy();
          echo '<script type="text/javascript"> document.location = "elib_bin/Account/reset_passwd.php";</script>';
    }
    $row = $ret1[1][0]->fetch_assoc();
    if($row['sql_data']!='KAWA'){
        session_destroy();
          echo '<script type="text/javascript"> document.location = "elib_bin/Account/reset_passwd.php";</script>';
    }
    $_SESSION["RESET_PASS_DO"] = 1;
    
    //show reset pass form
    password_resetForm2();
    password_resetForm_css();
}
elseif($_SERVER["REQUEST_METHOD"]=="POST" && $_SESSION["RESET_PASS_REQUEST"]){
    if(!isset($_POST["email-inp-retfrm"]) && !isset($_POST["capt-inp-retfrm"])){
         password_resetForm1("*All Fields Required.");
         password_resetForm_css();
         digilib_std_Footer();
         die("");
    }
    if($_POST["email-inp-retfrm"]=="" || $_POST["capt-inp-retfrm"]==""){
         password_resetForm1("*All Fields Required.");
         password_resetForm_css();
         digilib_std_Footer();
         die("");
    }
    if(capcheck(clean_input($_POST["capt-inp-retfrm"]))){
         password_resetForm1("*Captcha Incorrect.");
         password_resetForm_css();
         digilib_std_Footer();
         die("");
    }
    if(!filter_var(clean_input($_POST["email-inp-retfrm"]), FILTER_VALIDATE_EMAIL)){
         password_resetForm1("*Invalid Email Address.");
         password_resetForm_css();
         digilib_std_Footer();
         die("");
    }
    $email = clean_input($_POST["email-inp-retfrm"]);
    $sql1 = array(1,array("SELECT student_id, first_name, last_name FROM `user_student_info` WHERE email_id='".$email."'"));
    dev($sql1[1][0],"");
    $ret1 = simonsays($sql1);
    if($ret1[0][0]){
         password_resetForm1("*Invalid Query or Problem in Database. Try again later");
         password_resetForm_css();
         digilib_std_Footer();
         die("");
    }
    if($ret1[1][0]->num_rows == 0){
        password_resetForm1("*No Such Account Exists in Database.");
         password_resetForm_css();
         digilib_std_Footer();
         die("");
    }
    
    //email is legit. Proccess the query and send a mail.
    $row = $ret1[1][0]->fetch_assoc();
    $std_id = $row['student_id'];
    $serial = hash("ripemd128",bin2hex(mcrypt_create_iv(22, MCRYPT_DEV_URANDOM)).$row['student_id']);
    $sql2 = array(1,array("INSERT INTO `user_passreset_temp`(user_id, onetime_serial, sql_data) VALUES('$std_id','$serial','KAWA')"));
    $ret2 = simonsays($sql2);
    if($ret2[0][0]){
         password_resetForm1("*No Such Account Exists in Database.");
         password_resetForm_css();
         digilib_std_Footer();
         die("");
    }
    else{
        $link = "http://".$_SERVER['HTTP_HOST']."/digilib_net/Digilib_net/elib_bin/Account/reset_passwd.php?resetStdToken=".$serial;
        simonbends($row["first_name"]." ".$row["last_name"], $email, $link);
        echo 'We have sent you a mail with a link to reset your Password.';
    }
    
}
else{
    //show reset pass request form
    password_resetForm1();
    password_resetForm_css();
}


digilib_std_Footer();
?>