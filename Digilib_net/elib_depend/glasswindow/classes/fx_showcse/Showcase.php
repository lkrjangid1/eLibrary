<?php
/*
 *  Showcase
 *      ver 3.00
 *  Glasswid flwer
 *
 *  author: designed and developed by sal64dd
 *  contact: sal.uncd@gmail.com
 */
function shwcse_prt($bin, $Infoarr){
    echo'
<style>
.body-cont .Shwcse{
    display: block;
    position: relative;
    top:0; left: 0;
    z-index: 2;
}
.body-cont .Shwcse .display{
    display: block;
    position: relative;
    width: 100%;
    padding-bottom: 38%;
}
.body-cont .Shwcse .display .wrapper{
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
}
.body-cont .Shwcse .display .wrapper .plane{
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0px;
    background: #F7F7F7;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    -webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
    cursor: pointer;
    text-decoration: none;
    
}
.body-cont .Shwcse .card{
    display: block;
    position: relative; top: 0; left: 0;
    height: auto; width: 100%;
    background: #383838; z-index: 5;
    
    border-bottom-left-radius: 3px;
    border-bottom-right-radius: 3px;
    text-align: left;
    
    box-shadow: 0px -1px 6px rgba(100,100,100,0.5);
    max-height: 135px;
    
}
.body-cont .Shwcse .card a{
    position: relative; 
    display: block;
    top: 0; bottom:0;
    height: auto; width: 100%;
    text-decoration: none;
}
.body-cont .Shwcse .card .title{
    position: relative;
    display: block;
    left: 10px; right: 10px;
    width: calc(100% - 30px);
    color:#F7F7F7;
    padding:5px;
    padding-top: 20px;
    padding-bottom: 1px;
    font-size: 24px;
}
.body-cont .Shwcse .card .descp{
    position: relative;
    display: block;
    left: 10px; right: 10px;
    width: calc(100% - 30px);
    
    color:#dedede;
    padding:5px;
    padding-top: 5px;
    padding-bottom: 5px;
    font-size: 16px;
}
.body-cont .Shwcse .card .linker{
    position: relative;
    display: block;
    left: 10px; right: 10px;
    width: calc(100% - 30px);
    color:#3EC6EF;
    padding:5px;
    font-size: 14px;
    padding-top: 5px;
    padding-bottom: 20px;
}
.body-cont .Shwcse .ctrl{
    position: absolute;
    display: block; top: 135px; left: 0;
    z-index: 3;
    text-align: right;
    width: 100%;
    height: 25px;
}
.body-cont .Shwcse .ctrl .list{
    position: relative;
    display: inline-block;
    margin-top:5px;margin-bottom:5px; margin-right:1px;
    height: auto; width: auto;
    -webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
    cursor: default;
}
.body-cont .Shwcse .ctrl .list .ctrl-elem{
    position: relative;
    display: inline-block;
    right: 0; 
    border-radius: 50%;
    width: 15px; height: 15px;
    margin-left: 4px;
    background: #dedede;
    box-shadow: inset 1px 1px 1px rgba(100,100,100,0.5);
    cursor: pointer;
}
.body-cont .Shwcse .ctrl .list #Showcase-ctrl-play{
    position: relative;
    display: inline-block;
    right: 0; 
    width: 15px; height: 15px;
    margin-left: 4px;
    z-index: 1;
    cursor: pointer;
}
.body-cont .Shwcse .ctrl .list .ctrl-play{
    background: url(elib_depend/graphics/interface_graphics/icons/blueGrad/play2grey.png) top no-repeat;
    background-size: contain;
}
.body-cont .Shwcse .ctrl .list .ctrl-play:hover{
    background: url(elib_depend/graphics/interface_graphics/icons/orgGrad/play2grey.png) top no-repeat;
    background-size: contain;
}
.body-cont .Shwcse .ctrl .list .ctrl-pause{
    background: url(elib_depend/graphics/interface_graphics/icons/blueGrad/pausegrey.png) top no-repeat;
    background-size: contain;
}
.body-cont .Shwcse .ctrl .list .ctrl-pause:hover{
    background: url(elib_depend/graphics/interface_graphics/icons/orgGrad/pausegrey.png) top no-repeat;
    background-size: contain;
}
.body-cont .Shwcse #Showcase-plane-1{
    opacity: 1;
    background: url(elib_depend/graphics/page_graphics/home/showcase/showcase_plane_1.jpg) center no-repeat;
    background-size: cover;
}';

for($i8=2 ; $i8<=$bin ; $i8++){
    echo '
    .body-cont .Shwcse #Showcase-plane-'.$i8.'{
        opacity: 0;
        background: url(elib_depend/graphics/page_graphics/home/showcase/showcase_plane_'.$i8.'.jpg) center no-repeat;
        background-size: cover;
    }';
}

echo '.body-cont .Shwcse #Showcase-card-1{
    display: block;
    opacity: 1;
}';

for($i7=2 ; $i7<=$bin ; $i7++){
    echo '
    .body-cont .Shwcse #Showcase-card-'.$i7.'{
        display: none;
        opacity: 0;
    }
    ';
}

echo '
.body-cont .Shwcse .ctrl .list .ctrl-elem{
    background: #dedede;
}
.body-cont .Shwcse .ctrl .list .ctrl-elem:nth-of-type(1){
    background: #3EC6EF;
}
/*================Media Queries==================*/
@media only screen  and (max-width: 769px){
    .body-cont .Shwcse .card{
        max-height: 175px;
    }
    .body-cont .Shwcse .ctrl{
        top: 175px;
    }
}
@media only screen  and (max-width: 420px){
    .body-cont .Shwcse .card{
        max-height: 200px;
    }
    .body-cont .Shwcse .ctrl{
        top: 200px;
    }
}
@media only screen  and (min-width : 1000px){
   .body-cont .Shwcse .card{
        max-height: 120px;
    }
    .body-cont .Shwcse .ctrl{
        top: 120px;
    } 
}
</style>
    
<div class="Shwcse"> <div class="display"> <div class="wrapper">';

for($i1=1; $i1<=$bin; $i1++){
    echo '<a href="'.$Infoarr[$i1][1].'" id="Showcase-plane-'.$i1.'" class="plane"></a>';
}

echo '</div> </div> <div class="card"> ';

for($i2=1; $i2<=$bin; $i2++){
    echo '<a href="'.$Infoarr[$i2][1].'" id="Showcase-card-'.$i2.'">
    <span class="title">'.$Infoarr[$i2][2].'</span>
    <span class="descp">'.$Infoarr[$i2][3].'</span>
    <span class="linker">'.$Infoarr[$i2][4].'</span></a>';
}

echo ' <div class="ctrl"> <div class="list">';

for($i3=1; $i3<=$bin; $i3++){
    echo '<div class="ctrl-elem" id="Showcase-ctrl-'.$i3.'" onclick="ShowcasePreviewChg('.$i3.')"></div>';
}

echo'<div class="ctrl-play" id="Showcase-ctrl-play">
</div> </div> </div> </div> </div>

<script> 

var ShowcseTotalPlanes = '.$bin.'; //add more here
var ShowcseAct_sema = 1;    //which screen is shown
var ShowcaseState_sema = 1;     //1 for play, 0 for pause

function ShowcasePreviewChg( previewId ){
//set new
    if( previewId == 1){
        var NewCtrl=$("#Showcase-ctrl-1");
        var NewCard=$("#Showcase-card-1");
        var NewPlane=$("#Showcase-plane-1");
    }';

for($i4=2; $i4<=$bin; $i4++){
    echo'
        else if( previewId == '.$i4.'){
        var NewCtrl=$("#Showcase-ctrl-'.$i4.'");
        var NewCard=$("#Showcase-card-'.$i4.'");
        var NewPlane=$("#Showcase-plane-'.$i4.'");
        }
    ';
}

echo'
//set old  
    if( ShowcseAct_sema == 1){
        var OldCtrl=$("#Showcase-ctrl-1");
        var OldCard=$("#Showcase-card-1");
        var OldPlane=$("#Showcase-plane-1");}';

for($i5=2; $i5<=$bin; $i5++){
    echo 'else if( ShowcseAct_sema == '.$i5.' ){
            var OldCtrl=$("#Showcase-ctrl-'.$i5.'");
            var OldCard=$("#Showcase-card-'.$i5.'");
            var OldPlane=$("#Showcase-plane-'.$i5.'");}';
}

echo '
    //remove color
        OldCtrl.css("background","#dedede");
    //set color
        NewCtrl.css("background","#3EC6EF");
    //fadeout plane
        TweenMax.to( OldPlane , 0.75, {opacity: 0, ease:Power2.easeinout} );
    //fadein plane
        TweenMax.to( NewPlane , 0.75, {opacity: 1, ease:Power2.easeinout} );
    //fadeout text
        TweenMax.to( OldCard , 0.75, {opacity: 0, ease:Power2.easeinout} );
    //interchange display
        OldCard.css("display","none"); NewCard.css("display","block");
    //fadein text
        TweenMax.to( NewCard , 0.75, {opacity: 1, ease:Power2.easeinout} );
    //change semaphore
        ShowcseAct_sema = previewId; 
}
setInterval(function(){
if(ShowcaseState_sema == 1){
    if(ShowcseAct_sema >= 1 && ShowcseAct_sema < ShowcseTotalPlanes){
        ShowcasePreviewChg(ShowcseAct_sema+1);}
    else{
        ShowcasePreviewChg(1);}
}
},5000);
$("#Showcase-ctrl-play").on("click",function(){
    if(ShowcaseState_sema == 1){
        $(this).addClass("ctrl-pause");
        ShowcaseState_sema = 0;
    }
    else{
        $(this).removeClass("ctrl-pause");
        ShowcaseState_sema = 1;
    }
});
//fixing hover
$(".ctrl-elem").on("mouseover",function(){
    $(this).css("background","#FF8930");
});
';
for($i6=1; $i6<=$bin; $i6++){
    echo '
        $("#Showcase-ctrl-'.$i6.'").on("mouseout",function(){
            if(ShowcseAct_sema != '.$i6.')
                {$(this).css("background","#dedede");}
            else
                {$(this).css("background","#3EC6EF");}
        });
    ';
}
echo '</script>';

}
?>