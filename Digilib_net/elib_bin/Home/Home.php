<?php
/*
 * Home.php ver.3.3
 * powered by bbps triforce and glasswindow script
 * designed and developed by shaurya 9 april 2015
 */

//Set the Include Dir Below To Relative Path so that it searches Digilib_net/
ini_set("include_path", "../../");

require_once("elib_config/config.php");
require_once($GLOBALS["GlassWindow"]);


$gwobj = new glaswid(array(
		"foot"=>array("print"=>0), 
		"include_files"=>array("binery_parm"=>"1.1.1.2.0.0.0")
));

?>

<style>
	/*	Mainpage Column script style
	 *	developed by shaurya
	 *		*requires none_style.css already included*
	 */
	
	.gwcol-main-page{
		position: absolute;
		top:0;
		left:0;
		right:0;
		bottom:0;
	}
	
	.gwcol{
		
	}
	.gwcol.fxd{
		position: fixed;
	}
	.gwcol.abs{
		position: absolute;
	}
	.gwcol.rel{
		position: relative;
	}
	.gwcol.Dynamic{
		display: inline-block;
	}
	.gwcol.fill{
		left:0;
		right:0;
	}
	.gwcol.border{
		border:solid thin;
	}
	
	
				
/* Smartphones (portrait and landscape) ----------- */
	@media only screen and (min-device-width : 320px) and (max-device-width : 640px) , (min-width : 320px) and (max-width : 640px) {
		
	}
	
/* iPads (portrait and landscape) ----------- */
	@media only screen and (min-device-width : 640px) and (max-device-width : 1024px) , (min-width : 640px) and (max-width : 1024px) {
			
	}
				
/* Desktops and laptops ----------- */
	@media only screen  and (min-width : 1024px) and (max-width: 1400px) {
		.gwcol.Navibar{
			height:200px;		/*initial height*/
			overflow: hidden;
			z-index:500; 		/* Navi is always on top in desktops*/
		}
		.gwcol.Navibar .gwcol.Navibar-layer2{
			background:rgb(10,165,215);
			height:226px;
			width:140%;
			left: -20%;
			top:-100px;
			position: absolute;
			z-index:20;
			box-shadow: 0 4px 20px rgba(0,0,0,0.2), 0 4px 10px rgba(100,100,100,0.1);
			
		}
		.gwcol.Navibar .gwcol.Navibar-layer2 .Navibar-layer2-bgImage{
			left:0;
			right:0;
			bottom:0;
			top:0;
			
			background-image: url("elib_depend/graphics/interface_graphics/navibar/pattern_blue_v3.gif");
			background-size:100px 100px;
		}
		.gwcol.Navibar .gwcol.Navibar-layer3{
			background:rgb(255,174,80);
			height:241px;
			right: 30px;
			left: 65px;
			top:-75px;
			position: absolute;
			z-index:10;
			box-shadow: 0 2px 20px rgba(0,0,0,0.17), 0 2px 8px rgba(100,100,100,0.15);
			
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-bgImage{
			left:0;
			right:0;
			bottom:0;
			top:0;
			
			background-image: url("elib_depend/graphics/interface_graphics/navibar/pattern_org_v1.gif");
			background-size:60px 60px;
		}
		.gwcol.Navibar .gwcol.Navibar-layer2 .gwcol.PageHeadImage-layer2-1{
			left:15%;
			right:15%;
			bottom:0%;
			top:100%;
		}
		.gwcol.Navibar .gwcol.Navibar-layer2 .gwcol.PageHeadImage-layer2-2{
			left:0px;
			right:0px;
			bottom:10px;
			top:-100px;
		}
		.gwcol.Navibar .gwcol.Navibar-layer2 .gwcol.PageHeadImage-layer2-3{
			left:0px;
			right:0px;
			bottom:105px;
			top:-130px;
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content{
			height:30px;
			right: 0px;
			left: 0px;
			bottom:0px;
			
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content .NaviContentGroup-ul{
			top:0; left:0; right:0; bottom:0;	
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content .NaviContentGroup-ul .NaviContentGroup-lelem{
			color:#fff;
			padding:3px;
			margin-top:2px;
			font-family:ttf_16;
			cursor:pointer;
			font-size:22px;
			margin-left:2px;
			letter-spacing:3px;
			text-shadow:0 0 2px rgba(100,100,100,0.2);
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content .NaviContentGroup-ul .NaviContentGroup-lelem:nth-of-type(1){
			margin-left:0px;
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content .NaviContentGroup-ul .NaviContentGroup-lelem .NaviContentGroup-lelem-Rllimg{
			width:20px;
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content .NaviContentGroup-ul .NaviContentGroup-lelem .NaviContentGroup-lelem-Rllimg .NaviContentGroup-lelem-img{
			left:11px;
			right:-14px;
			bottom:-4px;
			top:-20px;
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content .NaviContentGroup-ul .NaviContentGroup-lelem .NaviContentGroup-lelem-RllDD{
			width:5px;
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content .NaviContentGroup-ul .NaviContentGroup-lelem .NaviContentGroup-lelem-RllDD .NaviContentGroup-lelem-DDimg{
			left:-25px;
			right:5px;
			bottom:-6px;
			top:-16px;
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content #NavCntGrpImg1{
			background: url("elib_depend/graphics/interface_graphics/icons/vector_white/homegrey.png") no-repeat center;
			background-size:21px 21px;
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content #NavCntGrpImg2{
			background: url("elib_depend/graphics/interface_graphics/icons/vector_white/booksgrey.png") no-repeat center;
			background-size:21px 21px;
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content #NavCntGrpImg3{
			background: url("elib_depend/graphics/interface_graphics/icons/vector_white/book_2grey.png") no-repeat center;
			background-size:21px 21px;
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content #NavCntGrpImg4{
			background: url("elib_depend/graphics/interface_graphics/icons/vector_white/bloggrey.png") no-repeat center;
			background-size:21px 21px;
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content #NavCntGrpImg5{
			background: url("elib_depend/graphics/interface_graphics/icons/vector_white/micsgrey.png") no-repeat center;
			background-size:21px 21px;
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content #NavCntGrpDDImg1{
			background: url("elib_depend/graphics/interface_graphics/icons/vector_white/dd_arrowgrey.png") no-repeat center;
			background-size:8px 6px;
		}
		.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content #NavCntGrpDDImg2{
			background: url("elib_depend/graphics/interface_graphics/icons/vector_white/dd_arrowgrey.png") no-repeat center;
			background-size:8px 6px;
		}
		
	}
	
/* Large screens ----------- */
	@media only screen  and (min-width : 1400px) {
		
	}				
</style>

<!--
Mainpage Column Design no-Bootstarp version 1.1
cheers to responsiveness!
Developed by shaurya
				-->
<div class="gwcol-main-page">

<!-- Start NaviBar -->
	<div class="gwcol border fxd fill Navibar layer1">
	<!-- Layer Blue -->
		<div class="gwcol border  Navibar-layer2 layer-blue">
			<div class="gwcol border abs  Navibar-layer2-Shadow"></div>
			<div class="gwcol border1 abs  Navibar-layer2-bgImage"></div>
			<div class="gwcol border1  Navibar-layer2-content">
				<div class="gwcol image abs border1 PageHeadImage-layer2-1">
					<div class="gwcol image-ab abs border1 PageHeadImage-layer2-2">
						<span>Digital Library</span>
					</div>
					<div class="gwcol image-ab abs border1 PageHeadImage-layer2-3">
						<span>Bal Bharati Public School Ganga Ram Hospt. Marg </span>
					</div>
				</div>
			</div>
		</div>
		
	<!-- Layer Orange -->
		<div class="gwcol border  Navibar-layer3 layer-orange">
			<div class="gwcol border1 abs  Navibar-layer3-bgImage"></div>
			<div class="gwcol border1 abs  Navibar-layer3-content">
				<ul class="gwcol abs border1 Navibar-layer3-content-ulist NaviContentGroup-ul">
					<li class="gwcol rel border1 Dynamic Navibar-layer3-content-lelem NaviContentGroup-lelem">
						<div class="NaviContentGroup-lelem-Rllimg Dynamic border1 gwcol rel">
							<div class="NaviContentGroup-lelem-img border1 gwcol abs" id="NavCntGrpImg1"></div>
						</div>
						Home</li>
					<li class="gwcol rel border1   Dynamic Navibar-layer3-content-lelem NaviContentGroup-lelem">
						<div class="NaviContentGroup-lelem-Rllimg Dynamic border1 gwcol rel">
							<div class="NaviContentGroup-lelem-img border1 gwcol abs" id="NavCntGrpImg2"></div>
						</div>
						Books</li>
					<li class="gwcol rel border1   Dynamic Navibar-layer3-content-lelem NaviContentGroup-lelem">
						<div class="NaviContentGroup-lelem-Rllimg Dynamic border1 gwcol rel">
							<div class="NaviContentGroup-lelem-img border1 gwcol abs" id="NavCntGrpImg3"></div>
						</div>
						StudyZone
						<div class="NaviContentGroup-lelem-RllDD Dynamic border1 gwcol rel">
							<div class="NaviContentGroup-lelem-DDimg border1 gwcol abs" id="NavCntGrpDDImg1"></div>
						</div>
						</li>
					<li class="gwcol rel border1   Dynamic Navibar-layer3-content-lelem NaviContentGroup-lelem">
						<div class="NaviContentGroup-lelem-Rllimg Dynamic border1 gwcol rel">
							<div class="NaviContentGroup-lelem-img border1 gwcol abs" id="NavCntGrpImg4"></div>
						</div>
						Blogs</li>
					<li class="gwcol rel border1   Dynamic Navibar-layer3-content-lelem NaviContentGroup-lelem">
						<div class="NaviContentGroup-lelem-Rllimg Dynamic border1 gwcol rel">
							<div class="NaviContentGroup-lelem-img border1 gwcol abs" id="NavCntGrpImg5"></div>
						</div>
						Mics.
						<div class="NaviContentGroup-lelem-RllDD Dynamic border1 gwcol rel">
							<div class="NaviContentGroup-lelem-DDimg border1 gwcol abs" id="NavCntGrpDDImg2"></div>
						</div>
						</li>
				</ul>
			</div>
		</div>
		
	</div>
	
	<script>
//Default Rotation
TweenMax.to($(".Navibar-layer2"),0,{rotation:"1.2deg", transformOrigin:"left bottom"});
TweenMax.to($(".Navibar-layer3"),0,{rotation:"-.472deg", transformOrigin:"right bottom"});

//OnClicks Layer-orange


</script>
	
<!-- End of NaviBar -->
	
	<div id="status_div" style="position: fixed; top:0; right:0; z-index:1000; font-size:23px; color:#fff; text-shadow:0px 0px 5px #000"></div>
	
</div>

			
<?php
$gwobj->foot(); 
?>