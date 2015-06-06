<?php
/*
 *  Homepage of Digilib_net
 *      ver 6.12
 *  Glasswid flwer
 *
 *  author: designed and developed by sal64dd & D...
 *  contact: sal.uncd@gmail.com : divijjindal28@gmail.com
 */

ini_set("include_path", "../../");  //sets the path to root folder
include "elib_depend/glasswindow/Glasswid_flwer.php";   //include glaswid-flower
digilib_Meta("Digital Library | Home", '
<link rel="stylesheet" type="text/css" href="elib_bin/Home/home.css">'); //name the page: needed
?>

<body>
    
    <?php digilib_Header() ?>
    <div class="body-cont"> 
        <div class="main">   
        
            <?php 
                $Infoarr[1][1] = "#";
                $Infoarr[1][2] = "Keepsakes: Australians and the Great War";
                $Infoarr[1][3] = "Share in the personal stories of Australians who served during the First World War.";
                $Infoarr[1][4] = "WATCH NOW";
                $Infoarr[2][1] = "#";
                $Infoarr[2][2] = "Revealing the Rothschild Prayer Book c.1505-1510 from the Kerry Stokes Collection";
                $Infoarr[2][3] = "On show with the National Library’s medieval and Renaissance manuscripts.";
                $Infoarr[2][4] = "ON NOW";
                $Infoarr[3][1] = "#";
                $Infoarr[3][2] = "Gems of History";
                $Infoarr[3][3] = "See the behind the scenes of our latest Medieval Manuscript Project.";
                $Infoarr[3][4] = "WATCH NOW";
                digilib_Showcase(3,$Infoarr);
            ?>
            
            <div class="MyDiv">Hello World</div>
        </div>
    </div>
    <?php digilib_Footer() ?>
    
    <script src="elib_bin/Home/home.js"></script>
</body>
</html>