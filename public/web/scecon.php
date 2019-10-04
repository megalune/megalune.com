<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Scecon | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>Scecon</h1>
					<p><em>Skills:
						CSS, HTML, Flash, XML, PHP,  ASP</em></p>
					<p><a href="http://www.scecon.com/" target="_blank">View Site »</a> </p>
					<p>Scecon is a small business that provides management, logistics, and  stage production services. I was responsible for their scenic design  portfolio redesign, branding launch, and maintaining their online  presence.</p>
					<p>A major part of the redesign effort was to increase the visibility of  Scecon&rsquo;s work. The old design had a handful of small photos scattered  about the site. This new design provided a page for each project to  shine with multiple images and the occasional video or 3D Flash  panorama.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/scecon-1.jpg"><img src="images/scecon-2.jpg"><img src="images/scecon-3.jpg"></div>
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
