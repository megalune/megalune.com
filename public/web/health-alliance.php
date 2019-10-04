<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Health Alliance | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>Health Alliance</h1>
					<p><em>Skills:
						HTML, CSS, Foundation, jQuery, ARIA-WCAG</em></p>
					<p><a href="http://healthalliance.org/" target="_blank">View Site »</a> </p>
					<p>I was part of a small team responsible for creating a new design and updating all the content on the company website. The site is fully responsive and ties into an in-house CMS. It displays different content depending on the visitor's location. One of my primary responsibilities was to focus on accessibility for visitors using screen readers. To that end, the site makes use of HTML 5 elements and WAI-ARIA techniques.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/ha-1.jpg"><img src="images/ha-2.jpg"><img src="images/ha-3.jpg"><img src="images/ha-4.jpg"></div>
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
