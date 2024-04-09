<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Music Concert</title>
    <?php include "session.php";?>
	<?php require_once "bootstrap.php";?>

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

    background: linear-gradient(30deg,#000,#535050);
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
p {
    margin-bottom: 10px;
    line-height: 24px;
    font-weight: 300;
    padding-left: 5px;
    padding-right: 5px;
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

</style>
</head>

<body>
	<?php require_once "navbar.php";?>
	<div class="content-wrapper w-container">
    <h1 class="page-title"><font style="vertical-align: inherit; font-family: sans-serif;"><font style="vertical-align: inherit; background: linear-gradient(to right,#E20D13, #F0E300, #A4C615, #4363AB,#BE4A94,#E30922);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">How it all started</font></font></h1>
    <div class="w-richtext">
    	<p>
    In Tamil Nadu, music concerts have evolved over the years, yet they still retain their essence and cultural significance. Let's delve into how a typical concert might have started in different decades:

1950s-1960s:
In the 1950s and 1960s, music concerts in Tamil Nadu often began with a traditional invocation, deeply rooted in the state's rich cultural heritage. Devotional songs and classical compositions set a reverent tone, reflecting the spiritual ethos of the era. Performers, adorned in traditional attire, took the stage amidst an aura of anticipation, captivating the audience with their melodious renditions.

1970s-1980s:
By the 1970s and 1980s, music concerts in Tamil Nadu underwent a transformation influenced by the burgeoning popularity of Tamil film music. The concerts started with lively performances of hit film songs, electrifying the audience with their catchy tunes and energetic rhythms. This era saw the emergence of iconic playback singers and musicians who became household names, drawing massive crowds to their concerts.

1990s-2000s:
In the 1990s and 2000s, music concerts in Tamil Nadu experienced a fusion of traditional and contemporary elements. The invocation segment expanded to include a diverse range of musical styles, reflecting the evolving tastes of the audience. Concerts often featured a mix of classical, folk, and film music, showcasing the versatility of Tamil Nadu's musical landscape. Performers embraced modern technology, incorporating elaborate stage setups and lighting effects to enhance the visual spectacle.

2010s-present:
In the 2010s and beyond, music concerts in Tamil Nadu have continued to evolve with the times while staying true to their cultural roots. The advent of social media and digital streaming platforms has facilitated greater outreach, allowing artists to connect with a global audience. Concerts often feature a blend of live performances and multimedia elements, creating immersive experiences for attendees. Additionally, there has been a resurgence of interest in traditional art forms, leading to a revival of classical music concerts and cultural festivals celebrating Tamil Nadu's heritage.

Throughout the years, one thing remains constant: the passion and love for music that unites people across generations in Tamil Nadu. Whether it's the soul-stirring melodies of Carnatic music or the foot-tapping beats of Tamil film songs, music continues to be a source of joy, inspiration, and cultural pride for the people of the region
		</p>
	</div>
  </div>
  <?php require_once "footer.php";?>
</body>
</html>