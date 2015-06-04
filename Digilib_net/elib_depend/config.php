<?php

/*==============================config.php==============================
 *  configuration for Digilib_net_v3  
 *  ver.5.51
 *
 *  Defines basic variables and dirs
 *  contains highly sensitive configuration
 *  donot change if unsure
 *  can break the code!
 *  
 *  see change log for recent changes
 *
 *  Designed and Developed By Sal64DD
 *  contact: sal.uncd@gmail.com
 * 
 */

//=============php confing						
    $db_CHARSET= "utf8";
    $developer_mode=1;		
    $prt_dev=0;
    define(_Ds_, "/");

//=============Mysql MACRO definations
	/*.mysqlhost*/$db_MYSQL_SERVER = $_SERVER["HTTP_HOST"];
	/*.mysqluser*/$db_MYSQL_USER= 'root'; 					
	/*.mysqlpass*/$db_MYSQL_Pass= 'Quvlly18&fumi_gating'; 	
	/*.mysqldatabase*/define(_dbDLIB, "Digilib_db");

//=============directories relative to index.php
//include
	/*+jquery*/					$jquery=		"elib_depend"._Ds_."jquery"._Ds_."jquery-2.1.3.js";
	/*+Gsap:TweenMax*/			$TweenMax=		"elib_depend"._Ds_."gsap"._Ds_."TweenMax.min.js";
	/*+Gsap:TweenLite*/			$TweenLite=		"elib_depend"._Ds_."gsap"._Ds_."TweenLite.min.js";
	/*+Gsap:TimelineMax*/		$TimelineMax=	"elib_depend"._Ds_."gsap"._Ds_."TimelineMax.min.js";
	/*+Gsap:TimelineLite*/		$TimelineLite=	"elib_depend"._Ds_."gsap"._Ds_."TimelineLite.min.js";
	/*+Gsap:Gsap-jquery*/		$gsap_jq=		"elib_depend"._Ds_."gsap"._Ds_."jquery.gsap.min.js";
	/*+Gsap:Gsap-Drag*/			$gsap_drag=		"elib_depend"._Ds_."gsap"._Ds_."utils"._Ds_."Draggable.min.js";
	
    /*+style*/					$css=			"elib_depend"._Ds_."style"._Ds_;
	/*+style:font*/				$css_fonts=		"elib_depend"._Ds_."style"._Ds_."fonts.css";
	/*+style:none*/				$css_none=		"elib_depend"._Ds_."style"._Ds_."none_style.css";

//official color pallet
    /*0-Black-Grey*/            $offPal_black=       "#383838";
    /*0-Blue-Medium*/           $offPal_blue=       "#3EC6EF";
    /*0-Blue-Med-Gradient*/     $offPal_blue_grd=   "linear-gradient(to bottom, rgba(83,203,241,1) 0%,rgba(5,171,224,1) 100%)";
    /*0-Orange-Med*/            $offPal_org=        "#FF8930";
    /*0-Orange-Med-Gradient*/   $offPal_org_grd=    "linear-gradient(to bottom, #ffa84c 0%,#ff7b0d 100%)";
    /*0-White*/                 $offPal_wht=        "#F7F7F7";
    /*0-Grey-light*/            $offPal_grey=       "#dedede";


?>