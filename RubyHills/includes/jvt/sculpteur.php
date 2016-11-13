<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>jQuery virtual tour</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" type="text/css" href="css/jquery.panorama.css" media="screen" />
<link rel="stylesheet" type="text/css" href="css/jquery.fancybox-1.3.1.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="js/jquery.panorama.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("img.advancedpanorama").panorama({
	                auto_start: 0,
			start_position: 1527
	         });
	});
</script>
<script type="text/javascript" src="js/cvi_text_lib.js"></script>
<script type="text/javascript" src="js/jquery.advanced-panorama.js"></script>
<script type="text/javascript" src="js/jquery.flipv.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.1.pack.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
	  $('.thickbox').fancybox();
	});
</script>

<style  type="text/css">
	body {
		background: #595959;
		text-align: center;
	}
	h1 {
		color: white;
		margin-bottom: 2em;
		font-family: Verdana;
		font-weight: normal;
		font-size: 25px;
	}
	#page {
		text-align: center;
		color: white;
	}
	#page a {
		color: white;
	}
	#page .panorama-viewport {
		border: 20px solid #414141;
		margin-left: auto;
		margin-right: auto;
	}
	#page p {
		margin-bottom: 1em;
	}
</style>
<body>
<h1>jQuery virtual tour</h1>

<div id="page">
	<p>
		<a href="http://openstudio.fr/jQuery-virtual-tour.html?lang=en">download and online documentation</a>
	</p>
	
	<img src="img/sculpteur.jpg" class="advancedpanorama" width="2448" height="375" usemap="testmap" alt="Atelier du sculpteur" />
	<map id="testmap" name="testmap"> 
		<area shape="rect" coords="1653,72,1839,255" href="salleformation.html" alt="vers la salle de formation" /> 
		<area shape="rect" coords="2013,114,2091,210" href="img/statue1.jpg" alt="statues" class="thickbox" /> 
		<area shape="rect" coords="1920,276,2070,351" href="img/gouges.jpg" alt="gouges" class="thickbox" /> 
	</map>
	
	
</div>
</body>
</html>