<?php
/*==============================Glasswid_flwer.php==============================
 *  Glasswindow Flower
 *      simple jcc
 *  ver.5.31
 *
 *  Defines and configures various ease functions
 *  for developemnt servers-a normalizer is required
 *  from production servers.
 *  
 *  see change log for recent changes
 *
 *  Designed and Developed By Sal64DD
 *  contact: sal_uncd@gmail.com
 * 
*/

require_once "elib_depend/glasswindow/classes/gwid.inc";

    
//=============Global Functions
	/*.function clean_input($data)
		 * description:	cleans the given string by removing 
		 * 				html special chars, triming whitespaces, 
		 * 				striping trailing slashes.
		 * parameters: 	string $data
		 * 					~unchecked data: processes this string
		 * return:		string: cleaned input string
		 * notes: 		no futher changes required			
	 */
	
	/*.function digilib_twister128($token)
	 	* description:	security function-md5s the given 
	 	*				string and returns the value.
	 	* parameters:	string $token
	 	*					~pure string:converts the given 
	 	*					 string to md5
	 	* return:		string: (md5)ed with random salt text
	 	* warning:			DONOT CHANGE TO KEEP THE SQL STORAGE INTEGRITY
	 	*				EVERYTHING IS SAVED VIA THIS HASH FUNCTION
	 	*				LOSING THIS SALT TEXT WILL BLACKOUT THE SQL
	 	*				USER DATA FOREVER!!!
	 	* notes:			no further changes required
	 */
	 
	/*.function sec_strip($string,$data,$replacer)
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
	 
	/*.function dev($obj1, $obj2)
	 	* description:	developer window function.
	 	*				requires $developer_mode=1.
	 	*				uses $prt_dev var but not to be changed 
	 	*				manually.
	 	*				prints a log window in html which prints 
	 	*				given parameters passed.
	 	*				used for error handling.
	 	* parameters:	no parameters
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
	 	* return:		void
	 	* notes:			function is in state of working but further 
	 	*				development is welcome.
	 */

//=============Query Functions
    /*.function trifx_Login()
        * description:
        * parameters:
        * return:
        * notes:
    */
     /*.function trifx_Signup()
        * description:
        * parameters:
        * return:
        * notes:
    */
     /*.function trifx_ForgotPass()
        * description:
        * parameters:
        * return:
        * notes:
    */
     /*.function trifx_inputchk()
        * description:
        * parameters:
        * return:
        * notes:
    */
     /*.function trifx_capGen()
        * description:
        * parameters:
        * return:
        * notes:
    */
     /*.function trifx_serialGen()
        * description:
        * parameters:
        * return:
        * notes:
    */
     /*.function trifx_elib_srch()
        * description:
        * parameters:
        * return:
        * notes:
    */
     /*.function trifx_elib_getBook()
        * description:
        * parameters:
        * return:
        * notes:
    */
     /*.function trifx_elib_getAuthor()
        * description:
        * parameters:
        * return:
        * notes:
    */
     /*.function trifx_elib_doDcq()
        * description:
        * parameters:
        * return:
        * notes:
    */
    /*.function trifx_elib_doGuestBook()
        * description:
        * parameters:
        * return:
        * notes:
    */

//=============Display Functions
    /*.function digilib_Navibar()
        * description:
        * parameters:
        * return:
        * notes:
    */
    /*.function digilib_Sidebar()
        * description:
        * parameters:
        * return:
        * notes:
    */
    /*.function digilib_Footer()
        * description:
        * parameters:
        * return:
        * notes:
    */
    /*.function digilib_Meta()
        * description:
        * parameters:
        * return:
        * notes:
    */
    /*.function digilib_Include_Files()
        * description:
        * parameters:
        * return:
        * notes:
    */
    /*.function digilib_form()
        * description:
        * parameters:
        * return:
        * notes:
    */


//=============Normalize Functions
    /*.function digilib_normalize()
        * description:
        * parameters:
        * return:
        * notes:
    */

//=============CLASS digibook_M 
    //public:
        /*.function __construct()
             *  decription:
             *  parameters:
             *  return:
             *  notes:
         */
        /*.function search_book_server()
             *  decription:
             *  parameters:
             *  return:
             *  notes:
         */
        /*.function search_book_list()
             *  decription:
             *  parameters:
             *  return:
             *  notes:
         */
        /*.function getbook()
             *  decription:
             *  parameters:
             *  return:
             *  notes:
         */
        /*.function showbook()
             *  decription:
             *  parameters:
             *  return:
             *  notes:
         */
        /*.function reloadBook()
             *  decription:
             *  parameters:
             *  return:
             *  notes:
         */
        /*.function error()
             *  decription:
             *  parameters:
             *  return:
             *  notes:
         */
        /*.function __destruct()
             *  decription:
             *  parameters:
             *  return:
             *  notes:
         */

?>