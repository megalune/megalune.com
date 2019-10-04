<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Silver Cypher | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>Silver Cypher</h1>
					<p><em>Skills:
						HTML, CSS, PHP, Photoshop, TypeKit</em></p>
					<p><a href="http://www.silvercypher.net/" target="_blank">View Site »</a> </p>
					<p>Jon Krech, founder and lead singer of the doom metal band  Silver Cypher is a good friend of mine. We have worked together (not  with music) on designs and web apps for several years now. He&rsquo;s a great  guy and you should check out the site and the music.</p>
					<p>I was responsible for coming up with the design and fully coding the  site. With each new CD the site is re-skinned to coincide with the theme  of the latest album. Seen here is the latest iteration, based off the  2011 CD &lsquo;Existential Realisms&rsquo;. </p>
				</div>
			</div>
			<div class="fluid"><img src="images/silver-cypher-1.jpg"><img src="images/silver-cypher-2.jpg"><img src="images/silver-cypher-3.jpg"></div>
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
