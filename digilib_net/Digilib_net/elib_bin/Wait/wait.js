var ship = $(".ship");
var pos = 0;
$(".ctrl-right").on("click",function(){
    pos+=50;
    ship.css("-webkit-transform", "translate("+pos+"px)");
});
$(".ctrl-left").on("click",function(){
    pos-=50;
    ship.css("-webkit-transform", "translate("+pos+"px)");
});
