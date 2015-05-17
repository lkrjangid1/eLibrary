<?php ?>
<style>
/* 
class: digilib_Navibar
	designed and developed by sal64dd
		contact:sal_uncd@gmail.com	
*/
	.digilib_Navibar{
		height:200px;
		z-index:1000;
	} 
	
/* Navibar_Layer1 : Layer_Blue */
	.digilib_Navibar .Navibar_Layer1{
		z-index:3;
		height:226px; width:140%;
		left: -20%; top:-100px;
		background:linear-gradient(135deg, #1f9edd 0%,#009fbf 100%);
		box-shadow: inset 0px 5px 10px rgba(255,255,255,0.5), 
					0 4px 20px rgba(0,0,0,0.4), 
					0 2px 40px rgba(0,0,0,0.2);
	}
	.digilib_Navibar .Navibar_Layer1 .Layer1_bgImage{
		z-index:1;
		border: solid thin;
		background-image: url("elib_depend/graphics/interface_graphics/navibar/l1/Navibar_layer1_bgImage.gif");
		background-size:200px 200px;
	}
	.digilib_Navibar .Navibar_Layer1 .siteHeader{
		z-index:2;
		left:15%; right:15%;
		bottom:0%; top:100%;
	}
	.digilib_Navibar .Navibar_Layer1 .siteHeader .Digilib_header{
		z-index:1;
		left:0px; right:0px;
		bottom:10px; top:-100px;
		background-image: url("elib_depend/graphics/interface_graphics/navibar/l1/head_Digilib.png");
		background-position: bottom left;
		background-repeat: no-repeat;
		background-size: contain;
	}
	.digilib_Navibar .Navibar_Layer1 .siteHeader .BBPS_header{
		z-index:2;
		left:0px; right:0px;
		bottom:105px; top:-130px; 	
		background-image: url("elib_depend/graphics/interface_graphics/navibar/l1/head_bbps.png");
		background-repeat: no-repeat;
		background-size: contain;
	}

/* Navibar_Layer2 : Layer_Red */
	.digilib_Navibar .Navibar_Layer2{
		z-index:2;
		height:550px; width:120px;
		right:20px; top:-295px; /*-295px default*/
		cursor:pointer;
		color:white;

		background: url("elib_depend/graphics/interface_graphics/navibar/l2/Navibar_layer2_bgImage_top.png") center;
		background-size:110px 108px;
		background-repeat:repeat-y; 
	}
	.digilib_Navibar .Navibar_Layer2:after{
		position: absolute;
		left:0; right:0;
		bottom:0; height:60px; 
		background: url("elib_depend/graphics/interface_graphics/navibar/l2/Navibar_layer2_bgImage_bot.png") no-repeat top;
		background-size:110px 60px; 
	}
	.digilib_Navibar .Navibar_Layer2 .red_content{
		display: block;
		width:100%;
		overflow:hidden;
		cursor: pointer;
	}
	.digilib_Navibar .Navibar_Layer2 .red_content .badges{
		height:260px; 
		overflow-y:scroll;
	}
	.digilib_Navibar .Navibar_Layer2 .red_content .Account{
		height:40px; bottom:-5px; 
		background: url("elib_depend/graphics/interface_graphics/general/set_gear_1.png") no-repeat center;
		background-size:contain;
	}
	.digilib_Navibar .Navibar_Layer2 .red_content .Notifications{
		height:40px;
		overflow:hidden;
		bottom:-10px; 
		background: url("elib_depend/graphics/interface_graphics/general/notifi/notifi_idle.png") no-repeat center;
		background-size:contain;
	}
	.digilib_Navibar .Navibar_Layer2 .red_content .profile{

	}
	}
	.digilib_Navibar .Navibar_Layer2 .red_content .profile .photo{
		z-index:1;
		height:60px;
		overflow:hidden;
		bottom:-17px;
		border: solid 1px white;
		border-radius: 3px; 
		background: url("elib_depend/graphics/interface_graphics/general/default_pic_small.png") no-repeat center;
		background-size:cover;
	}
	.digilib_Navibar .Navibar_Layer2 .red_content .profile .userid{
		z-index:2;
		height:15px;
		overflow:hidden;
		font-family:ttf_16; 	
		padding-left:2px;
		padding-top:2px;
		background:rgba(100,100,100,0.8); 	
		border-radius:3px; 
		font-size:12px;
		white-space:nowrap;
	}
	
/* Navibar_Layer3 : Layer_Orange */
	

	.gwcol.Navibar .gwcol.Navibar-layer3{
		z-index:1;
		background:linear-gradient(to right, #ffb159 0%,#ff9b28 100%);
		
		}
	.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-bgImage{
		left:0; right:0;
		bottom:0; top:0; 	
		background-image: url("elib_depend/graphics/interface_graphics/navibar/pattern_org_v1.gif");
		background-size:60px 60px;
	}
	.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content .NaviContentGroup-ul .NaviContentGroup-lelem{
		color:#fff;
		font-family:ttf_16;
		cursor:pointer;
	}
	.gwcol.Navibar .gwcol.Navibar-layer3{
		height:300px;
		right: 30px; left: 65px;
		top:-134px;
		position: absolute ;
		box-shadow: inset 1px 2px 3px rgba(200,200,200,0.5), 
					0 2px 25px rgba(0,0,0,0.3);
	}
	.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content{
		height:30px; right: 0px;
		left: 0px; bottom:0px;
	}
	.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content .NaviContentGroup-ul{
		top:0; left:0; 
		right:0; bottom:0;
	}
	.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content .NaviContentGroup-ul .NaviContentGroup-lelem{
		color:#fff;
		padding:3px; margin-top:2px;
		font-family:ttf_16;
		cursor:pointer;
		font-size:22px;
		margin-left:2px;
		letter-spacing:3px;
	}
	.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content .NaviContentGroup-ul .NaviContentGroup-lelem:nth-of-type(1){
		margin-left:0px;
	}
	.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content .NaviContentGroup-ul .NaviContentGroup-lelem .NaviContentGroup-lelem-Rllimg{
		width:20px;
	}
	.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content .NaviContentGroup-ul .NaviContentGroup-lelem .NaviContentGroup-lelem-Rllimg .NaviContentGroup-lelem-img{
		left:11px; right:-14px;
		bottom:-4px; top:-20px;
	}
	.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content .NaviContentGroup-ul .NaviContentGroup-lelem .NaviContentGroup-lelem-RllDD{
		width:5px;
	}
	.gwcol.Navibar .gwcol.Navibar-layer3 .Navibar-layer3-content .NaviContentGroup-ul .NaviContentGroup-lelem .NaviContentGroup-lelem-RllDD .NaviContentGroup-lelem-DDimg{
		left:-25px; right:5px;
		bottom:-6px; top:-16px;
	}
	/*Layer Orange-Navi Icons */
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

	
	

	

	

</style>