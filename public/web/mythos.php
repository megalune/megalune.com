<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Mythos | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>Mythos</h1>
					<p><em>Skills:
						Photoshop, Flash, and XML</em></p>
					<p><a href="/files/Mythos/index.html" target="_blank">View Site »</a> </p>
					<p><a href="mythos.pdf" target="_blank">Read the Capstone Report »</a> </p>
					<p>This is my capstone project for UC. I wanted to focus on the UI  design by making a database that could be quickly and visually organized  by several different methods and showed the relationship between  various entries. I also wanted to keep everything on one screen, as  opposed to having to navigate various pages or scroll.</p>
					<p>You can sort by various methods by clicking one of the seven words on  the inner ring near the character&rsquo;s image. Clicking a character&rsquo;s name  will also highlight related characters, such as allies or enemies. </p>
				</div>
			</div>
			<div class="fluid"><img src="images/mythos-1.jpg"><img src="images/mythos-2.jpg"><img src="images/mythos-3.jpg"></div>
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
