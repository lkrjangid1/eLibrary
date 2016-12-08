<?php
/*
 *  Books of Digilib_net
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
<link rel="stylesheet" type="text/css" href="elib_bin/Elib/Book.css">');

echo '<body>';

//Navibar
digilib_Header();

//****START OF HTML FILE****
echo '<div class="body-cont"><div class="main">';

echo'<div class="display">
    <div class="cover"></div>
    <style>
        .body-cont .display .cover{
            background: url(elib_database/database_library/Elib/Books_cover_large/.'$_GET["bookid"].'.jpg) center ;
        }
    </style>
    <div class="info">
        <div class="book-name">A Tale Of Two Cities</div>
        <div class="author-name">Charles Dickens</div>
        <hr>
        <div class="ttinfo">Rating: 
            <span class="fullstar"></span>
            <span class="fullstar"></span>
            <span class="fullstar"></span>
            <span class="fullstar"></span>
            <span class="halfstar"></span>
        </div>
        <div class="ttinfo">Published: <span class="ttifno">1756</span></div>
        <div class="ttinfo">Pages: <span class="ttifno">225</span></div>
        <div class="ttinfo">Chapters: <span class="ttifno">12</span></div>
        <div class="ttinfo">Available As Download: <span class="ttifno">Yes</span></div>
        <div class="ttinfo">Available In Library: <span class="ttifno">Yes</span></div>
        <hr>
        <a href="#" class="Download"><div></div>Download</a><a href="#" class="Buy"><div></div>Buy</a>
    </div>
</div>
<div class="summery hd_divs">
    <h1>Summery</h1>
    <hr>
</div>';

//itemBox
    
    //Class 12
    //settings
    $study_ncertClass12_itemBox[0][0]="Related Books";//title
    $study_ncertClass12_itemBox[0][1]=1;//Count of items inside
    $study_ncertClass12_itemBox[0][2]=1;//size
    $study_ncertClass12_itemBox[0][3]=2;//vertical scroll=>1, horizontal scroll=>2;
    $study_ncertClass12_itemBox[0][4]="#";//viewmore link
    $study_ncertClass12_itemBox[0][5]=1;//viewmore link
    //content
    $study_ncertClass12_itemBox[1][0]="A Ncert Book";
    $study_ncertClass12_itemBox[1][1]="Author";
    $study_ncertClass12_itemBox[1][2]="title_link";
    $study_ncertClass12_itemBox[1][3]="author_link";
    $study_ncertClass12_itemBox[1][4]="cover_path";
    
    echo '<div class="paraBox">';
    prt_para($study_ncertClass12_itemBox);
    echo '</div>';
    prt_para_css();


echo '<div class="comment hd_divs">
    <h1>Reviews</h1>
    <hr>
    
</div>';


//****END OF HTML FILE****
echo '</div></div>';

//Footer
digilib_Footer();

echo '<script src="elib_bin/Elib/Book.js"></script>
</body></html>';
?>