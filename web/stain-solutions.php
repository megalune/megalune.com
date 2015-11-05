<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Stain Solutions | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>Stain Solutions</h1>
					<p><em>Skills:
						HTML, CSS, ColdFusion, Photoshop, jQuery</em></p>
					<p><a href="http://web.extension.illinois.edu/stain/" target="_blank">View Site »</a> </p>
					<p>I was responsible for creating the new design of  this site. The site is fully responsive and ties into an in-house CMS.  It features in-depth information about various stains and how to clean them.</p>
					<p>After launching the new design, which showcased a new &quot;search-by-image&quot; landing page, site traffic increased 500%.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/stains-1.jpg"><img src="images/stains-2.jpg"><img src="images/stains-3.jpg"><img src="images/stains-4.jpg"></div>
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
