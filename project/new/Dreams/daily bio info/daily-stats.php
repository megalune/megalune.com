<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Daily</title>
<link rel="stylesheet" href="daily.css">
<link rel="stylesheet" href="http://i.icomoon.io/public/temp/6008dc1aee/Dreams/style.css">
</head>

<body>
<table>
	<thead>
		<tr>
			<th>date</th>
			<th>mood</th>
			<th>tosleep</th>
			<th>awake</th>
			<th>hours</th>
			<th>sleep</th>
			<th>breakfast</th>
			<th>lunch</th>
			<th>dinner</th>
			<th>exercise</th>
			<th>water</th>
			<th>booze</th>
		</tr>
	</thead>
	<tbody>
		<?php
date_default_timezone_set('America/Chicago'); 
/* SQL */
if ($db = sqlite_open('../sqlite/mysqlitedb', 0666, $sqliteerror)) {
	$q = 'SELECT * FROM "daily"';
	$result = sqlite_query($db, $q);
	#var_dump(sqlite_fetch_array($result)); 
} else {
	die($sqliteerror);
}

while ($row = sqlite_fetch_array($result, SQLITE_ASSOC)) { 
    echo '<tr><td>'.$row["date"].'</td>';
    echo '<td><span class="icon-'.$row["mood"].' medium"></span></td>'; 
    echo '<td>'.str_replace(".5",":30",$row["tosleep"]).'</td>'; 
    echo '<td>'.str_replace(".5",":30",$row["awake"]).'</td>'; 
    echo '<td>'.($row["awake"]-$row["tosleep"]).' hours</td>'; 
    echo '<td>'.($row["sleep"]=="+" ? '<span class="icon-thumbs-up small"></span>' : '<span class="icon-thumbs-up2 small"></span>').'</td>'; 
    echo '<td>'.($row["breakfast"]=="+" ? '<span class="icon-thumbs-up small"></span>' : '<span class="icon-thumbs-up2 small"></span>').'</td>'; 
    echo '<td>'.($row["lunch"]=="+" ? '<span class="icon-thumbs-up small"></span>' : '<span class="icon-thumbs-up2 small"></span>').'</td>'; 
    echo '<td>'.($row["dinner"]=="+" ? '<span class="icon-thumbs-up small"></span>' : '<span class="icon-thumbs-up2 small"></span>').'</td>'; 
	if($row["exercise"]=="++"){
		echo '<td><span class="icon-accessibility small"></span><span class="icon-accessibility small"></span></td>'; 
	} elseif($row["exercise"]=="+"){
		echo '<td><span class="icon-thumbs-up small"></span></td>'; 
	} else{
		echo '<td><span class="icon-blocked small"></span></td>'; 
	}
    echo '<td>'.($row["water"]=="+" ? '<span class="icon-droplet small"></span>' : '<span class="icon-thumbs-up2 small"></span>').'</td>'; 
    echo '<td>'.($row["booze"]=="+" ? '<span class="icon-glass small"></span>' : '<span class="icon-blocked small"></span>').'</td></tr>'; 
} 
?>
	</tbody>
</table>
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
</body>
</html>
