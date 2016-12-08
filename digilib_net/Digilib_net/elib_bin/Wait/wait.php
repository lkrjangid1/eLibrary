<?php
/*
 *  Download page of Digilib_net
 *      ver 6.12
 *  Glasswid flwer
 *
 *  author: designed and developed by sal64dd & D...
 *  contact: sal.uncd@gmail.com : divijjindal28@gmail.com
 */

ini_set("include_path", "../../");  //sets the path to root folder
include "elib_depend/glasswindow/Glasswid_flwer.php";   //include glaswid-flower
digilib_Meta("Digital Library | Download", '
<link rel="stylesheet" type="text/css" href="elib_bin/Wait/wait.css">'); //name the page: needed
?>

<body>
    
    <?php digilib_Header() ?>
    
    <div class="body-cont"> 
        <div class="main">   
        </div>
    </div>
    <?php digilib_Footer() ?>
    
    <div id="gamemode">
        <div class="Quit"></div>
        
        <div class="enem"></div>
        <div class="enem"></div>
        <div class="enem"></div>
        <div class="enem"></div>
        <div class="enem"></div>
        
        <div class="enem"></div>
        <div class="enem"></div>
        <div class="enem"></div>
        <div class="enem"></div>
        <div class="enem"></div>
    
        <div class="ship"></div>
        
        <div class="ctrl-right"></div>
        <div class="ctrl-left"></div>
    </div>
    
    <script src="elib_bin/Wait/wait.js"></script>
</body>
</html>