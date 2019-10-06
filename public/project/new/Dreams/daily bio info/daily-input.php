<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Daily</title>
<link rel="stylesheet" href="daily.css">
<link rel="stylesheet" href="http://i.icomoon.io/public/temp/6008dc1aee/Dreams/style.css">
</head>

<body>
<pre>if no date set, use todays, otherwise look in db and pull taht date(a)</pre>
<form action="" method="post">
	<p>
		<label for="date">today's date</label>
		<input type="date" value="" id="date" name="date" required />
	</p>
	<h1>how was your mood?</h1>
	<p class="medium">
		<input type="radio" value="grin" id="grin" name="mood">
		<label for="grin"><span class="icon-grin"></span> excited</label>
		<br />
		<input type="radio" value="smiley" id="smiley" name="mood">
		<label for="smiley"><span class="icon-smiley"></span> happy</label>
		<br />
		<input type="radio" value="neutral" id="neutral" name="mood">
		<label for="neutral"><span class="icon-neutral"></span> blah</label>
		<br />
		<input type="radio" value="sad" id="sad" name="mood">
		<label for="sad"><span class="icon-sad"></span> sad</label>
		<br />
		<input type="radio" value="angry" id="angry" name="mood">
		<label for="angry"><span class="icon-angry"></span> angry</label>
		<br />
		<input type="radio" value="confused" id="confused" name="mood">
		<label for="confused"><span class="icon-confused"></span> anxious</label>
		<br />
		<input type="radio" value="tongue" id="tongue" name="mood">
		<label for="tongue"><span class="icon-tongue"></span> worn-out</label>
	</p>
	<p>stress level?
		<input type="radio" value="low" id="stresslow" name="stress" />
		<label for="stresslow">low</label>
		<input type="radio" value="average" id="stressaverage" name="stress" />
		<label for="stressaverage">average</label>
		<input type="radio" value="high" id="stresshigh" name="stress" />
		<label for="stresshigh">high</label>
	</p>
	<p>
		<label for="tosleep">when did you go to sleep?</label>
		<input type="number" value="" id="tosleep" name="tosleep" />
	</p>
	<p>
		<label for="awake">when did you wake up?</label>
		<input type="number" value="" id="awake" name="awake" />
	</p>
	<p>
		<label for="sleep">sleep quality?</label>
		<input type="checkbox" value="+" id="sleep" name="sleep" />
	</p>
	<p>
		<label for="breakfast">healthy breakfast?</label>
		<input type="checkbox" value="+" id="breakfast" name="breakfast" />
	</p>
	<p>
		<label for="lunch">healthy lunch?</label>
		<input type="checkbox" value="+" id="lunch" name="lunch" />
	</p>
	<p>
		<label for="dinner">healthy dinner?</label>
		<input type="checkbox" value="+" id="dinner" name="dinner" />
	</p>
	<p>
		<label for="exercise">did you exercise?</label>
		<input type="checkbox" value="+" id="exercise" name="exercise" />
	</p>
	<p>
		<label for="water">enough water?</label>
		<input type="checkbox" value="+" id="water" name="water" />
	</p>
	<p>
		<label for="booze">booze?</label>
		<input type="checkbox" value="+" id="booze" name="booze" />
	</p>
	<p>
		<input type="submit" value="send it in!" />
	</p>
</form>
</body>
</html>
