<?php
/*
 *  NcertBooks of Digilib_net
 *      ver 11.70
 *  Glasswid flwer
 *
 *  author: designed and developed by sal64dd
 *  contact: sal.uncd@gmail.com
 */

if(!isset($_GET["ncBook"])){
    header('Location: '."study_home.php");
}
else{
    
    //defaults
    ini_set("include_path", "../../");
    include "elib_depend/glasswindow/Glasswid_flwer.php";
    
    //links
    digilib_Meta("Digital Library | Home", '
    <link rel="stylesheet" type="text/css" href="elib_bin/Studyzone/NcertBook.css">');

    echo '<body>';

    //Navibar
    digilib_Header();

    
    //Get the info from sql
    $db = new mysqli($GLOBALS["db_MYSQL_SERVER"], $GLOBALS["db_MYSQL_USER"], $GLOBALS["db_MYSQL_Pass"], $GLOBALS["db_MYSQL_DB"]);
    if($db->connect_errno > 0){
        echo('Unable to connect to database. Try again later!');
    }
    $sql ='SELECT * from `ncert_book_info` where `book_id`=\''.$_GET["ncBook"].'\';';
    if(!$result = $db->query($sql)){
        echo('There was an error in the Server. Please try again later.');
    }
    if($result->num_rows == 0){
                echo('Coundn\'t find the asked Book! Try something else.');
            }
    else{
        $row = $result->fetch_assoc();
        $result->free();
        $db->close();
    



    //****START OF HTML FILE****
    echo '<div class="body-cont"><div class="main">
    <div class="display">
        <div class="cover"></div>
        <div class="info">
            <div class="book-name">'.$row['book_title'].'</div>
            <div class="author-name">Class '.$row['grade'].'</div>
            <hr>
            <div class="ttinfo">Rating:';
        for($i=0;$i<$row['rating'];$i+=2){
            if(($row['rating']-$i)==1){
                echo '<span class="halfstar"></span>';
            }
            else{
                echo '<span class="fullstar"></span>';
            }
            
        }
            echo '</div>
            <div class="ttinfo">Chapters: <span class="ttifno">'.$row['chapter_no'].'</span></div>
            <div class="ttinfo">Size: <span class="ttifno">'.$row['size'].' mb</span></div>
            <div class="ttinfo">Available As Download: <span class="ttifno">'.($row['isAvailDown']?'Yes':'No').'</span></div>
            <div class="ttinfo">Available In Library: <span class="ttifno">'.($row['isAvailLib']?'Yes':'No').'</span></div>
            <hr>
            
            <a href="'.$row['book_link'].'" class="Download"><div></div>Download</a>';
        if($row['buy_link']!=""){    
            echo '<a href="'.$row['buy_link'].'" class="Buy"><div></div>Buy</a>';
        }
        echo '</div>
    </div>';
        
        $Book_Arr = explode("|" , $row['chapter_info']);
        $count = count($Book_Arr);
        
        //Feeds
        //settings
        $NCERT_Chap_feeds[0][0]=1; //width
        $NCERT_Chap_feeds[0][1]=0; //image 1=true, 0=false
        $NCERT_Chap_feeds[0][2]="Chapters"; //name
        $NCERT_Chap_feeds[0][3]=1; //index no
        $NCERT_Chap_feeds[0][4]=$count/2; //count of feed elem
        
        for($i=0,$j=0;$i<$count;$i+=2,$j++){
            $NCERT_Chap_feeds[$j+1][0]=$Book_Arr[$i];
            $NCERT_Chap_feeds[$j+1][1]="";
            $NCERT_Chap_feeds[$j+1][3]="elib_bin/Studyzone/NcertBook.php?ncBook=00000001&ncChap=".($i+1);
            
        }
        
    echo '<div class="book_prev hd_divs">
    <h1>Quick Preview:</h1>
    <hr><div class="feed">';
    prt_feed($NCERT_Chap_feeds);
    prt_feed_css();
    if(isset($_GET["ncChap"])){
        echo '<iframe class="PrevFrame" src="'.$Book_Arr[($_GET["ncChap"])].'" frameborder="0" scrolling="no">
        </iframe>';
    }
    else{
        echo '<div class="PrevFrame">Select a Chapter</div>';
    }   
    echo'
    </div></div>
    <div class="comment hd_divs">
        <h1>Reviews</h1>
        <hr></div>';
    prt_nbstyle_css();

    //****END OF HTML FILE****
    echo '</div></div>';
   
    //Footer
    digilib_Footer();

    echo '<script src="elib_bin/Elib/Book.js"></script>
    </body></html>';
}
}

function prt_nbstyle_css(){
    echo' <style>
        .body-cont .display{
    position: relative;
    display: block;
    width: auto; height: auto;
    text-align: left;
}
.body-cont .display .cover{
    position: relative; 
    display: inline-block; vertical-align: middle;
    width: 300px; height: 380px;
    border: solid 1px #dedede; border-radius: 5px;
    box-shadow: 0px 0px 8px rgba(100,100,100,0.1);
    margin-right: 10px;
    background: url(elib_database/database_study/cover/'.$_GET['ncBook'].'.jpg) center no-repeat;
    background-size: cover;
}
.body-cont .display .info{
    position: relative;
    display: inline-block; vertical-align: middle;
    width: calc(100% - 320px); height: auto;
}
.body-cont .display .info .book-name{
    font-family: display_4_r;
    font-size: 56px;
    color: #686868;
    height: auto; width: calc(100% - 30px);
    white-space: normal;
    text-shadow: 0px 0px 1px #686868;
}
.body-cont .display .info .author-name{
    font-family: display_4_r;
    font-size: 36px;
    color: #cdcdcd;
    height: auto; width: calc(100% - 30px);
    white-space: normal;
    margin-bottom: 30px;
    color: #FF8930;
    text-shadow: 0px 0px 1px #FF8930
}
.body-cont .display .info .ttinfo{
    font-family: display_4_r;
    font-size: 16px;
    padding: 5px;
    color: #adadad;
}
.body-cont .display .info hr{
    border: none;
    border-top: solid 1px #dedede;
}
.body-cont .display .info .ttinfo .fullstar{
    width: 15px; height: 15px; 
    display: inline-block; vertical-align:top;
    background: url(elib_depend/graphics/interface_graphics/icons/orgGrad/stargrey.png) center no-repeat;
    background-size: contain;
}
.body-cont .display .info .ttinfo .halfstar{
    width: 7px; height: 15px; 
    display: inline-block; vertical-align:top;
    background: url(elib_depend/graphics/interface_graphics/icons/orgGrad/stargrey.png) no-repeat;
    background-size: 15px 15px;
    background-position: -8px;
    margin-left:3px;
}
.body-cont .display .info .Download{
    position: relative;
    padding: 15px;
    background: linear-gradient(to bottom, rgba(83,203,241,1) 0%,rgba(5,171,224,1) 100%);
    font-family: display_4_r;
    font-size: 20px;
    color: #efefef;
    display: inline-block;vertical-align: top;
    width: auto; height: auto;
    cursor: pointer;
}
.body-cont .display .info .Download div{
    position: absolute;
    top: 0; left:0; right:0; bottom: 0;
    background: url("elib_depend/graphics/interface_graphics/icons/white/downgrey.png") right no-repeat;
    background-size: 40px;
    background-position: 122px 8px;
}
.body-cont .display .info .Buy{
    position: relative;
    padding: 15px;
    background: linear-gradient(to bottom, #ffa84c 0%,#ff7b0d 100%);
    font-family: display_4_r;
    font-size: 20px;
    color: #efefef;
    display: inline-block;vertical-align: top;
    cursor: pointer;
    
}
.body-cont .display .info .Download, .body-cont .display .info .Buy{
    text-decoration: none;
    padding-right:50px;
    padding-left: 20px;
}
.body-cont .display .info .Buy div{
    position: absolute;
    top: 0; left:0; right:0; bottom: 0;
    background: url("elib_depend/graphics/interface_graphics/icons/white/externLinksgrey.png") right no-repeat;
    background-size: 40px;
    background-position: 62px;
}
.body-cont .display .info .Download:hover{
    background: linear-gradient(to bottom, rgba(100,223,261,1) 0%,rgba(5,171,224,1) 100%);
    color: #fff;
    text-shadow: 0px 0px 3px #fff;
}
.body-cont .display .info .Buy:hover{
    background: linear-gradient(to bottom, #ffcf5f 10%,#ff7b0d 100%);
    color: #fff;
    text-shadow: 0px 0px 3px #fff;
}
.body-cont .hd_divs{
    display: block; width: auto;
    height: auto;
    margin-bottom: 10px;
    margin-top: 30px;
    text-align: left;
    font-family: display_4_r;
    color:#a8a8a8;
    font-size: 14px;
    line-height:18px; word-spacing: 3px; word-break: break-all;
}
.body-cont .hd_divs h1{
    font-family: display_4_r;
    font-size: 24px;
    text-align: left;
    color: #cdcdcd;
}
.body-cont .hd_divs hr{
    border: none;
    border-top: solid 1px #cdcdcd;
}
.body-cont .book_prev .PrevFrame{
    position: relative;
    display: inline-block;
    width: calc(100% - 340px);
    vertical-align: top;
    height: 540px;
    
    background: #fefefe;
    box-shadow:inset 0px 0px 3px rgba(100,100,100,0.3);
}
.body-cont .book_prev div.PrevFrame{
    text-align: center;
    line-height: 500px;
    border-radius :3px;
    background: #fefefe;
    box-shadow:inset 0px 0px 3px rgba(100,100,100,0.3);
}
.body-cont .hd_divs .author_pic{
    border: solid 1px #dedede;
    border-radius: 5px;
    width: 160px; height: 200px;
    float: left;
    margin: 10px;
}
.body-cont .hd_divs .More{
    display: block;
    position: relative;
    text-align: right;
    margin: 5px;
    color: #FF8930;
    font-size: 16px;
    cursor: pointer;
}
@media only screen and (max-width: 770px){
    .body-cont .display .cover, .body-cont .display .info{
        display: block;
        margin: 15px;
    }
    .body-cont .display .info{
        width: auto;
    }
}
@media only screen and (max-width: 1000px){
    .body-cont .book_prev .PrevFrame{
        display: block;
        width: calc(100% - 10px);height: 500px;
    }
}
    </style>';}
?>