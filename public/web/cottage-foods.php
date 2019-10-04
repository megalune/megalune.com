<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>From Garden Gates to Dinner Plates | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>From Garden Gates to Dinner Plates</h1>
					<p><em>Skills:
					HTML, CSS, ColdFusion, Photoshop, jQuery</em></p>
					<p><a href="http://web.extension.illinois.edu/cottage/" target="_blank">View Site »</a> </p>
					<p>I was responsible for creating the design of  this site based on a series of PowerPoint presentations and brochures. The site is fully responsive and ties into an in-house CMS.  It features in-depth information about the Illinois Cottage Food Operation. I was responsible for the Spanish version of the site as well.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/cottage-1.jpg"><img src="images/cottage-2.jpg"></div>
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
