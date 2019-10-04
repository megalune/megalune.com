<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Lego Batman: Secret Files | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>Lego Batman: Secret Files</h1>
					<p><em>Skills:
						Photoshop, Flash</em></p>
					<p><a href="http://batmansecretfiles.warnerbros.com/" target="_blank">View Site »</a> </p>
					<p>This flash website serves as a teaser for a Batman themed Lego video  game was developed while I was working with Warner Bros. I helped  created the initial design of the project and and was responsible for  coding the Flash files. These were then handed off to another team  member for images and text.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/batman-1.jpg"><img src="images/batman-2.jpg"><img src="images/batman-3.jpg"></div>
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
