<!DOCTYPE html>
<html lang="en">
<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->

<!-- Title -->
<title><?php echo $title; ?> | Tim King</title>

<!-- Stylesheet -->
<link rel="stylesheet" href="../assets/css/style.css" />
<style type="text/css">#<?php echo $id;?> {color:#ff0090;}</style>
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" />
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-buttons.css" />

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4102644-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<link rel="icon" type="image/vnd.microsoft.icon" href="/favicon.ico" />
</head>

<body>
<a class="accessible" href="#main">[Skip to Content]</a>
<div id="container">
	<div class="wrap">
		<div id="header">
			<div id="site-title"><a rel="home" title="TIM KING" href="http://www.megalune.com"><span>TIM KING</span></a></div>
			<ul class="menu">
				<li><a href="/web/" id="web">web design</a></li>
				<li><a href="/graphic-design/" id="graphic-design">graphic design</a></li>
				<li><a href="/about/" id="about">about me</a></li>
			</ul>
		</div>
		<!-- #header --> 
		<a id="main"></a>
		<div id="masonry" class="flickr-gallery">
			<?php
		// change this number to the set number and you are good to go
				$api = 'a7f7e88ac948ee4d1557c8bf00fbac0d';
				//$extras = 'description,tags,url,url_s,url_m,url_z,url_l,url_o,title';
				$extras = 'url,url_m,url_l,url_o,title,o_dims';

		
		
		// change this number to the set number and you are good to go
                              // read the flickr XML
                             
                              $flickrXML_url = "https://api.flickr.com/services/rest/?method=flickr.photosets.getPhotos&api_key=".$api."&photoset_id=".$set."&extras=".$extras;
                             
                             
                             
                              $ch = curl_init();
                              curl_setopt($ch, CURLOPT_URL, $flickrXML_url);
                              curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                              // get the result of http query
                              $output = curl_exec($ch);
                              curl_close($ch);
                              // feed the curl output to simplexml_load_string
                              $flickrXML = simplexml_load_string($output) or die("XML string not loading");
                                       
                                                      
                                  
                              if ($flickrXML === false) {
                                   #echo ' error so redirect or handle error';
                              } else {
                                   #print_r($flickrXML);
                              }
							  
							  
							  
		
		foreach($flickrXML->photoset->photo as $photo) {
			$attributes = $photo->attributes();
			$link_img = $attributes['url_l'] == '' ? $attributes['url_o'] : $attributes['url_l'];
			$id = $attributes['id'];
			$tags = $attributes['tags'];
			$link_pg = 'http://www.flickr.com/photos/purplemonkeydishwasher/'.$id.'/in/photostream/';
			$description = (string)$photo->description;
			$title = $attributes['title'];
			$thumb = $attributes['url_m'];
			$classAlter = '';
			
			$height_m = $attributes['height_m'];
            $width_m = $attributes['width_m'];
			
			$width = 438;
			$height_n = $width * $height_m / $width_m;
			/*$width = 208;
			if(strpos($tags,'featured') !== FALSE){
				$thumb = $attributes['url_m'];
				$classAlter = " f";
				$width = 438;
			}
			<span class="caption">'.$title.'</span>*/
			#print_r($attributes);
			echo '<a href="'.$link_img.'" title="'.$title.'" class="fancybox-thumbs item'.$classAlter.'" data-fancybox-group="thumb" id="'.$id.'"><img src="'.$thumb.'" alt="'.$title.'" width="'.$width.'" height="'.ceil($height_n).'" /></a>'.PHP_EOL.PHP_EOL;
		}
	?>
		</div>
		<!-- #container -->
		
		<div style="clear:both;"></div>
		<div id="footer"> 
			
			<ul class="menu">
				<li><a href="/web/" id="web">web design</a></li>
				<li><a href="/graphic-design/" id="graphic-design">graphic design</a></li>
				<li><a href="/about/" id="about">about me</a></li>
			</ul>
			<p class="copyright">Copyright &#169; <?php echo date("Y"); ?> <a class="site-link" href="http://www.megalune.com" title="Tim King" rel="home"><span>Tim King</span></a></p>
		</div>
		<!-- #footer --> 
		
	</div>
	<!-- .wrap --> 
	
</div>
<!-- #container --> 

<!-- Add js -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/masonry/3.2.3/masonry.pkgd.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/helpers/jquery.fancybox-buttons.js"></script>

<script type="text/javascript">
		$(window).load(function() {
			/* Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked */
			$('.fancybox-thumbs').fancybox({
				openEffect : 'fade',
				closeEffect : 'fade',
				prevEffect	: 'fade',
				nextEffect	: 'fade',
				closeBtn  : true,
				arrows    : true,
				nextClick : true,
				helpers : {
					title : null            
				} 
			});
			/* MASONRY */
			var container = document.querySelector('#masonry');
			var msnry = new Masonry( container, {
			  // options
			  "gutter": 10,
			  "itemSelector": '.item',
			  "isFitWidth": true
			});
		});
	</script>
</body>
</html>
