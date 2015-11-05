<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Facets of Design | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>Facets of Design</h1>
					<p><em>Skills:
						Flash, Illustrator, Photoshop, Photography</em></p>
					<p><a href="/files/facets.swf" class="fancybox-thumbs">View Site »</a> </p>
					<p>The goal of this project was to create an profile page that could  depict multiple facets of the individual&rsquo;s personality. Taking advantage  of some 3D effects available in Flash, I set up a series of rotating  &lsquo;facets&rsquo; that each depict a single photo of the individual. The photo is  the same in each facet, but it has been altered to focus on a specific  facet of their personality.</p>
					<p>By moving your mouse to the center of the site, you can slow the  rotational speed of the facets, thereby focusing on one specific trait.  Moving the mouse to the edge of the site will increase the rotational  speed of the facets and give you a more complex view of the person.</p>
				</div>
			</div>
			<div class="fluid"><a href="/files/facets.swf" class="fancybox-thumbs"><img src="images/facets-1.jpg"></a></div>
			
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="/assets/fancyapps/lib/jquery.mousewheel-3.0.6.pack.js"></script>

<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="/assets/fancyapps/source/jquery.fancybox.js?v=2.0.6"></script>
<link rel="stylesheet" type="text/css" href="/assets/fancyapps/source/jquery.fancybox.css?v=2.0.6" media="screen" />

<!-- Add Button helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="/assets/fancyapps/source/helpers/jquery.fancybox-buttons.css?v=1.0.2" />
<script type="text/javascript" src="/assets/fancyapps/source/helpers/jquery.fancybox-buttons.js?v=1.0.2"></script>

<!-- Add Thumbnail helper (this is optional) -->
<link rel="stylesheet" type="text/css" href="/assets/fancyapps/source/helpers/jquery.fancybox-thumbs.css?v=1.0.2" />
<script type="text/javascript" src="/assets/fancyapps/source/helpers/jquery.fancybox-thumbs.js?v=1.0.2"></script>
<script type="text/javascript">
	// stickie
	$(document).ready(function () {
		var s = $("#sticker");
		var pos = s.position();
		$(window).scroll(function () {
			var windowpos = $(window).scrollTop();
			if (windowpos >= pos.top) {
				s.addClass("stick");
			} else {
				s.removeClass("stick");
			}
		});
	});
	//fancybox
	$(document).ready(function() {
		$('.fancybox-thumbs').fancybox({
			openEffect : 'fade',
			closeEffect : 'fade',
			prevEffect	: 'fade',
			nextEffect	: 'fade',
			autoSize	: true,
			aspectRatio	: true,
			mouseWheel	: false,
			width		: 625,
			height		: 685,
			type		: 'swf',
			closeBtn  : false,
			arrows    : true,
			nextClick : true,

			helpers : {
				title	: { type : 'inside' },
				buttons	: {}
			}
		});
	});
</script>
		</div>
		<!-- #container -->
		
		<div style="clear:both;"></div>
		<?php include '../framework/footer_a.php'; ?>
		<!-- #footer --> 
		
	</div>
	<!-- .wrap --> 
	
</div>
<!-- #container -->
</body>
</html>
