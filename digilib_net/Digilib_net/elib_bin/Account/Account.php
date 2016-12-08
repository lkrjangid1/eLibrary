<?php session_start();
/*Account.php
========================================
Designed and Developed by Sal64dd
contact: sal.uncd@gmail.com
========================================
*/

ini_set("include_path", "../../");
include "elib_depend/digilib_api/digilib_std.php";

if(!isset($_SESSION["std_utry_login_flag"])){$_SESSION["std_utry_login_flag"]=0;}

if(!isset($_SESSION["std_cookie_flag"])){$_SESSION["std_cookie_flag"]=0;}
if($_SESSION["std_cookie_flag"]==1){
    create_cookie();
    $_SESSION["std_cookie_flag"]=0;
}

// Login Ctrl Variable initialization
if(!isset($_SESSION["user_login_status"])){$_SESSION["user_login_status"]=0;}

// If the user logs out
if(!isset($_GET["stat"])){$_GET["stat"]=1;}
if($_GET["stat"]==0){
    //logout
    delete_cookie();
    session_destroy();
    $_SESSION["user_login_status"]=0;
}

$GLOBALS['std']['meta']['title'] = 'Digital Library | Dashboard';
digilib_std_Header();

// If already logged in
if( $_SESSION["user_login_status"]==1 ){
    //already logged in
    prt_digidash();
}

// If user posted without login: sign up or login
elseif( $_SERVER["REQUEST_METHOD"]=="POST" && $_SESSION["user_login_status"]==0){
    
    if(!isset($_POST["try_loggin"])){$_POST["try_loggin"]=0;}
    if(!isset($_POST["show_signup"])){$_POST["show_signup"]=0;}
    if(!isset($_POST["try_signup"])){$_POST["try_signup"]=0;}

    // loggin in
    if($_POST["try_loggin"]=="1"){
        if(($lgnret = digilib_login())){
            // Can't login: some error //increment utry counter
            $_SESSION["std_utry_login_flag"]++;
            prt_loginfrm($lgnret);
        }
        
        $_POST["try_loggin"]="0";
    }
    
    // Show signup form
    else if($_POST["show_signup"]=="1"){
        prt_signupfrm();
        $_POST["show_signup"]="0";
    }
    
    // Try signup
    else if($_POST["try_signup"]=="1"){
        $ret = digilib_signup();
        if($ret==1){
            //siggned up
            session_destroy();
        }
        else{
            //some error
            prt_signupfrm($ret);
            session_destroy();
        }
        $_POST["try_signup"]="0";
    }
        
}

// If not logged in: default, i.e. show login form
elseif($_SESSION["user_login_status"]==0 ){
    //not logged in
    
    //Check for Cookies Here
    log_cookie();
    
	prt_loginfrm();
}



digilib_std_Footer();
?>