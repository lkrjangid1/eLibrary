<?php
session_start();
/*
 * admin.php ver.1.1
 * powered by bbps triforce and glasswindow script
 * designed and developed by shaurya 17 april 2015
 */

require_once("elib_config/config.php");
require_once($GLOBALS["GlassWindow"]);

$gwobj = new glaswid(array(
		"foot"=>array(
				"print"=>0
				
		), 
		"include_files"=>array(
				"binery_parm"=>"1.1.1.2.0.0.0",
				"echo_files"=>'<link rel="stylesheet" type="text/css" href="admin_style.css">'
		)
));


//Admin Panel Page=>
dev("*********************LOG WINDOW 1.1************************");
dev("Welcome to BBPSGRH Admin Panel!");
//userlogin

print_start();

if(!isset($_SESSION["usr_login_status"])){
	dev("please login to continue...");
	
	if(isset($_POST['usr_submit'])){
		dev("Form sent","working...");
		
		dev("creating mysqli obj...");
		$mysqli = new mysqli($GLOBALS["db_MYSQL_SERVER"], $GLOBALS["db_MYSQL_USER"], $GLOBALS["db_MYSQL_Pass"], _dbDLIB);
		
		
		if ($mysqli->connect_errno) {
			dev("coudn't create a new mysqli obj","error");
			echo '<pre class="error">Failed to connect to MySQL: ' . $mysqli->connect_error . '</pre>';
		}
		else{
		dev("new mysqli obj created!");
		
		dev("quering mysql server...");
		$res = $mysqli->query('SELECT pass, is_mod FROM user_student_info WHERE email_id="'.$_POST['user_inp'].'"');
		
		if(!$res->num_rows){
			dev("no matching account in database","error");
			echo '<pre class="error">Credentials Dosn\'t match. Try Again(-.-)</pre>';
			print_user_login_frm();
			}
		else{
			$row = $res->fetch_array(MYSQLI_ASSOC);
			if(!($row["pass"]==_sec1_($_POST["password_inp"]))){
				dev("no matching account in database","error");
				echo '<pre class="error">Credentials Doesn\'t match. Try Again(-.-)</pre>';
				print_user_login_frm();
				dev("pass_php",_sec1_($_POST["password_inp"]));
				dev("pass_sql",$row["pass"]);
			}
			elseif(!$row["is_mod"]){
				dev("You are not a moderator!","error");
				echo '<pre class="error">You are not a Mod!</pre>';
				print_user_login_frm();
			}
			else{
				dev("Credentials Matched!");
				dev("logging in...");
				$res->free();
				$res = $mysqli->query('SELECT student_id, first_name, last_name, gender, class_id, dob, points, badges, notifications FROM user_student_info WHERE email_id="'.$_POST['user_inp'].'"');
				if(!$res->num_rows){
					dev("Mysql Error","error");
				}
				else{
					$_SESSION = $res->fetch_array(MYSQLI_ASSOC);
					$_SESSION["usr_login_status"]=1;
					$_SESSION["home_screen"]=1;
					$_SERVER['REQUEST_METHOD']=NULL;
					echo '<script>location.reload();</script>';
				}
			}}
		}
	}
	else{
		print_user_login_frm();
	}
}
else{
	if($_SESSION["elib_add_book"]==1){
		add_book_fx();
	}
	elseif($_SESSION["home_screen"]==1){
		if($_SERVER['REQUEST_METHOD']=="POST" && $_SESSION["home_screen"]==1){
			if(!empty($_POST["elib_add_book"])){
				add_book_fx();
			}
			elseif(!empty($_POST["elib_add_author"])){
				echo '<pre>add Author</pre>';
			}
			elseif(!empty($_POST["elib_edit_book"])){
				echo '<pre>edit Book</pre>';
			}
			elseif(!empty($_POST["elib_edit_book"])){
				echo '<pre>edit Book</pre>';
			}
			elseif(!empty($_POST["elib_edit_author"])){
				echo '<pre>edit Author</pre>';
			}
			elseif(!empty($_POST["std_add_book"])){
				echo '<pre>add Ncert Book</pre>';
			}
			elseif(!empty($_POST["std_notes"])){
				echo '<pre>add Ncert notes</pre>';
			}
			elseif(!empty($_POST["std_add_soln"])){
				echo '<pre>add Ncert Solutions</pre>';
			}
			elseif(!empty($_POST["std_add_oldq"])){
				echo '<pre>add old question papers</pre>';
			}
			elseif(!empty($_POST["std_add_samp"])){
				echo '<pre>add solved sample papers</pre>';
			}
			elseif(!empty($_POST["std_add_ass"])){
				echo '<pre>add Ncert Assignments</pre>';
			}
			elseif(!empty($_POST["std_edit_ncert"])){
				echo '<pre>edit Ncert section</pre>';
			}
			elseif(!empty($_POST["bg_add_blog"])){
				echo '<pre>add School Blog</pre>';
			}
			elseif(!empty($_POST["bg_edit_blog"])){
				echo '<pre>Edit School Blog</pre>';
			}
			elseif(!empty($_POST["gn_set_news"])){
				echo '<pre>Set News/Notifications</pre>';
			}
			elseif(!empty($_POST["gn_add_circ"])){
				echo '<pre>add circulars</pre>';
			}
			elseif(!empty($_POST["gn_edit_circ"])){
				echo '<pre>edit circulars</pre>';
			}
			
		}
		else{
			dev();
			dev("Hello ".$_SESSION["first_name"]."!");
			dev("select something?");
			$_SERVER['REQUEST_METHOD']==NULL;
			print_work_options();
		}
	}
}



print_end();
?>


	

	

		
<?php

function add_book_fx(){
	if(!empty($_POST["back_to_home"])){
		$_SERVER['REQUEST_METHOD']=NULL;
		$_SESSION["elib_add_book"]=NULL;
		$_SESSION["home_screen"]=1;
		echo '<script>location.reload();</script>';
	}
	elseif(!empty($_POST["all_books_table"])){
		echo '
				<table>
				</table>
		';
	}
	else{
		$_SERVER['REQUEST_METHOD']=NULL;
		$_SESSION["elib_add_book"]=1;
		echo '<form action="admin.php" method="POST" class="frm_option_l2 select_cin">';
		echo '<pre><input type="submit" class="button_type" value="<" name="back_to_home">add Book</pre>';
		echo '	<input type="submit" class="button_type" value="All Elib Books Table" name="all_books_table">
				<input type="submit" class="button_type" value="All Elib Authors Table" name="all_authors_table">
	 		
		<pre><br><br></pre>
		<pre>Book Title<span class="hint_descp">(Max 128 chars.)</span>: <input type="text" class="usr_type" name="book_title_inp"></pre>
		<pre>No. of Chapters <span class="hint_descp">(in Numbers)</span>: <input type="text" class="usr_type" name="book_title_inp"></pre>
		<pre>No. of Pages <span class="hint_descp">(in Numbers)</span>: <input type="text" class="usr_type" name="book_title_inp"></pre>
		
		<pre>is Available in Library <span class="hint_descp">(1=true, 0=false)</span>: <input type="text" class="usr_type" name="book_title_inp"></pre>
		<pre>is Available to Download <span class="hint_descp">(1=true, 0=false)</span>: <input type="text" class="usr_type" name="book_title_inp"></pre>
		
		<pre>Date of Publishing <span class="hint_descp">(Year, in numbers, 4digit)</span>: <input type="text" class="usr_type" name="book_title_inp"></pre>
		<pre>rating<span class="hint_descp">(00/10)</span>: <input type="text" class="usr_type" name="book_title_inp"></pre>
		
		<pre>server<span class="hint_descp">(select from list)</span>: </pre>
		<pre>link<span class="hint_descp">(add to list)</span>: </pre>
		
		<pre>Author<span class="hint_descp">(select from list)</span>: </pre>
		<pre>Cover<span class="hint_descp">(upload a jpeg, png, tiff)</span>: </pre>
		<pre><br></pre>
		<input type="submit" class="button_type" name="add_book_to_sql">
		
		</form>
	 		';
	}
}

function print_work_options(){
	echo '
 	<pre>Select: </pre>
 		<br>
 <!-- option LOGIN FORM -->
 		<form action="admin.php" method="POST" class="frm_option select_cin">
 		<pre>===============================</pre>
 		<pre>Elibrary</pre>
 		<input type="submit" class="button_type" name="elib_add_book" value="add Book">
 		<input type="submit" class="button_type" name="elib_add_author" value="add author">
 		<input type="submit" class="button_type" name="elib_edit_book" value="edit book">
 		<input type="submit" class="button_type" name="elib_edit_author" value="edit author">
 		<pre>===============================</pre>
 		<pre>Study Zone</pre>
 		<input type="submit" class="button_type" name="std_add_book" value="add Ncert Book">
 		<input type="submit" class="button_type" name="std_notes" value="add Ncert Notes">
 		<input type="submit" class="button_type" name="std_add_soln" value="add Ncert solutions">
 		<br>
 		<input type="submit" class="button_type" name="std_add_oldq" value="add Ncert Old Question Papers">
 		<input type="submit" class="button_type" name="std_add_samp" value="add Ncert Solved Sample Papers">
 		<br>
 		<input type="submit" class="button_type" name="std_add_ass" value="add Ncert Assignments">
 		<input type="submit" class="button_type" name="std_edit_ncert" value="edit Ncert section">
 		<pre>===============================</pre>
 		<pre>Blog</pre>
 		<input type="submit" class="button_type" name="bg_add_blog" value="add School Blog">
 		<input type="submit" class="button_type" name="bg_edit_blog" value="edit School Blog">
 		<pre>===============================</pre>
 		<pre>General</pre>
 		<input type="submit" class="button_type" name="gn_set_news" value="set News/Notification">
 		<input type="submit" class="button_type" name="gn_add_circ" value="add circulars">
 		<input type="submit" class="button_type" name="gn_edit_circ" value="edit circulars">
 		<pre>===============================</pre>
 		
 		</form>
 		';
}
function print_start(){
	echo '
<div class="dig Mainpage">
	<h1 id="head"><span class=rot_status>[\]</span>Digital Library Admin panel ver.1.2</h1>';
	
}

function print_user_login_frm(){
	echo '
	<pre>Enter Username & Password:</pre>
		
<!-- USER LOGIN FORM -->
	<form action="admin.php" method="POST" class="frm_login input_cin">
	<span class="error_chk_usr"></span>
	<input type="text" class="usr_type user_inp" name="user_inp">
	<input type="password" class="usr_type password_inp" name="password_inp">
	<input type="submit" class="button_type" name="usr_submit">
	<script>$(".user_inp").select();</script>
	</form>';
}

function print_end(){
	echo '</div>';
}


$gwobj->foot();
dev();

?>