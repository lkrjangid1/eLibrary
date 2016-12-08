<?php
/*Book.php
========================================
Designed and Developed by Sal64dd
contact: sal.uncd@gmail.com
========================================
*/
if(!isset($_GET["Book"])){
    header('Location: '."Elib.php");
}

ini_set("include_path", "../../");
include "elib_depend/digilib_api/digilib_std.php";
$GLOBALS['std']['meta']['title'] = 'Digital Library | Elibrary';
digilib_std_Header();

$sql =array(3,
array('SELECT * FROM `lib_book_info` WHERE `book_id`=\''.$_GET["Book"].'\';',
      'SELECT author_info.author_id, author_info.author_name FROM author_info, author_book_rel WHERE author_info.author_id=author_book_rel.author_id AND author_book_rel.book_id=\''.$_GET["Book"].'\';',
     "SELECT genre FROM genre_info, genre_book_rel WHERE genre_book_rel.genre_id=genre_info.genre_id AND genre_book_rel.book_id='".$_GET["Book"]."';")
);

$result = simonsays($sql);
if($result[0][0]){
    echo $result[0][1];
}
elseif($result[1][0]->num_rows == 0){
    echo '404! can\t find page';
}
else{
//book info
$row = $result[1][0]->fetch_assoc();
    
//author list
$lst_auth = $result[1][1];
for($i=0;$i<$lst_auth->num_rows;$i++){
     $rp = $lst_auth->fetch_array(MYSQLI_NUM);
    $author_arr[0][$i] = $rp[0];
    $author_arr[1][$i] = $rp[1];
}
$author_arr[2] = implode(", ", $author_arr[1]);

//genre list
$lst_genre = $result[1][2];
    
$st_bkcvr = 'style="background: url(elib_database/database_library/Books_cover/'.$row['book_id'].'.jpg) center no-repeat; background-size: cover;"';
echo '<div class="display">
    <div class="cover" '.($row['img']?$st_bkcvr:"").' >
        '.($row['img']?"":createcover($author_arr[2],$row['book_title'], 36)).'
    </div>
    <div class="info">
        <div class="book-name">'.$row['book_title'].'</div>
        <div class="author-name">';
        //Here link is also given with each author name
        for($i=0;$i<$lst_auth->num_rows;$i++){
            echo '<a style="color:inherit; text-decoration: none" 
            href="elib_bin/Elib/Auth.php?Author='.$author_arr[0][$i].'">'.$author_arr[1][$i].'</a>'.($i<$lst_auth->num_rows-1?", ":"");
        }
        echo '</div>
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
<div class="ttinfo">Genre: <span class="ttifno">';
for($i=0;$i<$lst_genre->num_rows;$i++){
    $rp = $lst_genre->fetch_array(MYSQLI_NUM);
            echo '<a style="color:#1E69DE ; text-decoration: none" href="elib_bin/Search/search.php?bookSearch_check=9&q='.$rp[0].'">'.ucwords($rp[0]).'</a>'.($i<$lst_genre->num_rows-1?", ":"");
}
echo '</span></div>
<div class="ttinfo">Chapters: <span class="ttifno">'.$row['chapters'].'</span></div>
<div class="ttinfo">Size: <span class="ttifno">'.$row['size'].' mb</span></div>
<div class="ttinfo">Available As Download: <span class="ttifno">'.($row['isAvailDown']?'Yes':'No').'</span></div>
<hr>

<a href="'.$row['download_link'].'" class="Download"><div></div>Download</a>';
    
echo '</div></div>';
  
echo'<div class="summery hd_divs">
    <h3>Summery</h3>
    <hr><br>
    <div class="quote_in_sum">'.$row['quote'].'</div>
    '.$row['description'].'
    
    </div>';
    
echo'<div class="comment hd_divs" method="POST" action="elib_bin/Elib/Book.php">
    <h3>Comments</h3>
    <hr>
    <div class="DCQ_std_container">
        <a href="elib_bin/Account/Account.php" class="userprofile">
            <div class="cover"></div>
            <div class="name">I\'m Batman</div>
        </a>
        <div class="Cntform-box">
            <form class="Cntform-form">
                <textarea class="DCQ_STD_CONTENT" name="dcq_usercomt" required="required" maxlength="512" seamless wrap="hard"></textarea>
                <input type="text" hidden>
                <div class="rateslider" id="std_rateing_inp">
                    <div class="rateslider_elem rateslider_elem_l" id="std_rateing_elem1" 
                    onmouseover="std_comment_rate_set(0)"></div><!--
                    --><div class="rateslider_elem rateslider_elem_f" id="std_rateing_elem1"
                    onmouseover="std_comment_rate_set(1)"></div><!--
                    --><div class="rateslider_elem rateslider_elem_l" id="std_rateing_elem1"
                    onmouseover="std_comment_rate_set(2)"></div><!--
                    --><div class="rateslider_elem rateslider_elem_f" id="std_rateing_elem1"
                    onmouseover="std_comment_rate_set(3)"></div><!--
                    --><div class="rateslider_elem rateslider_elem_l" id="std_rateing_elem1"
                    onmouseover="std_comment_rate_set(4)"></div><!--
                    --><div class="rateslider_elem rateslider_elem_f" id="std_rateing_elem1"
                    onmouseover="std_comment_rate_set(5)"></div><!--
                    --><div class="rateslider_elem rateslider_elem_l" id="std_rateing_elem1"
                    onmouseover="std_comment_rate_set(6)"></div><!--
                    --><div class="rateslider_elem rateslider_elem_f" id="std_rateing_elem1"
                    onmouseover="std_comment_rate_set(7)"></div><!--
                    --><div class="rateslider_elem rateslider_elem_l" id="std_rateing_elem1"
                    onmouseover="std_comment_rate_set(8)"></div><!--
                    --><div class="rateslider_elem rateslider_elem_f" id="std_rateing_elem1"
                    onmouseover="std_comment_rate_set(9)"></div>
                </div>
                <input class="Cntform_std_sub" type="submit">
            </form>
        </div>
        
        <div class="DCQ_std_area51">
            <div class="area51_elem">
                <a href="elib_bin/Account/Account.php" class="userprofile">
                    <div class="cover"></div>
                    <div class="name">I\'m Batman</div>
                </a>
                <div class="cmt">
Lorem ipsum dolor sit amet, at eum epicuri recusabo lobortis. Te sed assum utinam possim, pri vide senserit an. Quas oportere similique ea eam. Pri cu aliquid accusamus, novum nonumy ex his. Modo soluta scriptorem vis ut.
Viderer eleifend urbanitas ex pri, et nam quas facer, laoreet laboramus te vix. Eu habemus copiosae salutandi sit, ei sed saperet officiis luptatum. Ad eam nostrud molestie voluptatibus. Duo putent aliquip eu, eu qui debet vituperata, at omnis denique qui. Sed ea nisl wisi sententia.
                </div>
                <div class="reply">Reply</div>
                <div class="inreply">In Reply to: Robin</div>
                <div class="likes">Likes: 33</div>
                <div class="dislikes">Dislikes: 44</div>
            </div>
        </div>
        
    </div>
    </div>
    <script>
        //rating sys script
        var std_comment_rate_elem = document.getElementsByClassName("rateslider_elem");
        var std_comment_rate_elem_l = document.getElementsByClassName("rateslider_elem_l");
        var std_comment_rate_elem_f = document.getElementsByClassName("rateslider_elem_f");
        var std_comment_rate_state = -1;
       
        
        function std_comment_rate_set(obj){
            if(obj!=std_comment_rate_state){
            
                std_comment_rate_state=obj;
                for(var i=9; i>std_comment_rate_state; i--){
                    if(!(i%2)){
                         TweenMax.to(std_comment_rate_elem[i], 0, {background: "url(elib_depend/graphics/interface_graphics/icons/grey/stargrey.png) 0 0 no-repeat"});
        std_comment_rate_elem[i].style.backgroundSize="20px 20px";
                    }
                    else{
                        TweenMax.to(std_comment_rate_elem[i], 0, {background: "url(elib_depend/graphics/interface_graphics/icons/grey/stargrey.png) -10px 0 no-repeat"});
        std_comment_rate_elem[i].style.backgroundSize="20px 20px";
                    }
                }
                
                for(var i=0; i<=std_comment_rate_state; i++){
                    if(!(i%2)){
                         TweenMax.to(std_comment_rate_elem[i], 0, {background: "url(elib_depend/graphics/interface_graphics/icons/orgGrad/stargrey.png) 0 0 no-repeat"});
        std_comment_rate_elem[i].style.backgroundSize="20px 20px";
                    }
                    else{
                        TweenMax.to(std_comment_rate_elem[i], 0, {background: "url(elib_depend/graphics/interface_graphics/icons/orgGrad/stargrey.png) -10px 0 no-repeat"});
        std_comment_rate_elem[i].style.backgroundSize="20px 20px";
                    }
                }
            }
        }
        
    </script>
    ';
prt_nbstyle_css();

digilib_std_Footer();

}

function prt_nbstyle_css(){
    echo' <style>
.DCQ_std_area51 .area51_elem{
    margin-top:10px;
    position: relative;
    height: auto;
    box-shadow: 2px 4px 8px rgba(100,100,100,0.3);
}
.DCQ_std_area51 .area51_elem .cmt{
    position: relative;
    display: inline-block;
    width: calc(100% - 120px);
    font-family: display_4_r;
    font-size: 14px;
    vertical-align: middle;
    margin-top:30px;
    margin-bottom:30px;
    line-height: 18px;
}
.DCQ_std_area51 .area51_elem .reply{
    position: absolute;
    font-family: display_4_r;
    font-size: 10px;
    right:120px; bottom:10px;
    padding: 3px;
    cursor: pointer;
    border-radius: 2px;
}
.DCQ_std_area51 .area51_elem .inreply{
    position: absolute;
    font-family: display_4_r;
    font-size: 10px;
    left:100px; top:5px;
    padding: 3px;
    cursor: pointer;
    border-radius: 2px;
}
.DCQ_std_area51 .area51_elem .likes{
    position: absolute;
    font-family: display_4_r;
    font-size: 10px;
    right:70px; bottom:10px;
    padding: 3px;
    cursor: pointer;
    border-radius: 2px;
}
.DCQ_std_area51 .area51_elem .dislikes{
    position: absolute;
    font-family: display_4_r;
    font-size: 10px;
    right:5px; bottom:10px;
    padding: 3px;
    cursor: pointer;
    border-radius: 2px;
}
.DCQ_std_area51 .area51_elem .likes:hover, .DCQ_std_area51 .area51_elem .dislikes:hover, .DCQ_std_area51 .area51_elem .reply:hover{
    color: #fff;
    background: #FF8930
}
.body-cont .hd_divs .DCQ_std_container .Cntform-box .rateslider{
    border: dashed 1px #cdcdcd;
    display: inline-block;
    width: 105px;
    height:24px;
    vertical-align: top;
    border-radius: 5px;
    padding:0;padding-top:3px;padding-left:5px;
}
.body-cont .hd_divs .DCQ_std_container .Cntform-box .rateslider .rateslider_elem{
    width:10px; height: 22px;
    display: inline-block;
    vertical-align: top;
}
.body-cont .hd_divs .DCQ_std_container .Cntform-box .rateslider .rateslider_elem_l{
    background: url(elib_depend/graphics/interface_graphics/icons/grey/stargrey.png) center no-repeat;
    background-size: 20px 20px;
    background-position: 0px 0px;
    margin:0;
}
.body-cont .hd_divs .DCQ_std_container .Cntform-box .rateslider .rateslider_elem_f{
    background: url(elib_depend/graphics/interface_graphics/icons/grey/stargrey.png) center no-repeat;
    background-size: 20px 20px;
    background-position: -10px 0px;
    margin:0;
}
.body-cont .hd_divs .DCQ_std_container .Cntform-box .Cntform_std_sub{
    border: none;
    -webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    outline: none;
    background: linear-gradient(to bottom, rgba(83,203,241,1) 0%,rgba(5,171,224,1) 100%);
    display: inline-block;
    padding:5px;
    vertical-align: top;
    font-family: display_4_r;
    color: #fff;
    font-size: 18px;
    border-radius: 2px;
    box-shadow: 0px 1px 1px rgba(100,100,100,0.5);
    
}
.body-cont .hd_divs .DCQ_std_container .Cntform-box .Cntform_std_sub:hover{
    background:linear-gradient(to bottom, #ffa84c 0%,#ff7b0d 100%);
    cursor: pointer;
}
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
    padding:3px;
    text-align: left;
    font-family: display_3_r;
    color:#333;
    font-size: 18px; 
    margin:8px;
}
.body-cont .hd_divs h3{
    font-family: display_4_r;
    font-size: 28px;
    text-align: left;
    color: #cdcdcd;
    margin-top:40px;
}
.body-cont .hd_divs h1{
    font-family: display_1_r;
    font-size: 24px;
    text-align: left;
    color: #3EC6EF;
    padding:5px;
    text-shadow: 0px 0px 2px #3EC6EF;
}
.body-cont .hd_divs .quote_in_sum{
    float:right;
    margin:20px; 
    margin-left: 30px; 
    width:300px; height:auto; 
    font-size:28px; color: #FF8930; 
    font-family: display_1_i;
    text-shadow: 0px 0px 1px #FF8930;
}
.body-cont .hd_divs p{
    font-family: display_3_r;
    font-size: 18px;
    text-align: left;
    color: #555;
    padding:5px;
    word-spacing: 3px;
    line-height: 24px;
    letter-spacing:1px;
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
.body-cont .hd_divs .DCQ_std_container{
    margin:15px;
}
.body-cont .hd_divs .DCQ_std_container .userprofile{
    display: inline-block;
    width: 80px; height: auto;
    margin:10px;
    vertical-align: middle;
    text-decoration: none;
    color: #000;
}
.body-cont .hd_divs .DCQ_std_container .userprofile .cover{
    display: block;
    border: solid 1px #cdcdcd; 
    width: 100%; height: 80px;
    border-radius: 50%;
    
}
.body-cont .hd_divs .DCQ_std_container .userprofile .name{
    display: block;
    font-family: display_4_r;
    color:#3EC6EF;
    text-align: center;
    font-size: 14px;
    margin-top: 5px;
}
.body-cont .hd_divs .DCQ_std_container .Cntform-box{
    display: inline-block;
    height: auto; width: calc(100% - 120px);
    margin:10px;margin-left:0px;
    vertical-align: middle;
    position: relative;
}
.body-cont .hd_divs .DCQ_std_container .Cntform-box .DCQ_STD_CONTENT{
     border: none;
    -webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    outline: none;
    
    width: calc(100% - 20px);
	height: 120px;
    
    margin: 0;
    
    box-shadow: inset 0px 0px 8px rgba(100,100,100, 0.5);
    background: #fff;
    padding:10px;
    font-size:16px;
    font-family: display_4_r;
    border-radius: 5px;
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