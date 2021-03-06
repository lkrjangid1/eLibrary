<?php
/*
 *  StudyZone of Digilib_net
 *      ver 1.00
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
<link rel="stylesheet" type="text/css" href="elib_bin/Studyzone/study_style.css">');

echo '<body>';

//Navibar
digilib_Header();

//****START OF HTML FILE****
echo '<div class="body-cont"><div class="main">'; 

?>

<?php 
//functions
function prt_studySidebar(){
echo '
<div class="sidebar">
    <form id="stdpan_frmid_ncert" 
          action="elib_bin/Studyzone/study_home.php" 
          method="get">
        <input type="text" hidden="true" name="stdtab" value="NCERT">
        <input type="submit" value="Ncert Books">
    </form>
    <form id="stdpan_frmid_refer" 
          action="elib_bin/Studyzone/study_home.php" 
          method="get">
        <input type="text" hidden="true" name="stdtab" value="Refer">
        <input type="submit" value="Reference Books">
    </form>
    <form id="stdpan_frmid_assign" 
          action="elib_bin/Studyzone/study_home.php" 
          method="get">
        <input type="text" hidden="true" name="stdtab" value="Assign">
        <input type="submit" value="Assignments">
    </form>
    <form id="stdpan_frmid_samp" 
          action="elib_bin/Studyzone/study_home.php" 
          method="get">
        <input type="text" hidden="true" name="stdtab" value="Samp">
        <input type="submit" value="Sample Papers">
    </form>
    <form id="stdpan_frmid_quest" 
          action="elib_bin/Studyzone/study_home.php" 
          method="get">
        <input type="text" hidden="true" name="stdtab" value="Quest">
        <input type="submit" value="Old Question Papers">
    </form>
</div>';
}
function prt_selection(){
if(isset($_GET["stdtab"]) && $_GET["stdtab"]=="NCERT"){
    prt_studyNCERT();
}
elseif(isset($_GET["stdtab"]) && $_GET["stdtab"]=="Refer"){
    prt_studyRefer();
}
elseif(isset($_GET["stdtab"]) && $_GET["stdtab"]=="Assign"){
    prt_studyAssign();
}
elseif(isset($_GET["stdtab"]) && $_GET["stdtab"]=="Samp"){
    prt_studySamp();
}
elseif(isset($_GET["stdtab"]) && $_GET["stdtab"]=="Quest"){
    prt_studyQuest();
}
else{
    prt_studyNCERT();
}
}
function prt_studyNCERT(){
    echo '<style>.body-cont .sidebar form:nth-of-type(1)
    {background: #fff;box-shadow: 0px 0px 8px rgba(100,100,100,0.1);}
    </style>';
    echo '<h1>Ncert Books</h1><hr>';
    
    //itemBox
    
    //Class 12
    //settings
    $study_ncertClass12_itemBox[0][0]="Class XII";//title
    $study_ncertClass12_itemBox[0][1]=8;//Count of items inside
    $study_ncertClass12_itemBox[0][2]=1;//size
    $study_ncertClass12_itemBox[0][3]=2;//vertical scroll=>1, horizontal scroll=>2;
    $study_ncertClass12_itemBox[0][4]="#";//viewmore link
    $study_ncertClass12_itemBox[0][5]=0;//viewmore link
    //content
    $study_ncertClass12_itemBox[1][0]="Mathematics Part I Class XII";
    $study_ncertClass12_itemBox[1][1]="";
    $study_ncertClass12_itemBox[1][2]="elib_bin/Studyzone/NcertBook.php?ncBook=00000001";
    $study_ncertClass12_itemBox[1][3]="";
    $study_ncertClass12_itemBox[1][4]="elib_database/database_study/cover/00000001.jpg";
    
    $study_ncertClass12_itemBox[2][0]="Mathematics Part II Class XII";
    $study_ncertClass12_itemBox[2][1]="";
    $study_ncertClass12_itemBox[2][2]="elib_bin/Studyzone/NcertBook.php?ncBook=00000002";
    $study_ncertClass12_itemBox[2][3]="";
    $study_ncertClass12_itemBox[2][4]="elib_database/database_study/cover/00000002.jpg";
    
    $study_ncertClass12_itemBox[3][0]="Chemistry Part I Class XII";
    $study_ncertClass12_itemBox[3][1]="";
    $study_ncertClass12_itemBox[3][2]="elib_bin/Studyzone/NcertBook.php?ncBook=00000003";
    $study_ncertClass12_itemBox[3][3]="";
    $study_ncertClass12_itemBox[3][4]="elib_database/database_study/cover/00000003.jpg";
    
    $study_ncertClass12_itemBox[4][0]="Chemistry Part II Class XII";
    $study_ncertClass12_itemBox[4][1]="";
    $study_ncertClass12_itemBox[4][2]="elib_bin/Studyzone/NcertBook.php?ncBook=00000004";
    $study_ncertClass12_itemBox[4][3]="";
    $study_ncertClass12_itemBox[4][4]="elib_database/database_study/cover/00000004.jpg";
    
    $study_ncertClass12_itemBox[5][0]="Physics Part I Class XII";
    $study_ncertClass12_itemBox[5][1]="";
    $study_ncertClass12_itemBox[5][2]="elib_bin/Studyzone/NcertBook.php?ncBook=00000005";
    $study_ncertClass12_itemBox[5][3]="";
    $study_ncertClass12_itemBox[5][4]="elib_database/database_study/cover/00000005.jpg";
    
    $study_ncertClass12_itemBox[6][0]="Physics Part II Class XII";
    $study_ncertClass12_itemBox[6][1]="";
    $study_ncertClass12_itemBox[6][2]="elib_bin/Studyzone/NcertBook.php?ncBook=00000006";
    $study_ncertClass12_itemBox[6][3]="";
    $study_ncertClass12_itemBox[6][4]="elib_database/database_study/cover/00000006.jpg";
    
    $study_ncertClass12_itemBox[7][0]="English textbook: Flamingo";
    $study_ncertClass12_itemBox[7][1]="";
    $study_ncertClass12_itemBox[7][2]="elib_bin/Studyzone/NcertBook.php?ncBook=00000007";
    $study_ncertClass12_itemBox[7][3]="";
    $study_ncertClass12_itemBox[7][4]="elib_database/database_study/cover/00000007.jpg";
    
    $study_ncertClass12_itemBox[8][0]="English Supplementary Reader: Vistas";
    $study_ncertClass12_itemBox[8][1]="";
    $study_ncertClass12_itemBox[8][2]="elib_bin/Studyzone/NcertBook.php?ncBook=00000008";
    $study_ncertClass12_itemBox[8][3]="";
    $study_ncertClass12_itemBox[8][4]="elib_database/database_study/cover/00000008.jpg";
    
    
    
    //Class 11
    //settings
    $study_ncertClass11_itemBox[0][0]="Class XI";//title
    $study_ncertClass11_itemBox[0][1]=4;//Count of items inside
    $study_ncertClass11_itemBox[0][2]=1;//size
    $study_ncertClass11_itemBox[0][3]=2;//vertical scroll=>1, horizontal scroll=>2;
    $study_ncertClass11_itemBox[0][4]="#";//viewmore link
    $study_ncertClass11_itemBox[0][5]=0;//viewmore link
    //content
    $study_ncertClass11_itemBox[1][0]="A Ncert Book";
    $study_ncertClass11_itemBox[1][1]="Author";
    $study_ncertClass11_itemBox[1][2]="title_link";
    $study_ncertClass11_itemBox[1][3]="author_link";
    $study_ncertClass11_itemBox[1][4]="cover_path";
    $study_ncertClass11_itemBox[2][0]="A Ncert Book";
    $study_ncertClass11_itemBox[2][1]="Author";
    $study_ncertClass11_itemBox[2][2]="title_link";
    $study_ncertClass11_itemBox[2][3]="author_link";
    $study_ncertClass11_itemBox[2][4]="cover_path";
    $study_ncertClass11_itemBox[3][0]="A Ncert Book";
    $study_ncertClass11_itemBox[3][1]="Author";
    $study_ncertClass11_itemBox[3][2]="title_link";
    $study_ncertClass11_itemBox[3][3]="author_link";
    $study_ncertClass11_itemBox[3][4]="cover_path";
    $study_ncertClass11_itemBox[4][0]="A Ncert Book";
    $study_ncertClass11_itemBox[4][1]="Author";
    $study_ncertClass11_itemBox[4][2]="title_link";
    $study_ncertClass11_itemBox[4][3]="author_link";
    $study_ncertClass11_itemBox[4][4]="cover_path";
    
    //Class 10
    //settings
    $study_ncertClass10_itemBox[0][0]="Class X";//title
    $study_ncertClass10_itemBox[0][1]=4;//Count of items inside
    $study_ncertClass10_itemBox[0][2]=1;//size
    $study_ncertClass10_itemBox[0][3]=2;//vertical scroll=>1, horizontal scroll=>2;
    $study_ncertClass10_itemBox[0][4]="#";//viewmore link
    $study_ncertClass10_itemBox[0][5]=0;//viewmore link
    //content
    $study_ncertClass10_itemBox[1][0]="A Ncert Book";
    $study_ncertClass10_itemBox[1][1]="Author";
    $study_ncertClass10_itemBox[1][2]="title_link";
    $study_ncertClass10_itemBox[1][3]="author_link";
    $study_ncertClass10_itemBox[1][4]="cover_path";
    $study_ncertClass10_itemBox[2][0]="A Ncert Book";
    $study_ncertClass10_itemBox[2][1]="Author";
    $study_ncertClass10_itemBox[2][2]="title_link";
    $study_ncertClass10_itemBox[2][3]="author_link";
    $study_ncertClass10_itemBox[2][4]="cover_path";
    $study_ncertClass10_itemBox[3][0]="A Ncert Book";
    $study_ncertClass10_itemBox[3][1]="Author";
    $study_ncertClass10_itemBox[3][2]="title_link";
    $study_ncertClass10_itemBox[3][3]="author_link";
    $study_ncertClass10_itemBox[3][4]="cover_path";
    $study_ncertClass10_itemBox[4][0]="A Ncert Book";
    $study_ncertClass10_itemBox[4][1]="Author";
    $study_ncertClass10_itemBox[4][2]="title_link";
    $study_ncertClass10_itemBox[4][3]="author_link";
    $study_ncertClass10_itemBox[4][4]="cover_path";
    
    //Class 9
    //settings
    $study_ncertClass9_itemBox[0][0]="Class IX";//title
    $study_ncertClass9_itemBox[0][1]=4;//Count of items inside
    $study_ncertClass9_itemBox[0][2]=1;//size
    $study_ncertClass9_itemBox[0][3]=2;//vertical scroll=>1, horizontal scroll=>2;
    $study_ncertClass9_itemBox[0][4]="#";//viewmore link
    $study_ncertClass9_itemBox[0][5]=0;//viewmore link
    //content
    $study_ncertClass9_itemBox[1][0]="A Ncert Book";
    $study_ncertClass9_itemBox[1][1]="Author";
    $study_ncertClass9_itemBox[1][2]="title_link";
    $study_ncertClass9_itemBox[1][3]="author_link";
    $study_ncertClass9_itemBox[1][4]="cover_path";
    $study_ncertClass9_itemBox[2][0]="A Ncert Book";
    $study_ncertClass9_itemBox[2][1]="Author";
    $study_ncertClass9_itemBox[2][2]="title_link";
    $study_ncertClass9_itemBox[2][3]="author_link";
    $study_ncertClass9_itemBox[2][4]="cover_path";
    $study_ncertClass9_itemBox[3][0]="A Ncert Book";
    $study_ncertClass9_itemBox[3][1]="Author";
    $study_ncertClass9_itemBox[3][2]="title_link";
    $study_ncertClass9_itemBox[3][3]="author_link";
    $study_ncertClass9_itemBox[3][4]="cover_path";
    $study_ncertClass9_itemBox[4][0]="A Ncert Book";
    $study_ncertClass9_itemBox[4][1]="Author";
    $study_ncertClass9_itemBox[4][2]="title_link";
    $study_ncertClass9_itemBox[4][3]="author_link";
    $study_ncertClass9_itemBox[4][4]="cover_path";
    
    echo '<div class="paraBox">';
    prt_para($study_ncertClass12_itemBox);
    echo '</div>';
    
    echo '<div class="paraBox">';
    prt_para($study_ncertClass11_itemBox);
    echo '</div>';
    
    echo '<div class="paraBox">';
    prt_para($study_ncertClass10_itemBox);
    echo '</div>';
    
    echo '<div class="paraBox">';
    prt_para($study_ncertClass9_itemBox);
    echo '</div>';
    
    echo '<hr>';
    prt_para_css();
}
function prt_studyRefer(){
    echo '<style>.body-cont .sidebar form:nth-of-type(2)
    {background: #fff;box-shadow: 0px 0px 8px rgba(100,100,100,0.1);}
    </style>';
    echo '<h1>Reference Books</h1><hr>';
    
    //itemBox
    
    //Class 12
    //settings
    $study_referClass12_itemBox[0][0]="Class XII";//title
    $study_referClass12_itemBox[0][1]=4;//Count of items inside
    $study_referClass12_itemBox[0][2]=1;//size
    $study_referClass12_itemBox[0][3]=2;//vertical scroll=>1, horizontal scroll=>2;
    $study_referClass12_itemBox[0][4]="#";//viewmore link
    $study_referClass12_itemBox[0][5]=0;//viewmore link
    //content
    $study_referClass12_itemBox[1][0]="A Reference Book";
    $study_referClass12_itemBox[1][1]="Author";
    $study_referClass12_itemBox[1][2]="title_link";
    $study_referClass12_itemBox[1][3]="author_link";
    $study_referClass12_itemBox[1][4]="cover_path";
    $study_referClass12_itemBox[2][0]="A Ncert Book";
    $study_referClass12_itemBox[2][1]="Author";
    $study_referClass12_itemBox[2][2]="title_link";
    $study_referClass12_itemBox[2][3]="author_link";
    $study_referClass12_itemBox[2][4]="cover_path";
    $study_referClass12_itemBox[3][0]="A Ncert Book";
    $study_referClass12_itemBox[3][1]="Author";
    $study_referClass12_itemBox[3][2]="title_link";
    $study_referClass12_itemBox[3][3]="author_link";
    $study_referClass12_itemBox[3][4]="cover_path";
    $study_referClass12_itemBox[4][0]="A Ncert Book";
    $study_referClass12_itemBox[4][1]="Author";
    $study_referClass12_itemBox[4][2]="title_link";
    $study_referClass12_itemBox[4][3]="author_link";
    $study_referClass12_itemBox[4][4]="cover_path";
    
    //Class 12
    //settings
    $study_referClass11_itemBox[0][0]="Class XI";//title
    $study_referClass11_itemBox[0][1]=4;//Count of items inside
    $study_referClass11_itemBox[0][2]=1;//size
    $study_referClass11_itemBox[0][3]=2;//vertical scroll=>1, horizontal scroll=>2;
    $study_referClass11_itemBox[0][4]="#";//viewmore link
    $study_referClass11_itemBox[0][5]=0;//viewmore link
    //content
    $study_referClass11_itemBox[1][0]="A Reference Book";
    $study_referClass11_itemBox[1][1]="Author";
    $study_referClass11_itemBox[1][2]="title_link";
    $study_referClass11_itemBox[1][3]="author_link";
    $study_referClass11_itemBox[1][4]="cover_path";
    $study_referClass11_itemBox[2][0]="A Ncert Book";
    $study_referClass11_itemBox[2][1]="Author";
    $study_referClass11_itemBox[2][2]="title_link";
    $study_referClass11_itemBox[2][3]="author_link";
    $study_referClass11_itemBox[2][4]="cover_path";
    $study_referClass11_itemBox[3][0]="A Ncert Book";
    $study_referClass11_itemBox[3][1]="Author";
    $study_referClass11_itemBox[3][2]="title_link";
    $study_referClass11_itemBox[3][3]="author_link";
    $study_referClass11_itemBox[3][4]="cover_path";
    $study_referClass11_itemBox[4][0]="A Ncert Book";
    $study_referClass11_itemBox[4][1]="Author";
    $study_referClass11_itemBox[4][2]="title_link";
    $study_referClass11_itemBox[4][3]="author_link";
    $study_referClass11_itemBox[4][4]="cover_path";
    
    //Class 12
    //settings
    $study_referClass10_itemBox[0][0]="Class X";//title
    $study_referClass10_itemBox[0][1]=4;//Count of items inside
    $study_referClass10_itemBox[0][2]=1;//size
    $study_referClass10_itemBox[0][3]=2;//vertical scroll=>1, horizontal scroll=>2;
    $study_referClass10_itemBox[0][4]="#";//viewmore link
    $study_referClass10_itemBox[0][5]=0;//viewmore link
    //content
    $study_referClass10_itemBox[1][0]="A Reference Book";
    $study_referClass10_itemBox[1][1]="Author";
    $study_referClass10_itemBox[1][2]="title_link";
    $study_referClass10_itemBox[1][3]="author_link";
    $study_referClass10_itemBox[1][4]="cover_path";
    $study_referClass10_itemBox[2][0]="A Ncert Book";
    $study_referClass10_itemBox[2][1]="Author";
    $study_referClass10_itemBox[2][2]="title_link";
    $study_referClass10_itemBox[2][3]="author_link";
    $study_referClass10_itemBox[2][4]="cover_path";
    $study_referClass10_itemBox[3][0]="A Ncert Book";
    $study_referClass10_itemBox[3][1]="Author";
    $study_referClass10_itemBox[3][2]="title_link";
    $study_referClass10_itemBox[3][3]="author_link";
    $study_referClass10_itemBox[3][4]="cover_path";
    $study_referClass10_itemBox[4][0]="A Ncert Book";
    $study_referClass10_itemBox[4][1]="Author";
    $study_referClass10_itemBox[4][2]="title_link";
    $study_referClass10_itemBox[4][3]="author_link";
    $study_referClass10_itemBox[4][4]="cover_path";
    
    //Class 12
    //settings
    $study_referClass9_itemBox[0][0]="Class IX";//title
    $study_referClass9_itemBox[0][1]=4;//Count of items inside
    $study_referClass9_itemBox[0][2]=1;//size
    $study_referClass9_itemBox[0][3]=2;//vertical scroll=>1, horizontal scroll=>2;
    $study_referClass9_itemBox[0][4]="#";//viewmore link
    $study_referClass9_itemBox[0][5]=0;//viewmore link
    //content
    $study_referClass9_itemBox[1][0]="A Reference Book";
    $study_referClass9_itemBox[1][1]="Author";
    $study_referClass9_itemBox[1][2]="title_link";
    $study_referClass9_itemBox[1][3]="author_link";
    $study_referClass9_itemBox[1][4]="cover_path";
    $study_referClass9_itemBox[2][0]="A Ncert Book";
    $study_referClass9_itemBox[2][1]="Author";
    $study_referClass9_itemBox[2][2]="title_link";
    $study_referClass9_itemBox[2][3]="author_link";
    $study_referClass9_itemBox[2][4]="cover_path";
    $study_referClass9_itemBox[3][0]="A Ncert Book";
    $study_referClass9_itemBox[3][1]="Author";
    $study_referClass9_itemBox[3][2]="title_link";
    $study_referClass9_itemBox[3][3]="author_link";
    $study_referClass9_itemBox[3][4]="cover_path";
    $study_referClass9_itemBox[4][0]="A Ncert Book";
    $study_referClass9_itemBox[4][1]="Author";
    $study_referClass9_itemBox[4][2]="title_link";
    $study_referClass9_itemBox[4][3]="author_link";
    $study_referClass9_itemBox[4][4]="cover_path";
    
    echo '<div class="paraBox">';
    prt_para($study_referClass12_itemBox);
    echo '</div>';
    
    echo '<div class="paraBox">';
    prt_para($study_referClass11_itemBox);
    echo '</div>';
    
    echo '<div class="paraBox">';
    prt_para($study_referClass10_itemBox);
    echo '</div>';
    
    echo '<div class="paraBox">';
    prt_para($study_referClass9_itemBox);
    echo '</div>';
    
    echo '<hr>';
    prt_para_css();
}
function prt_studySamp(){
    echo '<style>.body-cont .sidebar form:nth-of-type(4)
    {background: #fff;box-shadow: 0px 0px 8px rgba(100,100,100,0.1);}
    </style>';
    echo '<h1>Sample Papers</h1><hr>';
        //Feeds

    //Assignment Feed
    //settings
    $study_AssignClass_feeds[0][0]=1; //width
    $study_AssignClass_feeds[0][1]=0; //image 1=true, 0=false
    $study_AssignClass_feeds[0][2]="Class"; //name
    $study_AssignClass_feeds[0][3]=1; //index no
    $study_AssignClass_feeds[0][4]=4; //count of feed elem
    //content
    $study_AssignClass_feeds[1][0]="Class XII";
    $study_AssignClass_feeds[1][2]=1;
    $study_AssignClass_feeds[1][3]="#";
    $study_AssignClass_feeds[2][0]="Class XI";
    $study_AssignClass_feeds[2][2]=1;
    $study_AssignClass_feeds[2][3]="#";
    $study_AssignClass_feeds[3][0]="Class X";
    $study_AssignClass_feeds[3][2]=1;
    $study_AssignClass_feeds[3][3]="#";
    $study_AssignClass_feeds[4][0]="Class IX";
    $study_AssignClass_feeds[4][2]=1;
    $study_AssignClass_feeds[4][3]="#";
    
    echo '<div class="feed">';
    prt_feed($study_AssignClass_feeds);
    prt_feed($study_AssignClass_feeds);
    prt_feed($study_AssignClass_feeds);
    echo '</div>';
    echo '<hr>';
    prt_feed_css();
}
function prt_studyAssign(){
    echo '<style>.body-cont .sidebar form:nth-of-type(3)
    {background: #fff;box-shadow: 0px 0px 8px rgba(100,100,100,0.1);}
    </style>';
    echo '<h1>Assignments</h1><hr>';
    
    //Feeds
    
    //Assignment Feed
    
    //class
    //settings
    $study_AssignClass_feeds[0][0]=1; //width
    $study_AssignClass_feeds[0][1]=0; //image 1=true, 0=false
    $study_AssignClass_feeds[0][2]="Class"; //name
    $study_AssignClass_feeds[0][3]=1; //index no
    $study_AssignClass_feeds[0][4]=4; //count of feed elem
    //content
    $study_AssignClass_feeds[1][0]="Class XII";
    $study_AssignClass_feeds[1][2]=1;
    $study_AssignClass_feeds[1][3]="#";
    $study_AssignClass_feeds[2][0]="Class XI";
    $study_AssignClass_feeds[2][2]=1;
    $study_AssignClass_feeds[2][3]="#";
    $study_AssignClass_feeds[3][0]="Class X";
    $study_AssignClass_feeds[3][2]=1;
    $study_AssignClass_feeds[3][3]="#";
    $study_AssignClass_feeds[4][0]="Class IX";
    $study_AssignClass_feeds[4][2]=1;
    $study_AssignClass_feeds[4][3]="#";
    
    //Subject
    //settings
    $study_AssignSub_feeds[0][0]=1; //width
    $study_AssignSub_feeds[0][1]=0; //image 1=true, 0=false
    $study_AssignSub_feeds[0][2]="Subject"; //name
    $study_AssignSub_feeds[0][3]=1; //index no
    $study_AssignSub_feeds[0][4]=4; //count of feed elem
    //content
    $study_AssignSub_feeds[1][0]="Maths";
    $study_AssignSub_feeds[1][2]=1;
    $study_AssignSub_feeds[1][3]="#";
    $study_AssignSub_feeds[2][0]="English";
    $study_AssignSub_feeds[2][2]=1;
    $study_AssignSub_feeds[2][3]="#";
    $study_AssignSub_feeds[3][0]="Chemistry";
    $study_AssignSub_feeds[3][2]=1;
    $study_AssignSub_feeds[3][3]="#";
    $study_AssignSub_feeds[4][0]="Physics";
    $study_AssignSub_feeds[4][2]=1;
    $study_AssignSub_feeds[4][3]="#";
    
    //Selection
    //settings
    $study_AssignSel_feeds[0][0]=1; //width
    $study_AssignSel_feeds[0][1]=0; //image 1=true, 0=false
    $study_AssignSel_feeds[0][2]="Assignments"; //name
    $study_AssignSel_feeds[0][3]=1; //index no
    $study_AssignSel_feeds[0][4]=4; //count of feed elem
    //content
    $study_AssignSel_feeds[1][0]="Chapter1";
    $study_AssignSel_feeds[1][2]=1;
    $study_AssignSel_feeds[1][3]="#";
    $study_AssignSel_feeds[2][0]="Chapter2";
    $study_AssignSel_feeds[2][2]=1;
    $study_AssignSel_feeds[2][3]="#";
    $study_AssignSel_feeds[3][0]="Chapter3";
    $study_AssignSel_feeds[3][2]=1;
    $study_AssignSel_feeds[3][3]="#";
    $study_AssignSel_feeds[4][0]="Chapter4";
    $study_AssignSel_feeds[4][2]=1;
    $study_AssignSel_feeds[4][3]="#";
    
    echo '<div class="feed">';
    prt_feed($study_AssignClass_feeds);
    prt_feed($study_AssignSub_feeds);
    prt_feed($study_AssignSel_feeds);
    echo '</div>';
    echo '<hr>';
    prt_feed_css();
}
function prt_studyQuest(){
    echo '<style>.body-cont .sidebar form:nth-of-type(5)
    {background: #fff;box-shadow: 0px 0px 8px rgba(100,100,100,0.1);}
    </style>';
    echo '<h1>Old Question Papers</h1><hr>';
        //Feeds

    //Assignment Feed
    //settings
    $study_AssignClass_feeds[0][0]=1; //width
    $study_AssignClass_feeds[0][1]=0; //image 1=true, 0=false
    $study_AssignClass_feeds[0][2]="Class"; //name
    $study_AssignClass_feeds[0][3]=1; //index no
    $study_AssignClass_feeds[0][4]=4; //count of feed elem
    //content
    $study_AssignClass_feeds[1][0]="Class XII";
    $study_AssignClass_feeds[1][2]=1;
    $study_AssignClass_feeds[1][3]="#";
    $study_AssignClass_feeds[2][0]="Class XI";
    $study_AssignClass_feeds[2][2]=1;
    $study_AssignClass_feeds[2][3]="#";
    $study_AssignClass_feeds[3][0]="Class X";
    $study_AssignClass_feeds[3][2]=1;
    $study_AssignClass_feeds[3][3]="#";
    $study_AssignClass_feeds[4][0]="Class IX";
    $study_AssignClass_feeds[4][2]=1;
    $study_AssignClass_feeds[4][3]="#";
    
    echo '<div class="feed">';
    prt_feed($study_AssignClass_feeds);
    prt_feed($study_AssignClass_feeds);
    prt_feed($study_AssignClass_feeds);
    echo '</div>';
    echo '<hr>';
    prt_feed_css();
}
//printed 
prt_studySidebar();
echo '<div class="root">';
prt_selection(); 
echo '</div>';

//****END OF HTML FILE****
echo '</div></div>';

//Footer
digilib_Footer();

echo '<script src="elib_bin/Studyzone/study_script.js"></script>
</body></html>';
?>