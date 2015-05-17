<?php

/*==============================config.php==============================
 *  configuration for Digilib_net_v2  
 *  ver.4.51
 *
 *  Defines basic variables and dirs
 *  contains highly sensitive configuration
 *  donot change if unsure
 *  can break the code!
 *  
 *  see change log for recent changes
 *
 *  Designed and Developed By Sal64DD
 *  contact: sal_uncd@gmail.com
 * 
 */

//=============php confing
	/*.charset*/						
    $db_CHARSET= "utf8";
	/*.developermode[1=>on,0=>off]*/	
    $developer_mode=1;
	/*print developer window*/			
    $prt_dev=0;
	/*.directory sign for compatibility [/=>mac,\=>windows]*/			
    define(_Ds_,"/");


//=============Mysql MACRO definations
	/*.mysqlhost*/$db_MYSQL_SERVER = $_SERVER["HTTP_HOST"];
	/*.mysqluser*/$db_MYSQL_USER= ''; 					
	/*.mysqlpass*/$db_MYSQL_Pass= ''; 	
	
	/*.mysqldatabase*/define(_dbDLIB, "Digilib_db");
	
	/*.mysqltable:syntax*/define(DB_table, "table");

	/*.mysqltable:1*/define(DB_author_book_rel,"author_book_rel");
	/*.mysqltable:2*/define(DB_author_dinfo,"author_dinfo");
	/*.mysqltable:3*/define(DB_author_info,"author_info");
	/*.mysqltable:4*/define(DB_bcat_info,"bcat_info");
	/*.mysqltable:5*/define(DB_blog_info,"blog_info");
	/*.mysqltable:6*/define(DB_career_info,"career_info");
	/*.mysqltable:7*/define(DB_class_info,"class_info");
	/*.mysqltable:8*/define(DB_dcq_cat_info,"dcq_cat_info");
	/*.mysqltable:9*/define(DB_dcq_thread_info,"dcq_thread_info");
	/*.mysqltable:10*/define(DB_devlop_authors_userid_rel,"devlop_authors_userid_rel");
	/*.mysqltable:11*/define(DB_devlop_info,"devlop_info");
	/*.mysqltable:12*/define(DB_devlop_links,"devlop_links");
	/*.mysqltable:13*/define(DB_devlop_server_info,"devlop_server_info");
	/*.mysqltable:14*/define(DB_exam_info,"exam_info");
	/*.mysqltable:15*/define(DB_genre_book_rel,"genre_book_rel");
	/*.mysqltable:16*/define(DB_genre_info,"genre_info");
	/*.mysqltable:17*/define(DB_keyword_blog_rel,"keyword_blog_rel");
	/*.mysqltable:18*/define(DB_keyword_book_rel,"keyword_book_rel");
	/*.mysqltable:19*/define(DB_keyword_ncert_rel,"keyword_ncert_rel");
	/*.mysqltable:20*/define(DB_keyword_showcase_rel,"keyword_showcase_rel");
	/*.mysqltable:21*/define(DB_keyword_thread_rel,"keyword_thread_rel");
	/*.mysqltable:22*/define(DB_keywords_info,"keywords_info");
	/*.mysqltable:23*/define(DB_lib_book_info,"lib_book_info");
	/*.mysqltable:24*/define(DB_lib_links,"lib_links");
	/*.mysqltable:25*/define(DB_lib_server_info,"lib_server_info");
	/*.mysqltable:26*/define(DB_ncert_book_info,"ncert_book_info");
	/*.mysqltable:27*/define(DB_ncert_chapter_info,"ncert_chapter_info");
	/*.mysqltable:28*/define(DB_ncert_chapter_topic_rel,"ncert_chapter_topic_rel");
	/*.mysqltable:29*/define(DB_ncert_links,"ncert_links");
	/*.mysqltable:30*/define(DB_ncert_referencebook_subject_rel,"ncert_referencebook_subject_rel");
	/*.mysqltable:31*/define(DB_ncert_server_info,"ncert_server_info");
	/*.mysqltable:32*/define(DB_ncert_topic_info,"ncert_topic_info");
	/*.mysqltable:33*/define(DB_scat_info,"scat_info");
	/*.mysqltable:34*/define(DB_showcase_info,"showcase_info");
	/*.mysqltable:35*/define(DB_subject_info,"subject_info");
	/*.mysqltable:36*/define(DB_thread_info,"thread_info");
	/*.mysqltable:37*/define(DB_user_class_subject_teacher_rel,"user_class_subject_teacher_rel");
	/*.mysqltable:38*/define(DB_user_passreset_temp,"user_passreset_temp");
	/*.mysqltable:39*/define(DB_user_student_info,"user_student_info");
	/*.mysqltable:40*/define(DB_user_teacher_info,"user_teacher_info");

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

?>