<?php
/*
 *  Homepage of Digilib_net
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

//Showcase
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
digilib_Showcase(3,$Infoarr,"example", "38%");

//Dashboard_ad
prt_dashboard_ad();
prt_dashboard_ad_css();

//Site Highlights
$home_highs[0][0]="elib_database/database_library/Elib/Books_cover_small/1953.jpg";
$home_highs[0][1]="Title";
$home_highs[0][2]="descp";
$home_highs[0][3]="#";

echo'<div class="highlights">';   
prt_Highlight($home_highs);
prt_Highlight($home_highs);
prt_Highlight($home_highs); 
echo'</div>';



prt_Highlight_css();

//Feeds

//News Feed
//settings
$home_News_feeds[0][0]=2; //width
$home_News_feeds[0][1]=1; //image 1=true, 0=false
$home_News_feeds[0][2]="News Feeds"; //name
$home_News_feeds[0][3]=1; //index no
$home_News_feeds[0][4]=5; //count of feed elem
//content
$home_News_feeds[1][0]="New Circular added";
$home_News_feeds[1][1]="1:00 pm Today";
$home_News_feeds[1][2]=1;
$home_News_feeds[1][3]="#";
$home_News_feeds[2][0]="New Circular added";
$home_News_feeds[2][1]="1:00 pm Today";
$home_News_feeds[2][2]=1;
$home_News_feeds[2][3]="#";
$home_News_feeds[3][0]="New Circular added";
$home_News_feeds[3][1]="1:00 pm Today";
$home_News_feeds[3][2]=1;
$home_News_feeds[3][3]="#";
$home_News_feeds[4][0]="New Circular added";
$home_News_feeds[4][1]="1:00 pm Today";
$home_News_feeds[4][2]=1;
$home_News_feeds[4][3]="#";
$home_News_feeds[5][0]="New Circular added";
$home_News_feeds[5][1]="1:00 pm Today";
$home_News_feeds[5][2]=1;
$home_News_feeds[5][3]="#";

//Social Feed
//settings
$home_Social_feeds[0][0]=1; //width
$home_Social_feeds[0][1]=1; //image 1=true, 0=false
$home_Social_feeds[0][2]="Social Feeds"; //name
$home_Social_feeds[0][3]=2; //index no
$home_Social_feeds[0][4]=5; //count of feed elem
//content
$home_Social_feeds[1][0]="New Circular added";
$home_Social_feeds[1][1]="1:00 pm Today";
$home_Social_feeds[1][2]=1;
$home_Social_feeds[1][3]="#";
$home_Social_feeds[2][0]="New Circular added";
$home_Social_feeds[2][1]="1:00 pm Today";
$home_Social_feeds[2][2]=1;
$home_Social_feeds[2][3]="#";
$home_Social_feeds[3][0]="New Circular added";
$home_Social_feeds[3][1]="1:00 pm Today";
$home_Social_feeds[3][2]=1;
$home_Social_feeds[3][3]="#";
$home_Social_feeds[4][0]="New Circular added";
$home_Social_feeds[4][1]="1:00 pm Today";
$home_Social_feeds[4][2]=1;
$home_Social_feeds[4][3]="#";
$home_Social_feeds[5][0]="New Circular added";
$home_Social_feeds[5][1]="1:00 pm Today";
$home_Social_feeds[5][2]=1;
$home_Social_feeds[5][3]="#";

echo '<div class="feeds">';
prt_feed($home_News_feeds);
prt_feed($home_Social_feeds);
echo '</div>';

prt_feed_css();



//****END OF HTML FILE****
echo '</div></div>';

//Footer
digilib_Footer();

echo '<script src="elib_bin/Home/home.js"></script>
</body></html>';
?>