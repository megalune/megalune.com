<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>The Poinsettia Pages | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>The Poinsettia Pages</h1>
					<p><em>Skills:
						HTML, CSS, ColdFusion, Photoshop</em></p>
					<p><a href="http://urbanext.illinois.edu/poinsettia/" target="_blank">View Site »</a> </p>
					<p>I was responsible for creating the design and fully coding this site.  The site is fully responsive and ties into an in-house CMS.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/poinsettia-1.jpg"><img src="images/poinsettia-2.jpg"><img src="images/poinsettia-3.jpg"><img src="images/poinsettia-4.jpg"></div>
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
