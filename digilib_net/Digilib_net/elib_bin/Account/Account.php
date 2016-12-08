<?php session_start();

/*
 *  Account of Digilib_net
 *      ver 7.00
 *  Glasswid flwer
 *
 *  author: designed and developed by sal64dd
 *  contact: sal.uncd@gmail.com
 */

ini_set("include_path", "../../");
include "elib_depend/glasswindow/Glasswid_flwer.php";
digilib_Meta("Digital Library | Home", '
<link rel="stylesheet" type="text/css" href="elib_bin/Account/Acc.css">');

echo '<body>';
digilib_Header();
echo '<div class="body-cont"><div class="main">'; 

if(!isset($_SESSION["user_login_status"])){$_SESSION["user_login_status"]=0;}
if( $_SERVER["REQUEST_METHOD"]=="POST" && $_SESSION["user_login_status"]==0){
    
    if(!isset($_POST["try_loggin"])){$_POST["try_loggin"]=0;}
    if(!isset($_POST["show_signup"])){$_POST["show_signup"]=0;}
    if(!isset($_POST["try_signup"])){$_POST["try_signup"]=0;}
    
    if($_POST["try_loggin"]=="1"){
        //loggin in
        if(digilib_login()){
            //logged in
            $_SESSION["user_login_status"]=1;
        }
        else{
            prt_loginfrm($_SESSION["digierror_fxlogin"]);
        }
        $_POST["try_loggin"]="0";
    }
    else if($_POST["show_signup"]=="1"){
        //sign up form
        $_SESSION["user_login_status"]=0;
        prt_signupfrm();
        $_POST["show_signup"]="0";
    }
    else if($_POST["try_signup"]=="1"){
        //signing up
        $ret = digilib_signup();
        if($ret==1){
            //siggned up
            session_destroy();
        }
        else{
            prt_signupfrm($ret);
            session_destroy();
        }
        $_POST["try_signup"]="0";
    }
        
}
else if(!isset($_SESSION["user_login_status"]) || $_SESSION["user_login_status"]==0 ){
    //not logged in
    $_SESSION["user_login_status"]=0;
	prt_loginfrm();
}
else if( $_SESSION["user_login_status"]==1 ){
    //already logged in
    prt_digidash();
    
}
else{
}

echo '</div></div>';
digilib_Footer();
echo '<script src="elib_bin/Account/Acc.js"></script></body></html>';
?>