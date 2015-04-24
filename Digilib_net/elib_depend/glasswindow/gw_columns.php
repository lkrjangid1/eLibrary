<?php
/*
 * gw_columns.php ver.1.0
 * Columns for glasswindow
 * creates the responsive page structure of gw
 * developed by shaurya
 */ 

class gwcol{
	/*properties*/
		
	
	/*function*/
	function __construct(){
		dev();
		dev("gwcol obj created!");

		echo'<script>
		$(function(){$(window).resize();});
		$(window).resize(function(){
				var win_width = window.innerWidth;
				var device="none";
				if(win_width>=1400){
					device="large screen";
				}
				else if(win_width>=1024 && win_width<1400){
					device="desktop/laptop";
				}
				else if(win_width>=640 && win_width<1024){
					device="tablet";
				}
				else if(win_width>=320 && win_width<640){
					device="mobile";
				}
			document.getElementById("status_div").innerHTML=device+win_width;
			
		});
	</script>';
	}
	function __destruct(){
		dev("gwcol destruct fx started...");
		dev("gwcol object destroyed","error");
		dev();
	}
}
?>