<?php
/*
 * config.php ver.3.4
 * digilib core definations and functions
 * DONOT change if unsure
 * developed by shaurya
 */
//=============Mysql MACRO definations
	/*.mysqlhost*/$db_MYSQL_SERVER = '';
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

//=============php confing
	/*.charset*/						$db_CHARSET= "utf8";
	/*.developermode[1=>on,0=>off]*/	$developer_mode=0;
	/*print developer window*/			$prt_dev=0;
	/*.directory sign for compatibility
	 * [/=>mac,\=>windows]*/			define(_Ds_,"/");

//=============directories relative to index.php
	
//config
	/*+config.php*/$config="elib_config"._Ds_."config.php";

//depend
	/*+jquery*/					$jquery=		"elib_depend"._Ds_."jquery"._Ds_."jquery-2.1.3.js";
	/*+Gsap:TweenMax*/			$TweenMax=		"elib_depend"._Ds_."gsap"._Ds_."TweenMax.min.js";
	/*+Gsap:TweenLite*/			$TweenLite=		"elib_depend"._Ds_."gsap"._Ds_."TweenLite.min.js";
	/*+Gsap:TimelineMax*/		$TimelineMax=	"elib_depend"._Ds_."gsap"._Ds_."TimelineMax.min.js";
	/*+Gsap:TimelineLite*/		$TimelineLite=	"elib_depend"._Ds_."gsap"._Ds_."TimelineLite.min.js";
	/*+Gsap:Gsap-jquery*/		$gsap_jq=		"elib_depend"._Ds_."gsap"._Ds_."jquery.gsap.min.js";
	/*+Gsap:Gsap-Drag*/			$gsap_drag=		"elib_depend"._Ds_."gsap"._Ds_."utils"._Ds_."Draggable.min.js";
	/*+dcq*/					$dcq=			"elib_depend"._Ds_."dcq"._Ds_."dcq.php";
	/*+glasswindow*/			$GlassWindow=	"elib_depend"._Ds_."glasswindow"._Ds_."glasswindow.php";
	/*+glasswindow:btntempt*/	$gw_btntempt=	"elib_depend"._Ds_."glasswindow"._Ds_."gw_btntempt.php";
	/*+glasswindow:columns*/	$gw_columns=	"elib_depend"._Ds_."glasswindow"._Ds_."gw_columns.php";
	/*+glasswindow:emtempt*/	$gw_emtempt=	"elib_depend"._Ds_."glasswindow"._Ds_."gw_emtempt.php";
	/*+glasswindow:frmtempt*/	$gw_frmtempt=	"elib_depend"._Ds_."glasswindow"._Ds_."gw_frmtempt.php";
	/*+glasswindow:mptempt*/	$gw_mptempt=	"elib_depend"._Ds_."glasswindow"._Ds_."gw_mptempt.php";
	/*+triforce*/				$triforce=		"elib_depend"._Ds_."triforce"._Ds_."triforce.php";
	/*+style*/					$css=			"elib_depend"._Ds_."style"._Ds_;
	/*+style:font*/				$css_fonts=		"elib_depend"._Ds_."style"._Ds_."fonts.css";
	/*+style:none*/				$css_none=		"elib_depend"._Ds_."style"._Ds_."none_style.css";
	/*=graphics*/				$graphics=		"elib_depend"._Ds_."graphics"._Ds_;
	/*=graphics:bg*/			$graph_bg=		"elib_depend"._Ds_."graphics"._Ds_."backgrounds"._Ds_;
	/*=graphics:interface*/		$graph_int=		"elib_depend"._Ds_."graphics"._Ds_."interface_graphics"._Ds_;
	/*=graphics:mics*/			$graph_mic=		"elib_depend"._Ds_."graphics"._Ds_."mics_graphics"._Ds_;
	/*=graphics:off*/			$graph_off=		"elib_depend"._Ds_."graphics"._Ds_."official_graphics"._Ds_;

//database files
	/*=blog*/						$dbf_blog=				"elib_database"._Ds_."database_blog"._Ds_."blog"._Ds_;
	/*=blog_pages*/					$dbf_blog_pages=		"elib_database"._Ds_."database_blog"._Ds_."blog"._Ds_."blog_pages"._Ds_;
	/*=blog_scripts*/				$dbf_blog_scripts=		"elib_database"._Ds_."database_blog"._Ds_."scripts"._Ds_;
	/*=devlop*/						$dbf_devlop=			"elib_database"._Ds_."database_developer"._Ds_."devlop"._Ds_;
	/*=devlop_pages*/				$dbf_devlop_pages=		"elib_database"._Ds_."database_developer"._Ds_."devlop"._Ds_."devlop_pages"._Ds_;
	/*=devlop_scripts*/				$dbf_devlop_scripts=	"elib_database"._Ds_."database_developer"._Ds_."scripts"._Ds_;
	/*=lib*/						$dbf_lib=				"elib_database"._Ds_."database_library"._Ds_."book"._Ds_;
	/*=lib_pages*/					$dbf_lib_pages=			"elib_database"._Ds_."database_library"._Ds_."book"._Ds_."book_pages"._Ds_;
	/*=lib_images*/					$dbf_lib_img=			"elib_database"._Ds_."database_library"._Ds_."book"._Ds_."images"._Ds_;
	/*=lib_thumbs*/					$dbf_lib_thumb=			"elib_database"._Ds_."database_library"._Ds_."book"._Ds_."thumbnails"._Ds_;
	/*=lib_scripts*/				$dbf_lib_scripts=		"elib_database"._Ds_."database_library"._Ds_."scripts"._Ds_;
	/*=study:ncert*/				$dbf_ncert=				"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_;
	/*=study:entrance*/				$dbf_entr=				"elib_database"._Ds_."database_study"._Ds_."entrance"._Ds_;
	/*=study:olympiad*/				$dbf_olym=				"elib_database"._Ds_."database_study"._Ds_."olympiad"._Ds_;
	/*=study:ncert_books*/			$dbf_ncert_books=		"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_books"._Ds_;
	/*=study:ncert_books_pages*/	$dbf_ncert_books_pages=	"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_books"._Ds_."book_pages"._Ds_;
	/*=study:ncert_books_img*/		$dbf_ncert_books_img=	"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_books"._Ds_."images"._Ds_;
	/*=study:ncert_books_thumb*/	$dbf_ncert_books_thumb=	"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_books"._Ds_."thumbnails"._Ds_;
	/*=study:ncert_notes*/			$dbf_ncert_notes=		"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_notes"._Ds_;
	/*=study:ncert_note_pages*/		$dbf_ncert_notes_pages=	"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_notes"._Ds_."note_pages"._Ds_;
	/*=study:ncert_oldq*/			$dbf_ncert_oldq=		"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_oldq"._Ds_;
	/*=study:ncert_oldq_pages*/		$dbf_ncert_oldq_pages=	"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_oldq"._Ds_."oldq_pages"._Ds_;
	/*=study:ncert_samp*/			$dbf_ncert_samp=		"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_samp"._Ds_;
	/*=study:ncert_samp_pages*/		$dbf_ncert_samp_pages=	"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_samp"._Ds_."samp_pages"._Ds_;
	/*=study:ncert_ass*/			$dbf_ncert_ass=			"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_ass"._Ds_;
	/*=study:ncert_ass_pages*/		$dbf_ncert_ass_pages=	"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_ass"._Ds_."ass_pages"._Ds_;
	/*=study:ncert_soln*/			$dbf_ncert_soln=		"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_solutions"._Ds_;
	/*=study:ncert_soln_pages*/		$dbf_ncert_soln_pages=	"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_solutions"._Ds_."solution_pages"._Ds_;
	/*=study:ncert_soln_q*/			$dbf_ncert_soln_que=	"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_solutions"._Ds_."solution_pages"._Ds_."question_pages"._Ds_;
	/*=study:ncert_soln_a*/			$dbf_ncert_soln_ans=	"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_solutions"._Ds_."solution_pages"._Ds_."solution_pages"._Ds_;
	/*=study:ncert_soln_s*/			$dbf_ncert_soln_sel=	"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_solutions"._Ds_."solution_pages"._Ds_."selection_pages"._Ds_;
	/*=study:ncert_soln_img*/		$dbf_ncert_soln_img=	"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_solutions"._Ds_."images"._Ds_;
	/*=study:ncert_soln_thumb*/		$dbf_ncert_soln_thumb=	"elib_database"._Ds_."database_study"._Ds_."ncert"._Ds_."ncert_solutions"._Ds_."thumbnails"._Ds_;
	/*=study:ent_books*/			$dbf_ent_books=			"elib_database"._Ds_."database_study"._Ds_."entrance"._Ds_."entrance_books"._Ds_;
	/*=study:ent_pages*/			$dbf_ent_pages=			"elib_database"._Ds_."database_study"._Ds_."entrance"._Ds_."entrance_pages"._Ds_;
	/*=study:ent_img*/				$dbf_ent_img=			"elib_database"._Ds_."database_study"._Ds_."entrance"._Ds_."images"._Ds_;
	/*=study:ent_thumb*/			$dbf_ent_thumb=			"elib_database"._Ds_."database_study"._Ds_."entrance"._Ds_."thumbnails"._Ds_;
	/*=study:ent_books_pages*/		$dbf_ent_books_pages=	"elib_database"._Ds_."database_study"._Ds_."entrance"._Ds_."entrance_books"._Ds_."book_pages"._Ds_;
	/*=study:ent_books_img*/		$dbf_ent_books_img=		"elib_database"._Ds_."database_study"._Ds_."entrance"._Ds_."entrance_books"._Ds_."images"._Ds_;
	/*=study:ent_books_thumb*/		$dbf_ent_books_thumb=	"elib_database"._Ds_."database_study"._Ds_."entrance"._Ds_."entrance_books"._Ds_."thumbnails"._Ds_;
	/*=study:ent_samp*/				$dbf_ent_samp=			"elib_database"._Ds_."database_study"._Ds_."entrance"._Ds_."entrance_samp"._Ds_;
	/*=study:ent_samp_pages*/		$dbf_ent_samp_pages=	"elib_database"._Ds_."database_study"._Ds_."entrance"._Ds_."entrance_samp"._Ds_."samp_pages"._Ds_;
	/*=study:oly_books*/			$dbf_oly_books=			"elib_database"._Ds_."database_study"._Ds_."olympiad"._Ds_."olympiad_books"._Ds_;
	/*=study:oly_pages*/			$dbf_oly_pages=			"elib_database"._Ds_."database_study"._Ds_."olympiad"._Ds_."olympiad_pages"._Ds_;
	/*=study:oly_img*/				$dbf_oly_img=			"elib_database"._Ds_."database_study"._Ds_."olympiad"._Ds_."images"._Ds_;
	/*=study:oly_thumb*/			$dbf_oly_thumb=			"elib_database"._Ds_."database_study"._Ds_."olympiad"._Ds_."thumbnails"._Ds_;
	/*=study:oly_books_pages*/		$dbf_oly_books_pages=	"elib_database"._Ds_."database_study"._Ds_."olympiad"._Ds_."olympiad_books"._Ds_."book_pages"._Ds_;
	/*=study:oly_books_img*/		$dbf_oly_books_img=		"elib_database"._Ds_."database_study"._Ds_."olympiad"._Ds_."olympiad_books"._Ds_."images"._Ds_;
	/*=study:oly_books_thumb*/		$dbf_oly_books_thumb=	"elib_database"._Ds_."database_study"._Ds_."olympiad"._Ds_."olympiad_books"._Ds_."thumbnails"._Ds_;
	/*=study:oly_samp*/				$dbf_oly_samp=			"elib_database"._Ds_."database_study"._Ds_."olympiad"._Ds_."olympiad_samp"._Ds_;
	/*=study:oly_samp_pages*/		$dbf_oly_samp_pages=	"elib_database"._Ds_."database_study"._Ds_."olympiad"._Ds_."olympiad_samp"._Ds_."samp_pages"._Ds_;
	/*=study_scripts*/				$dbf_std_scripts=		"elib_database"._Ds_."database_study"._Ds_."scripts"._Ds_;
	/*=user*/						$dbf_lib=				"elib_database"._Ds_."database_user"._Ds_."devlop"._Ds_;
	/*=user_pages*/					$dbf_lib_pages=			"elib_database"._Ds_."database_user"._Ds_."devlop"._Ds_."devlop_pages"._Ds_;
	/*=user_scripts*/				$dbf_lib_scripts=		"elib_database"._Ds_."database_user"._Ds_."scripts"._Ds_;

//temp
	/*=temp*/	$temp=	"elib_temp"._Ds_;

//=============Global Function Defination
	
	/*.function string cleaninput(string);
		 * description:	cleans the given string by removing 
		 * 				html special chars, triming whitespaces, 
		 * 				striping trailing slashes.
		 * parameters: 	string $data
		 * 					~unchecked data: processes this string
		 * return:		string: cleaned input string
		 * notes: 		no futher changes required			
	 */
	function clean_input($data){
	    $data = htmlspecialchars($data);
	    $data = trim($data);
	    $data = stripslashes($data);
	    return $data;
	}
	
	/*.function string _sec1_(string)
	 	*description:	security function-md5s the given 
	 	*				string and returns the value.
	 	*parameters:	string $token
	 	*					~pure string:converts the given 
	 	*					 string to md5
	 	*return:		string: (md5)ed with random salt text
	 	*warning:			DONOT CHANGE TO KEEP THE SQL STORAGE INTEGRITY
	 	*				EVERYTHING IS SAVED VIA THIS HASH FUNCTION
	 	*				LOSING THIS SALT TEXT WILL BLACKOUT THE SQL
	 	*				USER DATA FOREVER!!!
	 	*notes:			no further changes required
	 */
	 function _sec1_($token){
	    return $token = hash('ripemd128', "ls3g[zVlpa1".$token."5Hv0,R*Kbl%p4");
	}
	
	/*.function string secstrip(string, string, string)
	 	* description:	security superior clean function like clean_input()
	 	* 				replaces given or default select charaters from 
	 	* 				given string with given or default replacer and 
	 	* 				returns it.
	 	* parameters:	string $string
	 	* 					~string from which the select charaters get replaced.
	 	* 					 required.
	 	* 				string $data
	 	* 					~select charater string whose occurance in the $string 
	 	* 					 parameter gets replaced by a replacer.
	 	* 					 string whith any charater other than ',' each 
	 	* 					 seperated by a ',' is searched in the given string 
	 	* 					 and replaced.
	 	* 					 optional:default('>,<,\\,/,\",`')
	 	* 				string $replacer
	 	* 					~char or string which is replaced in the given $string 
	 	* 					 parameter.
	 	* 					 optional:default(' ')
	 	* return:		string: returns the replaced string	
	 	* notes:		function is in working state
	 	* limitation:	function can't replace ','
	 */
	 function sec_strip($string,$data,$replacer){
		dev(" ");
		dev("sec_strip() function started!");
		dev("string passed",$string);
		dev("string count",strlen($string)-1);
		if(empty($replacer)){
			$replacer=" ";
			dev("using default replacer", ' ');
		}
		if(empty($data)){
			$data=">,<,\\,/,\",`";
			dev("using default eve " , '>,<,\\,/,\",`');
		}
		dev("exploding eve...");
		$eve = explode(",",$data);
		dev("exploded eve",$eve);
		dev("eve count",count($eve));
		for($i=0; $i<=count($eve); $i++){
			for($j=0; $j<strlen($string); $j++){
				//dev("_string[$j]",$string[$j]);
				if($eve[$i]==$string[$j]){
					dev("eve[".$eve[$i]."]","occurance found:changed!");
					$string[$j]= ($eve[$i]!=" "?$replacer:"_");
				}
			}
		}
		dev("sec_strip() function ended!");
		dev(" ");
		return $string;
	}
	
	/*function void dev(string, string)
	 	*description:	developer window function.
	 	*				requires $developer_mode=1.
	 	*				uses $prt_dev var but not to be changed 
	 	*				manually.
	 	*				prints a log window in html which prints 
	 	*				given parameters passed.
	 	*				used for error handling.
	 	*parameters:	no parameters
	 	*					~prints a line/divider in dev window.
	 	*				string: $obj1
	 	*					~prints the given input with cursor 
	 	*					at a new line in dev window.
	 	*				optional:default.i.e no parameters(prints a line breaker).
	 	*				string: $obj2
	 	*					~prints $obj1:$obj2 i.e. prints first parameter and 
	 	*					second parameter in one line with a colon in b/w.
	 	*					IF $obj2=="error", prints $obj1 in special style.
	 	*					optional:default(nothing)
	 	*				
	 	*return:		void
	 	*notes:			function is in state of working but further 
	 	*				development is welcome.
	 */
	 function dev($obj1, $obj2){
	
		if($GLOBALS["developer_mode"]==1){
			//print window if not
			if(!$GLOBALS["prt_dev"]){
				echo '<div id="dev_window" style="
				background:rgba(0,0,0,1);
				border-top: solid 2px rgba(200,200,200,0.5);
				position:fixed;
				right:0px;
				bottom:0px;
				left:0px;
				height:100px;
				overflow:scroll;
						z-index:10001000;
				"></div>';
				$GLOBALS["prt_dev"]=1;
			}
	
			$b1='font-weight: normal;font-family:monospace;color:#0f0';
			$b2='font-weight: normal;font-family:monospace;color:#0af';
			$b3='font-weight: normal;font-family:monospace;color:#f00';
	
			if(empty($obj1) && empty($obj2)){
				echo '	<script>
						var hr = document.createElement("hr");
						hr.setAttribute("style","border: dashed 1px #aaa;margin-left:3px;margin-right:100px;");
						document.getElementById("dev_window").appendChild(hr);
					</script>
					';
			}
			elseif(!empty($obj1) && empty($obj2)){
				echo '	<script>
						var b1 = document.createElement("b");
						b1.setAttribute("style","'.$b1.'");
						var b1text = document.createTextNode("'.$obj1.'");
						b1.appendChild(b1text);
						document.getElementById("dev_window").appendChild(b1);
						var br = document.createElement("br");
						document.getElementById("dev_window").appendChild(br);
					</script>
				';
			}
			elseif(!empty($obj1) && !empty($obj2)){
				if($obj2=="error"){
					echo '	<script>
						var b3 = document.createElement("b");
						b3.setAttribute("style","'.$b3.'");
						var b3text = document.createTextNode("'.$obj1.'");
						b3.appendChild(b3text);
						document.getElementById("dev_window").appendChild(b3);
						var br = document.createElement("br");
						document.getElementById("dev_window").appendChild(br);
					</script>
				';
				}
				else{
					echo '	<script>
						var b5 = document.createElement("b5");
						b5.setAttribute("style","'.$b1.'");
						var b5text = document.createTextNode("'.$obj1.' : '.'");
						b5.appendChild(b5text);
						document.getElementById("dev_window").appendChild(b5);
	
						var b6 = document.createElement("b6");
						b6.setAttribute("style","'.$b2.'");
						var b6text = document.createTextNode("'.$obj2.'");
						b6.appendChild(b6text);
						document.getElementById("dev_window").appendChild(b6);
	
						var br = document.createElement("br");
						document.getElementById("dev_window").appendChild(br);
					</script>
				';
				}
			}//elseif
			echo '<script>var objDiv = document.getElementById("dev_window");
			objDiv.scrollTop = objDiv.scrollHeight;</script>';
		}//developer mode
	
	}
   
?>