<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>concert video</title>
	<?php include "session.php";?>
	<?php require_once "bootstrap.php";?>
	<?php require_once "bootstrap1.php";?>
    

<link rel="stylesheet" href="magnific-popup/dist/magnific-popup.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<!-- Magnific Popup core JS file -->
<script src="magnific-popup/dist/jquery.magnific-popup.js"></script>
<script>
jQuery(document).ready(function($) {
    $(".fancybox").magnificPopup({type:'iframe',iframe: {
        markup: '<div class="mfp-iframe-scaler">'+
            '<div class="mfp-close"></div>'+
            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
            '<div class="mfp-title">Some caption</div>'+
            '</div>',
        patterns: {
            youtube: {
                index: 'youtube.com/', 
                id: 'v=',
                src: 'http://www.youtube.com/embed/%id%?rel=0&autoplay=1'
            }
        }
    }});
});
</script>
<style type="text/css">

.nav-bar {
    background-color: transparent;
}
.w-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 940px;
}
#nav{
	background-color: transparent;
}
.logo{
	padding-top: 8px;
}
.w-nav {
    position: relative;
    background: #dddddd;
    z-index: 1000;
}
.w-nav-brand {
    position: relative;
    float: none;
    text-decoration: none;
    color: #333333;
}
.w-nav-overlay {
    position: absolute;
    overflow: hidden;
    display: none;
    top: 100%;
    left: 0;
    right: 0;
    width: 100%;
}
body {

	background-image: url(img/music.png);
    background-size: cover;
    overflow: scroll;
    background-repeat: no-repeat;
    background-attachment: fixed;
}
.content-wrapper {
    margin-top: 78px;
}
.w-container {
    margin-left: auto;
    margin-right: auto;
    max-width: 940px;
}
.page-title {
    margin-top: 0px;
    margin-bottom: 86px;
    font-size: 45px;
    line-height: 51px;
    font-weight: 300;
    text-align: center;
    text-transform: uppercase;
}
.footer {
    padding-top: 43px;
    padding-bottom: 43px;
    background-color: transparent;
    color: #222;
    text-align: center;
}
@media screen and (max-width: 991px){

	.w-container {
    max-width: 728px !important;
	}	
	.w-nav[data-collapse="medium"] .w-nav-menu {
	    display: none;
	}
	.nav-menu {
    padding-top: 18px !important;
    padding-bottom: 18px !important;
    border-top: 1px solid #000 !important;
    background-color: rgba(0, 0, 0, .85) !important;
	}
	
	.w-container {
    max-width: 728px !important;
	}
	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media (max-width: 767px){
	

	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}

@media screen and (max-width: 479px){
	.w-container {
	    max-width: none !important;
	}	
	.logo{
	padding-top: 8px !important;
	width: 10% !important;
	}
}
.row{
	text-align: center;
}
.thumb{
	width: 100%;
    margin-bottom: 60px;
    float: left;
}	
.elastic{
	max-width: 80%;
}
.title{
	margin: 18px 0 10px;
    font-family: sans-serif;
    font-size: 18px;
    line-height: 21px;
    text-align: center;
    color: white;
}
.timestamp{
	height: 11px;
    font-size: 11px;
    letter-spacing: 1px;
    line-height: 11px;
    font-style: italic;
    color: #636363;
    text-align: center;
    text-transform: uppercase;
}
.timestamp img {
    display: inline;
    margin-right: 3px;
    margin-bottom: 1px;
}
.nav-link.w--current {
    color: #fff;
    text-decoration: none;
}
</style>
</head>
<body>
	<?php require_once "navbar.php";?>
	<div class="content-wrapper w-container">
    <h1 class="page-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit; background: linear-gradient(to right,#E20D13, #F0E300, #A4C615, #4363AB,#BE4A94,#E30922);-webkit-background-clip: text;-webkit-text-fill-color: transparent; font-family: sans-serif;">Videos</font></font></h1>
    </div>
	<div class="w-container">
		<div class="row">
			<div class="col-md-4">
					<a class="fancybox" href="https://youtu.be/vyL23p14Q9Y">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
								<div class="playIcon"></div>
								<img class="elastic" src="img\sagor\vijaya.jpg" alt="Nagarbaul James live">
							</div>	    							    
								<div class="title">vijay Antony Music</div>
								<div>31st night 2024 | ECR </div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://youtu.be/J7lk3O3DVcg">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
						 		<div class="playIcon"></div>
								<img class="elastic" src="img\sagor\illayaraja.jpg" alt="Last live concert of Ayub Bachchu at Rangpur">
							</div>
							<div class="title">ilayaraja Conecert at Nehru Stadium</div>
							<div>July 15, 2023</div>
						</div>
					</a>
			</div>
			<div class="col-md-4">
					<a class="fancybox" href="https://youtu.be/sHiRYMKtQeA">
						<div class="thumb videoThumb">
						    <div class="videoThumbImage">
								<div class="hover"></div>
						 		<div class="playIcon"></div>
								<img class="elastic" src="img\sagor\pradeep.jpg" alt="Warfaze Concert">
							</div>
							<div class="title">Pradeep Kumar concert at Besant nagar</div>
							<div>July 15, 2024</div>
						</div>
					</a>
			</div>
		</div>
	</div>
					
</div>	

	<?php require_once "footer.php";?>

</body>