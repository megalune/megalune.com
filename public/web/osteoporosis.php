<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Osteoporosis: Facts &amp; Recipes | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>Osteoporosis: Facts &amp; Recipes</h1>
					<p><em>Skills:
						HTML, CSS, ColdFusion, Photoshop</em></p>
					<p><a href="http://urbanext.illinois.edu/osteoporosis/" target="_blank">View Site »</a> </p>
					<p>A comprehensive discussion of osteoporosis, risk factors, how to prevent it, and establishing a bone healthy diet.					</p>
					<p>I was responsible for creating the design and updating the code on  this site. The site is fully responsive and ties into an in-house CMS.  The site features in-depth information about Osteoporosis, quizzes, and  recipes. I was responsible for the Spanish version of the site as well.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/osteoporosis-1.jpg"><img src="images/osteoporosis-2.jpg"><img src="images/osteoporosis-3.jpg"></div>
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
