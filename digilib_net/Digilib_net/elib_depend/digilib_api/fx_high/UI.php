<?php

function digilib_Showcase( $bin , $Infoarr, $folder ,$ratio){
if($bin > 0){
    include("elib_depend/digilib_api/fx_showcse/Showcase.php");
    
    shwcse_prt($bin, $Infoarr, $folder, $ratio);
}}
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
	border: dashed 1px #adadad;
	background: rgb(240,240,240);
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
.Sal .Header .realtxt .threedo:hover{
    border-bottom:solid 1px;
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
	color:#8a8a8a;
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
	color:#8a8a8a;
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
	background: #cacaca;
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
        <a class="logout_button" href="elib_bin/Account/Account.php?stat=0">Logout</a>
	    <!-- User personal Info -->
	    <div class="user-pers ssbox">
            <div class="user-email">Email-id: <span>'.$_SESSION['Std_dash']['email_id'].'</span></div>
            <div class="user-dob">DOB: <span>'.$_SESSION['Std_dash']['dob'].'</span></div>
            <div class="user-gender">Gender: <span>'.$_SESSION['Std_dash']['gender'].'</span></div>
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
            border-right: solid 1px #cacaca;
            text-align: center; vertical-align: top;
            overflow: hidden;
        }
        .body-cont .highlights .highBox:nth-of-type(3){
            border-right:none;
        }
        .body-cont .highlights .highBox .image{
            position: relative; display: block;
            width: calc(100% - 20px); height: 140px;
            border-radius: 5px; box-shadow: 0px 1px 3px rgba(100,100,100,0.3);
        }
        .body-cont .highlights .highBox .title{
            position: relative;text-align: left;
            width: calc(100% - 20px); height: auto;
            font-size: 18px; font-family: display_4_r;
            top: 5px; padding:5px; color: #444;
        }
        .body-cont .highlights .highBox .descp{
            position: relative;
            width: calc(100% - 20px); height: auto;
            text-align: left; font-size: 12px;
            font-family: display_4_r;
            top: 5px; padding:3px;
            color:#8a8a8a;
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
        echo '<a .'.($content[$i+1][3]?'href="'.$content[$i+1][3].'"':'').' class="list-elem">
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
            border: dashed 1px #adadad; border-radius: 5px;
            height:250px; overflow-Y:scroll; overflow-X:hidden;
            position: relative; display: inline-block;
            margin:3px; margin-top:0; margin-bottom: 10px;
        }
        .body-cont .listBox .head{
            position: absolute; z-index: 10;
            left:0; right:0; top:0;
            font: display_4_r; text-align: left; 
            font-size: 24px; color: #fff; padding:16px;
            border-bottom: solid 1px #cacaca;
            background: linear-gradient(to bottom, #a9e4f7 0%,#0fb4e7 100%);
        }
        .body-cont .listBox .ns-list{
            position: absolute; z-index:5;
            top:56px; left:0; right:0; bottom:0;
        }
        .body-cont .listBox .ns-list .list-elem{
            position: relative; display: block;
            text-decoration: none; text-align: left;
            width: auto; height: auto;
            border-bottom: solid 1px #cacaca;
            cursor: pointer; padding:15px;
        }
        .body-cont .listBox .ns-list .list-elem:hover{
            background:linear-gradient(to bottom, 
                rgba(238,238,238,1) 0%,
                rgba(204,204,204,1) 100%);
        }
        .body-cont .listBox .ns-list .list-elem .content{
            position: relative; 
            display: inline-block;
            width:calc(100% - 80px);
            height:auto;
            
        }
        .body-cont .listBox .ns-list .list-elem .content .txt{
            color: #363636;
            font-family: display_4_r; font-size: 16px;
            height:auto; padding:5px;
            width:calc(100% - 5px);height:auto;
        }
        .body-cont .listBox .ns-list .list-elem .content .time{
            color: #686868;
            font-family: display_4_r; font-size: 12px;
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
				<input type="checkbox" id="chk-det" name="remain-inp-Logfrm" value=1>
				<span>Keep me signed in</span>
			</div>';
            if($_SESSION["std_utry_login_flag"] > 3){
               echo '<span class="sda">Enter the captcha</span>
				<div class="capt-blank">
                    <img src="elib_bin/Account/Cap.php">
                </div>
				<div id="email-cov" class="inptext">
					<input type="text" id="email-det" name="capt-inp-Logfrm">
				</div>';
            }
			echo '<div id="submit-cov">
                <input type="text" hidden="true" name="try_loggin" value="1">
				<input type="Submit" id="submit-det" name="enter-inp-Logfrm" value="Login">
			</div>
		</form>
		<a class="forgotSpan" href="elib_bin/Account/reset_passwd.php">Forgot password?</a>
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
    border: solid 1px #adadad;
    
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
function prt_flyer_elib(){
    echo'<div class="flyblock">
        <div class="header-block">
            <span class="heada">Welcome to the</span>
            <span class="headb">eLibrary</span>
            <span class="headc">"Your Next Read Is Just A Click Away"</span>
        </div>
        <div class="headerBg-block"></div>
        <form class="srchform-block" action="elib_bin/Search/search.php" method="get">
            <div id="srch-form-header-1" class="Search-form" >
                <input class="Search-input" type="search" value="Whats on your Mind?" name="q">
                <input class="Search-submit"  type="submit" value="Search">
            </div>
            <input class="Search-check Search_bookSearch_check" type="checkbox" onclick="bookSearch_checkfunc(0)" value="1" name="bookSearch_check">
            <span class="check_label">Book</span><br class="Search-check_mod">
            <input class="Search-check Search_bookSearch_check" type="checkbox" onclick="bookSearch_checkfunc(1)" value="2" name="bookSearch_check">
            <span class="check_label">Author</span><br class="Search-check_mod">
            <input class="Search-check Search_bookSearch_check" type="checkbox" onclick="bookSearch_checkfunc(2)" value="3" name="bookSearch_check">
            <span class="check_label">Publishing Year</span><br class="Search-check_mod">

        </form>
    </div>
    <script>
//Search CheckBox
var Book_elemCheck_on = Array(0,0,0);
var Book_elemCheck_of = document.getElementsByClassName("Search_bookSearch_check");
function bookSearch_checkfunc(elem){
    for(var i=0; i<Book_elemCheck_on.length; i++){
        if(i==elem){
            if(Book_elemCheck_on[i] == 0){
              Book_elemCheck_of[i].style.background = \'#3EC6EF\';
              Book_elemCheck_on[i] = 1;
            }
            else{
                Book_elemCheck_of[i].style.background = \'#fff\';
                Book_elemCheck_on[i] = 0;
            }
        }
        else{
            Book_elemCheck_of[i].style.background = \'#fff\';
            Book_elemCheck_on[i] = 0;
        }
    }
}
    </script>
';
}
function prt_flyer_elib_css(){
    echo '<style>
    .body-cont .flyblock{
    position: relative;
    height: auto;
    width: calc(100% - 10px);
    margin:5px;
    margin-top: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    box-shadow: inset 0px 0px 8px 2px rgba(100,100,100,0.4);
    text-align: left;
    background: url(elib_depend/graphics/interface_graphics/icons/grey/booksgrey@High.png) no-repeat;
    background-size: 130px 110px;
    background-position: -20px calc(-1 * (100% - 40px));
}
.body-cont .flyblock .header-block{
    position: relative;
    display: inline-block;
    width:300px; height:100px;
    margin:10px; top:-10px;
    vertical-align:middle;

}
.body-cont .flyblock .header-block .heada{
    position: relative; display: block;
    font-size: 12px;
    left: 125px; top:30px;
    font-family: display_4_r;
    color: #a8a8a8;letter-spacing: 3px;
}
.body-cont .flyblock .header-block .headb{
    position: relative;
    display: block;
    font-size: 72px; top:5px;
    font-family: display_1_r;
    left:20px; color: #3EC6EF;
    text-shadow: 0px 0px 3px rgba(62,198,239,0.3);
}
.body-cont .flyblock .header-block .headc{
     position: relative; display: block;
    font-size: 10px; top:2px;left:30px;
    font-family: display_4_r;
    color: #868686;letter-spacing: 1.5px;
}
.body-cont .flyblock .srchform-block{
    display: inline-block;
    position: absolute;
    width: calc(100% - 360px); height: 50px;
    right: 20px; top: 20px;
    overflow: visible;
}
.body-cont .flyblock .srchform-block .Search-check{
    position: relative; display: inline-block;
    
    border: none;
    -webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    margin: 0;
    outline: none;

    top:60px; margin-left: 15px; 
    border: solid 1px #666;
    width: 20px; height: 20px;
    display: inline-block;
    vertical-align: middle;
    border-radius: 50%;
    /*background: #3EC6EF;*/
    box-shadow: inset 0px 0px 0px 3px #fff;
    cursor: pointer;
}
.body-cont .flyblock .srchform-block .Search-check:hover{
    border: solid 2px #666;
}
.body-cont .flyblock .srchform-block .check_label{
    position: relative; display: inline-block;
    color: #353535;
    font-family: display_4_r;
    font-size: 24px; 
    top:60px; left: 0px; 
    vertical-align: middle;

}
.body-cont .flyblock .srchform-block .Search-check_mod{
        display: none;
} 
.body-cont .flyblock .srchform-block .Search-form{
    margin: 0; overflow:hidden;
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    border: solid 1px #FF8930;
    border-radius: 8px;
    
    text-align:left;


}
.body-cont .flyblock .srchform-block .Search-form:hover{
    box-shadow: 0px 0px 8px 1px #FF8930;
}
.body-cont .flyblock .srchform-block .Search-form .Search-input{
    border: none;
    -webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    margin: 0;
    outline: none;
    
    position: relative; display: inline-block;
    top: 0; left: 0; width: calc(100% - 30px);
    padding-left: 3px; padding-right: 30px;
    padding-top: 8px; padding-bottom:8px;
    
    z-index: 1;
    text-indent: 15px;
    background: #ffffff;
    color: #888;
    font-size: 24px;
    font-family: display_4_r;
}

.body-cont .flyblock .srchform-block .Search-form .Search-submit{
    border: none;
    -webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    margin: 0; outline: none;
    
    position: absolute;
    right: 0; bottom: 0; top: 0;
    width: 80px;
    z-index: 2;
    background: #FF8930;
    color: #fff;
    font-family: display_4_b;
    cursor: pointer;
    box-shadow: -0px 0px 8px 1px rgba(100,100,100,.8)
}</style>
    ';
}
function img5mix(&$list){
    return '
        <div style="position: absolute;
    z-index: 10;
    top:0; bottom: 0; left: calc(50% - 35px); right: calc(50% - 35px);
    border: solid 1px #dedede;
    background: url('.$list[0].') center no-repeat;
    background-size: cover;"></div>
        <div style="position: absolute;
    z-index: 9;
    top:10px; bottom: 10px; left: calc(50% - 35px - 30px); right: calc(50% + 35px - 30px);
    border: solid 1px #dedede;
    background: url('.$list[1].') center no-repeat;
    background-size: cover;"></div> 
        <div style="position: absolute;
    z-index: 9;
    top:10px; bottom: 10px; left: calc(50% + 35px - 30px); right: calc(50% - 35px - 30px);
    border: solid 1px #dedede;
    background: url('.$list[2].') center no-repeat;
    background-size: cover;"></div>
        <div style="position: absolute;
    z-index: 8;
    top:20px; bottom: 20px; left: calc(50% - 35px - 30px - 25px); right: calc(50% + 35px + 30px - 25px);
    border: solid 1px #dedede;
    background: url('.$list[3].') center no-repeat;
    background-size: cover;"></div> 
        <div style="position: absolute;
    z-index: 8;
    top:20px; bottom: 20px; left: calc(50% + 35px + 30px - 25px); right: calc(50% - 35px - 30px - 25px);
    border: solid 1px #dedede;
    background: url('.$list[4].') center no-repeat;
    background-size: cover;"></div>
         ';
}
function prt_catBlock(&$content){
    echo '<div class="catBlock">';
    for($i=1;$i<=$content[0][0];$i++){
        echo '
        <div class="cat-elem '.$content[$i][0].'">
        <span class="title">'.$content[$i][0].'</span>
        <div class="display">'.$content[$i][3].'</div>
        <div class="dtxt">';
        for($j=5; $j<=$content[$i][4]+4; $j++){
            echo '<a href="'.$content[$i][$j][1].'" class="dtxt-elem">
            '.$content[$i][$j][0].'</a>
            ';
        }
        echo '</div>
        <a href="'.$content[$i][1].'" class="more">View More &raquo;</a>
        </div>';
        
        if($i<$content[0][0]){
            echo '<div class="lnebrk"></div>';
        }
    }
    echo '</div>';
}
function prt_catBlock_css(){
    echo'<style>
    .body-cont .catBlock{
    position: relative;
    display: block;
    width: auto; height: auto;
    margin-top: 60px;
    margin-bottom: 30px;
    text-align: center;
    box-shadow: 0px 0px 0px 1px rgba(100,100,100,0.3); 
    padding-top: 15px;
    padding-bottom: 15px;
}
.body-cont .catBlock .cat-elem{
    position: relative;
    display: inline-block; vertical-align: top;
    width: 230px; height:100%;
    margin-left: 2px; margin-right: 2px;
    text-align: center;
}
.body-cont .catBlock .lnebrk{
    position: relative;
    display: inline-block;
    width: 1px;
    height:450px;
    vertical-align:top;
    background: #acacac;
    box-shadow: inset 0px 3px 3px rgba(255, 255,255,0.5);
}
.body-cont .catBlock .cat-elem .title{
    position: relative;
    top: 0;
    width: auto;
    display: block;
    font-size: 28px;
    font-family: display_4_r;
    color: #383838;
}
.body-cont .catBlock .cat-elem .display{
    position: relative;
    display: block;
    width: 100%;
    height:100px;
    margin-top: 25px;
    margin-bottom: 25px;
}
.body-cont .catBlock .cat-elem .more{
    position: absolute;
    bottom: 1px; right: 5px;
    font-size: 12px;
    color: #FF8930;
}
.body-cont .catBlock .cat-elem .dtxt{
    position: relative;
    display: block;
    width: auto;
    height: 300px;
    text-align: left;
    overflow: hidden;
}
.body-cont .catBlock .cat-elem .dtxt .dtxt-elem{
    margin-right: 25px;
    margin-left: 25px;
    position: relative;
    display: block;
    width: auto;
    padding-top: 12px;
    text-decoration: none;
    color:#383838;
    font-size: 14px;
    font-family: display_4_r;
}
.body-cont .catBlock .cat-elem .dtxt .dtxt-elem::after{
    content: "";
    margin-top: 6px;
    margin-bottom: 6px;
    position: relative;
    display: block;
    width: auto; height: 1px;
    border-bottom: dashed 1px #cdcdcd;
}
.body-cont .catBlock .cat-elem .dtxt .dtxt-elem:hover{
    color: #FF8930;
    font-family: display_4_b;
}


    </style>';
}
function focusBlock1(&$contents){
    echo'
    <div class="focusBlock1 focusBlock1_'.$contents[0][1].' " id="'.$contents[0][1].'">
<div class="title">'.$contents[0][0].'</div>
<div class="display">';
    for($i=1; $i<=$contents[0][2];$i++){
    echo '
    <div class="plane-elem focusBlock1-plane-elem focusBlock1_'.$contents[0][1].'-plane-elem plane-elem'.$i.'">
        <div class="cov focusBlock1-plane-elem-cov focusBlock1_'.$contents[0][1].'-plane-elem-cov ">
            <a href="'.$contents[$i][0][1].'" class="cover"></a>
            <a href="'.$contents[$i][0][1].'" class="tit">'.$contents[$i][0][0].'</a>
            <a href ="'.$contents[$i][1][1].'" class="auth">'.$contents[$i][1][0].'</a>
        </div>
        <div class="lnebrk"></div>
        <div class="sum focusBlock1-plane-elem-sum focusBlock1_'.$contents[0][1].'-plane-elem-sum ">
        '.$contents[$i][3].'</div>
    </div>';
}
    echo '</div>
<div class="cards">';
    for($i=1; $i<=$contents[0][2];$i++){
    echo '
    <div class="card-elem focusBlock1-card-elem focusBlock1_'.$contents[0][1].'-card-elem card-elem'.$i.'" onclick="focusBlock_'.$contents[0][1].'('.($i-1).')">
        <div class="cover"></div>
        <div class="txt">
            <div class="title">'.$contents[$i][0][0].'</div>
            <div class="author">'.$contents[$i][1][0].'</div>
        </div>
    </div>';
    }

echo '</div></div>';
echo '<script>
//normal-focusBlock1-'.$contents[0][1].'

var focusBlock1_'.$contents[0][1].'_pstate = Array(1,0,0,0,0,0,0,0,0,0);
var focusBlock1_'.$contents[0][1].'_curr = 0;
var focusBlock1_'.$contents[0][1].'_planes = document.getElementsByClassName(\'focusBlock1_'.$contents[0][1].'-plane-elem\');
var focusBlock1_'.$contents[0][1].'_cov = document.getElementsByClassName(\'focusBlock1_'.$contents[0][1].'-plane-elem-cov\');
var focusBlock1_'.$contents[0][1].'_sum = document.getElementsByClassName(\'focusBlock1_'.$contents[0][1].'-plane-elem-sum\');

$(window).resize(function () {
	if(window.innerWidth <1000){
		focusBlock1_'.$contents[0][1].'_cov[focusBlock1_'.$contents[0][1].'_curr].style.display = "block";
		focusBlock1_'.$contents[0][1].'_sum[focusBlock1_'.$contents[0][1].'_curr].style.display = "block";
	}
	else{
		focusBlock1_'.$contents[0][1].'_cov[focusBlock1_'.$contents[0][1].'_curr].style.display = "inline-block";
		focusBlock1_'.$contents[0][1].'_sum[focusBlock1_'.$contents[0][1].'_curr].style.display = "inline-block";
	}
});
function focusBlock_'.$contents[0][1].'(elem){
	if(focusBlock1_'.$contents[0][1].'_pstate[elem]==0){
		//vars
		var old_plane = focusBlock1_'.$contents[0][1].'_planes[focusBlock1_'.$contents[0][1].'_curr];
		var new_plane = focusBlock1_'.$contents[0][1].'_planes[elem];
		var old_cov = focusBlock1_'.$contents[0][1].'_cov[focusBlock1_'.$contents[0][1].'_curr];
		var new_cov = focusBlock1_'.$contents[0][1].'_cov[elem];
		var old_sum = focusBlock1_'.$contents[0][1].'_sum[focusBlock1_'.$contents[0][1].'_curr];
		var new_sum = focusBlock1_'.$contents[0][1].'_sum[elem];

		var atmediaSize = "inline-block";
		var tw1 = new TimelineLite();

		//media size
		if(window.innerWidth < 1000){
			atmediaSize = "block";
		}

		//work
		old_plane.style.zIndex = 11;
		new_plane.style.zIndex = 11;
		old_plane.style.display = "block";
		new_plane.style.display = "none";

		old_sum.style.zIndex = 11;
		new_sum.style.zIndex = 11;
		old_sum.style.display = atmediaSize;
		new_sum.style.display = "none";

		old_cov.style.zIndex = 5;
		new_cov.style.zIndex = 5;
		old_cov.style.display = atmediaSize;
		new_cov.style.display = "none";
		tw1.to(new_cov, 0, {transform:"rotateY(-90deg)"});
		tw1.to(new_sum, 0, {left:"100%"});

		tw1.to(old_cov, 0.45, {transform:"rotateY(90deg)"});
		tw1.to(old_sum, 0.45, {left:"100%", onComplete: function(){
			old_plane.style.display = "none";
			old_sum.style.display = "none";
			old_cov.style.display = "none";

			new_plane.style.display = "block";
			new_sum.style.display = atmediaSize;
			new_cov.style.display = atmediaSize;
		}}, 0);

		tw1.to(new_cov, 0.45, {transform:"rotateY(0deg)"});
		tw1.to(new_sum, 0.45, {left:0}, 0.45);

		tw1.to(old_cov, 0, {transform:"rotateY(0deg)"});
		tw1.to(old_sum, 0, {left:0});
		tw1.play();
		//do
		old_plane.style.zIndex = 9;
		focusBlock1_'.$contents[0][1].'_pstate[focusBlock1_'.$contents[0][1].'_curr] = 0;
		focusBlock1_'.$contents[0][1].'_pstate[elem] = 1;
		focusBlock1_'.$contents[0][1].'_curr = elem;
		
	}
}
</script>';
echo '
<style>
.body-cont .focusBlock1{
    position: relative;
    display: block;
    width: auto;
    height: auto;
    text-align: left;
    box-shadow: 0px 1px 3px 1px rgba(100,100,100,0.3);
    overflow: hidden;
}
.body-cont .focusBlock1 .title{
    position: relative;
    top: 5px; left: 5px;
    width: auto;
    display: block;
    font-size: 18px;
    font-family: display_4_r;
    color: #686868;
    
}
.body-cont .focusBlock1 .title::after{
    content: "";
    position: relative;
    display: block; 
    left: 0; right: 0;
    width: calc(100% - 10px); height: 5px;
    margin-top:5px; margin-bottom:5px;
    background: #3EC6EF;
    box-shadow: inset 1px 1px 1px rgba(100,100,100,0.3);
}
.body-cont .focusBlock1 .display{
    position: relative;
    display: block;
    top:5px; left: 5px; right: 5px;
    padding-bottom: 15px;
    width: calc(100% - 10px);
    height: 360px;
    text-align: center;
}
.body-cont .focusBlock1 .display .plane-elem{
    position: relative;
    display: none;
    z-index: 9;
}
.body-cont .focusBlock1 .display .plane-elem1{
    display: block;
    z-index: 11;
}
.body-cont .focusBlock1 .display .cov{
    position: relative;
    display: inline-block;
    vertical-align: middle;
    width: 300px; height: auto;
    margin-top:10px; margin-bottom:10px;
    background: #fff;
}

.body-cont .focusBlock1 .display .cov{
    display: none;
    z-index: 9;
}
.body-cont .focusBlock1 .display .plane-elem1 .cov{
    display: inline-block;
    z-index: 11;
}
.body-cont .focusBlock1 .display .cov .cover{
    text-decoration: none;
    border: solid 1px #dedede;
    position: relative;
    width: auto; height: 250px;
    display: block;
    margin-right: 40px; margin-left: 35px;
    box-shadow: 0px 0px 3px rgba(100,100,100,.2);
}';
for($i=1; $i<=$contents[0][2]; $i++){
    echo '
    .body-cont .focusBlock1_'.$contents[0][1].' .display .plane-elem'.$i.' .cov .cover, .body-cont .focusBlock1_'.$contents[0][1].' .cards .card-elem'.$i.' .cover{
        background: url('.$contents[$i][2].') no-repeat;
        background-size:cover;
    }
    {
        background: url('.$contents[$i][2].') no-repeat;
        background-size:cover;
    }
        
    ';
}
echo'
.body-cont .focusBlock1 .display .cov .tit{
    position: relative;
    width: auto; height: auto;
    display: block;
    margin-top: 5px; margin-bottom: 5px;
    text-decoration: none;
    color:#686868;
    font-size: 24px;
    font-family: display_4_r;
    
}
.body-cont .focusBlock1 .display .cov .auth{
    position: relative;
    width: auto; height: auto;
    display: block;
    margin-top: 5px; margin-bottom: 5px;
    text-decoration: none;
    color:#777;
    font-size: 12px;
    font-family: display_4_r;
}
.body-cont .focusBlock1 .display .cover:hover{
    box-shadow: 0px 0px 8px #FF8930; 
    border: solid 1px #FF8930;
}
.body-cont .focusBlock1 .display .cov .auth:hover{
    text-decoration: underline;
    color: #FF8930;
}
.body-cont .focusBlock1 .display .cov .tit:hover{
    text-decoration: underline;
    color: #FF8930;
}
.body-cont .focusBlock1 .display .lnebrk{
    position: relative;
    display: inline-block;
    width: 1px; height: 360px;
    vertical-align:middle;
    background: rgba(100,100,100,0.3);
}
.body-cont .focusBlock1 .display .sum{
    position: relative;
    display: inline-block;
    vertical-align: middle;
    width: calc(100% - 360px); height: 350px;
    margin: 20px;
    margin-top:10px; margin-bottom:10px;
    text-align: left;
    color: #383838;
    font-family: class_2_r;
    font-size: 20px;

}
.body-cont .focusBlock1 .display .sum{
    display: none;
    z-index: 3;
}
.body-cont .focusBlock1 .display .plane-elem1 .sum{
    display: inline-block;
    z-index: 5;
}

.body-cont .focusBlock1 .cards{
    position: relative;
    display: block;
    margin-top:10px; 
    padding: 15px;
    left:-5px;
    width: 100%;
    height: auto;
    box-shadow: inset 0px 0px 8px 1px rgba(100,100,100,0.3);
    background: #fafafa;
    text-align: left;
    overflow:hidden;
    overflow-X:scroll; 
    white-space: nowrap;
    cursor: pointer;

}
.body-cont .focusBlock1 .cards .card-elem{
    position: relative;
    display: inline-block;
    top:10px;  margin-left: 15px; margin-right: 15px;
    width: 200px;
    height: 115px;
    vertical-align: top;
}
.body-cont .focusBlock1 .cards .card-elem:hover .cover{
    box-shadow: 0px 0px 5px 1px #FF8930;
}
.body-cont .focusBlock1 .cards .card-elem:hover .txt .title, 
.body-cont .focusBlock1 .cards .card-elem:hover .txt .author{
   color: #FF8930;
}
.body-cont .focusBlock1 .cards .card-elem .cover{
    position: relative;
    display: inline-block;
    width: 85px;
    height: 115px;
    left: 0px; margin-right: 2px;
    box-shadow: 0px 0px 5px rgba(100,100,100,0.3);
    vertical-align: middle;
}
.body-cont .focusBlock1 .cards .card-elem .txt{
    position: relative;
    display: inline-block;
    width: 110px;
    left: 0px; 
    vertical-align: middle;    
}
.body-cont .focusBlock1 .cards .card-elem .txt .title{
    position: relative;
    display: block;
    vertical-align: top;
    left: 0px; margin-bottom: 5px;
    font-family: display_4_r;
    font-size: 16px;
    white-space: normal;
}
.body-cont .focusBlock1 .cards .card-elem .txt .title:after{
    display: none;
}
.body-cont .focusBlock1 .cards .card-elem .txt .author{
    position: relative;
    display: block;
    vertical-align: top;
    font-family: display_4_r;
    font-size: 10px;
    white-space: normal;
}
.body-cont .focusBlock1 .ctrl-left{
    position: absolute;
    left:10px; bottom: 50px;
    width:40px;height: 40px;
    background: url(../../elib_depend/graphics/interface_graphics/icons/blue/rightgrey.png) center no-repeat;
    background-size: contain;
    -webkit-transform: scaleX(-1);
    -ms-transform: scaleX(-1);
    -moz-transform: scaleX(-1);
    -o-transform: scaleX(-1);
    transform: scaleX(-1);
    cursor: pointer;
}
.body-cont .focusBlock1 .ctrl-right{
    position: absolute;
    right:10px;width:40px;height: 40px; bottom: 50px;
    background: url(../../elib_depend/graphics/interface_graphics/icons/blueGrad/rightgrey.png) center no-repeat;
    background-size: contain;
    cursor: pointer;
}
.body-cont .focusBlock1 .ctrl-left:hover{
    background: url(../../elib_depend/graphics/interface_graphics/icons/orgGrad/rightgrey.png) center no-repeat;
    background-size: contain;
}
.body-cont .focusBlock1 .ctrl-right:hover{
    background: url(../../elib_depend/graphics/interface_graphics/icons/orgGrad/rightgrey.png) center no-repeat;
    background-size: contain;
}
@media only screen  and (max-width: 1000px) {
    
    .body-cont .catBlock{
        position: relative;
        display: block;
        width: calc(100% - 20px); height: 460px;
        overflow: hidden;
        overflow-X: scroll;
        white-space: nowrap;
        margin: 10px;
        margin-top: 60px;
        margin-bottom: 30px;
        text-align: center;
        box-shadow: 0px 0px 0px 1px rgba(100,100,100,0.3);
        padding-top: 15px;
        padding-bottom: 15px;        
    }
    .body-cont .focusBlock1{
        position: relative;
        display: block;
        width: calc(100% - 20px);
        margin: 10px;
        height: auto;
        text-align: center;
        box-shadow: 0px 1px 3px 1px rgba(100,100,100,0.3);
       
    }
    .body-cont .focusBlock1 .display{
        position: relative;
        display: block;
        top:5px; left: 5px; right: 5px;
        padding-bottom: 15px;
        width: calc(100% - 10px);
        height: auto;
        text-align: center;
        
    }
    .body-cont .focusBlock1 .display .cov{
        position: relative;
        display: block;
        width: 300px; height: auto;
        margin-top:10px; margin-bottom:20px;
        margin-left: calc((100% - 300px ) / 2);
    }
    .body-cont .focusBlock1 .display .cov .cover{
        text-decoration: none;
        border: solid 1px #dedede;
        position: relative;
        width: 220px; height: 250px;
        display: block;
        box-shadow: 0px 0px 3px rgba(100,100,100,.2);
    }
    .body-cont .focusBlock1 .display .lnebrk{
        display: none;
    }
    .body-cont .focusBlock1 .display .sum{
        position: relative;
        display: inline-block;
        vertical-align: middle;
        width: auto; height: auto;
        margin: 5px;
        margin-top:10px; margin-bottom:10px;
        text-align: left;
        color: #383838;
        font-family: class_2_r;
        font-size: 20px;
    }
    .body-cont .focusBlock1 .display .cov{
        display: none;
        z-index: 9;
    }
    .body-cont .focusBlock1 .display .plane-elem1 .cov{
        display: block;
        z-index: 11;
    }
    .body-cont .focusBlock1 .display .sum{
        display: none;
        z-index: 3;
    }
    .body-cont .focusBlock1 .display .plane-elem1 .sum{
        display: block;
        z-index: 5;
    }
}
@media only screen  and (max-width: 860px){
    .body-cont .flyblock{
        
        background: url(elib_depend/graphics/interface_graphics/icons/grey/booksgrey@High.png) no-repeat;
        background-size: 130px 110px;
        background-position: -20px -10px
    }
    .body-cont .flyblock .srchform-block{
        display: inline-block;
        position: relative;
        width: calc(100% - 20px); 
        margin-bottom: 110px;
        left: 10px; top: 5px;
    }
    .body-cont .flyblock .srchform-block .Search-check{
        position: relative; display: inline-block;
        
        top:60px; margin-left: 15px; 
        border: solid 1px #666;
        width: 20px; height: 20px;
    }
    .body-cont .flyblock .srchform-block .Search-check_mod{
        display: block;
    }
    .body-cont .flyblock .srchform-block .check_label{
        position: relative; display: inline-block;
        top:60px; left: 0px; 
        vertical-align: middle;

    } 

    
}
</style>
';
}
function createcover($author, $title, $size){
    return '
        <div class="cover_bg_img_createcover" style="">
            <div class="bookName_text">'.$title.'</div>
            <hr>
            <div class="authorName_text">'.$author.'</div>
        </div>
        <style>
            .cover_bg_img_createcover{
                position: absolute;
                top:0;right:0;
                bottom:0;left:0;
                background: url(elib_depend/graphics/mics_graphics/createcover_func.jpg) center no-repeat;
                background-size: 100% 100%;
            }
            .cover_bg_img_createcover .bookName_text{
                position: relative;
                color: #F7C340;
                font-size: '.$size.'px;
                margin-top:10%;
                left:0;right:0;
                margin: 5%;
                margin-left: 10%;
                margin-top:10%;
                text-align: center;
            }
            .cover_bg_img_createcover hr{
                margin-left:30px;
                margin-right:30px;
                border-color: #F7C340;
            }
            .cover_bg_img_createcover .authorName_text{
                position: relative;display: block;
                color: #F7C340;
                font-size: '.($size-10).'px;
                left:0px;right:0px;margin: 5%;
                margin-left: 10%;
                margin-top:10%;
                text-align: center;
                text-align: center;
            }
        </style>
    ';
}
function Flyer_Blogs(){
    echo '<div class="Flyer_blogs">
    <span class="page_header">BLOGS</span>
    <div class="search_div">
        <form class="search_form">
            <input type="search" class="search_input" value="Hey, Sup!" name="blogsearch">
            <input type="submit" class="search_submit" value="">
        </form>
    </div>
    <div class="basket">
        <div class="right_wall_inner"></div>
        <div class="right_wall_outer"></div>
        <div class="left_wall_inner"></div>
        <div class="left_wall_outer"></div>
        <div class="front_wall">
            <div class="bgnav_elem elem_1" onclick="backpanel_dd(0)">
                <div class="icon"></div>
                <div class="text">MyBlog</div>
                <div class="dropdown"></div>
            </div>
            
            <div class="bgnav_elem elem_2" onclick="backpanel_dd(1)">
                <div class="icon"></div>
                <div class="text">Genres</div>
                <div class="dropdown"></div>
            </div>
            
            <div class="bgnav_elem elem_3" onclick="backpanel_dd(2)">
                <div class="icon"></div>
                <div class="text">School Blog</div>
                <div class="dropdown"></div>
            </div>
            
            <div class="bgnav_elem elem_4" onclick="backpanel_dd(3)">
                <div class="icon"></div>
                <div class="text">Random Blog</div>
            </div>
            
            <div class="bgnav_elem elem_5" onclick="backpanel_dd(4)">
                <div class="icon"></div>
                <div class="text">Top 11</div>
            </div>
        </div>
    </div>
    
    <div class="back_wall" >
            <div class="back_panel_dd back_panel_dd_1">
                <div class="list_plane" >
                    <a href="#" class="list_elem list_elem1">Write</a>
                    <a href="#" class="list_elem list_elem2">Edit</a>
                    <a href="#" class="list_elem list_elem3">View All</a>
                </div>
            </div>
            <div class="back_panel_dd back_panel_dd_2" >
                <div class="list_plane">
                    <a href="#" class="list_elem list_elem1">News Articles</a>
                    <a href="#" class="list_elem list_elem2">Astronomy</a>
                    <a href="#" class="list_elem list_elem3">View All</a>
                </div>
            </div>
            <div class="back_panel_dd back_panel_dd_3" >
                <div class="list_plane">
                    <a href="#" class="list_elem list_elem1">News</a>
                    <a href="#" class="list_elem list_elem2">Sagrika Newsletter</a>
                    <a href="#" class="list_elem list_elem3">Sagrika Magzines</a>
                    <a href="#" class="list_elem list_elem4">Sagrika Blogs</a>
                </div>
            </div>
    </div>
    
</div>
<script>
    back_panels = document.getElementsByClassName("back_panel_dd");
    backpanel_state = [0,0,0];
    function backpanel_dd(obj){
        if(backpanel_state[obj]){
            back_panels[obj].style.display="none";
            TweenMax.to(back_panels[obj],0.45,{height:0});
            backpanel_state[obj]=0;
        }
        else{
            if(backpanel_state[0]){
                backpanel_dd(0);
            }
            else if(backpanel_state[1]){
                backpanel_dd(1);
            }
            else if(backpanel_state[2]){
                backpanel_dd(2);
            }
            back_panels[obj].style.display="block";
            TweenMax.to(back_panels[obj],0.45,{height:"auto"});
            backpanel_state[obj]=1;
        }
    }
</script>
<style>
    
    
    .Flyer_blogs .back_wall {
        position: absolute;
        z-index:10;
        top:0; left:0; right:0; bottom:0;
    }
    .Flyer_blogs .back_wall .back_panel_dd{
        position: absolute;
        left:90px; top:calc(100% - 10px);
        background:linear-gradient(to bottom, rgba(147,206,222,1) 0%,rgba(117,189,209,1) 41%,rgba(73,165,191,1) 100%); 
        box-shadow: inset 0px 0px 15px rgba(255, 255,255,.8), 0px 1px 5px rgba(100, 100,100,.5);
        border-radius: 5px;
        border: solid 1px rgba(73,165,191,1);
        display:none;
        height:0;
    }
    .Flyer_blogs .back_wall .back_panel_dd .list_elem{
        display: block;
        text-align:left;
        color: #fff;
        font-family: display_4_r;
        padding: 20px;
        font-size:24px;
        padding-left:40px;
        padding-right:80px;
        cursor: pointer;
        text-decoration:none;
    }
    .Flyer_blogs .back_wall .back_panel_dd .list_elem:after{
        content: "";
        position: absolute;
        width:10px;height:24px;
        right:0px;
        background: url(elib_depend/graphics/interface_graphics/icons/white/play2grey.png) center no-repeat;
        background-size: contain;
    }
    .Flyer_blogs .back_wall .back_panel_dd .list_elem:hover{
        background: linear-gradient(to bottom, rgba(240,249,255,1) 0%,rgba(203,235,255,1) 47%,rgba(161,219,255,1) 100%); 
    }
    
    .Flyer_blogs .page_header{
        font-size: 96px;
        position: absolute;
        z-index:20;
        top:26px;left:50px;
        font-family: display_4_b;
        color:#4f85bb ;
        text-shadow:  5px -5px 5px rgba(100,100,100,0.5), 0px -1px 0px #4f85bb, 1px -1px 0px #4f85bb, 1px 0px 0px #4f85bb ;
    }
    .Flyer_blogs .page_header:hover{
        top:10px;
        cursor:default;
    }
    .Flyer_blogs{
        position: relative;
        text-align: center;
        top:10px;
        left:0px;
        width:calc(100% - 30px);
        margin:15px;
        height: 150px;
    }
    .Flyer_blogs .basket{
        position: absolute;
        bottom:0px;height:60px;
        left:0px;right:0;
        -webkit-perspective: 500px;
        z-index: 200;
    }
    .Flyer_blogs .basket .front_wall{
        position: absolute;
        background:linear-gradient(to bottom, #f7b947 0%,#f79621 100%);
        top:0;left:0;right:0;bottom:0;
        -webkit-transform: rotateX(-20deg);
        -ms-transform: rotateX(-20deg);
        -o-transform: rotateX(-20deg);
        -moz-transform: rotateX(-20deg);
        transform: rotateX(-20deg);
        z-index: 200;
        box-shadow: 0px 2px 5px rgba(0,0,0,0.4);
    }
    .Flyer_blogs .basket .right_wall_outer{
        position: absolute;
        background: #BC7400;
        top:-15px;right:10px;width:10px;bottom:3px;
        -webkit-transform-origin: 100% 100%;
        -webkit-transform:skewY(40deg) skewX(0deg);
        -o-transform-origin: 100% 100%;
        -o-transform:skewY(40deg) skewX(0deg);
        -moz-transform-origin: 100% 100%;
        -moz-transform:skewY(40deg) skewX(0deg);
        -ms-transform-origin: 100% 100%;
        -ms-transform:skewY(40deg) skewX(0deg);
        transform-origin: 100% 100%;
        transform:skewY(40deg) skewX(0deg);
        z-index: 10;
    }
    .Flyer_blogs .basket .right_wall_inner{
        position: absolute;
        background: #BC7400    ;
        top:-15px;right:10px;width:20px;bottom:3px;
        -webkit-transform-origin: 100% 100%;
        -webkit-transform:skewY(40deg) skewX(-15deg);
        -o-transform-origin: 100% 100%;
        -o-transform:skewY(40deg) skewX(-15deg);
        -moz-transform-origin: 100% 100%;
        -moz-transform:skewY(40deg) skewX(-15deg);
        -ms-transform-origin: 100% 100%;
        -ms-transform:skewY(40deg) skewX(-15deg);
        transform-origin: 100% 100%;
        transform:skewY(40deg) skewX(-15deg);
        z-index: 10;
    }
    .Flyer_blogs .basket .left_wall_outer{
        position: absolute;
        background: #BC7400  ;
        top:-15px;left:10px;width:10px;bottom:3px;
        -webkit-transform-origin: 0% 100%;
        -webkit-transform:skewY(-40deg) skewX(0deg);
        -ms-transform-origin: 0% 100%;
        -ms-transform:skewY(-40deg) skewX(0deg);
        -moz-transform-origin: 0% 100%;
        -moz-transform:skewY(-40deg) skewX(0deg);
        -o-transform-origin: 0% 100%;
        -o-transform:skewY(-40deg) skewX(0deg);
        transform-origin: 0% 100%;
        transform:skewY(-40deg) skewX(0deg);
        z-index: 10;
    }
    .Flyer_blogs .basket .left_wall_inner{
        position: absolute;
        background: #BC7400  ;
        top:-15px;left:10px;width:20px;bottom:3px;
        -webkit-transform-origin: 0% 100%;
        -webkit-transform:skewY(-40deg) skewX(15deg) ;
        -o-transform-origin: 0% 100%;
        -o-transform:skewY(-40deg) skewX(15deg) ;
        -ms-transform-origin: 0% 100%;
        -ms-transform:skewY(-40deg) skewX(15deg) ;
        -moz-transform-origin: 0% 100%;
        -moz-transform:skewY(-40deg) skewX(15deg) ;
        transform-origin: 0% 100%;
        transform:skewY(-40deg) skewX(15deg) ;
        z-index: 10;
    }
    /*======================================================*/
    .Flyer_blogs .search_div{
        display: inline-block;
        position: absolute;
        width: calc(100% - 500px); height: 50px;
        right: 50px; top: 30px;
        z-index: 20;
    }
    .Flyer_blogs .search_div .search_form{
        margin: 0; 
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        text-align:left;
    }
    .Flyer_blogs .search_div .search_form:hover{
    }
    .Flyer_blogs .search_div .search_form .search_input{
        border: none;
        -webkit-appearance:none;
        -moz-appearance:none;
        -ms-appearance:none;
        -o-appearance:none;
        appearance:none;
        margin: 0;
        outline: none;

        position: relative; display: inline-block;
        top: 0; left: 0; width: calc(100% - 30px);
        padding-left: 3px; padding-right: 50px;
        padding-top: 8px; padding-bottom:8px;

        z-index: 1;
        text-indent: 15px;
        background: none;
        color: #888;
        font-size: 46px;
        font-family: display_1_r;
        
        text-align: right;
    }
    .Flyer_blogs .search_div .search_form .search_submit{
        border: none;
        -webkit-appearance:none;
        -moz-appearance:none;
        -ms-appearance:none;
        -o-appearance:none;
        appearance:none;
        margin: 0; outline: none;

        position: absolute;
        right: 0; top: 5px;
        width: 80px;height: 100px;
        z-index: 2;
        cursor: pointer;
        background: url(elib_depend/graphics/interface_graphics/icons/grey/serchgrey@High.png) no-repeat;
        background-size: contain;
    }
    .Flyer_blogs .search_div .search_form .search_submit:hover{
        top:-20px;
        background: url(elib_depend/graphics/interface_graphics/icons/blueGrad/serchgrey@High.png) no-repeat;
        background-size: contain;
    }
    
     /*======================================================*/
    
    .Flyer_blogs .basket .front_wall .bgnav_elem{
        display: inline-block;
        margin:20px;
        cursor:pointer;
    }
    .Flyer_blogs .basket .front_wall .bgnav_elem:hover .text{
        text-decoration: underline;
    }
    .Flyer_blogs .basket .front_wall .bgnav_elem .dropdown{
        display:inline-block;
        margin-left:2px;height:15px;width:10px;
        background: url(elib_depend/graphics/interface_graphics/icons/white/dd_arrowgrey.png) center no-repeat;
        background-size: contain;
    }
    .Flyer_blogs .basket .front_wall .bgnav_elem .text{
        display:inline-block;
        font-size:24px;
        color:#fff;
        font-family: display_4_r;
        
    }
    
</style>';
}
function CGR_undertow(&$contents){
   echo ' <div style="';
    if($contents[0][4]==1){
        echo 'width:calc(100% - 10px)';
    }
    elseif($contents[0][4]==2){
        echo 'width:calc(50% - 12px); display:inline-block';
    }
    elseif($contents[0][4]==3){
        echo 'width:calc(30% - 13px); display:inline-block';
    }
    echo '" class="CGR_Undertow CGR_Undertow_'.$contents[0][1].'">
    <div class="head">
        <span class="title_text">'.$contents[0][0].'</span>
        <span class="more_link"><a href="'.$contents[0][3].'">View More</a></span>
        <hr>
    </div>
    <div class="list_plane">';
    
    for($i=0; $i<$contents[0][2]; $i++){
        echo '<a href="'.$contents[$i+1][2].'" class="div_elem div_elem_'.$contents[0][1].'" onmouseover="CGR_undertow_'.$contents[0][1].'_hover('.$i.')"><div style="background: url('.$contents[$i+1][1].') center no-repeat;
        background-size: cover;" class="cover_img"></div><div class="Qck_txt">'.$contents[$i+1][0].'</div></a>';
    }
    
    echo '</div></div>
<script>
    CGR_undertow_hover_elems_'.$contents[0][1].' = document.getElementsByClassName("div_elem_'.$contents[0][1].'");
    function CGR_undertow_'.$contents[0][1].'_hover(obj){
        var t = new TimelineLite();
        t.to(CGR_undertow_hover_elems_'.$contents[0][1].'[obj], 0.5, {transformOrigin:"0 0", transform:"rotate(30deg)"});
        t.to(CGR_undertow_hover_elems_'.$contents[0][1].'[obj], 0.5, {transformOrigin:"0 0", transform:"rotate(-20deg)"});
        t.to(CGR_undertow_hover_elems_'.$contents[0][1].'[obj], 0.5, {transformOrigin:"0 0", transform:"rotate(10deg)"});
        t.to(CGR_undertow_hover_elems_'.$contents[0][1].'[obj], 0.5, {transformOrigin:"0 0", transform:"rotate(0deg)"});
        t.play();
    }
</script>
';
}
function CGR_undertow_css(){
    echo '<style>
    .CGR_Undertow{
        position: relative;
        margin: 5px;
        width:calc(100% - 10px);
        height: auto;
        margin-top:50px;
        text-align: left;
    }
    .CGR_Undertow .head{
        font-family: display_4_r;
        font-size: 32px;
        color: #333;
    }
    .CGR_Undertow .more_link{
        font-family: display_4_r;
        font-size: 12px;
        color: #333;position: absolute;
        right:10px;
        top:25px;
        cursor: pointer;
        color: rgb(255,168,76);
    }
    .CGR_Undertow .more_link:hover{
        text-decoration: underline;
    }
    .CGR_Undertow hr{
        border: solid thin #aaa;
    }
    .CGR_Undertow .list_plane{
        position: relative;
        display: block;
        width:calc(100% - 10px);
        height:auto;
        margin:5px;
    }
    .CGR_Undertow .list_plane .div_elem{
        position: relative;
        display: inline-block;
        margin: 15px;
        width: 200px; height: 240px;
        background: #efefef;
        box-shadow: 0px 2px 5px rgba(100,100,100,0.4);
        border-radius: 2px;
        cursor: pointer;
        text-decoration: none;
    }
    .CGR_Undertow .list_plane .div_elem:hover{
        background:linear-gradient(45deg, rgba(255,123,13,1) 0%,rgba(255,168,76,1) 100%);
    }
    .CGR_Undertow .list_plane .div_elem:hover .Qck_txt{
        color:#fff;
    }
    .CGR_Undertow .list_plane .div_elem:after{
        content: "";
        position: absolute;
        width:50px; height:50px;
        top:-10px;left:-15px;
        background: url(elib_depend/graphics/mics_graphics/Paperclip-icon.png) center no-repeat;
        background-size: contain;
    }
    .CGR_Undertow .list_plane .div_elem .cover_img{
        position: relative;
        display: block;
        margin:15px;
        height:140px;
        box-shadow: inset 0px 0px 3px rgba(0,0,0,0.5);
    }
    .CGR_Undertow .list_plane .div_elem .Qck_txt{
        position: relative;
        display: block;
        font-family: mics_4_r;
        color: #343434;
        font-size:24px;
        margin:10px;
        width:calc(100% - 20px);
        height:60px;
        overflow:hidden;
        -webkit-transform: rotate(-1deg);
    }
</style>';
}
function password_resetForm1($error=""){
    echo '
    <h1>Reset Password: </h1>
<hr>
<style>
h1{
    font-family: display_4_r;
    font-size:24px;
    color:#383838;
    text-align: left;
}
</style>
    <form class="PasswdResetForm" method="POST" action="elib_bin/Account/reset_passwd.php">
    <span class="error">'.$error.'</span>
    <div id="email-cov" class="inptext">
        <input type="text" id="email-det" class="inptext-Box" name="email-inp-retfrm" placeholder="Enter your Email Id Here">
    </div>
    
    <span class="sda">Enter the captcha</span>
    <div class="capt-blank">
        <img src="elib_bin/Account/Cap.php">
    </div>
    <div id="email-cov" class="inptext">
        <input type="text" class="inptext-Box" id="email-det" name="capt-inp-retfrm">
    </div>
    <div id="submit-cov">
        <input type="Submit" id="submit-det" name="enter-inp-retfrm" value="Next">
    </div>
    
</form>';
}
function password_resetForm2($error=""){
    echo '
    
    <h1>Reset Password: </h1>
<hr>
<style>
h1{
    font-family: display_4_r;
    font-size:24px;
    color:#383838;
    text-align: left;
}
</style>
        <form class="PasswdResetForm2" method="POST" action="'."http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]".'">
    <span class="error">'.$error.'</span>
    
    <span class="sda">Create New password</span>
    <div id="pass-cov" class="inptext">
        <input type="password" class="inptext-Box" id="pass-det" name="pass-inp-passfrm">
    </div>
    <span class="sda">Confirm password</span>
    <div id="passc-cov" class="inptext">
        <input type="password" class="inptext-Box" id="passc-det" name="passc-inp-passfrm">
    </div>
    
    <div id="submit-cov">
        <input type="Submit" id="submit-det" name="enter-inp-passfrm" value="RESET">
    </div>
    
</form>
    ';
}
function password_resetForm_css(){
    echo '<style>
form{
	position: relative;
	display: block;
	width: auto; height: auto;
    text-align: left;
    font-family: display_4_r;
}
 form .inptext{
	position: relative;
	display: block;
	width: 250px;
	height:28px;
	
	margin-top:15px;
	margin-bottom:10px;
}
 form .inptext .inptext-Box{
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
    border: solid 1px #adadad;
    
}
.inptext-Box:focus{
	border: solid 1px #3EC6EF;
	box-shadow:0px 0px 5px #3EC6EF;
}
 #submit-cov{
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
 #submit-cov #submit-det{
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
 #submit-cov #submit-det:hover{
	background:linear-gradient(to bottom, #ffa84c 0%,#ff7b0d 100%);
}
</style>';
}
function prt_search_form(){
    echo '
    <div class="flyblock">
<form class="srchform-block" action="elib_bin/Search/search.php" method="get">
    
    <div id="srch-form-header-1" class="Search-form" >
        <input class="Search-input" type="search" value="';
    if(isset($_GET["q"]))
    {
        echo clean_input($_GET["q"]);
    }
    else {
        echo'May the Force be with you...';
    }
    
    echo'" name="q">
        <input class="Search-submit"  type="submit" value="Search">
    </div>
    
    
    <div class="search_checks">
        <span class="head">Search Tools <div id="search_tool_ext" class="downarr"></div></span><br>
    
        
        <div class="st_block">
            <div class="st_head">Books</div>
            
            <input class="Search-check Search_bookSearch_check" type="checkbox" onclick="bookSearchfunc_check(0)" 
                   value="1" name="bookSearch_check">
            <span class="check_label">Book Title</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_bookSearch_check" type="checkbox" onclick="bookSearchfunc_check(1)" 
                   value="2" name="bookSearch_check">
            <span class="check_label">Author Name</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_bookSearch_check" type="checkbox" onclick="bookSearchfunc_check(2)" 
                   value="3" name="bookSearch_check">
            <span class="check_label">Publishing Year</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_bookSearch_check" type="checkbox" onclick="bookSearchfunc_check(3)" 
                   value="4" name="bookSearch_check">
            <span class="check_label">Rating</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_bookSearch_check" type="checkbox" onclick="bookSearchfunc_check(4)" 
                   value="5" name="bookSearch_check">
            <span class="check_label">Chapter Less than</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_bookSearch_check" type="checkbox" onclick="bookSearchfunc_check(5)" 
                   value="6" name="bookSearch_check">
            <span class="check_label">Chapter Greater than</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_bookSearch_check" type="checkbox" onclick="bookSearchfunc_check(6)" 
                   value="7" name="bookSearch_check">
            <span class="check_label">Pages Less than</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_bookSearch_check" type="checkbox" onclick="bookSearchfunc_check(7)" 
                   value="8" name="bookSearch_check">
            <span class="check_label">Pages Greater than</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_bookSearch_check" type="checkbox" onclick="bookSearchfunc_check(8)" 
                   value="9" name="bookSearch_check">
            <span class="check_label">Genre</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_bookSearch_check" type="checkbox" onclick="bookSearchfunc_check(9)" 
                   value="10" name="bookSearch_check">
            <span class="check_label">Summery (Non-Indexed)</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_bookSearch_check" type="checkbox" onclick="bookSearchfunc_check(10)" 
                   value="11" name="bookSearch_check">
            <span class="check_label">Charaters (Non-Indexed)</span>
            <br class="Search-check_mod">
            
            
        </div>
        
        <div class="st_block">
            <div class="st_head">Blogs</div>
            
            <input class="Search-check Search_blogsSearch_check" type="checkbox" onclick="blogSearchfunc_check(0)" 
                   value="1" name="blogsSearch_check">
            <span class="check_label">Blog Title</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_blogsSearch_check" type="checkbox" onclick="blogSearchfunc_check(1)" 
                   value="2" name="blogsSearch_check">
            <span class="check_label">Author Name</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_blogsSearch_check" type="checkbox" onclick="blogSearchfunc_check(2)" 
                   value="3" name="blogsSearch_check">
            <span class="check_label">Published Date</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_blogsSearch_check" type="checkbox" onclick="blogSearchfunc_check(3)" 
                   value="4" name="BlogsSearch_check">
            <span class="check_label">Rating</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_blogsSearch_check" type="checkbox" onclick="blogSearchfunc_check(4)" 
                   value="5" name="blogsSearch_check">
            <span class="check_label">Genre</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_blogsSearch_check" type="checkbox" onclick="blogSearchfunc_check(5)" 
                   value="6" name="blogsSearch_check">
            <span class="check_label">Content (Non-Indexed)</span>
            <br class="Search-check_mod">
            
            
        </div>
        
        <div class="st_block">
            <div class="st_head">Study Material</div>
            
            <input class="Search-check Search_smatSearch_check" type="checkbox" onclick="smatSearchfunc_check(0)" 
                   value="1" name="smatSearch_check">
            <span class="check_label">Ncert Book Title</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_smatSearch_check" type="checkbox" onclick="smatSearchfunc_check(1)" 
                   value="2" name="smatSearch_check">
            <span class="check_label">Reference Book Title</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_smatSearch_check" type="checkbox" onclick="smatSearchfunc_check(2)" 
                   value="3" name="smatSearch_check">
            <span class="check_label">Assignment</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_smatSearch_check" type="checkbox" onclick="smatSearchfunc_check(3)" 
                   value="4" name="smatSearch_check">
            <span class="check_label">Sample Papers</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_smatSearch_check" type="checkbox" onclick="smatSearchfunc_check(4)" 
                   value="5" name="smatSearch_check">
            <span class="check_label">Old Question Papers</span>
            <br class="Search-check_mod">
            
            
        </div>
        
        <div class="st_block">
            <div class="st_head">Order By</div>
            
            <input class="Search-check Search_orderSearch_check" type="checkbox" onclick="orderSearchfunc_check(0)" 
                   value="1" name="orderSearch_check">
            <span class="check_label">Ascending (Name)</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_orderSearch_check" type="checkbox" onclick="orderSearchfunc_check(1)" 
                   value="2" name="orderSearch_check">
            <span class="check_label">Desending (Name)</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_orderSearch_check" type="checkbox" onclick="orderSearchfunc_check(2)" 
                   value="3" name="orderSearch_check">
            <span class="check_label">Ascending (Rating)</span>
            <br class="Search-check_mod">
            
            <input class="Search-check Search_orderSearch_check" type="checkbox" onclick="orderSearchfunc_check(3)" 
                   value="4" name="orderSearch_check">
            <span class="check_label">Desending (Rating)</span>
            <br class="Search-check_mod">
            
        </div>
        
    </div>

</form>
</div>
<script>
//Search Tools
var SrcTool_EXT = 0;
$("#search_tool_ext").on("click",function(){
    if(!SrcTool_EXT){
        TweenLite.to($("#search_tool_ext"), 0.45, {transform: "rotate(135deg)"});
        TweenLite.to($(".body-cont .flyblock .srchform-block .search_checks .st_block"), 0, {display:"inline-block"});
        SrcTool_EXT=1;
    }
    else{
        TweenLite.to($("#search_tool_ext"), 0.45, {transform: "rotate(0)"});
        TweenLite.to($(".body-cont .flyblock .srchform-block .search_checks .st_block"), 0, {display:"none"});
        SrcTool_EXT=0;
    }
});

//Search CheckBox
var Book_elemCheck_on = Array(0,0,0,0,0,0,0,0,0,0,0);
var Book_elemCheck_of = document.getElementsByClassName("Search_bookSearch_check");
function bookSearchfunc_check(elem){
    for(var i=0; i<Book_elemCheck_on.length; i++){
        if(i==elem){
            if(Book_elemCheck_on[i] == 0){
              Book_elemCheck_of[i].style.background = \'#3EC6EF\';
              Book_elemCheck_on[i] = 1;
              Book_elemCheck_of[i].checked = true;
            }
            else{
                Book_elemCheck_of[i].style.background = \'#fff\';
                Book_elemCheck_on[i] = 0;
                Book_elemCheck_of[i].checked = false;
            }
        }
        else{
            Book_elemCheck_of[i].style.background = \'#fff\';
            Book_elemCheck_on[i] = 0;
            Book_elemCheck_of[i].checked = false;
        }
    }
}
        
var Blog_elemCheck_on = Array(0,0,0,0,0,0);
var Blog_elemCheck_of = document.getElementsByClassName("Search_blogsSearch_check");
function blogSearchfunc_check(elem){
	for(var i=0; i<Blog_elemCheck_on.length; i++){
        if(i==elem){
            if(Blog_elemCheck_on[i] == 0){
              Blog_elemCheck_of[i].style.background = \'#3EC6EF\';
              Blog_elemCheck_on[i] = 1;
              Blog_elemCheck_of[i].checked = true;
            }
            else{
                Blog_elemCheck_of[i].style.background = \'#fff\';
                Blog_elemCheck_on[i] = 0;
                Blog_elemCheck_of[i].checked = false;
            }
        }
        else{
            Blog_elemCheck_of[i].style.background = \'#fff\';
            Blog_elemCheck_on[i] = 0;
            Blog_elemCheck_of[i].checked = false;
        }
    }
}
        
var Smat_elemCheck_on = Array(0,0,0,0,0);
var Smat_elemCheck_of = document.getElementsByClassName("Search_smatSearch_check");
function smatSearchfunc_check(elem){
	for(var i=0; i<Smat_elemCheck_on.length; i++){
        if(i==elem){
            if(Smat_elemCheck_on[i] == 0){
              Smat_elemCheck_of[i].style.background = \'#3EC6EF\';
              Smat_elemCheck_on[i] = 1;
              Smat_elemCheck_of[i].checked = true;
            }
            else{
                Smat_elemCheck_of[i].style.background = \'#fff\';
                Smat_elemCheck_on[i] = 0;
                Smat_elemCheck_of[i].checked = false;
            }
        }
        else{
            Smat_elemCheck_of[i].style.background = \'#fff\';
            Smat_elemCheck_on[i] = 0;
            Smat_elemCheck_of[i].checked = false;
        }
    }

}

var Order_elemCheck_on = Array(0,0,0,0);
var Order_elemCheck_of = document.getElementsByClassName("Search_orderSearch_check");
function orderSearchfunc_check(elem){
	for(var i=0; i<Order_elemCheck_on.length; i++){
        if(i==elem){
            if(Order_elemCheck_on[i] == 0){
              Order_elemCheck_of[i].style.background = \'#3EC6EF\';
              Order_elemCheck_on[i] = 1;
              Order_elemCheck_of[i].checked = true;
            }
            else{
                Order_elemCheck_of[i].style.background = \'#fff\';
                Order_elemCheck_on[i] = 0;
                Order_elemCheck_of[i].checked = false;
            }
        }
        else{
            Order_elemCheck_of[i].style.background = \'#fff\';
            Order_elemCheck_on[i] = 0;
            Order_elemCheck_of[i].checked = false;
        }
    }

}

';

    if(isset($_GET["bookSearch_check"])){
        echo 'bookSearchfunc_check('.($_GET["bookSearch_check"]-1).');';
    }
    if(isset($_GET["blogsSearch_check"])){
        echo 'blogSearchfunc_check('.($_GET["blogsSearch_check"]-1).');';
    }
    if(isset($_GET["smatSearch_check"])){
        echo 'smatSearchfunc_check('.($_GET["smatSearch_check"]-1).');';
    }
    if(isset($_GET["orderSearch_check"])){
        echo 'orderSearchfunc_check('.($_GET["orderSearch_check"]-1).');';
    }

echo '
    </script>
<style>
.body-cont .flyblock .srchform-block .search_checks .head{
    display: block; position: relative;
    color: #353535;
    font-family: display_4_r;
    font-size: 24px;
}
.body-cont .flyblock .srchform-block .search_checks .head .downarr{
    display: inline-block; position: relative;
    width:20px; height:20px;
    background: url(elib_depend/graphics/interface_graphics/icons/orgGrad/plusgrey.png) center no-repeat;
    background-size: contain;
    cursor: pointer;
}
.body-cont .flyblock .srchform-block .search_checks .head .downarr:hover{
    background: url(elib_depend/graphics/interface_graphics/icons/blueGrad/plusgrey.png) center no-repeat;
    background-size: contain;
}
.body-cont .flyblock .srchform-block .search_checks .st_block{
    display: none; vertical-align: top;
    position: relative;
    width: 260px; 
    overflow: hidden;
    box-shadow: inset 0px 0px 8px rgba(100,100,100,0.5);
    border-radius: 5px;
    height: auto;
    margin: 10px;
    padding: 5px;
}
.body-cont .flyblock .srchform-block .search_checks .st_block .st_head{
    display: block; position: relative;
    color: #353535;
    font-family: display_4_r;
    font-size: 24px; 
    margin: 5px;
}
.body-cont .flyblock .srchform-block .search_checks{
    display: block;
    position: relative;
    width: calc(100% - 40px); height: auto;
    margin:20px;
    
}
.body-cont .flyblock .srchform-block .search_checks .st_block .Search-check{
    position: relative; 
    
    border: none;
    -webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    margin: 0;
    outline: none;
    
    margin:5px;
    margin-left: 15px; 
    margin-right: 0px; 
    border: solid 1px #666;
    width: 15px; height: 15px;
    display: inline-block;
    vertical-align: middle;
    border-radius: 50%;
    box-shadow: inset 0px 0px 0px 3px #fff;
    cursor: pointer;
}
.body-cont .flyblock .srchform-block .search_checks .st_block .Search-check:hover{
    border: solid 2px #666;
}
.body-cont .flyblock .srchform-block .check_label{
    position: relative; display: inline-block;
    font-size: 18px; font-family: display_3_r;
    left: 0px; margin:5px;
    margin-left:0px;
    vertical-align: middle;

}
.body-cont .flyblock .srchform-block .Search-check_mod{
    display: block;
} 
.body-cont .flyblock{
    position: relative;
    height: auto;
    width: calc(100% - 20px);
    margin:5px;
    margin-top: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    box-shadow: inset 0px 0px 8px 2px rgba(100,100,100,0.4);
    text-align: left;
    padding:5px;
}
.body-cont .flyblock .srchform-block{
    display: block;
    position: relative;
    width: calc(100% - 40px); height: auto;
    margin:20px;
}
.body-cont .flyblock .srchform-block .Search-form{
    margin: 0; overflow:hidden;
    position: relative;
    border: solid 1px #FF8930;
    border-radius: 8px;
    
    text-align:left;
}
.body-cont .flyblock .srchform-block .Search-form:hover{
    box-shadow: 0px 0px 8px 1px #FF8930;
}
.body-cont .flyblock .srchform-block .Search-form .Search-input{
    border: none;
    -webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    margin: 0;
    outline: none;
    
    position: relative; display: inline-block;
    top: 0; left: 0; width: calc(100% - 30px);
    padding-left: 3px; padding-right: 30px;
    padding-top: 8px; padding-bottom:8px;
    
    z-index: 1;
    text-indent: 15px;
    background: #ffffff;
    color: #888;
    font-size: 24px;
    font-family: display_4_r;
}

.body-cont .flyblock .srchform-block .Search-form .Search-submit{
    border: none;
    -webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    margin: 0; outline: none;
    
    position: absolute;
    right: 0; bottom: 0; top: 0;
    width: 80px;
    z-index: 2;
    background: #FF8930;
    color: #fff;
    font-family: display_4_b;
    cursor: pointer;
    box-shadow: -0px 0px 8px 1px rgba(100,100,100,.8)
}

.search_result{
        width: calc(100% - 20px);
        padding:10px;
        height:auto;
        margin-top:20px;
    }
    .search_result h1{
        font-family: display_4_r;
        font-size: 24px;
        color: #868686;
        text-align: left;
    }
    .src_elem_book{
        display: block;
        margin-top:10px;
        width: calc(100% - 10px);
        padding:5px;
        text-align:left;
    }
    .src_elem_book .cover{
        display: inline-block;
        position: relative;
        width: 100px;height:120px;
        vertical-align: middle;
        margin-right: 10px;
        box-shadow: 0px 2px 3px rgba(100,100,100,0.5);
        cursor: pointer;
        border-radius: 3px;
    }
    .src_elem_book .cover:hover{
        box-shadow: 0px 0px 8px #FF8930;
    }
    .src_elem_book .text{
        display: inline-block;
        width: auto;height:auto;
        vertical-align: middle;
    }
    .src_elem_book .title{
        display: block;
        font-family: display_3_r;
        color: #363636;
        font-size: 32px;
        cursor: pointer;
        text-decoration: none;
    }
    .src_elem_book .title:hover{
        color:#FF8930;
        text-decoration: underline;
    }
    .src_elem_book .author{
        display: block;
        font-family: display_3_r;
        color: #686868;
        font-size: 20px;
        cursor: pointer;
    }
    .src_elem_book .author:hover{
        color:#FF8930;
        text-decoration: underline;
    }
    .src_elem_book .genre{
        display: block;
        font-family: display_3_r;
        color: #868686;
        font-size: 16px;
        margin-top:5px;
    }
    .src_elem_book .published{
        display: block;
        font-family: display_3_r;
        color: #868686;
        font-size: 16px;
    }
    .src_elem_book .rating{
        display: block;
        margin-top:5px;
    }
    
    .src_elem_book .rating .fullstar{
        width: 15px; height: 15px; 
        display: inline-block; vertical-align:top;
        background: url(elib_depend/graphics/interface_graphics/icons/orgGrad/stargrey.png) center no-repeat;
        background-size: contain;
    }
    .src_elem_book .rating .halfstar{
        width: 7px; height: 15px; 
        display: inline-block; vertical-align:top;
        background: url(elib_depend/graphics/interface_graphics/icons/orgGrad/stargrey.png) no-repeat;
        background-size: 15px 15px;
        background-position: -8px;
        margin-left:3px;
    }
</style>
';
}
?>