<?php
/*
 * glasswindow.php ver.3.1
 * defines and implements the core ui of the site
 * designed and developed by shaurya
 */

class glaswid{
	/*properties*/
	private $meta, $head, $include_files, $foot, $navibar, $sidebar, $col;
	
	/*functions*/
/* Function __construct($param) for glasswid class
 * description: initialize object properties 
 * parameter:$param->multid array
 * |->param["meta"]=>charset,keyword,description,print
 * |->param["head"]=>doctype,lang,title,print
 * |->param["include_files"]=>binery_parm,echo_files,print
 * |->param["foot"]=>print	//will not call at __destruct()
 * |->param["navibar"]=>print
 * |->param["sidebar"]=>print
 * -
 */
	function __construct($param){
		/* Default properties*/
			$this->meta=array(
					"charset"=>"utf-8"
					,"keywords"=>"Bal Bharati Public School, Elibrary, Students Portal, Ncert Books, Ncert Solutions, Assignments, Sample Papers, Old Question Papers, Bal Bharati Public School Ganga Ram Hospital Marg, BBPS, BBPSGRHM, Learn, exercise, skill, education, practice"
					,"description"=>"Learn, Practice, and Play at Bal Bharati Public School GRHM Student\'s Portal. Read books, view Ncert answers with solutions, discuss problems on school forum, solve online assignmets, see previous year question papers and more."
					,"print"=>1
			);
			$this->head=array(
					"doctype"=>"html"
					,"lang"=>"en-US"
					,"title"=>"Digital Library"
					,"print"=>1
			);
			$this->include_files=array(
					"binery_parm"=>""
					,"echo_files"=>""
					,"print"=>1
			);
			$this->foot=array(
					"print"=>0
			);
			$this->navibar=array(
					"print"=>1
			);
			$this->sidebar=array(
					"print"=>1
			);
			$this->col=array(
					"print"=>1
			);
		dev();
		dev("glaswid obj created!");
		dev("initializing variables...");
		if(empty($param)){
			dev("no parameter specified:using default...");
		}
		else{
			dev("parameter specified:working on them...");
			if(!empty($param["meta"])){
				if(!empty($param["meta"]["charset"])){
					dev("meta=>charset specified",$this->meta["charset"]);
					$this->meta["charset"]=$param["meta"]["charset"];
				}
				if(!empty($param["meta"]["description"])){
					dev("meta=>description specified",$this->meta["description"]);
					$this->meta["description"]=$param["meta"]["description"];
				}
				if(!empty($param["meta"]["keywords"])){
					dev("meta=>keywords specified",$this->meta["keywords"]);
					$this->meta["keywords"]=$param["meta"]["keywords"];
				}
				if(!empty($param["meta"]["print"])){
					dev("meta=>print specified",$this->meta["print"]);
					$this->meta["print"]=$param["meta"]["print"];
				}
			}
			if(!empty($param["head"])){
				if(!empty($param["head"]["doctype"])){
					dev("head=>doctype specified",$this->head["doctype"]);
					$this->head["doctype"]=$param["head"]["doctype"];
				}
				if(!empty($param["head"]["lang"])){
					dev("head=>lang specified",$this->head["lang"]);
					$this->head["lang"]=$param["head"]["lang"];
				}
				if(!empty($param["head"]["title"])){
					dev("head=>title specified",$this->head["title"]);
					$this->head["title"]=$param["head"]["title"];
				}
				if(!empty($param["head"]["print"])){
					dev("head=>print specified",$this->head["print"]);
					$this->head["print"]=$param["head"]["print"];
				}
			}
			if(!empty($param["foot"])){
				if(!empty($param["foot"]["print"])){
					dev("foot=>print specified",$this->foot["print"]);
					$this->foot["print"]=$param["foot"]["print"];
				}
			}
			if(!empty($param["include_files"])){
				if(!empty($param["include_files"]["binery_parm"])){
					dev("include_files=>binery_parm specified",$this->include_files["binery_parm"]);
					$this->include_files["binery_parm"]=$param["include_files"]["binery_parm"];
				}
				if(!empty($param["include_files"]["echo_files"])){
					dev("include_files=>echo_files specified",$this->include_files["echo_files"]);
					$this->include_files["echo_files"]=$param["include_files"]["echo_files"];
				}
				if(!empty($param["include_files"]["print"])){
					dev("include_files=>print specified",$this->include_files["print"]);
					$this->include_files["print"]=$param["include_files"]["print"];
				}	
			}
			if(!empty($param["navibar"])){
				if(!empty($param["navibar"]["print"])){
					dev("navibar=>print specified",$this->navibar["print"]);
					$this->navibar["print"]=$param["navibar"]["print"];
				}
			}
			if(!empty($param["sidebar"])){
				if(!empty($param["sidebar"]["print"])){
					dev("sidebar=>print specified",$this->sidebar["print"]);
					$this->sidebar["print"]=$param["sidebar"]["print"];
				}
			}
			if(!empty($param["col"])){
				if(!empty($param["col"]["print"])){
					dev("col=>print specified",$this->col["print"]);
					$this->col["print"]=$param["col"]["print"];
				}
			}
		}
		dev("done!");
		
		dev("starting printing fx..");
		if($this->head["print"]){
			$this->head();
		}
		if($this->navibar["print"]){
			$this->navibar();
		}
		if($this->sidebar["print"]){
			$this->sidebar();
		}
		if($this->include_files["print"]){
			$this->include_files();
		}
		if($this->col["print"]){
			$this->col();
		}
		if($this->foot["print"]){
			$this->foot();
		}
		dev("done!");
		
	}
/*Function meta() for glasswid class
 * description: prints meta tag
 */
	public function meta(){
		dev("printing meta...");
		
			dev("_charset",$this->meta["charset"]);
	echo '<meta charset="'.$this->meta["charset"].'">';
	
			dev("_keywords",$this->meta["keywords"]);
	echo '<meta name="keywords" content="'.$this->meta["keywords"].'">';
	
			dev("_description",$this->meta["description"]);
	echo '<meta name="description" content="'.$this->meta["description"].'">';	
	}
/*Function navibar() for glasswid class
 * description: prints navibar
 */
	public function navibar(){
		dev("printing navibar...");
	}
/*Function sidebar() for glasswid class
 * description: prints side bar
 */
	public function sidebar(){
		dev("printing sidebar...");
	}
/*Function head() for glasswid class
 * prints doctype, head, html and body tag and calls meta fx 
 */
	public function head(){
		dev("printing head...");
		
		dev("doctype",$this->head["doctype"]);
		echo '<!DOCTYPE '.$this->head["doctype"].'>';
		
		dev("lang",$this->head["lang"]);
		echo '<html lang="'.$this->head["lang"].'">';
	
		echo '<head>';
		
		dev("title",$this->head["title"]);
		echo '<title>'.$this->head["title"].'</title>';
		
		$this->meta();
		echo '</head>';
		echo '<body>';
	}
/*Function foot() for glasswid class
 * description: only called by destruct if otherwise not specified
 * |->will not call destruct if specified
 */	
	public function foot(){
		//dev("printing foot...");
		echo '</body>';
		echo'</html>';
		//dev("destruct foot disabled ");
		$this->foot["print"]=1;
	}
/* Function include_files($binery_parm)
	 * description: includes files just after the body tag
	 * return:void
	 * parameter:$biner_parm(optional)
	 * 	|->use: 1.1.1.1.0.0.0
	 * 	|->css_none . css_fonts . jquery . tween[1=>lite,2=>max] . timeline[1=>lite,2=>max] . gsap_drag . gsap_jq
	 * parameter:$echo_file(optional)
	 *  |->use:echoes whatever is sent after include files
	 */
	public function include_files(){
		dev("including files...");
		if(empty($this->include_files["binery_parm"])){
			dev("include_file() parameter not specified:using default...");
			
			dev("included none_style.css");
			echo '<link rel="stylesheet" type="text/css" href="'.$GLOBALS["css_none"].'">';
			
			dev("included fonts.css");
			echo '<link rel="stylesheet" type="text/css" href="'.$GLOBALS["css_fonts"].'">';
			
			dev("included jquery");
			echo '<script src="'.$GLOBALS["jquery"].'"></script>';
			
			dev("included TweenLite");
			echo '<script src="'.$GLOBALS["TweenLite"].'"></script>';
		}
		else{
			$expand_bin = explode(".", $this->include_files["binery_parm"]);
			if(!empty($expand_bin[0]) && $expand_bin[0]){
				dev("included none_style.css");
				echo '<link rel="stylesheet" type="text/css" href="'.$GLOBALS["css_none"].'">';
			}
			if(!empty($expand_bin[1]) && $expand_bin[1]){
				dev("included fonts.css");
				echo '<link rel="stylesheet" type="text/css" href="'.$GLOBALS["css_fonts"].'">';
			}
			if(!empty($expand_bin[2]) && $expand_bin[2]){
				dev("included jquery");
				echo '<script src="'.$GLOBALS["jquery"].'"></script>';
			}
			
			if(!empty($expand_bin[3]) && $expand_bin[3]==1){
				dev("included TweenLite");
				echo '<script src="'.$GLOBALS["TweenLite"].'"></script>';
			}
			elseif(!empty($expand_bin[3]) && $expand_bin[3]==2){
				dev("included TweenMax");
				echo '<script src="'.$GLOBALS["TweenMax"].'"></script>';
			}
			
			if(!empty($expand_bin[4]) && $expand_bin[4]==1){
				dev("included TimelineLite");
				echo '<script src="'.$GLOBALS["TimelineLite"].'"></script>';
			}
			elseif(!empty($expand_bin[4]) && $expand_bin[4]==2){
				dev("included TimelineMax");
				echo '<script src="'.$GLOBALS["TimelineMax"].'"></script>';
			}
			
			if(!empty($expand_bin[5]) && $expand_bin[5]==1){
				dev("included gsap_drag");
				echo '<script src="'.$GLOBALS["gsap_drag"].'"></script>';
			}
			if(!empty($expand_bin[6]) && $expand_bin[6]==1){
				dev("included gsap_jq");
				echo '<script src="'.$GLOBALS["gsap_jq"].'"></script>';
			}
		}
		
		//echo_file if set
		if(!empty($this->include_files["echo_files"])){
			echo $this->include_files["echo_files"];
		}
	}
/*Function col() for glasswid class
 * description: creates a columns object
 * |-> for mre info refer gw_columns.php 
 */
	public function col(){
		dev("including columns...",(include_once($GLOBALS["gw_columns"]))."_returned");
		dev("creating gwcol object...");
		$colobj = new gwcol($param);
	}
/*Function __destruct() for glaswid class
 * description: end the class with ending body and html tags
 */
	function __destruct(){
		dev("Destruct function started");
		if(!($this->foot["print"])){
			$this->foot();
		}
		dev("glaswid object destroyed!","error");
		dev();
	}
}
 
?>