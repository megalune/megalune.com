<!DOCTYPE html>
<html lang="en">
<head>

<!-- Title -->
<title>Center for Early Childhood Mental Health Consultation | Tim King</title>
<?php include '../framework/header_a.php'; ?>
		<div id="content">
			<div class="fixed">
				<div id="sticker">
					<h1>Center for Early Childhood Mental Health Consultation</h1>
					<p><em>Skills:
						CSS, HTML, jQuery, Photoshop, PHP,  FileMaker</em></p>
					<p><a href="http://www.ecmhc.org/" target="_blank">View Site »</a> </p>
					<p>The Center translates research in healthy mental development into  materials tailored to the needs of each of the target audiences, and  makes them available on this website. In addition, the Center serves as  an online &ldquo;Community of Learners&rdquo; a clearinghouse for the exchange of  ideas through traditional and new media.</p>
					<p>This site was a web version of earlier developed materials. I worked  as part of a team to create the design, which encompasses a static,  information section; tutorials with printable question and answer  templates; and a customized search engine for for Social Emotional  Screening Tools.</p>
				</div>
			</div>
			<div class="fluid"><img src="images/ecmhc-1.jpg"><img src="images/ecmhc-2.jpg"><img src="images/ecmhc-3.jpg"><img src="images/ecmhc-4.jpg"></div>
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
