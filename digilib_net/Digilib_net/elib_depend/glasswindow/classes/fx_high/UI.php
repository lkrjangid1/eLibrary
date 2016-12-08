<?php
function digilib_Header(){
    include("elib_depend/glasswindow/classes/fx_navibar/header.php");
    include("elib_depend/glasswindow/classes/fx_navibar/style.php");
    include("elib_depend/glasswindow/classes/fx_navibar/script.php");
}
function digilib_Showcase( $bin , $Infoarr, $folder ,$ratio){
if($bin > 0){
    include("elib_depend/glasswindow/classes/fx_showcse/Showcase.php");
    
    shwcse_prt($bin, $Infoarr, $folder, $ratio);
}}
function digilib_Footer(){
    include("elib_depend/glasswindow/classes/fx_navibar/footer.php");
}
function digilib_Meta($pg_title, $bin){
    echo '<!DOCTYPE html>
    <html lang="en-US">
    <head><title>'.$pg_title.'</title>
    
    <base href="'.$GLOBALS["db_htmlBASE"].'" target="_self">
    
    <meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="keywords" content="Bal Bharati Public School, Elibrary, Students Portal, Ncert Books, Ncert Solutions, Assignments, Sample Papers, Old Question Papers, Bal Bharati Public School Ganga Ram Hospital Marg, BBPS, BBPSGRHM, Learn, exercise, skill, education, practice">
    <meta name="description" content="Learn, Practice, and Play at Bal Bharati Public School GRHM Student\'s Portal. Read books, view Ncert answers with solutions, discuss problems on school forum, solve online assignmets, see previous year question papers and more.">
    
    <link rel="stylesheet" type="text/css" href="'.$GLOBALS["css_none"].'">
    <link rel="stylesheet" type="text/css" href="'.$GLOBALS["css_fonts"].'">
    
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <script src="'.$GLOBALS["jquery"].'"></script>
    <script src="'.$GLOBALS["TweenMax"].'"></script>'.$bin.'</head>';
    
    

}
function prt_dashboard_ad(){
    echo '
        <div class="Sal">
            <a href="elib_bin/Account/Dashboard.php" class="Header">
                <span class="imglogo"></span>
                <span class="realtxt">
                    <span class="panasonic"><b>Digital</b>Library</span>
                    <span class="threedo">Dashboard</span>
                </span>
            </a>
            <div class="lnebrk"></div>
            <div class="feat">
                <span class="feat-list">Everything You Need, At Your Fingertips!</span>
                <span class="feat-list-elem">Make Favourites and Wishes</span>
                <span class="feat-list-elem">Review a Book or Post a Blog</span>
                <span class="feat-list-elem">Contribute to expand the Project</span>
                <span class="feat-list-elem">Manage Your Digilib Account</span>
                <span class="feat-list-elem">And Much More!!!</span>
            </div>
            <div class="lnebrk"></div>
            <div class="now">
                <span class="jointit">So, What Are You Waiting For?</span>
                <a href="elib_bin/Account/Signup.php" class="Signup">Signup</a>
                <span class="divider">Or</span>
                <a href="elib_bin/Account/Dashboard.php" class="Login">Login</a>
            </div>
        </div>';
}
function prt_dashboard_ad_css(){
 echo '<style>
    .Sal{
	position: relative;
	display: block;
	width: auto; height: auto;
	border-radius:3px;
	border: dashed 1px #dedede;
	background: #fbfbfb;
	text-align: left;
	padding-top:10px;
	padding-bottom:10px;
}
.Sal .Header{
	position: relative;
	display: inline-block;
	width: auto; height: auto;
	text-align: left;
	vertical-align: middle;
	margin-right:20px; margin-left:40px;
	text-decoration:none;
}
.Sal .Header .imglogo{
	position: relative;
	display: inline-block;
	margin:25px;
	margin-left:0px;
	width: 90px;
	height:90px;
	background: url(elib_depend/graphics/interface_graphics/icons/blueGrad/aboutusgrey@High.png) center no-repeat;
	background-size: cover;
	vertical-align: middle;
}
.Sal .Header .realtxt{
	position: relative;
	display: inline-block;
	vertical-align: middle;
	width: auto;
	height: auto;
}
.Sal .Header .realtxt .panasonic{
	position: relative;
	display: block;
	font-size:16px;
	color:#3ec6ef;
	font-family: display_4_r;
	margin-left:4px;
}
.Sal .Header .realtxt .panasonic b{
	font-family: display_4_b;
}
.Sal .Header .realtxt .threedo{
	position: relative;
	display: block;
	font-size:42px;
	color:#3ec6ef;
	font-family: display_4_r;
}
.Sal .feat{
	position: relative;
	display: inline-block;
	vertical-align: middle;
	width: 300px; 
	margin-left: 20px;
}
.Sal .feat .feat-list{
	position: relative;
	display: block;
	font-family: display_4_r;
	font-size:24px;
	color:#3ec6ef;
	margin-bottom: 10px;
	
}
.Sal .feat .feat-list-elem{
	position: relative;
	display: block;
	font-family: display_4_r;
	font-size:16px;
	color:#a8a8a8;
	margin:5px; margin-left:10px;
}
.Sal .feat .feat-list-elem::before{
	content:">";
	margin-right: 15px;
}
.Sal .now{	
	position: relative;
	display: inline-block;
	vertical-align: middle;
	width: 200px; height: auto;
	text-align:center;
	margin-left:10px;
	
}
.Sal .now .jointit{
	position: relative;
	display: block;
	font-size: 20px;
	font-family: display_4_r;
	margin:10px;
	color:#3ec6ef;
		
}
.Sal .now .divider{
	position: relative;
	display: block;
	font-size: 16px;
	font-family: display_4_r;
	color:#a8a8a8;
}
.Sal .now a:hover{
	background: #FF8930;
}
.Sal .now a{
	position: relative;
	display: inline-block;
	padding: 6px;
	color: #f7f7f7;
	font-size: 18px;
	font-family: display_4_r;
	background: #3EC6EF;
	text-decoration: none;
	padding-left: 20px;
	padding-right: 20px;
	margin:10px;
}
.Sal .lnebrk{
	position: relative;
	display: inline-block;
	vertical-align:middle;
	width:1px; height:150px;
	background: #ededed;
}
@media only screen and (max-width: 999px){
	.Sal .lnebrk{
		display: none;
	}
	.Sal .Header{
		display: block;
		margin: 0;
	}
	.Sal .Header .imglogo{
		margin: 10px;
	}
	.Sal .now{
		width:auto;text-align:left;
		display:block;
	}
	.Sal .now .divider{
		margin-left:20px;
	}
	.Sal .feat{
		width:auto;
		
	}
}
@media only screen and (max-width: 769px){
	.Sal .Header .imglogo{
		margin: 0px;
	}
	.Sal .Header{
		margin: 0;
		margin-bottom:10px;
	}
	.Sal .now{
		width:auto;text-align:center;
		display:block;
	}
	.Sal .now .divider{
		margin:0;
	}
}
     </style>';
}
function prt_dashSidebar(){
    echo '<div class="sidebar">

	    <!-- User diplay set -->
	    <div class="user-display ssbox">
            <div class="pro-pic">
                <div class="lnkChange">change</div>
            </div>
            <div class="user-name">Shaurya Kharb</div>
	    </div>

	    <!-- User personal Info -->
	    <div class="user-pers ssbox">
            <div class="user-email">Email-id: <span>Sal.uncd@gmail.com</span></div>
            <div class="user-dob">DOB: <span>12 Jan 2013</span></div>
            <div class="user-gender">Gender: <span>Male</span></div>
	    </div>

	    <!--diglib user info -->
	    <div class="user-socil ssbox">
            <div class="user-rep">Points: <span>100</span></div>
            <div class="user-bookctr">Books Written: <span>0</span></div>
            <div class="user-blogctr">Blogs Written: <span>0</span></div>
	    </div>
          
        <!-- settings -->
        <div class="Acc-set ssbox">
            <div class="change-pass">Change Password</div>
            <div class="remove-cont">Remove All Content</div>
            <div class="delete-acc">Delete Account</div>
        </div>
	    
	  </div>';
}
function prt_Highlight(&$content){
        echo ' <div class="highBox">
        <div style="background: url('.$content[0][0].') no-repeat; background-size: cover;" class="image"></div>
        <div class="title">'.$content[0][1].'</div>
        <div class="descp">'.$content[0][2].'</div>
        <a class="lnktofull" href="'.$content[0][3].'">See More</a>
        </div>';
    }
function prt_Highlight_css(){
                    
    echo '<style>
        .body-cont .highlights{
            margin-top: 50px;
        }
        .body-cont .highlights .highBox{
            width: 280px; height:300px;
            overflow-Y:scroll; overflow-X:hidden;
            position: relative;
            display: inline-block;
            margin:10px; margin-top:0; margin-bottom: 10px;
            border-right: solid 1px #efefef;
            text-align: center; vertical-align: top;
            overflow: hidden;
        }
        .body-cont .highlights .highBox:nth-of-type(3){
            border-right:none;
        }
        .body-cont .highlights .highBox .image{
            position: relative; display: block;
            width: calc(100% - 20px); height: 140px;
            border-radius: 5px; box-shadow: 0px 0px 8px rgba(100,100,100,0.5);
        }
        .body-cont .highlights .highBox .title{
            position: relative;text-align: left;
            width: calc(100% - 20px); height: auto;
            font-size: 18px; font-family: display_4_r;
            top: 5px; padding:5px; color: #686868;
        }
        .body-cont .highlights .highBox .descp{
            position: relative;
            width: calc(100% - 20px); height: auto;
            text-align: left; font-size: 12px;
            font-family: display_4_r;
            top: 5px; padding:3px;
            color:#cdcdcd;
        }
        .body-cont .highlights .highBox .lnktofull{
            position: absolute;
            bottom: 10px; right: 10px;
            text-decoration: none;
            text-align: right; font-size: 12px;
            font-family: display_4_r; color:#FF8930;
        }
        .body-cont .highlights .highBox .lnktofull:hover{
            text-decoration: underline;
        }
        @media only screen and (max-width: 1000px){
            .body-cont .highlights .highBox{
                position:relative; display:block;
                width: auto; margin: 5px;
                border: none; height: auto;
                min-height: 300px; margin-bottom: 10px;
            }
            .body-cont .highlights .highBox .image{
                height: 200px;
            }
        }
    </style>';
}
function prt_feed(&$content){
    echo '<style>
    .body-cont #lstbx_'.$content[0][3].'{
    width:';
    if($content[0][0]==1){
        echo 'calc((100% / 3) - 12px);';
    }
    elseif($content[0][0]==2){
        echo 'calc((100% / 2) + 15%);';
    }
    elseif($content[0][0]==3){
        echo 'calc(100% - 10px)';
    }
    echo '}
    @media only screen and (max-width: 1000px){
            .body-cont #lstbx_'.$content[0][3].'{
	           position:relative; display:block;
               width: auto;
            }
        }
    </style>
    <div class="listBox" id="lstbx_'.$content[0][3].'">
        <div class="head">'.$content[0][2].'</div>
        <div class="ns-list">';
    for($i=0; $i<$content[0][4]; $i++){
        echo '<a href="'.$content[$i+1][3].'" class="list-elem">
            <div style="
                position: relative; display:inline-block; vertical-align: top;
                height: 40px;
            ';
        if($content[0][1]==1){
            echo 'width: 40px;';
            switch($content[$i+1][2]){
                case 1: echo 'background: url("") center no-repeat; background-size: contain;'; break;
                case 2: echo 'background: url("") center no-repeat; background-size: contain;'; break;
                case 3: echo 'background: url("") center no-repeat; background-size: contain;'; break;
                default: echo 'background: url("") center no-repeat; background-size: contain;'; break;
            }
        }
        else{
            echo 'width: 0;';
        }
        echo '" class="image"></div>
            <div class="content">
                <div class="txt">'.$content[$i+1][0].'</div>';
        if(isset($content[$i+1][1])){ 
            if($content[$i+1][1]!=""){
                echo '<div class="time">'.$content[$i+1][1].'</div>';
            }
        }
        echo '</div>
        </a>';
    }
    echo '</div>
    </div>';
}
function prt_feed_css(){
    echo '
    <style>
        .body-cont .listBox{
            border: dashed 1px #dedede; border-radius: 5px;
            height:250px; overflow-Y:scroll; overflow-X:hidden;
            position: relative; display: inline-block;
            margin:3px; margin-top:0; margin-bottom: 10px;
        }
        .body-cont .listBox .head{
            position: absolute; z-index: 10;
            left:0; right:0; top:0;
            font: display_4_r; text-align: left; 
            font-size: 24px; color: #a8a8a8; padding:16px;
        }
        .body-cont .listBox .ns-list{
            position: absolute; z-index:5;
            top:56px; left:0; right:0; bottom:0;
        }
        .body-cont .listBox .ns-list .list-elem{
            position: relative; display: block;
            text-decoration: none; text-align: left;
            width: auto; height: auto;
            box-shadow: 0px 0px 1px rgba(100,100,100,0.3);
            cursor: pointer; padding:15px;
        }
        .body-cont .listBox .ns-list .list-elem .content{
            position: relative; 
            display: inline-block;
            width:calc(100% - 80px);
            height:auto;
            
        }
        .body-cont .listBox .ns-list .list-elem .content .txt{
            color: #868686;
            font-family: display_4_r; font-size: 14px;
            height:auto; padding:5px;
            width:calc(100% - 5px);height:auto;
        }
        .body-cont .listBox .ns-list .list-elem .content .time{
            color: #dedede;
            font-family: display_4_r; font-size: 10px;
            padding:5px;
            width:calc(100% - 5px);
            height:auto;
        }
        
    </style>
';
}
function prt_para(&$content){
    echo '<div class="pB-elem pB-orient-'.$content[0][3].'">
    <span class="title">'.$content[0][0].'</span><div class="list">';
    for($i=0;$i<$content[0][1];$i++){
    echo '<div class="list-elem">
    <div style="
        background: url('.$content[$i+1][4].') center no-repeat; 
        background-size: cover;"
    class="image"></div>
    <div class="txt">
        <a href="'.$content[$i+1][2].'" class="tit">'.$content[$i+1][0].'</a>
        <a href="'.$content[$i+1][3].'" class="auth">'.$content[$i+1][1].'</a>
    </div>
    </div>';
    }
    echo '</div>';
    if($content[0][5]){
    echo '<a href="#" class="more">View More</a>';
    }
    echo '</div>';
}
function prt_para_css(){
echo'
<style>
.body-cont .paraBox{
    position: relative;
    width: auto; height:auto;
    text-align: center;
}
.body-cont .paraBox .pB-orient-1{
    position: relative;
    display: inline-block;
    vertical-align:top;
    padding:10px; 
    width: 300px; height: 300px;
    text-align:left;
    border-left: solid thin #cdcdcd;
}
.body-cont .paraBox .pB-orient-1:nth-of-type(1){
    border-left: none;
}
.body-cont .paraBox .pB-elem .title{
    position: relative;
    top: 0;
    width: auto;
    display: block;
    font-size: 28px;
    font-family: display_4_r;
    color: #383838;
    text-align: left;
}
.body-cont .paraBox .pB-elem .title::after{
    content: "";
    position: relative;
    display: block;
    width: auto; height: 5px;
    margin-top:5px; margin-bottom:5px;
    background: #3EC6EF;
    box-shadow: inset 1px 1px 1px rgba(100,100,100,0.3);
}
.body-cont .paraBox .pB-elem .more{
    position: absolute;
    bottom: -15px; right: 5px;
    font-size: 12px;
    color: #FF8930;
}
.body-cont .paraBox .pB-orient-1 .list{
    position: relative;
    display: block;
    top: 0; left: 0;
    width: auto; height: 250px;
    overflow-y: scroll; overflow-x: hidden;
}
.body-cont .paraBox .pB-orient-1 .list .list-elem{
    position: relative;
    display: block;
    width: auto;
    padding-top:10px; height:100px;
    padding-left:10px;
    padding-right:10px;
    text-decoration: none;
    border-bottom: solid 1px #dedede;
    color: #383838;
}
.body-cont .paraBox .pB-orient-1 .list .list-elem:last-of-type{
    border-bottom: none;
}
.body-cont .paraBox .pB-elem .list .list-elem .image{
    position: relative;
    display: inline-block;
    vertical-align: middle;
    width: 60px; height:80px;
    border: solid 1px #dedede;
    background: url(../../elib_depend/graphics/mics_graphics/bk_cover_1.jpeg) center no-repeat;
    background-size: cover;
}
.body-cont .paraBox .pB-elem .list .list-elem .txt{
    position: relative;
    display: inline-block;
    margin-left: 5px;
    vertical-align: middle;
    margin-left: 5px;
    width: calc(100% - 100px); height: auto;
}
.body-cont .paraBox .pB-elem .list .list-elem .tit{
    position: relative;
    text-decoration: none;
    display: block;
    font-size: 20px;
    font-family: class_2_r;
    color: #383838;
    white-space: normal;
}
.body-cont .paraBox .pB-elem .list .list-elem .auth{
    position: relative;
    display: block;
    text-decoration: none;
    font-size: 16px;
    font-family: class_2_r;
    color: #686868;
    white-space: normal;
}
.body-cont .paraBox .pB-elem .list .list-elem .txt .tit:hover{
    color: #FF8930;
    text-decoration: underline;
    text-shadow: 0px 1px 5px rgba(100,100,100,0.1);
}
.body-cont .paraBox .pB-elem .list .list-elem .txt .auth:hover{
    color: #FF8930;
    text-decoration: underline;
    text-shadow: 0px 1px 5px rgba(100,100,100,0.1);
}

.body-cont .paraBox .pB-orient-2{
    position: relative;
    border: none;
    display: block;
    margin:5px; 
    width: auto; height: auto;
    margin-bottom: 20px;
}

.body-cont .paraBox .pB-orient-2 .list{
    position: relative;
    display: block; left: 0; top:10px;
    width: auto; height: 300px;
    overflow: hidden; overflow-X:scroll;
    white-space:nowrap; 
}
.body-cont .paraBox .pB-orient-2 .list .list-elem{
    position: relative;
    padding-top:10px;
    padding-left:10px; padding-right:10px;
    text-decoration: none;
    color: #383838;
    display: inline-block; vertical-align: top;
    height:250px; width:150px; 
    margin-left:20px; margin-right:20px;
    border: none;
}
.body-cont .paraBox .pB-orient-2 .list .list-elem .image{
    width: 150px; height:200px;
}
.body-cont .paraBox .pB-orient-2 .list .list-elem .txt{
    text-align: center;
    display: block;
    margin:0; width: 200px;
    left:-25px; 
    top:5px;
}
.body-cont .paraBox .pB-orient-2 .list .list-elem .txt *{
    text-align: center;
    width:auto;
    display: block;
    margin:0;

}
@media only screen  and (max-width: 1000px) {
    .body-cont .paraBox .pB-orient-1{
        position: relative;
        border: none;
        display: block;
        margin:5px; 
        width: auto; height: auto;
        margin-bottom: 30px;
    }
    .body-cont .paraBox .pB-orient-1 .list{
        position: relative;
        display: block;
        top: 0; left: 0;
        width: auto; height: 300px;
        overflow: hidden; overflow-X:scroll;
        white-space:nowrap; top:10px;
        
    }
    .body-cont .paraBox .pB-orient-1 .list .list-elem{
    	display: inline-block;vertical-align: top;
    	height:250px; width:150px; 
    	margin-left:20px; margin-right:20px;
    	border: none;
    }
    .body-cont .paraBox .pB-orient-1 .list .list-elem .image{
    	width: 150px; height:200px;
    }
    .body-cont .paraBox .pB-orient-1 .list .list-elem .txt{
    	text-align: center;
    	display: block;
    	margin:0; width: 200px;
    	left:-25px; 
    	top:5px;
    }
    .body-cont .paraBox .pB-orient-1 .list .list-elem .txt *{
    	text-align: center;
    	width:auto;
    	display: block;
    	margin:0;
    	
    }
    
</style>
';
}
function prt_loginfrm($error=""){
echo '			
<div class="root">
	<div class="pvt">';
 
$Infoarr[1][1] = "#";
$Infoarr[1][2] = "Keepsakes: Australians and the Great War";
$Infoarr[1][3] = "Share in the personal stories of Australians who served during the First World War.";
$Infoarr[1][4] = "WATCH NOW";
$Infoarr[2][1] = "#";
$Infoarr[2][2] = "Revealing the Rothschild Prayer Book c.1505-1510 from the Kerry Stokes Collection";
$Infoarr[2][3] = "On show with the National Library’s medieval and Renaissance manuscripts.";
$Infoarr[2][4] = "ON NOW";
$Infoarr[3][1] = "#";
$Infoarr[3][2] = "Gems of History";
$Infoarr[3][3] = "See the behind the scenes of our latest Medieval Manuscript Project.";
$Infoarr[3][4] = "WATCH NOW";
digilib_Showcase(3,$Infoarr, "example", "75%");
    
    /*
    $_POST["email-inp-Logfrm"]
    $_POST["pass-inp-Logfrm"]
    $_POST["remain-inp-Logfrm"]
    */
    
echo '
	</div>
	<div class="usr">
		<div class="title">
			<span class="out"></span>
			<span class="in">Dashboard</span>
		</div>
        <div class="error">'.$error.'</div>
		<span class="preform">
			Digital Library account <a class="what" href="#">What\'s This?</a>
		</span>
		<form class="LoginForm" method="POST" action="elib_bin/Account/Account.php">
			<div id="email-cov">
				<input type="text" id="email-det" name="email-inp-Logfrm" placeholder="someone@example.com">
			</div>
			<div id="pass-cov">
				<input type="password" id="pass-det" name="pass-inp-Logfrm" placeholder="Password">
			</div>
			<div id="chk-cov">
				<input type="checkbox" id="chk-det" name="remain-inp-Logfrm">
				<span>Keep me signed in</span>
			</div>
			<div id="submit-cov">
                <input type="text" hidden="true" name="try_loggin" value="1">
				<input type="Submit" id="submit-det" name="enter-inp-Logfrm" value="Login">
			</div>
		</form>
		<a class="forgotSpan" href="#">Forgot password?</a>
		<form class="NewSpan" action="elib_bin/Account/Account.php" method="POST">
			Don\'t Have an Account?
            <input type="text" name="show_signup" value="1" hidden="true" >
			<input class="submitbut" value="Sign up" type="submit">
		</form>
	</div>
</div>
<style>
.root{
	position: relative;
	display: block;
	width:auto;
	height:auto;
	text-align: center;
	margin-top:10px;
}
.root .pvt{
	position: relative;
	display: inline-block;
	width: calc(100% - 470px);
	height: auto;
	text-align:center;
	vertical-align: middle;
	margin-right:50px;
}
.root .usr{
	position: relative;
	display: inline-block;
	width: 400px;
	text-align:left;
	padding-left: 5px;
	padding-top: 5px;
	padding-bottom: 5px;
	vertical-align: top;
}
.root .usr .title{
	position: relative;
	display: block;
	width: auto;
	margin-top:20px;
	margin-bottom:40px;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	cursor: default;	
}
.root .usr .title .out{
	position: relative;
	display: inline-block;
	width: 40px; height:40px;
	background: url(elib_depend/graphics/interface_graphics/icons/blueGrad/aboutusgrey@High.png) center no-repeat;
	background-size: cover;
	margin-right:00px;
	vertical-align:top;
}
.root .usr .title .in{
	position: relative;
	display: inline-block;
	color: #3EC6EF;
	font-size: 42px;
	font-family: display_4_r;
	margin-left:10px; margin-right: 30px;
	vertical-align:top;
}

.root .usr .preform{
	position: relative;
	display: block;
	width: auto;
	font-size:14px;	
	font-family: display_4_r;
	color: #383838;
	margin-top: 5px;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	cursor: default;
}
.root .usr .preform a{
	text-decoration: none;
	color:#3EC6EF;	
}
.root .usr .preform a:hover{
	text-decoration: underline;
}
.root .usr .LoginForm{
	position: relative;
	display: block;
	width: auto; height: auto;
}
.root .usr .LoginForm #email-cov, .root .usr .LoginForm #pass-cov {
	position: relative;
	display: block;
	width: 250px;
	height:28px;
	
	margin-top:15px;
	margin-bottom:10px;
}
.root .usr .LoginForm #email-cov #email-det, .root .usr .LoginForm #pass-cov #pass-det{
	-webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    outline: none;
    position: absolute;
    z-index: 2;
    top:0; left:0; bottom:0;
    width: 250px;
    font-size:16px;
    padding:4px;
    font-family: display_4_r;
    color:#585858;
    border: solid 1px #dedede;
    
}
.root .usr .LoginForm #chk-cov{
	position: relative;
	display: block;
	width: 250px;
	height:28px;
	margin-top:15px;
	margin-bottom:10px;
	
    font-size:16px;
    font-family: display_4_r;
    color:#383838;
        -webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	cursor: default;
}
.root .usr .LoginForm #chk-cov #chk-det{
    outline: none;
    position: relative;
    display: inline-block;
    vertical-align: middle;
    margin-right: 5px;
    cursor: pointer;
}
.root .usr .LoginForm #submit-cov{
	position: relative;
	display: block;
	width: 250px;
	height:28px;
	
	margin-top:40px;
	margin-bottom:10px;
	    -webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.root .usr .LoginForm #submit-cov #submit-det{
	-webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    outline: none;
    position: relative;
    z-index: 2;
    top:0; left:0; bottom:0; right:0;
    
    font-size:16px;
    
    padding-top:10px;
    padding-right:20px;
    padding-left:20px;
    padding-bottom:10px;
    
    font-family: display_4_r;
    color:#f7f7f7;
	background: linear-gradient(to bottom, rgba(83,203,241,1) 0%,rgba(5,171,224,1) 100%);
	cursor: pointer;
}
.root .usr .LoginForm #submit-cov #submit-det:hover{
	background:linear-gradient(to bottom, #ffa84c 0%,#ff7b0d 100%);
}
.root .usr .LoginForm #chk-cov #chk-det:focus{
	outline: dashed 1px #686868; 	
}
.root .usr .LoginForm #email-cov #email-det:focus , .root .usr .LoginForm #pass-cov #pass-det:focus{
	border: solid 1px #3EC6EF;
	box-shadow:0px 0px 5px #3EC6EF;
}
.root .usr .forgotSpan{
	position: relative;
	display: block;
	font-size: 14px;
	font-family: display_4_r;
	text-decoration: none;
	color:#3EC6EF;	
	margin-top:5px;
	margin-bottom:5px;
}
.root .usr .forgotSpan:hover{
	text-decoration: underline;
}
.root .usr .NewSpan{
	position: relative;
	display: block;
	font-size: 16px;
	font-family: display_4_r;
	text-decoration: none;
	color:#3EC6EF;	
	margin-top:40px;
	margin-bottom:5px;
}
.root .usr .NewSpan .submitbut{
    -webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    outline: none;
    
	position: relative;
	display: inline-block;
	text-decoration: none;
	padding-top:10px;
    padding-right:20px;
    padding-left:20px;
    padding-bottom:10px;
    
    color:#f7f7f7;
	background:linear-gradient(to bottom, rgba(83,203,241,1) 0%,rgba(5,171,224,1) 100%);
	cursor: pointer;	
}
.root .usr .NewSpan .submitbut:hover{
	background:linear-gradient(to bottom, #ffa84c 0%,#ff7b0d 100%);
}
@media only screen  and (max-width: 1000px) {
	.root .pvt{
		display: none;
	}
	.root {
		text-align: right;
	}
}

@media only screen  and (max-width: 770px) {
	.root .usr{
		width: auto;
	}	
}

</style>

';
}
function prt_signupfrm($error=""){
    
    clr_signup_frm();
    
    /*
    $_POST["firstName-inp-Signupfrm"]
    $_POST["lastName-inp-Signupfrm"];
        
    $_POST["email-inp-Signupfrm"];
        
    $_POST["pass-inp-Signupfrm"];
    $_POST["passc-inp-Signupfrm"];
        
    $_POST["month-inp-Signupfrm"];
    $_POST["day-inp-Signupfrm"];
    $_POST["year-inp-Signupfrm"];
    
    $_POST["gender-inp-Signupfrm"];
    
    $_POST["capt-inp-Signupfrm"];
    $_POST["terms-inp-Signupfrm"];
    */
    
    echo '
<body>
    
            <div class="error">'.$error.'</div>
			<div class="title">Create your Account</div>
			<form class="Signupform1" method="POST" action="elib_bin/Account/Account.php">
				
				<span class="sda">Name</span>
				<span class="sds">The `Real` one!</span>
				<div id="firstName-cov" class="inptext">
					<input type="text" class="inptext-Box" id="firstName-det" name="firstName-inp-Signupfrm" placeholder="First" value="'.$_POST["firstName-inp-Signupfrm"].'">
				</div>
				<div id="lastName-cov" class="inptext">
					<input type="text" class="inptext-Box" id="lastName-det" name="lastName-inp-Signupfrm" placeholder="Last" value="'.$_POST["lastName-inp-Signupfrm"].'">
				</div>
				
				<span class="sda">Enter your Email address</span>
				<span class="sds">So that we could find you on the internet!</span>
				<div id="email-cov" class="inptext">
					<input type="text" class="inptext-Box" id="email-det" name="email-inp-Signupfrm" placeholder="someone@example.com" value="'.$_POST["email-inp-Signupfrm"].'">
				</div>
				
				<span class="sda">Create a password</span>
				<span class="sds">We won\'t tell anyone. Pinky Promise!</span>
				<div id="pass-cov" class="inptext">
					<input type="password" class="inptext-Box" id="pass-det" name="pass-inp-Signupfrm">
				</div>
				<span class="sda">Confirm your password</span>
				<span class="sds">Don\'t Forget it, \'k!</span>
				<div id="passc-cov" class="inptext">
					<input type="password" class="inptext-Box" id="passc-det" name="passc-inp-Signupfrm">
				</div>
				
				<span class="sda">Birthday</span>
				<span class="sds">So we could wish you!</span>
				<div id="month-cov" class="inptext">
					<input type="text" class="inptext-Box"id="month-det" name="month-inp-Signupfrm" placeholder="MM" value="'.$_POST["month-inp-Signupfrm"].'">
				</div>
				<span class="dateslash">/</span>
				<div id="day-cov" class="inptext">
					<input type="text" class="inptext-Box" id="day-det" name="day-inp-Signupfrm" placeholder="DD" 
                    value="'.$_POST["day-inp-Signupfrm"].'">
				</div>
				<span class="dateslash">/</span>
				<div id="year-cov" class="inptext">
					<input type="text" class="inptext-Box" id="year-det" name="year-inp-Signupfrm" placeholder="YYYY" 
                    value="'.$_POST["year-inp-Signupfrm"].'">
				</div>
				
				<span class="sda">Gender</span>
				<span class="sds">Only for statistical purposes</span>
				<div id="gender-cov" class="radiodd">
					<input type="radio" class="radiodd-Box" id="female-det" name="gender-inp-Signupfrm" value="Female">
					<span class="radiotit">Female</span>
					<br>
					<input type="radio" class="radiodd-Box" id="male-det" name="gender-inp-Signupfrm" value="Male">
					<span class="radiotit">Male</span>
					<br>
					<input type="radio" class="radiodd-Box" id="other-det" name="gender-inp-Signupfrm" value="Other">
					<span class="radiotit">Other</span>
				</div>
				
				
				
				<span class="sda">Enter the captcha</span>
				<span class="sds">Prove you\'re not a robot</span>
				<div class="capt-blank">
                    <img src="elib_bin/Account/Cap.php">
                </div>
				<div id="capt-cov" class="inptext">
					<input type="text" class="inptext-Box" id="capt-det" name="capt-inp-Signupfrm">
				</div>
				
				<div id="terms-cov" class="chk">
					<input type="checkbox" class="chk-Box" id="terms-det" value="1" name="terms-inp-Signupfrm">
					<span>
						I agree to the Bal Bharati Public School Ganga Ram Marg Hospt. Digital Library 
						<a href="#">Terms of Service</a> 
						and 
						<a href="#">Privacy Policy</a>
					</span>
				</div>
						
				<div id="submit-cov" class="but">
                    <input type="text" hidden="true" value="1" name="try_signup">
					<input type="Submit" class="but-ton" id="submit-det" name="enter-inp-Signupfrm" value="Submit">
				</div>
										
			</form>
<style>
    .title{
	position: relative;
	display: block;
	font-size: 32px;
	color:#3EC6Ef;
	font-family: display_4_r;
	text-align: left;
	margin-top: 20px;
}
.Signupform1{
	position: relative;
	display: block;
	text-align: left;
	width: auto; height: auto;
	margin-top: 40px;
}
.Signupform1 .sda{
	position: relative;
	display: block;
	margin-left: 10px;	
	margin-top:5px;
	margin-bottom:10px;
	font-size: 16px;
	font-family: display_4_r;
	color: #363636;
}
.Signupform1 .sds{
	position: relative;
	display: none;
	margin-left: 15px;	
	margin-top:2px;
	margin-bottom:5px;
	font-size: 14px;
	font-family: display_4_r;
	color: #a8a8a8;
}
.Signupform1 .inptext{
	position: relative;
	height:28px;
}
.Signupform1 .inptext-Box{
	-webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    outline: none;
    position: absolute;
    z-index: 2;
    top:0; left:0; bottom:0;
    font-size:16px;
    padding:4px;
    font-family: display_4_r;
    color:#585858;
    border: solid 1px #dedede;
}
.Signupform1 .inptext-Box:focus{
	border: solid 1px #3EC6EF;
	box-shadow:0px 0px 5px #3EC6EF;
}
.Signupform1 #firstName-cov, .Signupform1 #lastName-cov{
	display: inline-block;
	width:150px;
	margin-right: 5px;
	margin-left: 10px;
	margin-bottom: 20px;
}
.Signupform1 #firstName-det, .Signupform1 #lastName-det{
	width:150px;
}
.Signupform1 #email-cov, 
.Signupform1 #pass-cov, 
.Signupform1 #passc-cov, 
.Signupform1 #emailc-cov, 
.Signupform1 #capt-cov{
	display: block;
	margin-left: 10px;
	width: 320px;
	margin-bottom: 20px;
}
.Signupform1 #email-det, 
.Signupform1 #pass-det, 
.Signupform1 #passc-det, 
.Signupform1 #emailc-det,
.Signupform1 #capt-det{
	width: 320px;
}
.Signupform1 #month-cov{
	display: inline-block;
	width:60px;
	margin-right: 10px;
	margin-left: 10px;
	margin-bottom: 20px;
	vertical-align:middle;
}
.Signupform1 #month-det{
	width:60px;
}
.Signupform1 #day-cov{
	display: inline-block;
	width:60px;
	margin-right: 10px;
	margin-left: 0px;
	margin-bottom: 20px;
	vertical-align:middle;
}
.Signupform1 #day-det{
	width:60px;
}
.Signupform1 #year-cov{
	display: inline-block;
	width:145px;
	margin-right: 0px;
	margin-left: 0px;
	margin-bottom: 20px;
	vertical-align:middle;
}
.Signupform1 #year-det{
	width:145px;
}
.Signupform1 .dateslash{
	color: #dedede;
	font-size: 20px;
	font-family: display_4_r;
	position: relative;
	display: inline-block;
	vertical-align: super;
}
.Signupform1 #gender-cov{
	position: relative;
	display: block;
	margin-left:10px;
	margin-bottom:20px;
}
.Signupform1 .radiodd-Box{
	position: relative;
	display: inline-block;
	vertical-align: middle;
	margin-right:0px;
	cursor:pointer;
	
}
.Signupform1 .radiotit{
	position: relative;
	display: inline-block;
	font-size: 16px;
	font-family: display_4_r;
	color:#a8a8a8;
	vertical-align: middle;
	margin-right:20px;
}
.Signupform1 .capt-blank{
	position:relative;
	display: block;
	margin-left:10px;
	height: 150px; width:330px;
	border: solid 1px #dedede;
	margin-bottom:10px;
}

.Signupform1 .chk{
	position: relative;
	display: inline-block;
	vertical-align: top;
	margin-left: 10px;
}
.Signupform1 .chk span{
	position: relative;
	display: inline-block;
	margin-left: 5px;
	vertical-align:top;
	width:300px;
	height: auto;
	font-size: 14px;
	font-family:display_4_r;
	color:#a0a0a0;
}
.Signupform1 .chk span a{
	text-decoration: none;
	color:#3EC6EF;
}
.Signupform1 .chk span a:hover{
	text-decoration: underline;
}
.Signupform1 #submit-cov{
	position: relative;
	display: block;
	width: 250px;
	height:28px;
	
	margin-top:40px;
	margin-bottom:10px;
	-webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	
}
.Signupform1 #submit-cov #submit-det{

	-webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    outline: none;
    position: relative;
    z-index: 2;
    top:0; left:0; bottom:0; right:0;
    font-size:16px;
    
    padding-top:5px;
    padding-right:20px;
    padding-left:20px;
    padding-bottom:5px;
    
    font-family: display_4_r;
    color:#f7f7f7;
	background: linear-gradient(to bottom, rgba(83,203,241,1) 0%,rgba(5,171,224,1) 100%);
	cursor: pointer;
}
.Signupform1 #submit-cov #submit-det:hover{
	background:linear-gradient(to bottom, #ffa84c 0%,#ff7b0d 100%);
}
.Signupform1 #gender-cov br{
	display: none;
}


@media only screen and (max-width: 430px){
.Signupform1 #firstName-cov, .Signupform1 #lastName-cov{
	width:auto;
	display:block;
}
.Signupform1 #firstName-det, .Signupform1 #lastName-det{
	width:auto;
}
.Signupform1 #email-cov, 
.Signupform1 #pass-cov, 
.Signupform1 #passc-cov, 
.Signupform1 #emailc-cov, 
.Signupform1 #capt-cov{
	width: auto;
}
.Signupform1 #email-det, 
.Signupform1 #pass-det, 
.Signupform1 #passc-det, 
.Signupform1 #emailc-det,
.Signupform1 #capt-det{
	width: auto;
}
.Signupform1 #month-cov, .Signupform1 #day-cov, .Signupform1 #year-cov{
	display: block;
	width: auto;
	margin-left:10px;
}
.Signupform1 #month-det, .Signupform1 #day-det, .Signupform1 #year-det{
	width: auto;
}
.Signupform1 .dateslash{
	display:none;
}
.Signupform1 #gender-cov br{
	display: block;
}
}

</style>
';
}
function prt_digidash(){
    
//sidebar
prt_dashSidebar();

echo '<div class="root">';

//Feeds

//NotifiFeed
//settings
$dash_Notifi_feeds[0][0]=1; //width
$dash_Notifi_feeds[0][1]=1; //image 1=true, 0=false
$dash_Notifi_feeds[0][2]="Notifications"; //name
$dash_Notifi_feeds[0][3]=1; //index no
$dash_Notifi_feeds[0][4]=5; //count of feed elem
//content
$dash_Notifi_feeds[1][0]="New Circular added";
$dash_Notifi_feeds[1][1]="1:00 pm Today";
$dash_Notifi_feeds[1][2]=1;
$dash_Notifi_feeds[1][3]="#";
$dash_Notifi_feeds[2][0]="New Circular added";
$dash_Notifi_feeds[2][1]="1:00 pm Today";
$dash_Notifi_feeds[2][2]=1;
$dash_Notifi_feeds[2][3]="#";
$dash_Notifi_feeds[3][0]="New Circular added";
$dash_Notifi_feeds[3][1]="1:00 pm Today";
$dash_Notifi_feeds[3][2]=1;
$dash_Notifi_feeds[3][3]="#";
$dash_Notifi_feeds[4][0]="New Circular added";
$dash_Notifi_feeds[4][1]="1:00 pm Today";
$dash_Notifi_feeds[4][2]=1;
$dash_Notifi_feeds[4][3]="#";
$dash_Notifi_feeds[5][0]="New Circular added";
$dash_Notifi_feeds[5][1]="1:00 pm Today";
$dash_Notifi_feeds[5][2]=1;
$dash_Notifi_feeds[5][3]="#";

//Homework Feed
//settings
$dash_HW_feeds[0][0]=1; //width
$dash_HW_feeds[0][1]=1; //image 1=true, 0=false
$dash_HW_feeds[0][2]="Homework"; //name
$dash_HW_feeds[0][3]=2; //index no
$dash_HW_feeds[0][4]=5; //count of feed elem
//content
$dash_HW_feeds[1][0]="New Circular added";
$dash_HW_feeds[1][1]="1:00 pm Today";
$dash_HW_feeds[1][2]=1;
$dash_HW_feeds[1][3]="#";
$dash_HW_feeds[2][0]="New Circular added";
$dash_HW_feeds[2][1]="1:00 pm Today";
$dash_HW_feeds[2][2]=1;
$dash_HW_feeds[2][3]="#";
$dash_HW_feeds[3][0]="New Circular added";
$dash_HW_feeds[3][1]="1:00 pm Today";
$dash_HW_feeds[3][2]=1;
$dash_HW_feeds[3][3]="#";
$dash_HW_feeds[4][0]="New Circular added";
$dash_HW_feeds[4][1]="1:00 pm Today";
$dash_HW_feeds[4][2]=1;
$dash_HW_feeds[4][3]="#";
$dash_HW_feeds[5][0]="New Circular added";
$dash_HW_feeds[5][1]="1:00 pm Today";
$dash_HW_feeds[5][2]=1;
$dash_HW_feeds[5][3]="#";

//Todo Feed
//settings
$dash_Todo_feeds[0][0]=1; //width
$dash_Todo_feeds[0][1]=1; //image 1=true, 0=false
$dash_Todo_feeds[0][2]="To do"; //name
$dash_Todo_feeds[0][3]=3; //index no
$dash_Todo_feeds[0][4]=5; //count of feed elem
//content
$dash_Todo_feeds[1][0]="New Circular added";
$dash_Todo_feeds[1][1]="1:00 pm Today";
$dash_Todo_feeds[1][2]=1;
$dash_Todo_feeds[1][3]="#";
$dash_Todo_feeds[2][0]="New Circular added";
$dash_Todo_feeds[2][1]="1:00 pm Today";
$dash_Todo_feeds[2][2]=1;
$dash_Todo_feeds[2][3]="#";
$dash_Todo_feeds[3][0]="New Circular added";
$dash_Todo_feeds[3][1]="1:00 pm Today";
$dash_Todo_feeds[3][2]=1;
$dash_Todo_feeds[3][3]="#";
$dash_Todo_feeds[4][0]="New Circular added";
$dash_Todo_feeds[4][1]="1:00 pm Today";
$dash_Todo_feeds[4][2]=1;
$dash_Todo_feeds[4][3]="#";
$dash_Todo_feeds[5][0]="New Circular added";
$dash_Todo_feeds[5][1]="1:00 pm Today";
$dash_Todo_feeds[5][2]=1;
$dash_Todo_feeds[5][3]="#";

echo '<div class="feeds">';
prt_feed($dash_Notifi_feeds);
prt_feed($dash_HW_feeds);
prt_feed($dash_Todo_feeds);
echo '</div>';
prt_feed_css();

//ItemBoxes

//Favorites
//settings
$dash_fav_itembox[0][0]="Favorites";//title
$dash_fav_itembox[0][1]=6;//Count of items inside
$dash_fav_itembox[0][2]=1;//size
$dash_fav_itembox[0][3]=2;//vertical scroll=>1, horizontal scroll=>2;
$dash_fav_itembox[0][4]="#";//viewmore link
$dash_fav_itembox[0][5]=0;//viewmore show or hide
//content
$dash_fav_itembox[1][0]="A really really really very so very long title";
$dash_fav_itembox[1][1]="A really really really very so very long title";
$dash_fav_itembox[1][2]="title_link";
$dash_fav_itembox[1][3]="author_link";
$dash_fav_itembox[1][4]="cover_path";
$dash_fav_itembox[2][0]="title";
$dash_fav_itembox[2][1]="author";
$dash_fav_itembox[2][2]="title_link";
$dash_fav_itembox[2][3]="author_link";
$dash_fav_itembox[2][4]="cover_path";
$dash_fav_itembox[3][0]="title";
$dash_fav_itembox[3][1]="author";
$dash_fav_itembox[3][2]="title_link";
$dash_fav_itembox[3][3]="author_link";
$dash_fav_itembox[3][4]="cover_path";
$dash_fav_itembox[4][0]="title";
$dash_fav_itembox[4][1]="author";
$dash_fav_itembox[4][2]="title_link";
$dash_fav_itembox[4][3]="author_link";
$dash_fav_itembox[4][4]="cover_path";
$dash_fav_itembox[5][0]="title";
$dash_fav_itembox[5][1]="author";
$dash_fav_itembox[5][2]="title_link";
$dash_fav_itembox[5][3]="author_link";
$dash_fav_itembox[5][4]="cover_path";
$dash_fav_itembox[6][0]="title";
$dash_fav_itembox[6][1]="author";
$dash_fav_itembox[6][2]="title_link";
$dash_fav_itembox[6][3]="author_link";
$dash_fav_itembox[6][4]="cover_path";

//Books
//settings
$dash_Books_itembox[0][0]="Books";//title
$dash_Books_itembox[0][1]=6;//Count of items inside
$dash_Books_itembox[0][2]=1;//size
$dash_Books_itembox[0][3]=2;//vertical scroll=>1, horizontal scroll=>2;
$dash_Books_itembox[0][4]="#";//viewmore link
$dash_Books_itembox[0][5]=0;//viewmore show hide
//content
$dash_Books_itembox[1][0]="title";
$dash_Books_itembox[1][1]="author";
$dash_Books_itembox[1][2]="title_link";
$dash_Books_itembox[1][3]="author_link";
$dash_Books_itembox[1][4]="cover_path";
$dash_Books_itembox[2][0]="title";
$dash_Books_itembox[2][1]="author";
$dash_Books_itembox[2][2]="title_link";
$dash_Books_itembox[2][3]="author_link";
$dash_Books_itembox[2][4]="cover_path";
$dash_Books_itembox[3][0]="title";
$dash_Books_itembox[3][1]="author";
$dash_Books_itembox[3][2]="title_link";
$dash_Books_itembox[3][3]="author_link";
$dash_Books_itembox[3][4]="cover_path";
$dash_Books_itembox[4][0]="title";
$dash_Books_itembox[4][1]="author";
$dash_Books_itembox[4][2]="title_link";
$dash_Books_itembox[4][3]="author_link";
$dash_Books_itembox[4][4]="cover_path";
$dash_Books_itembox[5][0]="title";
$dash_Books_itembox[5][1]="author";
$dash_Books_itembox[5][2]="title_link";
$dash_Books_itembox[5][3]="author_link";
$dash_Books_itembox[5][4]="cover_path";
$dash_Books_itembox[6][0]="title";
$dash_Books_itembox[6][1]="author";
$dash_Books_itembox[6][2]="title_link";
$dash_Books_itembox[6][3]="author_link";
$dash_Books_itembox[6][4]="cover_path";

//Blogs
//settings
$dash_blgs_itembox[0][0]="Blogs";//title
$dash_blgs_itembox[0][1]=6;//Count of items inside
$dash_blgs_itembox[0][2]=1;//size
$dash_blgs_itembox[0][3]=2;//vertical scroll=>1, horizontal scroll=>2;
$dash_blgs_itembox[0][4]="#";//viewmore link
$dash_blgs_itembox[0][5]=0;//viewmore show hide
//content
$dash_blgs_itembox[1][0]="title";
$dash_blgs_itembox[1][1]="author";
$dash_blgs_itembox[1][2]="title_link";
$dash_blgs_itembox[1][3]="author_link";
$dash_blgs_itembox[1][4]="cover_path";
$dash_blgs_itembox[2][0]="title";
$dash_blgs_itembox[2][1]="author";
$dash_blgs_itembox[2][2]="title_link";
$dash_blgs_itembox[2][3]="author_link";
$dash_blgs_itembox[2][4]="cover_path";
$dash_blgs_itembox[3][0]="title";
$dash_blgs_itembox[3][1]="author";
$dash_blgs_itembox[3][2]="title_link";
$dash_blgs_itembox[3][3]="author_link";
$dash_blgs_itembox[3][4]="cover_path";
$dash_blgs_itembox[4][0]="title";
$dash_blgs_itembox[4][1]="author";
$dash_blgs_itembox[4][2]="title_link";
$dash_blgs_itembox[4][3]="author_link";
$dash_blgs_itembox[4][4]="cover_path";
$dash_blgs_itembox[5][0]="title";
$dash_blgs_itembox[5][1]="author";
$dash_blgs_itembox[5][2]="title_link";
$dash_blgs_itembox[5][3]="author_link";
$dash_blgs_itembox[5][4]="cover_path";
$dash_blgs_itembox[6][0]="title";
$dash_blgs_itembox[6][1]="author";
$dash_blgs_itembox[6][2]="title_link";
$dash_blgs_itembox[6][3]="author_link";
$dash_blgs_itembox[6][4]="cover_path";

echo '<div class="paraBox">';
prt_para($dash_fav_itembox);
prt_para($dash_Books_itembox);
prt_para($dash_blgs_itembox);
echo '</div>';
prt_para_css();


echo '</div>';
echo '
<style>
.body-cont .sidebar{
    position: relative;
    display: inline-block;
    width: 180px;
    margin-right: 30px;
    box-shadow: inset -3px 0px 8px rgba(100,100,100,0.2);
    height:890px;
    vertical-align:top;
    border-radius:5px;
    background: #fefefe;
    text-align: center;
}
.body-cont .root{
    position: relative;
    display: inline-block;
    width: calc(100% - 230px);
    vertical-align:top;
    text-align: left;
   }
.body-cont .sidebar .ssbox{
    margin: 5px;
    border-bottom: solid 1px #dedede;
    padding: 10px;
    position: relative;
}
.body-cont .sidebar .user-display .pro-pic{
    position: relative;
    border: solid thin #dedede;
    width: 150px; height: 150px;
    display: inline-block;
    
}
.body-cont .sidebar .user-display .pro-pic .lnkChange{
    font-family: display_4_r;
    font-size: 12px;
    text-decoration: none;
    color: #FF8930;
    position: absolute;
    bottom: 5px; right:5px;
    cursor: pointer;
}
.body-cont .sidebar .user-display .pro-pic .lnkChange:hover{
    text-decoration: underline;
}
.body-cont .sidebar .user-display .user-name{
    font-family: display_4_r;
    font-size: 20px;
    text-decoration: none;
    width: auto;
    color: #868686;
    margin-top: 5px;
    
}
.body-cont .sidebar .user-pers div{
    font-family: display_4_r;
    font-size: 12px;
    text-decoration: none;
    width: auto;
    color: #868686;
    text-align: left;
}
.body-cont .sidebar .user-socil div{
    font-family: display_4_r;
    font-size: 12px;
    text-decoration: none;
    width: auto;
    color: #868686;
    text-align: left;
}
.body-cont .sidebar .Acc-set .change-pass{
    font-family: display_4_r;
    font-size: 12px;
    text-decoration: none;
    text-align: left;
    color: #FF8930;
    cursor: pointer;
}
.body-cont .sidebar .Acc-set .remove-cont{
    font-family: display_4_r;
    font-size: 12px;
    text-decoration: none;
    text-align: left;
    color: #dedede;
    cursor: pointer;
    margin-top:10px;
}
.body-cont .sidebar .Acc-set .delete-acc{
    font-family: display_4_r;
    font-size: 12px;
    text-decoration: none;
    text-align: left;
    color: #dedede;
    cursor: pointer;
}
.body-cont .sidebar .Acc-set div:hover{
    text-decoration: underline;
}
@media only screen and ( max-width: 640px){
    .body-cont .root, .body-cont .sidebar{
	display: block;
	width: calc(100% - 10px);
	margin:5px;
	margin-bottom:10px;
	
    }
   
}
</style>
';

}
function clr_signup_frm(){
    if(!isset($_POST["firstName-inp-Signupfrm"])){$_POST["firstName-inp-Signupfrm"]="";}
    if(!isset($_POST["lastName-inp-Signupfrm"])){$_POST["lastName-inp-Signupfrm"]="";}
    
    if(!isset($_POST["email-inp-Signupfrm"])){$_POST["email-inp-Signupfrm"]="";}
    
    if(!isset($_POST["pass-inp-Signupfrm"])){$_POST["pass-inp-Signupfrm"]="";}
    if(!isset($_POST["passc-inp-Signupfrm"])){$_POST["passc-inp-Signupfrm"]="";}
    
    if(!isset($_POST["month-inp-Signupfrm"])){$_POST["month-inp-Signupfrm"]="";}
    if(!isset($_POST["day-inp-Signupfrm"])){$_POST["day-inp-Signupfrm"]="";}
    if(!isset($_POST["year-inp-Signupfrm"])){$_POST["year-inp-Signupfrm"]="";}
    
    if(!isset($_POST["gender-inp-Signupfrm"])){$_POST["gender-inp-Signupfrm"]="";}
    
    if(!isset($_POST["capt-inp-Signupfrm"])){$_POST["capt-inp-Signupfrm"]="";}
    if(!isset($_POST["terms-inp-Signupfrm"])){$_POST["terms-inp-Signupfrm"]="";}
}
?>