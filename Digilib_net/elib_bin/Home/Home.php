<?php
/*
 *  Homepage of Digilib_net
 *      ver 4.10
 *  
 *  use this page as a template for others
 *  defines the basic usage of glaswid
 *  currently using glasswid flower
 *
 *  author: designed and developed by sal64dd
 *  contact: sal_uncd@gmail.com
 */

ini_set("include_path", "../../");  //sets the path to root folder
include "elib_depend/glasswindow/Glasswid_flwer.php";   //include glaswid-flower
?>

<?php digilib_Meta("Digital Library | Home", ""); ?>

<body>
    
<?php digilib_Navibar(); ?>
    
   <?php dev("Hello World"); ?>
    
<?php digilib_Footer(); ?>
    
</body>
</html>