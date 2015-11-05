<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>En Espa&ntilde;ol | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>En Espa&ntilde;ol</h1>
					<p><em>Skills:
						HTML, CSS, ColdFusion, Photoshop, jQuery</em></p>
					<p><a href="http://urbanext.illinois.edu/espanol/" target="_blank">View Site »</a> </p>
					<p>A simple site created for the University of Illinois Extension. This  site acts as a directory, gathering all the Spanish resources available  through the Extension in one place.</p>
					<p>I was responsible for creating the design and fully coding this site.  The site is fully responsive and ties into an in-house CMS. The site  makes use of jQuery and Masonry to achieve it&rsquo;s look.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/espanol-1.jpg"><img src="images/espanol-2.jpg"><img src="images/espanol-3.jpg"></div>
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
