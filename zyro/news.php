<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>News</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="News" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.37" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1479845546" rel="stylesheet" type="text/css" />
	<link href="css/news.css?ts=1479845546" rel="stylesheet" type="text/css" />
	
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body>{{ga_code}}<div class="root"><div class="vbox wb_container" id="wb_header">
	
<div id="wb_element_instance68" class="wb_element"><ul class="hmenu"><li><a href="Inicio/" target="_self" title="Inicio">Inicio</a></li><li><a href="Sobre-nosotros/" target="_self" title="Sobre nosotros">Sobre nosotros</a></li><li><a href="Rafting/" target="_self" title="Rafting">Rafting</a></li><li><a href="Contactos/" target="_self" title="Contactos">Contactos</a></li></ul></div><div id="wb_element_instance69" class="wb_element"><a href="http://google.com" target="1"><img alt="glyph-logo_May2016_200" src="https://5a5a57ff32a328601212-ee0df397c56b146e91fe14be42fa361d.ssl.cf1.rackcdn.com/icon/instagram_logos_glyph/03H5cHNMt-Jni4pe9u+7/glyph-logo_May2016_200.png"></a></div><div id="wb_element_instance70" class="wb_element"><a href="http://facebook.com" target="1"><img alt="fb_icon" src="gallery_gen/32389e479b2aae02452d8962dc294b82_52x52.png"></a></div><div id="wb_element_instance71" class="wb_element"><a href="http://twitter.com" target="1"><img alt="twitter" src="gallery_gen/5ae059146b6b69b1a0b07fb4b9323a3c_52x52.png"></a></div><div id="wb_element_instance72" class="wb_element"><div></div></div><div id="wb_element_instance73" class="wb_element"><div></div></div><div id="wb_element_instance74" class="wb_element"><div></div></div><div id="wb_element_instance75" class="wb_element" style=" line-height: normal;"><h4 class="wb-stl-pagetitle">myo sport kine</h4>
</div><div id="wb_element_instance76" class="wb_element"><img alt="myologo" src="gallery_gen/3cf9e32beb5baada1ca5f2da35971a2b_143x110.png"></div></div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance78" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(news);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance78");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance78").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 124px;">
	
<div id="wb_element_instance77" class="wb_element" style=" line-height: normal;"><p class="wb-stl-footer" style="text-align: right;">© 2016 <a href="http://myosportkine.cl">myosportkine.cl</a></p></div><div id="wb_element_instance79" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(44);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div></body>
</html>
