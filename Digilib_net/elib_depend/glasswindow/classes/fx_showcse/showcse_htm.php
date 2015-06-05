<div class="body-cont">
        <div class="main">
            
            <div class="Shwcse">
                <div class="display">
                    <div class="wrapper">
                        <a href="#" id="Showcase-plane-1" class="plane"></a>
                        <a href="#" id="Showcase-plane-2" class="plane"></a>
                        <a href="#" id="Showcase-plane-3" class="plane"></a>
                    </div>
                </div>
                <div class="card">
                    
                    <a href="#" id="Showcase-card-1">
                    <span class="title">
                        Keepsakes: Australians and the Great War
                    </span>
                    <span class="descp">
                        Share in the personal stories of Australians who served during the First World War.
                    </span>
                    <span class="linker">
                        WATCH NOW
                    </span>
                    </a>
                    
                    <a href="#" id="Showcase-card-2">
                    <span class="title">
                        Revealing the Rothschild Prayer Book c.1505-1510 from the Kerry Stokes Collection
                    </span>
                    <span class="descp">
                        On show with the National Library’s medieval and Renaissance manuscripts.
                    </span>
                    <span class="linker">
                        ON NOW
                    </span>
                    </a>
                    
                    <a href="#" id="Showcase-card-3">
                    <span class="title">
                        Gems of History
                    </span>
                    <span class="descp">
                        See the behind the scenes of our latest Medieval Manuscript Project.
                    </span>
                    <span class="linker">
                        WATCH NOW
                    </span>
                    </a>
                    
                    <div class="ctrl">
                        <div class="list">
                            <div class="ctrl-elem" id="Showcase-ctrl-1" onclick="ShowcasePreviewChg(1)"></div>
                            <div class="ctrl-elem" id="Showcase-ctrl-2"  onclick="ShowcasePreviewChg(2)"></div>
                            <div class="ctrl-elem" id="Showcase-ctrl-3"  onclick="ShowcasePreviewChg(3)"></div>
                            <!-- add here -->
                            <div class="ctrl-play" id="Showcase-ctrl-play">
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
            
        </div>
    </div>
<script>
var ShowcseTotalPlanes = 3; //add more here
var ShowcseAct_sema = 1;    //which screen is shown
var ShowcaseState_sema = 1;     //1 for play, 0 for pause
function ShowcasePreviewChg( previewId ){
//set new  
    if( previewId == 1){
        var NewCtrl=$("#Showcase-ctrl-1");
        var NewCard=$("#Showcase-card-1");
        var NewPlane=$("#Showcase-plane-1");
    }
    else if( previewId == 2){
        var NewCtrl=$("#Showcase-ctrl-2");
        var NewCard=$("#Showcase-card-2");
        var NewPlane=$("#Showcase-plane-2");
    }
    else if( previewId == 3){
        var NewCtrl=$("#Showcase-ctrl-3");
        var NewCard=$("#Showcase-card-3");
        var NewPlane=$("#Showcase-plane-3");
    }//add more here
//set old  
    if( ShowcseAct_sema == 1){
        var OldCtrl=$("#Showcase-ctrl-1");
        var OldCard=$("#Showcase-card-1");
        var OldPlane=$("#Showcase-plane-1");
    }
    else if( ShowcseAct_sema == 2){
        var OldCtrl=$("#Showcase-ctrl-2");
        var OldCard=$("#Showcase-card-2");
        var OldPlane=$("#Showcase-plane-2");
    }
    else if( ShowcseAct_sema == 3){
        var OldCtrl=$("#Showcase-ctrl-3");
        var OldCard=$("#Showcase-card-3");
        var OldPlane=$("#Showcase-plane-3");
    }//add more also here

//No Need to Change Below:
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
$("#Showcase-ctrl-1").on("mouseout",function(){
    if(ShowcseAct_sema != 1)
        {$(this).css("background","#dedede");}
    else
        {$(this).css("background","#3EC6EF");}
});
$("#Showcase-ctrl-2").on("mouseout",function(){
    if(ShowcseAct_sema != 2)
        {$(this).css("background","#dedede");}
    else
        {$(this).css("background","#3EC6EF");}
});
$("#Showcase-ctrl-3").on("mouseout",function(){
    if(ShowcseAct_sema != 3)
        {$(this).css("background","#dedede");}
    else
        {$(this).css("background","#3EC6EF");}
});//add more here
</script>
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
    height: auto; width: auto;
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
    height: auto; width: auto;
    text-decoration: none;
}
.body-cont .Shwcse .card .title{
    position: relative;
    display: block;
    left: 10px; right: 10px;
    width: auto;
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
    width: auto;
    
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
    width: auto;
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
    background: url(../../elib_depend/graphics/interface_graphics/icons/blueGrad/play2grey.png) top no-repeat;
    background-size: contain;
}
.body-cont .Shwcse .ctrl .list .ctrl-play:hover{
    background: url(../../elib_depend/graphics/interface_graphics/icons/orgGrad/play2grey.png) top no-repeat;
    background-size: contain;
}
.body-cont .Shwcse .ctrl .list .ctrl-pause{
    background: url(../../elib_depend/graphics/interface_graphics/icons/blueGrad/pausegrey.png) top no-repeat;
    background-size: contain;
}
.body-cont .Shwcse .ctrl .list .ctrl-pause:hover{
    background: url(../../elib_depend/graphics/interface_graphics/icons/orgGrad/pausegrey.png) top no-repeat;
    background-size: contain;
}
/* Add more here*/
.body-cont .Shwcse #Showcase-plane-1{
    opacity: 1;
    background: url(../../elib_depend/graphics/page_graphics/home/showcase/showcase_plane_1.jpg) center no-repeat;
    background-size: cover;
}
.body-cont .Shwcse #Showcase-plane-2{
    opacity: 0;
    background: url(../../elib_depend/graphics/page_graphics/home/showcase/showcase_plane_2.jpg) center no-repeat;
    background-size: cover;
}
.body-cont .Shwcse #Showcase-plane-3{
    opacity: 0;
    background: url(../../elib_depend/graphics/page_graphics/home/showcase/showcase_plane_3.jpg) center no-repeat;
    background-size: cover;
}
/* Add more here*/
.body-cont .Shwcse #Showcase-card-1{
    display: block;
    opacity: 1;
}
.body-cont .Shwcse #Showcase-card-2{
    display: none;
    opacity: 0;
}
.body-cont .Shwcse #Showcase-card-3{
    display: none;
    opacity: 0;
}
/* Add more here*/
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