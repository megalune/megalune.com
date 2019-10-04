<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Office of the Vice Chancellor for Research | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>Office of the Vice Chancellor for Research</h1>
					<p><em>Skills:
						HTML, CSS, ColdFusion, Photoshop, jQuery</em></p>
					<p><a href="http://research.illinois.edu/" target="_blank">View Site »</a> </p>
					<p>The Office of the Vice Chancellor for Research (OVCR)  leads, enables, and supports research initiatives, technology  commercialization and knowledge transfer at the University of Illinois.  The OVCR has policymaking and oversight responsibility for the research  mission and works collaboratively with the academic colleges and other  administrative units to lead new research initiatives and to facilitate  the ongoing scholarly endeavors of faculty, staff, and students.					</p>
					<p>I was responsible for creating the design and fully coding this site.  The site is fully responsive and ties into an in-house CMS. After the  site was setup, I lead training sessions to assist staff at the OVCR in  the use of Dreamweaver in keeping their site up to date.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/ovcr-1.jpg"><img src="images/ovcr-2.jpg"><img src="images/ovcr-3.jpg"></div>
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
