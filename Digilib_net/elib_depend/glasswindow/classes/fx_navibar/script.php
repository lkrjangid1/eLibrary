<script>
//Navbar slide down script for small devices
var NaviList_small_semaphore = 0;
$( ".smallctrl" ).click(function(){
    if( NaviList_small_semaphore == 0 ){
        NaviList_small_semaphore = 1;
        TweenMax.to( $(".smallctrl") , 0.45 , { rotation:"135_cw", ease: Power4.easein} );
        TweenMax.to( $(".Navibar") , 0.45 , {height:"350", ease: Power3.easein} );
    }
    else{
        NaviList_small_semaphore = 0;
        TweenMax.to( $(".smallctrl") , 0.45 , { rotation:"0_ccw", ease: Power4.easein} );
        TweenMax.to( $(".Navibar") , 0.45 , {height:"49px", ease: Power3.easein} );
    }
});
</script>