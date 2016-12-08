<?php
/*guest.php
========================================
Designed and Developed by Sal64dd
contact: sal.uncd@gmail.com
========================================
*/
ini_set("include_path", "../../");
include "elib_depend/digilib_api/digilib_std.php";
$GLOBALS['std']['meta']['title'] = 'Digital Library | GuestBook';
digilib_std_Header();
include("elib_custom/Guestbook.sal");

echo '<div class="DCQ_std_container">
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
    
     <style>
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
.DCQ_std_container .Cntform-box .rateslider{
    border: dashed 1px #cdcdcd;
    display: inline-block;
    width: 105px;
    height:24px;
    vertical-align: top;
    border-radius: 5px;
    padding:0;padding-top:3px;padding-left:5px;
}
.DCQ_std_container .Cntform-box .rateslider .rateslider_elem{
    width:10px; height: 22px;
    display: inline-block;
    vertical-align: top;
}
.DCQ_std_container .Cntform-box .rateslider .rateslider_elem_l{
    background: url(elib_depend/graphics/interface_graphics/icons/grey/stargrey.png) center no-repeat;
    background-size: 20px 20px;
    background-position: 0px 0px;
    margin:0;
}
.DCQ_std_container .Cntform-box .rateslider .rateslider_elem_f{
    background: url(elib_depend/graphics/interface_graphics/icons/grey/stargrey.png) center no-repeat;
    background-size: 20px 20px;
    background-position: -10px 0px;
    margin:0;
}
.DCQ_std_container .Cntform-box .Cntform_std_sub{
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
.DCQ_std_container .Cntform-box .Cntform_std_sub:hover{
    background:linear-gradient(to bottom, #ffa84c 0%,#ff7b0d 100%);
    cursor: pointer;
}.body-cont .hd_divs .DCQ_std_container{
    margin:15px;
}
.DCQ_std_container .userprofile{
    display: inline-block;
    width: 80px; height: auto;
    margin:10px;
    vertical-align: middle;
    text-decoration: none;
    color: #000;
}
.DCQ_std_container .userprofile .cover{
    display: block;
    border: solid 1px #cdcdcd; 
    width: 100%; height: 80px;
    border-radius: 50%;
    
}
 .hd_divs .DCQ_std_container .userprofile .name{
    display: block;
    font-family: display_4_r;
    color:#3EC6EF;
    text-align: center;
    font-size: 14px;
    margin-top: 5px;
}
 .DCQ_std_container .Cntform-box{
    display: inline-block;
    height: auto; width: calc(100% - 120px);
    margin:10px;margin-left:0px;
    vertical-align: middle;
    position: relative;
}
 .DCQ_std_container .Cntform-box .DCQ_STD_CONTENT{
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

 .DCQ_std_container{
    text-align: left;
 }';



digilib_std_Footer();
?>
