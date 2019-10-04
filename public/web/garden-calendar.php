<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Garden Calendar | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>Garden Calendar</h1>
					<p><em>Skills:
						HTML, CSS, ColdFusion, Photoshop</em></p>
					<p><a href="http://urbanext.illinois.edu/gardencal/" target="_blank">View Site »</a> </p>
					<p>A helpful monthly guide to know what to do in your garden.					</p>
					<p>I was responsible for creating the design and fully coding this site,  including the setup of an RSS and iCal feed. The site is fully  responsive. The site offers a different link each day of the month.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/gardencal-1.jpg"><img src="images/gardencal-2.jpg"><img src="images/gardencal-3.jpg"></div>
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
