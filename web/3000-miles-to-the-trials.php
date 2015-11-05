<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>3000 Miles to the Trials | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>3000 Miles to the Trials</h1>
					<p><em>Skills:
						HTML, CSS, PHP, Photoshop, Flash,  WordPress</em>					</p>
					<p>This is a freelance project I worked on for a small group of runners  driving from New York to Oregon, filming their misadventures, and hoping  to eventually watch the Track Trials. I was responsible for coming up  with a video blog design, setting up a custom WordPress theme, and  encoding the videos to a suitable format for streaming.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/3000-1.jpg"><img src="images/3000-2.jpg"><img src="images/3000-3.jpg"></div>
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
