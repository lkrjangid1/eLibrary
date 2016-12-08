<?php
//config_std.php

//Header
	$std['header']['flyer']['text'] = 'Bal Bharati Public School Ganga Ram Hospital Marg';
	$std['header']['flyer']['link'] = 'http://www.bbpsgr.edu.in/';
	$std['header']['flyer']['textcolor'] = '#e7e7e7';
	$std['header']['flyer']['textsize'] = '16px';
	$std['header']['flyer']['font'] = 'display_4_r';
	$std['header']['flyer']['bgcolor'] = '#383838';
	$std['header']['flyer']['bordercolor'] = '#3EC6EF';
	$std['header']['flyer']['logo'] = 'offbbpslogo_white.png';

	$std['header']['head']['logo'] = 'offbbpslogo_black@high.png';
	$std['header']['head']['texta'] = 'Digital';
	$std['header']['head']['textb'] = 'Library';
	$std['header']['head']['textcolora'] = '#383838';
	$std['header']['head']['textcolorb'] = '#383838';
	$std['header']['head']['fonta'] = 'display_4_b';
	$std['header']['head']['fontb'] = 'display_4_r';
	$std['header']['head']['sizea'] = '48px';
	$std['header']['head']['sizeb'] = '32px';

	$std['header']['src']['bordercolor'] = '#cdcdcd';
	$std['header']['src']['shadowcolor'] = 'rgba(200,200,200,0.3)';
	$std['header']['src']['hovercolor'] = '#3EC6EF';
	$std['header']['src']['text'] = 'Hello World';
	$std['header']['src']['textcolor'] = '#888';
	$std['header']['src']['textfont'] = 'display_4_r';

	$std['header']['main']['bgcolor'] = 'rgb(240,240,240)';

//Navibar
	$std['navibar'][0]['count'] = 8;
	$std['navibar'][0]['icon_style'] = 'blueGrad';
	$std['navibar'][0]['default_color'] = '#868686';
	$std['navibar'][0]['hover_color'] = '#3EC6EF';
	$std['navibar'][0]['font'] = 'display_3_r';
	
	$std['navibar'][1]['name'] = 'Home';
	$std['navibar'][1]['link'] = 'elib_bin/Home/home.php';
	$std['navibar'][1]['image'] = 'home_3grey';
	$std['navibar'][1]['img_style'] = 'contain';

	$std['navibar'][2]['name'] = 'Books';
	$std['navibar'][2]['link'] = 'elib_bin/Elib/elib.php';
	$std['navibar'][2]['image'] = 'booksgrey';
	$std['navibar'][2]['img_style'] = 'contain';

	$std['navibar'][3]['name'] = 'Studyzone';
	$std['navibar'][3]['link'] = 'elib_bin/Studyzone/study_home.php?stdtab=NCERT';
	$std['navibar'][3]['image'] = 'book_2grey';
	$std['navibar'][3]['img_style'] = 'contain';

	$std['navibar'][4]['name'] = 'Blogs';
	$std['navibar'][4]['link'] = 'elib_bin/Blogs/blog_home.php';
	$std['navibar'][4]['image'] = 'bloggrey';
	$std['navibar'][4]['img_style'] = 'contain';

	$std['navibar'][5]['name'] = 'Guestbook';
	$std['navibar'][5]['link'] = 'elib_bin/Guest/guest.php';
	$std['navibar'][5]['image'] = 'bookgrey';
	$std['navibar'][5]['img_style'] = 'contain';

	$std['navibar'][6]['name'] = 'Dashboard';
	$std['navibar'][6]['link'] = 'elib_bin/Account/Account.php';
	$std['navibar'][6]['image'] = 'aboutusgrey';
	$std['navibar'][6]['img_style'] = 'cover';

	$std['navibar'][7]['name'] = 'AboutUs';
	$std['navibar'][7]['link'] = 'elib_bin/Aboutus/about.php';
	$std['navibar'][7]['image'] = 'stargrey';
	$std['navibar'][7]['img_style'] = 'cover';

	$std['navibar'][8]['name'] = 'Quicklinks';
	$std['navibar'][8]['link'] = 'elib_bin/Quicklinks/quick.php';
	$std['navibar'][8]['image'] = 'micsgrey';
	$std['navibar'][8]['img_style'] = 'cover';

//Meta
	$std['meta']['title'] = 'pageTitle';
	$std['meta']['base'] = "http://".$_SERVER['HTTP_HOST']."/digilib_net/Digilib_net/";
	$std['meta']['charset'] = 'utf-8';

	$std['meta']['keywords'] = 'Bal Bharati Public School, Elibrary, Students Portal, Ncert Books, Ncert Solutions, Assignments, Sample Papers, Old Question Papers, Bal Bharati Public School Ganga Ram Hospital Marg, BBPS, BBPSGRHM, Learn, exercise, skill, education, practice';

	$std['meta']['descp'] = 'Learn, Practice, and Play at Bal Bharati Public School GRHM Student\'s Portal. Read books, view Ncert answers with solutions, discuss problems on school forum, solve online assignmets, see previous year question papers and more.';

	$std['meta']['viewport'] = 'width=device-width,initial-scale=1';

	$std['meta']['links'] = '
		<link rel="stylesheet" type="text/css" href="'.$GLOBALS["css_none"].'">
    	<link rel="stylesheet" type="text/css" href="'.$GLOBALS["css_fonts"].'">
    						';

	$std['meta']['scripts'] = '
		<script src="'.$GLOBALS["jquery"].'"></script>
    	<script src="'.$GLOBALS["TweenMax"].'"></script>
							';

	$std['meta']['bin']['links'] = '<!--Page specific links here-->';
	$std['meta']['bin']['scripts'] = '<!--Page specific scripts here-->';

//Para


//Footer
	$std['footer']['bgcolor'] ='linear-gradient(to bottom, rgba(83,203,241,1) 0%,rgba(5,171,224,1) 100%)';
	$std['footer']['uppertext_color'] ='#484848';

	$std['footer']['upper']['list1_address'] = 'Bal Bharati Public School Ganga Ram Hospital Marg, New Delhi - 110060';
	$std['footer']['upper']['list1_number'] = ' +91 (011) 25786897, 25782419';
	$std['footer']['upper']['list1_link'] = '#';

	$std['footer']['upper']['list2_facebk'] = '#';
	$std['footer']['upper']['list2_twitter'] = '#';
	$std['footer']['upper']['list2_schblog'] = '#';
	$std['footer']['upper']['list2_Instagram'] = '';

	$std['footer']['upper']['list3_1_text'] = 'Bal Bharati Public School GRHM';
	$std['footer']['upper']['list3_1_link'] = 'http://www.bbpsgr.edu.in';
	
	$std['footer']['upper']['list3_2_text'] = 'Educomp Online';
	$std['footer']['upper']['list3_2_link'] = '#';

	$std['footer']['upper']['list3_3_text'] = 'British Council';
	$std['footer']['upper']['list3_3_link'] = '#';

	$std['footer']['upper']['list3_4_text'] = 'Libraries Delhi';
	$std['footer']['upper']['list3_4_link'] = '#';

	$std['footer']['lower']['links1_1_text'] = 'Help';
	$std['footer']['lower']['links1_1_link'] = '#';
	$std['footer']['lower']['links1_2_text'] = 'Feedback';
	$std['footer']['lower']['links1_2_link'] = '#';
	$std['footer']['lower']['links1_3_text'] = 'Mobile';
	$std['footer']['lower']['links1_3_link'] = '#';
	$std['footer']['lower']['links1_4_text'] = 'About';
	$std['footer']['lower']['links1_4_link'] = '#';

	$std['footer']['lower']['links2_1_text'] = 'Sitemap';
	$std['footer']['lower']['links2_1_link'] = '#';
	$std['footer']['lower']['links2_2_text'] = 'References';
	$std['footer']['lower']['links2_2_link'] = '#';
	$std['footer']['lower']['links2_3_text'] = 'Archive';
	$std['footer']['lower']['links2_3_link'] = '#';
	$std['footer']['lower']['links2_4_text'] = 'Report';
	$std['footer']['lower']['links2_4_link'] = '#';
	$std['footer']['lower']['links2_5_text'] = 'Privacy';
	$std['footer']['lower']['links2_5_link'] = '#';
	$std['footer']['lower']['links2_6_text'] = 'Legal';
	$std['footer']['lower']['links2_6_link'] = '#';
	$std['footer']['lower']['links2_7_text'] = 'Terms';
	$std['footer']['lower']['links2_7_link'] = '#';



?>