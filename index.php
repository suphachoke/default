<?php include('header.php');	?>	
<link rel="stylesheet" href="jslibraries/glidejs-master/dist/css/glide.core.css">
<link rel="stylesheet" href="jslibraries/glidejs-master/dist/css/glide.theme.css">
<style type='text/css'>

</style>
<div id="Glide" class="glide">

	<!--<div class="glide__arrows">
		<button class="glide__arrow prev" data-glide-dir="<">prev</button>
		<button class="glide__arrow next" data-glide-dir=">">next</button>
	</div>-->

	<div class="glide__wrapper">
		<ul class="glide__track">
			<li class="glide__slide">
				<div class="box" style="background-color: #77A7FB;"><img style='width:100%;' src='images/carousel-1.jpg'/></div>
			</li>
			<li class="glide__slide">
				<div class="box" style="background-color: #FBCB43;"><img style='width:100%;' src='images/2.jpg'/></div>
			</li>
			<li class="glide__slide">
				<div class="box" style="background-color: #34B67A;"><img style='width:100%;' src='images/3.jpg'/></div>
			</li>
		</ul>
	</div>

	<div class="glide__bullets"></div>

</div>
<?php include('footer.php');?>
<script type='text/javascript' src="jslibraries/glidejs-master/dist/glide.js"></script>
<script type='text/javascript'>
	var slider = $('#Glide').glide({ autoheight: true });
	var slider_api = slider.data('glide_api');
</script>
</html>