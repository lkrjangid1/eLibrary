<style>
.flyer{
    position: relative;
    top:0; left:0;
    width: 100%;
    display: block;
    
    background: #383838;
    text-align: center;
    
    border-bottom: solid 4px #3EC6EF;
    box-shadow: 0px 1px 5px rgba(100,100,100,0.5);
    z-index: 100;
}
.flyer a{
    display: inline-block;
    text-decoration: none;
    margin:8px;
    
    -webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.flyer a .bbpsHeadtext{
    color: #d7d7d7;
    font-family: display_1_r;
    font-size: 14px;
    letter-spacing: 6px;
}
.flyer a .bbpsHeadlogo{
    position: relative;
    bottom:-4px;
    display: inline-block;
    width: 20px; height:20px;
}
.logo-off-bbps{
    background: url(elib_depend/graphics/interface_graphics/icons/logos/offbbpslogo_white.png) center no-repeat;
    background-size: contain;
}

.header{
    position: relative;
    top:0; left:0;
    width: 100%;
    display: block;
    
    background: rgb(248,248,248);
    z-index: 90;
    
    text-align: center;
}
.header .main{
    position: relative;
    width: 100%; height:35px;
    margin-top: 30px; margin-bottom: 30px;
    display: inline-block;
}
.header .main .Ausi{
    position: absolute;
    left:0; top:-10px; bottom:-10px;
    display: inline-block;
    
    -webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
    cursor: pointer;
}
.header .main .Ausi .heada{
    color: #383838;
    font-family: display_4_b;
    font-size: 48px;
}
.header .main .Ausi .headb{
    color: #383838;
    font-family: display_4_r;
    font-size: 32px;
}
.header .main .Rrox{
    display: inline-block;
    position: absolute;
    width: 250px; height: 35px;
    right: 0;
}
.header .main .Rrox .Search-form{
    margin: 0; overflow:hidden;
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    border: solid 1px #dedede;
    border-radius: 3px;
    box-shadow: 0px 0px 3px rgba(200,200,200,0.3);
    text-align:left;
}
.header .main .Rrox .Search-form .Search-input{
    border: none;
    -webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    margin: 0;
    outline: none;
    
    position: relative; display: inline-block;
    top: 0; left: 0; width: calc(100% - 30px);
    padding-left: 3px; padding-right: 3px;
    padding-top: 8px; padding-bottom:8px;
    
    z-index: 1;
    
    background: #ffffff;
    color: #a8a8a8;
    font-size: 12px;
    font-family: display_4_r;
}
@-moz-document url-prefix() {
.header .main .Rrox .Search-form .Search-input {
        padding-left: 3px; padding-right: 3px;
        padding-top: 10px; padding-bottom:10px;
    }
}
.header .main .Rrox .Search-form .Search-submit{
    border: none;
    -webkit-appearance:none;
    -moz-appearance:none;
    -ms-appearance:none;
    -o-appearance:none;
    appearance:none;
    margin: 0; outline: none;
    
    position: absolute;
    right: 0; bottom: 0; top: 0;
    width: 30px;
    z-index: 2;
    background: #dedede;
}
.header .main .Rrox .Search-form .Search-submit-image{
    background-image: url(elib_depend/graphics/interface_graphics/icons/white/serchgrey.png);
    background-position:-2px 0px;
    background-size: 38px 38px;
    background-repeat: no-repeat;
    
    position: absolute;
    right: 0; bottom: 0; top: 0;
    width: 30px;
    z-index: 2;
    
    -webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
    cursor: pointer;
}
.Navibar{
    position: relative; z-index: 100;
    width: 100%; height: 30px; 
    box-shadow: 0px -3px 3px rgba(150,150,150,0.1);
    
    text-align: center;
    
    -webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
    
    overflow: hidden;
}
.Navibar .smallctrl{
    display: none;
    position: relative;
    left:20px; top:10px; bottom: 10px;
    height:30px; width:35px;
    
    background: url(elib_depend/graphics/interface_graphics/icons/blueGrad/plusgrey.png) center no-repeat;
    background-size: contain;
    
    cursor: pointer;
}
.Navibar .main{
    display: inline-block;
    position: relative;
    width: 100%;
    top:0; 
    padding-top: 10px; 
    padding-bottom: 10px;
}
.Navibar .main .navi-elem{
    margin-left: 10px; margin-right: 10px;
    position: relative;
    text-decoration: none;
    
}
.Navibar .main .navi-elem:hover .text{
    color:#383838;
    text-shadow: 0px 0px 3px rgba(150,150,150,0.1);
}
.Navibar .main .navi-elem .text{
    display: inline-block;
    text-indent: 20px;
    
    font-size:18px;
    color: #a0a0a0;
    font-family: class_2_r;
}
.Navibar .main .navi-elem .icon{
    display: inline-block;
    position: absolute;
    left: 0;
    width: 15px; height:15px; 
}
.Navibar .main .navi-elem:nth-of-type(1) .icon{
    background: url(elib_depend/graphics/interface_graphics/icons/blueGrad/home_3grey.png) center no-repeat;
    background-size: contain;
}
.Navibar .main .navi-elem:nth-of-type(2) .icon{
    background: url(elib_depend/graphics/interface_graphics/icons/blueGrad/booksgrey.png) center no-repeat;
    background-size: contain;
}
.Navibar .main .navi-elem:nth-of-type(3) .icon{
    background: url(elib_depend/graphics/interface_graphics/icons/blueGrad/book_2grey.png) center no-repeat;
    background-size: contain;
}
.Navibar .main .navi-elem:nth-of-type(4) .icon{
    background: url(elib_depend/graphics/interface_graphics/icons/blueGrad/bloggrey.png) center no-repeat;
    background-size: contain;
}
.Navibar .main .navi-elem:nth-of-type(5) .icon{
    background: url(elib_depend/graphics/interface_graphics/icons/blueGrad/bookgrey.png) center no-repeat;
    background-size: contain;
}
.Navibar .main .navi-elem:nth-of-type(6) .icon{
    background: url(elib_depend/graphics/interface_graphics/icons/blueGrad/aboutusgrey.png) bottom no-repeat;
    background-size: cover;
}

.Footer{
    background: linear-gradient(to bottom, rgba(83,203,241,1) 0%,rgba(5,171,224,1) 100%);
    position: relative;
    bottom: 0; width: 100%;
    margin-bottom: 0;
    box-shadow: 0px -1px 5px rgba(100,100,100,0.5);
    
    -webkit-touch-callout: none;
	-webkit-user-select: none;
	-khtml-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.Footer .upper{
    display: block;
    width: 100%;
    text-align: center;
    margin-bottom: 10px;
    margin-top: 10px;
}
.Footer .upper .list{
    display: inline-block;
    width:250px;
    vertical-align: text-top;
    margin-left:50px; margin-right:50px;
    margin-top:20px; margin-bottom:20px;
    
    cursor: default;
}
.Footer .upper .list .list-head{
    font-family: display_4_b;
    text-align: left;
    display: block;
    color: #434343;
}
.Footer .upper .list .list-elem{
    font-family: display_4_r;
    text-align: left;
    display: block;
    color: #484848;
    text-decoration: none;
    margin-top:15px;
    margin-bottom:15px;
    line-height: 25px;
    font-size: 14px;
}
.Footer .lower{
    position: relative;
    bottom: 10px;
    display: block;
    width: 100%;
    background: #383838;
    text-align: center;
    margin-bottom: 10px;
    box-shadow: 0px 0px 10px rgba(100,100,100,1);
}
.Footer .lower .main{
    position: relative;
    left:0; width: 100%;
    display: block;
    text-align: right;
}
.Footer .lower .main .hate{
    position: absolute;
    left:30px;
    top:0px;
    bottom:0px;
    width:450px;
    font-size: 2px;
    text-align: left;
}
.Footer .lower .main .hate .logo{
    position: relative;
    left: 0; top: 0;
    width:210px; height:50px;
    margin-top:15px;
}
.Footer .lower .main .hate .logo .heada{
    display: inline-block;
    color: #F7F7F7;
    font-family: display_4_b;
    font-size: 38px;
}
.Footer .lower .main .hate .logo .headb{
    display: inline-block;
    color: #F7F7F7;
    font-family: display_4_r;
    font-size: 22px;
}
.Footer .lower .main .hate .logo .bbps{
    position: relative;
    top: 8px;
    display: block;
    font-size: 8px;
    text-align: center;
    
}
.Footer .lower .main .hate .logo .bbps{
    color: #d7d7d7;
}
.Footer .lower .main .hate .logo .bbps .bbpsHeadlogo{
    position: relative;
    bottom:-1px;
    display: inline-block;
    width: 8px; height:8px;
}
.Footer .lower .main .hate .author{
    position: absolute;
    left:210; right:0px; top:0;  bottom:0;
    display: inline-block;
    font-size: 18px;
    color:#fff;
    text-align: center;
}
.Footer .lower .main .hate .author>span:nth-of-type(1), .Footer .lower .main .hate .author>span:nth-of-type(2){
    position: relative;
    top: 3px; left:0;
    width: 100%;
    display: block;
    text-align: center;
    font-size: 10px;
    color: #d7d7d7;
    font-family: display_4_r;   
}
.Footer .lower .main .hate .author .authora, .Footer .lower .main .hate .author .authorb{
    position: relative;
    top:3px; left:0;
    display: inline-block;
    margin-top: 5px;
    width:100px; height:60px;
    vertical-align: text-top;
}
.Footer .lower .main .hate .author .authora{
    background: url(elib_depend/graphics/mics_graphics/John_McCain_Signature.PNG) center no-repeat;
    background-size: contain;
}
.Footer .lower .main .hate .author .authorb{
    background: url(elib_depend/graphics/mics_graphics/joe_jonas_signature.png) top no-repeat;
    background-size: 80px 45px;
    
}
.Footer .lower .main .hate .author .name{
    position: relative;
    font-size: 10px;
    font-family: display_4_b;
    position: absolute;
    bottom: 3px; left:0; right:0;
    text-align: center;
    color: #fff;
    
}
.Footer .lower .main .hate .author>span:nth-of-type(4){
    position: relative;
    top: 25px;
    display: inline-block;
    color: #d7d7d7;
    font-family: display_4_r; 
}
.Footer .lower .main .chem{
    position: relative;
    display: inline-block;
    right: 0; top:0;
    
    width: 500px;
    margin: 30px;
}
.Footer .lower .main .chem .swag{
    position: relative;
    display: block;
}
.Footer .lower .main .chem .swag a{
    text-decoration: none;
    color: #F7F7F7;
    
    font-family: display_4_r;
    font-size: 18px;
    margin:5px;
}
.Footer .lower .main .chem .bro{
    position: relative;
    display: block;
}
.Footer .lower .main .chem .bro a{ 
    text-decoration: none;
    color: #F7F7F7;
    font-family: display_4_r;
    font-size: 12px;
}
.body-cont{
    position: relative;
    top:0px;
    padding-top:10px; padding-bottom: 10px;
    min-height:600px; width: 100%;
    z-index: 2;
    text-align: center;
}
.body-cont .main{
    display: inline-block;
    z-index: 1; 
    /*border: solid thin black;*/
    position: relative;
    top: 0; left: 0; 
    width: calc(100% - 20px);
    padding-left: 10px; padding-right: 10px;
    padding-top:1px; padding-bottom:1px;
    min-height: 600px; height: 100%;
}


/*=========================Media Queries ==========================*/
    
@media only screen  and (max-width: 769px) {
.body-cont .main{
    width: calc(100% - 6px);
    padding:3px;
}
.header .main{
    width: 100%; height:100px;
}
.header .main .Ausi{
    left:0; right:0; top:0;
}
.header .main .Rrox{
    width:auto; left:15px; right:15px; bottom:0;
}
    
.Navibar{
    height:49px;
    border-bottom: solid 1px #d7d7d7;
}
.Navibar .main{
    position: relative; display: block;
    width:100%;
    padding:none;
    height: auto;
    margin-top:10px;
}
.Navibar .main .navi-elem{
    display:block;
    text-align:left;
    border-top: solid 1px #e7e7e7;
    padding:8px; padding-top:10px; padding-bottom:10px;
    font-size: 28px;
    text-indent: 20px;
}
.Navibar .main .navi-elem .icon{
    width:30px; height:30px;
    margin-left: 10px;
}
.Navibar .smallctrl{
    display:block;
}
    
.Footer .upper{
    text-align: left;
    padding-top:20px;
    padding-bottom:20px;
}
.Footer .upper .list{
    display: block;
    margin:20px;
}
.Footer .upper .list .list-elem{
    line-height:20px;
    margin-left:20px;
}
.Footer .lower .main{
    height:200px;
    width:100%;
}
.Footer .lower .main .chem{
    top:100px;
    margin-bottom: 0px;
    height: auto; width:auto;
    margin-right:5px;
}
.Footer .lower .main .hate{
    width:calc( 100% - 5px );
    left:5px;
    height:auto;
}
}
@media only screen  and (max-width: 420px){
.Footer .lower .main{
    height:300px;
    width:100%;
}
.Footer .lower .main .chem{
    top:220px;
    margin-bottom: 0px;
    height: auto; width:auto;
    margin-right:5px;
}
.Footer .lower .main .hate{
    width:calc( 100% - 5px );
    left:5px;
    height:240px;
}
.Footer .lower .main .hate .author{
    left:0;
    top:100px;
}
}       
@media only screen  and (min-width : 770px) and (max-width: 1000px) {
.body-cont .main{
   width: calc(100% - 20px);
}
.header .main{
    width: 100%; height:35px;
}
.header .main .Ausi{
    left:80px; top:-10px; bottom:-10px;
}
.header .main .Rrox{
    right:80px; width: 250px;
}
.Navibar .main{
    display:inline-block;
}
.Navibar{
    height:30px;
    border-bottom: none;
}
.Navibar .smallctrl{
    display:none;
}
.Footer .upper{
    text-align: center;
    margin-bottom: 20px;
    margin-top: 20px;
    padding:none
}
.Footer .upper .list{
    display: inline-block;
    margin:none;
    width:150px;
}
.Footer .upper .list .list-elem{
    line-height:20px;
    margin-top:15px;
    margin-bottom:15px;
}
.Footer .lower .main{
    height:200px;
}
.Footer .lower .main .chem{
    height:200px;
    top:98px;
    margin-bottom: 0px;
    height: auto;
}
}
        
@media only screen  and (min-width : 1000px) and (max-width: 1200px){
.body-cont .main{
    width: calc(1000px - 20px);
}
.header .main{
    width: 1000px; height:35px;
} 
.header .main .Ausi{
    left:50px; top:-10px; bottom:-10px;
}
.header .main .Rrox{
    right:50px; width: 250px;
}
.Navibar .main{
    display:inline-block;
}
.Navibar{
    height:30px;
    border-bottom: none;
}
.Navibar .smallctrl{
    display:none;
}
.Footer .upper{
    text-align: center;
    padding:none;
    margin-bottom: 20px;
    margin-top: 20px;
}
.Footer .upper .list{
    display: inline-block;
    margin-left:20px; margin-right:20px;
    margin-top:30px; margin-bottom:30px;
    width:250px;
}
.Footer .upper .list .list-elem{
    line-height:25px;
    margin:none;
    margin-top:15px;
    margin-bottom:15px;
}
}
        
@media only screen  and (min-width : 1200px) {
.body-cont .main{
    width: calc(1000px - 20px);
}
.header .main{
    width: 1000px; height:35px;
}
.header .main .Ausi{
    left:0px; top:-10px; bottom:-10px;
}
.header .main .Rrox{
    right:0px; width: 250px;
}
.Navibar .main{
    display:inline-block;
}
.Navibar{
    height:30px;
    border-bottom: none;
}
.Navibar .smallctrl{
    display:none;
}
.Footer .upper{
    text-align: center;
    padding:none;
}
.Footer .upper .list{
    display: inline-block;
    margin-left:50px; margin-right:50px;
    margin-top:20px; margin-bottom:20px;
    width:250px;
}
.Footer .upper .list .list-elem{
    line-height:20px;
    line-height: 25px;
    margin-left:0;
}
}    
</style>