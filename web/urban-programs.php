<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>University of Illinois Extension: Urban Programs | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>University of Illinois Extension: Urban Programs</h1>
					<p><em>Skills:
						HTML, CSS, ColdFusion, Photoshop, jQuery</em></p>
					<p><a href="http://urbanext.illinois.edu/" target="_blank">View Site »</a> </p>
					<p>I was responsible for creating the new design of  this site. The site is fully responsive and ties into an in-house CMS. The final two images here are from an alternate design.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/urban-1.jpg"><img src="images/urban-2.jpg"><img src="images/urban-3.jpg"><img src="images/urban-4.jpg"><img src="images/urban-5.jpg"></div>
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
