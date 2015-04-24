<?php
include("../../elib_config/config.php");
//BBPS triforce script
    class _triforce{
        private $result;
        private $query;
        private $query_queue;
        private $ajax_query;
        private $connect;
        private $table_array;
        
        public $chk_result;
        public $error;
        
 public function chk($item, $context){
            if($context == "email"){
                if(empty($item)){
                    $this->error="Email Field is Required!";
                    $chk_res = 0;
                }
                elseif($item != clean_input($item)){
                    $this->error="Invalid Email Field: use of illegal characters";
                    $chk_res = 0;
                }
                elseif(!filter_var( $item, FILTER_VALIDATE_EMAIL )){
                    $this->error="Not a valid Email id.";
                    $chk_res = 0;
                }
                else{
                    $chk_res=1;
                    $this->chk_result="Email id is ok!";
                }
            }
            elseif($context == "pass"){
                if(empty($item)){
                    $this->error="Password Field is Required!";
                    $chk_res = 0;
                }
                elseif(!preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,24}$/', $item)){
                    $this->error="Invalid Password Field: only alphabets, numbers, !@#$% allowed - one number, one lowercase and one uppercase alphabet required";
                    $chk_res = 0;
                }
                else
                {
                    $chk_res = 1;
                    $this->chk_result="Password is ok!";
                } 
            }
            elseif($context == "date"){
                if(empty($item)){
                    $this->error="Date Field is Required!";
                    $chk_res = 0;
                }
                else{
                    $date_arr = explode('-',$item);
                    if( count($date_arr) != 3 ){
                        $this->error="Invalid Date.";
                        $chk_res = 0;
                    }
                    elseif( !checkdate( $date_arr[1], $date_arr[2], $date_arr[0] ) ){
                        $this->error="Illegal date.";
                        $chk_res = 0;
                    }
                    else{
                        $chk_res = 1;
                        $this->chk_result = "Date is ok!";
                    }
                }
            }
            elseif($context == "name"){
                if(empty($item)){
                    $this->error="Name Field is Required!";
                    $chk_res = 0;
                }
                elseif($item != clean_input($item)){
                    $this->error="Invalid Name Field: use of illegal characters";
                    $chk_res = 0;
                }
                elseif(!preg_match("/^[a-zA-Z ]*$/",$item)){
                    $this->error="Invalid Name Field: only alphabets and whitespaces are alllowed";
                    $chk_res = 0;
                }
                else
                {
                    $chk_res = 1;
                    $this->chk_result = "Name is ok!";
                }
            }
            elseif($context == "userid"){
                if(empty($item)){
                    $this->error="userid Field is Required!";
                    $chk_res = 0;
                }
                elseif($item != clean_input($item)){
                    $this->error="Invalid userid Field: use of illegal characters";
                    $chk_res = 0;
                }
                elseif(!preg_match("/^[a-zA-Z0-9_]*$/",$item)){
                    $this->error="Invalid userid Field: only alphabets, Numbers and underscore are alllowed";
                    $chk_res = 0;
                }
                else
                {
                    $chk_res = 1;
                    $this->chk_result = "userid is ok!";
                }
            }
            elseif($context == "contact_no"){
                if(empty($item)){
                    $this->error="contact_no Field is Required!";
                    $chk_res = 0;
                }
                elseif($item != clean_input($item)){
                    $this->error="Invalid contact no Field: use of illegal characters";
                    $chk_res = 0;
                }
                elseif(!preg_match("/^[0-9+]*$/",$item)){
                    $this->error="Invalid contact_no Field: only Numbers and + are alllowed";
                    $chk_res = 0;
                }
                else
                {
                    $chk_res = 1;
                    $this->chk_result = "contact_no is ok!";
                }
            }
            elseif($context == "admin_no"){
                if(empty($item)){
                    $this->error="admin_no Field is Required!";
                    $chk_res = 0;
                }
                elseif($item != clean_input($item)){
                    $this->error="Invalid admin_no Field: use of illegal characters";
                    $chk_res = 0;
                }
                elseif(!preg_match("/^[0-9]*$/",$item)){
                    $this->error="Invalid admin Field: only Numbers are alllowed";
                    $chk_res = 0;
                }
                else
                {
                    $chk_res = 1;
                    $this->chk_result = "admin_no is ok!";
                }
            }
            elseif($context == "class_id"){
                if(empty($item)){
                    $this->error="class_id Field is Required!";
                    $chk_res = 0;
                }
                elseif($item != clean_input($item)){
                    $this->error="Invalid class_id Field: use of illegal characters";
                    $chk_res = 0;
                }
                elseif(!preg_match("/^[0-9]*$/",$item)){
                    $this->error="Invalid class Field: only Numbers are alllowed";
                    $chk_res = 0;
                }
                else
                {
                    $chk_res = 1;
                    $this->chk_result = "class_id is ok!";
                }
            }
            elseif($context == "serial"){
                if(empty($item)){
                    $this->error="serial Field is Required!";
                    $chk_res = 0;
                }
                elseif($item != clean_input($item)){
                    $this->error="Invalid serial Field: use of illegal characters";
                    $chk_res = 0;
                }
                elseif(!preg_match("/^[a-zA-Z0-9]*$/",$item)){
                    $this->error="Invalid serial Field: only Numbers and Alphabets are alllowed";
                    $chk_res = 0;
                }
                else
                {
                    $chk_res = 1;
                    $this->chk_result = "serial is ok!";
                }
            }
            return $chk_res;
        }
        
public function login_function($login_email, $login_pass){
            if(!$this->chk($login_pass, "pass")){}
            else{
                $login_pass = _sec1_($login_pass);echo 'hi';
                if(!$this->chk($login_email, "email")){}
                   else{
                       $this->connect = mysqli_connect($db_MYSQL_SERVER, 
                                                 $db_MYSQL_USER, 
                                                 $db_MYSQL_Pass, 
                                                 DB_BBPS_USER);
                       if(mysqli_connect_errno()){
                            $this->error="Failed to connect to MySQL: ".mysqli_connect_error();}
                       else{
                            $this->query = "SELECT pass, registered, verification_email FROM student_info where email_id='".$login_email."'";
                            if(!$this->result = mysqli_query($this->connect, $this->query)){
                                $this->error="Details doesn't Match Records.";}
                           else{
                                if(!$this->result->num_rows){
                                    $this->error= "Emailid doesn't Exists.";}
                               else{
                                    $this->table_array = $this->result->fetch_array(MYSQLI_ASSOC);
                                    unset($this->result);
                                    unset($this->connect);
                                    if(!$this->table_array["registered"]){
                                        $this->error = "Account isnt't Activated. Signup before you login.";}
                                    elseif($this->table_array["pass"] != $login_pass){
                                        $this->error = "Incorrect Password or Email id.";}
                                    else{
                                        $this->result=1;
                                        if($this->table_array["verification_email"]){
                                            mail($login_email, $onloginverifi_subject, $onloginverifi_msg);}
            }}}}}}}
        
        
     
public function signup_function($signup_email_name="signup_email_id", $signup_pass_name="signup_password", $signup_admin_name="signup_admin_no", $signup_dob_name="signup_dob", $signup_backup_email_name="signup_backup_email_id"){
                $signup_email_id = $_POST[$signup_email_name];
                $signup_password = $_POST[$signup_pass_name];
                $signup_admin_no = $_POST[$signup_admin_name];
                $signup_dob = $_POST[$signup_dob_name];
                $signup_backup_email_id = $_POST[$signup_backup_email_name];
            if(!$_SESSION["VERIFICATION_STATUS"]){
            
            if($this->chk($signup_email_id, "email") || $this->chk($signup_password, "pass") || $this->chk($signup_admin_no, "admin_no") || $this->chk($signup_dob, "date") || $this->chk($signup_backup_email_id, "email")){
                if($signup_email_id == $signup_backup_email_id){
                    $this->error = "A different backup email is Required.";}
                else{
                $this->connect = mysqli_connect($db_MYSQL_SERVER, 
                                                 $db_MYSQL_USER, 
                                                 $db_MYSQL_Pass, 
                                                 DB_BBPS_USER);
                       if(mysqli_connect_errno()){
                            $this->error = "Failed to connect to MySQL: " . mysqli_connect_error();}
                       else{
                           $this->query = "SELECT registered, admin_no, dob FROM student_info where email_id='".$signup_email_id."'";
                           if(!$this->result = mysqli_query($this->connect, $this->query)){
                                $this->error="Details doesn't Match Records: You may not be using official data.";}
                           else{
                               if(!$this->result->num_rows){
                                    $this->error= "Emailid doesn't correspond to any account.";}
                               else{
                                    $this->table_array = $this->result->fetch_array(MYSQLI_ASSOC);
                                    unset($this->result);
                                    unset($this->connect);
                                   if($this->table_array["registered"]){
                                       $this->error = "Already Registered: Reset forgotten password at login page.";}
                                   elseif($this->table_array["dob"] != $signup_dob || $this->table_array["admin_no"] != $signup_admin_no){
                                       $this->error = "Dob and admin no combination doesn't correspond to any account";}
                                   else{
                                       $ver_token = mt_rand(100000,9999999);
                                       mail($signup_email_id, $signupverify_subj, signupverify_msg($ver_token));
                                       $user_token = serial_email_verification();
                                   
                               }}}}}}}
                                   else{
                                       if(!$this->chk("user_token_name", "serial")){
                                           $this->error="bad Serial.";
                                       }
                                       elseif($ver_token != $user_token){
                                           $this->error="bad Serial.";}
                                       else{
                                            $this->connect = mysqli_connect($db_MYSQL_SERVER, 
                                                                 $db_MYSQL_USER, 
                                                                 $db_MYSQL_Pass, 
                                                                 DB_BBPS_USER);
                                            $this->query = "UPDATE student_info SET pass='"._sec1_($signup_password)."', backup_email='".$signup_backup_email_id."' WHERE email_id='".($signup_email_id)."'";
                                            if(!$this->result = mysqli_query($this->connect, $this->query)){
                                                $this->error="Unable to Register user at this time: error501(try later)";}
                                           else{
                                               unset($this->result);
                                               unset($this->connect);
                                               $this->result = 1;
                                           
      }}}
    
}
        



}//end of class
?>