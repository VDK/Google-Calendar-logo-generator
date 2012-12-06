<?php
/*
Google-Calendar-logo-generator
==============================

Generates an SVG file that adjusts the Google Calendar logo to show the day of the month, instead of just 31
*/
header( "Content-type: image/svg+xml" );
@print('<?xml version="1.0" encoding="iso-8859-1"?>');
$d = date ('j');?>
<!-- Generator: Adobe Illustrator 15.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->

<svg version="1.1" id="Layer_1" 
   xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
	 x="0px" y="0px" width="400px" height="300px" viewBox="0 0 400 300" enable-background="new 0 0 400 300" xml:space="preserve">
<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="201.79" y1="22.1675" x2="198.2286" y2="276.476">
	<stop  offset="0" style="stop-color:#4990CD"/>
	<stop  offset="0.4878" style="stop-color:#488FCC"/>
	<stop  offset="0.6635" style="stop-color:#468BCA"/>
	<stop  offset="0.7887" style="stop-color:#4284C5"/>
	<stop  offset="0.8899" style="stop-color:#3C7ABE"/>
	<stop  offset="0.9756" style="stop-color:#356EB6"/>
	<stop  offset="1" style="stop-color:#326AB3"/>
	<a:midPointStop  offset="0" style="stop-color:#4990CD"/>
	<a:midPointStop  offset="0.87" style="stop-color:#4990CD"/>
	<a:midPointStop  offset="1" style="stop-color:#326AB3"/>
</linearGradient>
<path fill="url(#SVGID_1_)" d="M84.833,277.666c-6.627,0-12-5.373-12-12l0.001-231.334c0-6.627,5.373-12,12-12h230.333
	c6.627,0,12,5.373,12,12v231.334c0,6.627-5.373,12-12,12H84.833z"/>
<circle fill="#5E9ED5" cx="135.809" cy="58.941" r="18.059"/>
<circle fill="#01344E" cx="135.809" cy="56.776" r="18.059"/>
<circle fill="#5E9ED5" cx="263.809" cy="59.524" r="18.059"/>
<circle fill="#01344E" cx="263.809" cy="57.359" r="18.059"/>
<g>
	<rect x="66.833" y="112.333" fill="none" width="254.333" height="142.667"/>
	<text transform="matrix(1 0 0 1 <?php if($d <10){ echo "153.626";} else {echo "109.8516";} ?>  233.0322)"><tspan x="0" y="0" fill="#326BB4" font-family="'MyriadPro-Bold'" font-size="170" letter-spacing="-6"><?php echo $d;?></tspan></text>
</g>
<g>

	<rect x="72.833" y="111.333" fill="none" width="254.333" height="142.667"/>
	
		<text transform="matrix(1 0 0 1 <?php if($d <10){ echo "152.8257";} else {echo "109.0513";} ?>  232.0322)" fill="#E0DDCE" font-family="'MyriadPro-Bold'" font-size="170" letter-spacing="-6"><?php echo $d;?></text>
</g>
</svg>