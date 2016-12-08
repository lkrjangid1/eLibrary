<?php
/*digilib_dev.php
========================================
Designed and Developed by Sal64dd
contact: sal.uncd@gmail.com
========================================
*/
function clean_input($data){
	    $data = htmlspecialchars($data);
	    $data = trim($data);
	    $data = stripslashes($data);
    return $data;
}
function clean_input_l(&$data){
	 
    return $data;
}
function clean_input_y(&$data){
	$config = HTMLPurifier_Config::createDefault();
    
    $config->set('HTML.Allowed', 'b,i');
    $config->set('URI.Base', 'http://www.example.com');
    $config->set('URI.MakeAbsolute', true);
    $config->set('AutoFormat.AutoParagraph', true);
    
    $purifier = new HTMLPurifier($config);
    $data = $purifier->purify($data);    
}
function digilib_twister128($token){
	    $token = hash('ripemd128', "ls3g[zVlpa1".$token."5Hv0,R*Kbl%p4");
    return $token;
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
						z-index:1000;
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
function simonsays(&$sql){
    //The new SQL Backend for Digilib Website
    $retdata[0][0] = 0;
    //connecting to db
    dev("simonsays","creating db");
    $db = new mysqli($GLOBALS["db_MYSQL_SERVER"], $GLOBALS["db_MYSQL_USER"], $GLOBALS["db_MYSQL_Pass"], $GLOBALS["db_MYSQL_DB"]);
    $retdata[0][0]=0;
    if($db->connect_errno > 0){
        dev("simonsays","cant connect to db");
        $retdata[0][0]= -1;
        $retdata[0][1]= "error: can't connect to db";
        return $retdata;
    }
    
    //processing sql
    dev("simonsays","processing sql");
    for($i=0; $i<$sql[0]; $i++){
        $retdata[1][$i] = $db->query($sql[1][$i]);
        dev("simonsays","proceesing query $i");
            if(!$retdata[1][$i]){
                $retdata[0][0]= -2;
                $retdata[0][1]= "error: can't process given query. ".$i;
                dev("error","query $i invalid");
        }
    }
    dev("simonsays","returning result");
    //return result
        $db->close();
        return $retdata;
    
}
function simonsends($user, $email, $serial, $link, $dlink){
    require_once('elib_depend/PHPMailer-master/PHPMailerAutoload.php');
    $mail = new PHPMailer(true); // the true param means it will throw exceptions on     errors, which we need to catch
    $mail->IsSendmail();
    
  $mail->Host       = gethostbyname('smtp.gmail.com'); // SMTP server
  $mail->Port       = 25;                    // set the SMTP port
  $mail->SetFrom('sal.uncd@gmail.com', 'sal64dd');
  $mail->AddAddress($email, $user);
  $mail->IsHTML(true);
  $mail->Subject = 'BBPSGRH Digilib Accounts: Just one step away...';
    
  $mail->AddEmbeddedImage("../../elib_depend/graphics/mics_graphics/email/bbps_logo_email.png", "bbpsBlack", "bbps_logo_email.png");
    $mail->AddEmbeddedImage("../../elib_depend/graphics/mics_graphics/email/dash_logo_email.png", "digilibBlue", "dash_logo_email.png");
    
  $mail->Body = '<img src="cid:digilibBlue">
<br>
Dear '.$user.',
<br>
<p>Thank you for registering at the BBPSGRH DigitalLibrary - Dashboard. Before we can activate your account one last step must be taken to complete your registration.</p>

<p>Please note - you must complete this last step to become a registered member. You will only need to visit this URL once to activate your account.</p>

<p>To complete your registration, please visit this URL:</p>
'.$link.'
<p>
Your Username is: '.$user.'
<br>
Your Activation ID is: '.$serial.'
</p>

<p>
If you are still having problems signing up please contact a member of our support staff at help report link
</p>
<br>
<p>
- Thanks,
<br>
    Shaurya Singh
    <br>
    Digital Library, 
    <br>
    D&D Team
    <br>
</p>
<br>
<br>
<p>--------------------
<br>To stop receiving this email, please visit this URL:
<br>'.$dlink.'
</p>
<br>
<br>
<img src="cid:bbpsBlack">
<br>
<b>'."http://".$_SERVER['HTTP_HOST']."/digilib_net/Digilib_net/elib_bin/Home/home.php".'</b>
<br>
<b>http://bbpsgr.edu.in</b>';
    
  //$mail->AddAttachment('something.zip'); // this is a regular attachment (Not inline)
  $mail->Send();
/*    
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
*/
}
function simonbends($user, $email, $link){
    require_once('elib_depend/PHPMailer-master/PHPMailerAutoload.php');
    $mail = new PHPMailer(true); // the true param means it will throw exceptions on     errors, which we need to catch
    $mail->IsSendmail();
    
  $mail->Host       = gethostbyname('smtp.gmail.com'); // SMTP server
  $mail->Port       = 25;                    // set the SMTP port
  $mail->SetFrom('sal.uncd@gmail.com', 'sal64dd');
  $mail->AddAddress($email, $user);
  $mail->IsHTML(true);
  $mail->Subject = 'BBPSGRH Digilib Accounts: Password Reset Request';
    
  $mail->AddEmbeddedImage("../../elib_depend/graphics/mics_graphics/email/bbps_logo_email.png", "bbpsBlack", "bbps_logo_email.png");
    $mail->AddEmbeddedImage("../../elib_depend/graphics/mics_graphics/email/dash_logo_email.png", "digilibBlue", "dash_logo_email.png");
    
  $mail->Body = '<img src="cid:digilibBlue">
<br>
Dear '.$user.',
<br>

<p>You recently initiated a password reset for your Digilib Account. To complete the process, click the link below.</p>
<br>
'.$link.'
<br>

<p>This link will expire three hours after this email was sent.</p>
<p>If you didn\'t make this request, it\'s likely that another user has entered your email address by mistake and your account is still secure. If you believe an unauthorized person has accessed your account, you can reset your password at Digital Library Dashboard.</p>

<br>
<p>

- Digital Library, 
<br>
D&D Team
<br>
</p>
<br>
<img src="cid:bbpsBlack">
<br>
<b>'."http://".$_SERVER['HTTP_HOST']."/digilib_net/Digilib_net/elib_bin/Home/home.php".'</b>
<br>
<b>http://bbpsgr.edu.in</b>';
    
  //$mail->AddAttachment('something.zip'); // this is a regular attachment (Not inline)
  $mail->Send();
/*    
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
*/
}
function simonlends($user, $email){
    require_once('elib_depend/PHPMailer-master/PHPMailerAutoload.php');
    $mail = new PHPMailer(true); // the true param means it will throw exceptions on     errors, which we need to catch
    $mail->IsSendmail();
    
  $mail->Host       = gethostbyname('smtp.gmail.com'); // SMTP server
  $mail->Port       = 25;                    // set the SMTP port
  $mail->SetFrom('sal.uncd@gmail.com', 'sal64dd');
  $mail->AddAddress($email, $user);
  $mail->IsHTML(true);
  $mail->Subject = 'BBPSGRH Digilib Accounts: Your Password has been Reset';
    
  $mail->AddEmbeddedImage("../../elib_depend/graphics/mics_graphics/email/bbps_logo_email.png", "bbpsBlack", "bbps_logo_email.png");
    $mail->AddEmbeddedImage("../../elib_depend/graphics/mics_graphics/email/dash_logo_email.png", "digilibBlue", "dash_logo_email.png");
    
  $mail->Body = '<img src="cid:digilibBlue">
<br>
Dear '.$user.',
<br>

<p>The password for your Digilib Account has been successfully reset.</p>
<p>If you didn\'t make this change or if you believe an unauthorized person has accessed your account, go Digilib Dashboard to reset your password immediately.</p>

<br>
<p>

- Digital Library, 
<br>
D&D Team
<br>
</p>
<br>
<img src="cid:bbpsBlack">
<br>
<b>'."http://".$_SERVER['HTTP_HOST']."/digilib_net/Digilib_net/elib_bin/Home/home.php".'</b>
<br>
<b>http://bbpsgr.edu.in</b>';
    
  //$mail->AddAttachment('something.zip'); // this is a regular attachment (Not inline)
  $mail->Send();
/*    
} catch (phpmailerException $e) {
  echo $e->errorMessage(); //Pretty error messages from PHPMailer
} catch (Exception $e) {
  echo $e->getMessage(); //Boring error messages from anything else!
}
*/
}
function capcheck($str){
    return strcasecmp(" ".$str, $_SESSION["capcode"]);
}
function e_sql($dat){
    return mysql_real_escape_string($dat);
}



