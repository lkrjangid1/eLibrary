<?php
/*
 *  StudyZone of Digilib_net
 *      ver 8.00
 *  Glasswid flwer
 *
 *  author: designed and developed by sal64dd
 *  contact: sal.uncd@gmail.com
 */

//defaults
ini_set("include_path", "../../");
include "elib_depend/glasswindow/Glasswid_flwer.php";

//links
digilib_Meta("Digital Library | Home", '
<link rel="stylesheet" type="text/css" href="elib_bin/Home/home.css">');

echo '<body>';

//Navibar
digilib_Header();

//****START OF HTML FILE****
echo '<div class="body-cont"><div class="main">'; 


//****END OF HTML FILE****
echo '</div></div>';

//Footer
digilib_Footer();

echo '<script src="elib_bin/Home/home.js"></script>
</body></html>';
?>