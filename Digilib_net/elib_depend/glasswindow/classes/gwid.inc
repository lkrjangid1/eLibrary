<?php
// main glasswid file

//require_once "config.php";

require_once "elib_depend/config.php";

require_once "elib_depend/glasswindow/classes/trifx_profile.class";
require_once "elib_depend/glasswindow/classes/digilib_book.class";
require_once "elib_depend/glasswindow/classes/digilib_author.class";
require_once "elib_depend/glasswindow/classes/digilib_dcq.class";


//=============Global Functions
function clean_input($data){
	    $data = htmlspecialchars($data);
	    $data = trim($data);
	    $data = stripslashes($data);
	    return $data;
}
function digilib_twister128($token){
	    return $token = hash('ripemd128', "ls3g[zVlpa1".$token."5Hv0,R*Kbl%p4");
}
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

//=============Query Functions
function trifx_Login(){
}
function trifx_Signup(){
}
function trifx_ForgotPass(){
}

function trifx_inputchk(){
}
function trifx_capGen(){
}
function trifx_serialGen(){
}

function trifx_elib_srch(){
}
function trifx_elib_getBook(){
}
function trifx_elib_getAuthor(){
}

function trifx_elib_doDcq(){
}
function trifx_elib_doGuestBook(){
}

//=============Display Functions
function digilib_Navibar(){
}
function digilib_Sidebar(){
}
function digilib_Footer(){
}
function digilib_Meta(){
}
function digilib_Include_Files(){
}
function digilib_form(){
}

//=============Normalize Functions
function digilib_normalize(){
}
?>