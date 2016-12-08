<?php
/*
 *  Guest for Digilib_net
 *      ver 1.0
 *  Glasswid trifx
 *
 *  author: designed and developed by sal64dd 
 *  contact: sal.uncd@gmail.com
 */
	
ini_set("include_path", "../../");  //sets the path to root folder
include "elib_depend/glasswindow/Glasswid_flwer.php";   //include glaswid-flower
digilib_Meta("Digital Library | Dashboard", '
<link rel="stylesheet" type="text/css" href="elib_bin/GuestBook/Guest.css">');
?>

<body>
    
    <?php digilib_Header(); ?>
    <div class="body-cont"> 
        <div class="main">
			
			<div class="sudo">
				<div class="ls">
					<span class="img"></span>
					<span class="title">Guest Book</span>
				</div>
				
				<div class="filler">
					<span>We Are Glad You Made It Here!</span>
					<p>Please take the time to write us a `Feedback` in this guestbook and show your support to the Volunteer Developers and the whole team behind the code. We are always encoraged and motivated by your support. Do mention your feedback of how you like a feature or you can even suggest for a change or a feature that we should include. This Page is what connects us with our audience and is truely the deciding factor for the Future of the Project.   
					</p>
				</div>
				
				<form class="guestform" >
					
				</form>
				
			</div>
			
        </div>
    </div>
    <?php digilib_Footer() ?>
    
    <script src="elib_bin/Account/Acc.js"></script>
</body>
</html>
