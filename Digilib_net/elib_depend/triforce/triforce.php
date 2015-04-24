<?php
/*
 * triforce.php ver.3.1
 * 
 * Defines the Core API code of the site
 * all global functions and classes related to 
 * backstage data handling
 * 
 * DONOT CHANGE IF UNSURE
 * developed by shaurya
 */

/*.class trifx_signup
 * description: handles signup process.
 * 				pretty straight forward.
 * 				Given construct parameters,
 * 				handles the input chk, and sql
 * 				and regesters the user in database
 * 				or produces an error.
 * 				Also handles the email verification
 * 				for temporary account.
 * version:		1.0 alpha
 * use:			
 * construct:
 * properties:
 * methods:
 * destruct:
 * errors:
 * notes:
 * 
 */
class trifx_signup{
	public function __construct(){
		dev();
		dev("trifx_signup object created!");
	}
	
	public function __destruct(){
	
	}
}

class trifx_login{
	public function __construct($email, $pass, $cap){
		dev();
		dev("trifx_login object created!");
		dev("email",$email);
		dev("pass",$pass);
		dev("creating trifx_inputchk...");
		$inputchk_obj=new trifx_inputchk();
		$inputchk_obj->chk_email($email);
		$inputchk_obj->chk_pass($pass);
		
		dev();
	}
	
	private $var_email;
	private $var_pass;
	private $var_cap;
	private $var_error;
	
	
	public function __destruct(){
		
	}
}

class trifx_passreset{

}

class trifx_sql{
	private $query_str;
	private $query_arr;
	
	private $query_result;
	private $error;
	private $errormsg;
	
	private $error_arr;
	
	function __construct(){
		
	}
	
	private function com_server(){
		
	}
	private function query_server(){
	
	}
	private function query_arr_server(){
	
	}
	private function return_data_server(){
	
	}
	private function return_error_server(){
	
	}
	
}

class trifx_inputchk{
	public function __construct($set,$obj){
		dev();
		dev("trifx_inputchk object created!");
		//variable setting
		 $this->rule_firstname="/^[a-zA-Z]*$/";
		 $this->rule_middlename="/^[a-zA-Z]*$/";
		 $this->rule_lastname="/^[a-zA-Z]*$/";
		 $this->rule_password="/^[a-zA-Z0-9!@%^&()+*_=-~]{8,32}/";
		 $this->rule_url="/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i";
		 $this->rule_dob="/^[0-9]{2}[-\/.][0-9]{2}[-\/.][0-9]{4}$/";
		 $this->rule_phone="/^[0-9+]{10,13}/";
		 $this->rule_sec="/^[abcdefgh]{1}/i";
		 
		 $this->class_low=9;
		 $this->class_high=12;
		 dev("trifx_inputchk object variable Initalized. Changes are now accepted!");
		if(!empty($set)){
			dev("sending construct arguments to respective functions");
			switch($set){
				case "email": dev("email function identified. sending args...");$this->chk_email($obj);break;
				case "pass": dev("pass function identified. sending args...");$this->chk_pass($obj);break;
				case "firstname": dev("firstname function identified. sending args...");$this->chk_firstname($obj);break;
				case "lastname": dev("lastname function identified. sending args...");$this->chk_lastname($obj);break;
				case "middlename": dev("middlename function identified. sending args...");$this->chk_middlename($obj);break;
				case "dob": dev("dob function identified. sending args...");$this->chk_dob($obj);break;
				case "class": dev("class function identified. sending args...");$this->chk_class($obj);break;
				case "sec": dev("sec function identified. sending args...");$this->chk_sec($obj);break;
				case "cap": dev("cap function identified. sending args...");$this->chk_cap($obj);break;
				case "serial": dev("serial function identified. sending args...");$this->chk_serial($obj);break;
				case "phone": dev("phone function identified. sending args...");$this->chk_phone($obj);break;
				default: dev("invalid set argument. No function started!","error");break;
			}
			return $this->ret;
		}
	}
	
	private $error;
	private $errormsg;
	private $errorfunction;
	private $illegalchar;
	private $ret;
	
	private $rule_firstname;
	private $rule_middlename;
	private $rule_lastname;
	private $rule_password;
	private $rule_url;
	private $rule_dob;
	private $rule_phone;
	private $rule_sec;
	
	private $class_low;
	private $class_high;
	
	public function chk_email($obj){
		dev("chk_email() function started!");
		//chk if empty
		if(empty($obj)){
			$this->error=1;
			$this->errormsg="variable is empty";
			$this->errorfunction="chk_email";
			$this->ret=0;
			$this->dev_error();
		}//chk if valid
		elseif(!filter_var( $obj, FILTER_VALIDATE_EMAIL )){
			$this->error=2;
			$this->errormsg="invalid input context";
			$this->errorfunction="chk_email";
			$this->ret=0;
			$this->dev_error();
		}
		else{//ok
			$this->error=0;
			$this->ret=1;
			dev("ret",$this->ret);
			dev("chk_email() function ended!");
		}
		
	}
	public function chk_pass($obj){
		dev("chk_pass() function started!");
		//chk if empty
		if(empty($obj)){
			$this->error=1;
			$this->errormsg="variable is empty";
			$this->errorfunction="chk_pass";
			$this->ret=0;
			$this->dev_error();
		}//chk if clean
		elseif(!preg_match($this->rule_password,$obj)){
			$this->error=2;
			$this->illegalchar=1;
			$this->errormsg="use of illegal characters";
			$this->errorfunction="chk_pass";
			$this->ret=0;
			$this->dev_error();
		}
		else{//ok
			$this->error=0;
			$this->ret=1;
			dev("ret",$this->ret);
			dev("chk_pass() function ended!");
		}
	}
	public function chk_firstname($obj){
		dev("chk_firstname() function started!");
		//chk if empty
		if(empty($obj)){
			$this->error=1;
			$this->errormsg="variable is empty";
			$this->errorfunction="chk_firstname";
			$this->ret=0;
			$this->dev_error();
		}//chk if clean
		elseif(!preg_match($this->rule_firstname, $obj)){
			$this->error=2;
			$this->illegalchar=1;
			$this->errormsg="use of illegal characters";
			$this->errorfunction="chk_firstname";
			$this->ret=0;
			$this->dev_error();
		}
		else{//ok
			$this->error=0;
			$this->ret=1;
			dev("ret",$this->ret);
			dev("chk_firstname() function ended!");
		}
	}
	public function chk_lastname($obj){
		dev("chk_lastname() function started!");
		//chk if empty
		if(empty($obj)){
			$this->error=1;
			$this->errormsg="variable is empty";
			$this->errorfunction="chk_firstname";
			$this->ret=0;
			$this->dev_error();
		}//chk if clean
		elseif(!preg_match($this->rule_lastname, $obj)){
			$this->error=2;
			$this->illegalchar=1;
			$this->errormsg="use of illegal characters";
			$this->errorfunction="chk_lastname";
			$this->ret=0;
			$this->dev_error();
		}
		else{//ok
			$this->error=0;
			$this->ret=1;
			dev("ret",$this->ret);
			dev("chk_lastname() function ended!");
		}
	}
	public function chk_middlename($obj){
		dev("chk_middlename() function started!");
		//chk if empty
		if(empty($obj)){
			$this->error=1;
			$this->errormsg="variable is empty";
			$this->errorfunction="chk_middlename";
			$this->ret=0;
			$this->dev_error();
		}//chk if clean
		elseif(!preg_match($this->rule_middlename, $obj)){
			$this->error=2;
			$this->illegalchar=1;
			$this->errormsg="use of illegal characters";
			$this->errorfunction="chk_middlename";
			$this->ret=0;
			$this->dev_error();
		}
		else{//ok
			$this->error=0;
			$this->ret=1;
			dev("ret",$this->ret);
			dev("chk_middlename() function ended!");
		}
	}
	public function chk_dob($obj){
		dev("chk_dob() function started!");
		//chk if empty
		if(empty($obj)){
			$this->error=1;
			$this->errormsg="variable is empty";
			$this->errorfunction="chk_dob";
			$this->ret=0;
			$this->dev_error();
		}//chk if clean
		elseif(!preg_match($this->rule_dob,$obj)){
			$this->error=2;
			$this->errormsg="use of illegal characters";
			$this->errorfunction="chk_dob";
			$this->ret=0;
			$this->dev_error();
		}
		else{//chk if valid
			dev('stripping date...');
			$obj_stripped=sec_strip($obj, "-,/,\\,.", "-");
			dev("sripped date",$obj_stripped);
			dev("now exploding date...");
			$date_arr = explode('-',$obj_stripped);
			dev("exploded date",$date_arr);
			if( count($date_arr) != 3 ){//chking array of 3
				$this->error=3;
				$this->errormsg="invalid date:unacceptable format";
				$this->errorfunction="chk_dob";
				$this->ret=0;
				$this->dev_error();
			}//chking valid date in context:dd,mm,yyyy
			elseif( !checkdate( $date_arr[1], $date_arr[0], $date_arr[2] ) ){
				$this->error=4;
				$this->errormsg="invalid date:unacceptable range";
				$this->errorfunction="chk_dob";
				$this->ret=0;
				$this->dev_error();
			}
			else{//ok
				$this->error=0;
				$this->ret=1;
			dev("ret",$this->ret);
			dev("chk_dob() function ended!");
			}
		}
	}
	public function chk_class($obj){
		dev("chk_class() function started!");
		//chk if empty
		if(empty($obj)){
			$this->error=1;
			$this->errormsg="variable is empty";
			$this->errorfunction="chk_class";
			$this->ret=0;
			$this->dev_error();
		}//chk if int
		elseif(!is_int($obj)){
			$this->error=2;
			$this->errormsg="invalid data";
			$this->errorfunction="chk_class";
			$this->ret=0;
			$this->dev_error();
		}//chk if in range
		elseif(!($obj>=$this->class_low && $obj<=$this->class_high)){
			$this->error=3;
			$this->errormsg="invalid range";
			$this->errorfunction="chk_class";
			$this->ret=0;
			$this->dev_error();
		}
		else{//ok
			$this->error=0;
			$this->ret=1;
			dev("ret",$this->ret);
			dev("chk_class() function ended!");
		}
		
	}
	public function chk_sec($obj){
		dev("chk_sec() function started!");
		//chk if empty
		if(empty($obj)){
			$this->error=1;
			$this->errormsg="variable is empty";
			$this->errorfunction="chk_sec";
			$this->ret=0;
			$this->dev_error();
		}//chk if char
		elseif(!is_string($obj)){
			$this->error=2;
			$this->errormsg="invalid data";
			$this->errorfunction="chk_sec";
			$this->ret=0;
			$this->dev_error();
		}
		elseif(!preg_match($this->rule_sec,$obj)){
			$this->error=3;
			$this->errormsg="illegal charater input";
			$this->errorfunction="chk_sec";
			$this->ret=0;
			$this->dev_error();
		}
		else{//ok
			$this->error=0;
			$this->ret=1;
			dev("ret",$this->ret);
			dev("chk_sec() function ended!");
		}
	}
	public function chk_serial($obj){
		dev("chk_serial() function started!");
		//chk if empty
		if(empty($obj)){
			$this->error=1;
			$this->errormsg="variable is empty";
			$this->errorfunction="chk_serial";
			$this->ret=0;
			$this->dev_error();
		}
		else{//ok
			$this->error=0;
			$this->ret=1;
			dev("ret",$this->ret);
			dev("chk_serial() function ended!");
		}
	}
	public function chk_cap($obj){
		dev("chk_cap() function started!");
		//chk if empty
		if(empty($obj)){
			$this->error=1;
			$this->errormsg="variable is empty";
			$this->errorfunction="chk_cap";
			$this->ret=0;
			$this->dev_error();
		}
		else{//ok
			$this->error=0;
			$this->ret=1;
			dev("ret",$this->ret);
			dev("chk_cap() function ended!");
		}
	}
	public function chk_url($obj){
		dev("chk_url() function started!");
		//chk if empty
		if(empty($obj)){
			$this->error=1;
			$this->errormsg="variable is empty";
			$this->errorfunction="chk_url";
			$this->ret=0;
			$this->dev_error();
		}
		elseif(!preg_match($this->rule_url,$obj)){
			$this->error=2;
			$this->errormsg="illegal charater input";
			$this->errorfunction="chk_url";
			$this->ret=0;
			$this->dev_error();
		}
		else{//ok
			$this->error=0;
			$this->ret=1;
			dev("ret",$this->ret);
			dev("chk_url() function ended!");
		}
	}
	private function dev_error(){
		dev(" ");
		dev("error occured","error");
		dev("_error",$this->error);
		dev("_errormsg",$this->errormsg);
		dev("_errorfunction",$this->errorfunction);
		dev("_ret",$this->ret);
		dev(" ");
	}
}

class trifx_email{
	
}

class trifx_serialgen{
	
}

class trifx_cap{
	
}

?>