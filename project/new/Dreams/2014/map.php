<?php $limit = 2; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dream Stats</title>
<link href="http://fonts.googleapis.com/css?family=Nixie+One" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=Muli" rel="stylesheet" type="text/css">
<link href="dreams.css" rel="stylesheet" type="text/css">
<link href="buttons.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
</head>

<body>
<pre><?php
date_default_timezone_set('America/Chicago');
//
// A simple command-line Evernote API demo script that lists all notebooks in
// the user's account and creates a simple test note in the default notebook.
//
// Before running this sample, you must fill in your Evernote developer token.
//
// To run:
//   php EDAMTest.php
//

// Import the classes that we're going to be using
use EDAM\UserStore\UserStoreClient;
use EDAM\NoteStore\NoteStoreClient;
use EDAM\NoteStore\NoteFilter;	
use EDAM\Types\Data, EDAM\Types\Note, EDAM\Types\Resource, EDAM\Types\ResourceAttributes;
use EDAM\Error\EDAMUserException, EDAM\Error\EDAMErrorCode;

ini_set("include_path", ini_get("include_path") . PATH_SEPARATOR . "lib" . PATH_SEPARATOR);
ini_set("user_agent", "PHP/THttpClient\r\nAccept: application/x-thrift\r\nContent-Type: application/x-thrift");
require_once("autoload.php");

require_once("Thrift.php");
require_once("transport/TTransport.php");
require_once("transport/THttpClient.php");
require_once("protocol/TProtocol.php");
require_once("protocol/TBinaryProtocol.php");

require_once("packages/Errors/Errors_types.php");
require_once("packages/Types/Types_types.php");
require_once("packages/UserStore/UserStore.php");
require_once("packages/UserStore/UserStore_constants.php");
require_once("packages/NoteStore/NoteStore.php");
require_once("packages/Limits/Limits_constants.php");

// A global exception handler for our program so that error messages all go to the console
function en_exception_handler($exception) {
  echo "Uncaught " . get_class($exception) . ":\n";
  if ($exception instanceof EDAMUserException) {
    echo "Error code: " . EDAMErrorCode::$__names[$exception->errorCode] . "\n";
    echo "Parameter: " . $exception->parameter . "\n";
  } else if ($exception instanceof EDAMSystemException) {
    echo "Error code: " . EDAMErrorCode::$__names[$exception->errorCode] . "\n";
    echo "Message: " . $exception->message . "\n";
  } else {
    echo $exception;
  }
}
set_exception_handler('en_exception_handler');

// Real applications authenticate with Evernote using OAuth, but for the
// purpose of exploring the API, you can get a developer token that allows
// you to access your own Evernote account. To get a developer token, visit 
// https://sandbox.evernote.com/api/DeveloperToken.action
#$authToken = "S=s1:U=550ce:E=1436e218710:C=13c16705b10:P=1cd:A=en-devtoken:H=6f1e86ed0518c0ded3f6e5d2427d093b"; // sandbox
$authToken = "S=s86:U=941a27:E=14bed393a89:C=14495880e8d:P=1cd:A=en-devtoken:V=2:H=870313da71e1a39c953537ca114a6c8b";

if ($authToken == "your developer token") {
  print "Please fill in your developer token\n";
  print "To get a developer token, visit https://sandbox.evernote.com/api/DeveloperToken.action\n";
  exit(1);
}

// Initial development is performed on our sandbox server. To use the production 
// service, change "sandbox.evernote.com" to "www.evernote.com" and replace your
// developer token above with a token from 
// https://www.evernote.com/api/DeveloperToken.action
#$evernoteHost = "sandbox.evernote.com"; // sandbox
$evernoteHost = "www.evernote.com";
#$evernotePort = "443";
#$evernoteScheme = "https";
$evernotePort = "80";
$evernoteScheme = "http";

$userStoreHttpClient = new THttpClient($evernoteHost, $evernotePort, "/edam/user", $evernoteScheme);
$userStoreProtocol = new TBinaryProtocol($userStoreHttpClient);
$userStore = new UserStoreClient($userStoreProtocol, $userStoreProtocol);

/* Connect to the service and check the protocol version
$versionOK =  $userStore->checkVersion("Evernote EDAMTest (PHP)", $GLOBALS['EDAM_UserStore_UserStore_CONSTANTS']['EDAM_VERSION_MAJOR'], $GLOBALS['EDAM_UserStore_UserStore_CONSTANTS']['EDAM_VERSION_MINOR']);
print "Is my Evernote API version up to date?  " . $versionOK . "\n\n";
if ($versionOK == 0) {
  exit(1);
}*/

// Get the URL used to interact with the contents of the user's account
// When your application authenticates using OAuth, the NoteStore URL will
// be returned along with the auth token in the final OAuth request.
// In that case, you don't need to make this call.
$noteStoreUrl = $userStore->getNoteStoreUrl($authToken);

$parts = parse_url($noteStoreUrl);
if (!isset($parts['port'])) {
  if ($parts['scheme'] === 'https') {
    $parts['port'] = 443;
  } else {
    $parts['port'] = 80;
  }
}

$noteStoreHttpClient = new THttpClient($parts['host'], $parts['port'], $parts['path'], $parts['scheme']);
$noteStoreProtocol = new TBinaryProtocol($noteStoreHttpClient);
$noteStore = new NoteStoreClient($noteStoreProtocol, $noteStoreProtocol);




/* List all of the notebooks in the user's account 
$notebooks = $noteStore->listNotebooks($authToken);
print "Found " . count($notebooks) . " notebooks\n";
foreach ($notebooks as $notebook) {
  print "    * " . $notebook->guid . "\n";
}*/

#$guid = "3b7d7754-6df8-481d-878b-9eb18e79b931"; // sandbox
$guid = "a7913b80-c578-4d17-86ca-7012a6a7886a";
// List all of the notebooks in the user's account        
$tags = $noteStore->listTagsByNotebook($authToken, $guid);

$guid_2_tag = array();
$tag_count = array();
#$month_count = array("January" => 0, "February" => 0, "March" => 0, "April" => 0, "May" => 0, "June" => 0, "July" => 0, "August" => 0, "September" => 0, "October" => 0, "November" => 0, "December" => 0);
$day_count = array("Sunday" => 0, "Monday" => 0, "Tuesday" => 0, "Wednesday" => 0, "Thursday" => 0, "Friday" => 0, "Saturday" => 0);

foreach ($tags as $tag) {
	$guid_2_tag[$tag->guid] = $tag->name;
	$tag_count[$tag->name] = 0;
}




$search = new NoteFilter();
$search->notebookGuid = $guid;
$numNotes = $noteStore->findNoteCounts($authToken, $search, false);
$tots = $numNotes->notebookCounts["a7913b80-c578-4d17-86ca-7012a6a7886a"];
$tots = isset($tots) ? $tots : 250; //default to 500

$result = $noteStore->findNotes($authToken, $search, 0, 50);
$notes = $result->notes;

for ( $i=50 ; $i<$tots ; $i+=50 ) {
	#echo $i."<br>";
	$result = $noteStore->findNotes($authToken, $search, $i, 50);
	$notes = array_merge($notes, $result->notes);
}
#echo count($notes)."<br>";
#exit;
$note_array = array();
$mapData = array();

foreach ($notes as $note) {
	$loc = 'loc'.substr($note->attributes->latitude,0,6).'x'.substr($note->attributes->longitude,0,6);
	if(strlen($loc) > 8){
		$mapData['loc'.substr($note->attributes->latitude,0,6).'x'.substr($note->attributes->longitude,0,6)] += 1;
	}
	$tags = '';
	if(isset($note->tagGuids)){
		$toWords = array();
		foreach ($note->tagGuids as $tag) {
			$name = $guid_2_tag[$tag];
			$tag_count[$name]++;
			array_push($toWords,$name);
		}
		sort($toWords);
		$tags = implode(', ',$toWords);
	}
	$createdDate = $note->created/1000;
	#echo $createdDate." | " . date("F j Y", $createdDate) . "<br>";
	$note_array[date("F j Y", $createdDate)] = array('title' => $note->title, 'tags' => $tags);
	#echo date("F j Y", $createdDate)."<br>";
	if(isset($month_count[date("y/n", $createdDate)])){
		$month_count[date("y/n", $createdDate)] += 1;
	} else{
		$month_count[date("y/n", $createdDate)] = 1;
	}
	$day_count[date("l", $createdDate)] += 1;
	#update tag counts
 # print "    * " . $note->title . " | " . $note->created . " | " . print_r($note->tagGuids) . "\n";
}
# sort tags by alpha
#echo count($note_array);
ksort($tag_count);
ksort($month_count);
print_r($mapData);

# filter out tags that only appear a few times
$common_tags = array();
foreach($tag_count as $k => $v){
	if($v > $limit){
		$common_tags[$k] = $v;
	}
}
#print_r($note_array);
#print_r($tag_count);
#print_r($month_count);
#print_r($day_count);
?>
</pre>
<script type="text/javascript">
$(function () {
	// column graph of tags
    var graph_tags;
    $(document).ready(function() {
        graph_tags = new Highcharts.Chart({
            chart: {
                renderTo: 'graph_tags',
                type: 'column'
            },
            title: {
                text: 'Dream Themes'
            },
			credits: {
				enabled: false
			},
			exporting: {
				enabled: false
			},
			legend: {
				enabled: false
			},
            xAxis: {
                categories: ['<?php echo implode("','",array_keys($common_tags)); ?>'],
                title: {
                    text: 'Themes (must occur more than <?php echo $limit; ?> times)'
                },
				labels: {
					align: 'left',
					rotation: 60
				}
            },
            yAxis: {
                min: 0,
				allowDecimals: false,
                title: {
                    text: 'Number of Dreams'
                }
            },
            tooltip: {
                formatter: function() {
                    return ''+
                        this.x +': '+ this.y +' dreams';
                }
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
                series: [{
                data: [<?php echo implode(",",$common_tags); ?>]
    
            }]
        });
    });
	// .graph_tags
	
	
	// day_count
    var day_count;
        day_count = new Highcharts.Chart({
            chart: {
                renderTo: 'day_count',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false
            },
            title: {
                text: 'Breakdown by Day<br />(recorded the morning after the dream)'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer'
                }
            },
			credits: {
				enabled: false
			},
			exporting: {
				enabled: false
			},
			legend: {
				enabled: false
			},
            tooltip: {
                formatter: function() {
                    return ''+
                        this.point.name +': '+ this.y +' dreams (' + Math.round(this.percentage) + '%)';
                }
            },
            series: [{
                type: 'pie',
                data: [<?php
							$wcounter = 0;
							foreach($day_count as $k => $v){
								$wcounter++;
								echo "['" . $k . "',	" . $v . "]";
								echo $wcounter < 7 ? "," : "";
							}
						?>
                ]
            }]
        });
		// .day_count
		
		
		// month_count
    var month_count;
		month_count = new Highcharts.Chart({
            chart: {
                renderTo: 'month_count',
                type: 'line',
                marginRight: 130,
                marginBottom: 55
            },
            title: {
                text: 'Dreams / Month',
                x: -20 //center
            },
            xAxis: {
                title: {
                    enabled: true,
                    text: 'Month (yr / mo)'
                },
                categories: ['<?php echo implode("','",array_keys($month_count)); ?>'],
                lineWidth: 2,
                showLastLabel: true,
				startOnTick: false,
				endOnTick: false
            },
            yAxis: {
                title: {
                    text: 'Dreams'
                },
				allowDecimals: false,
                lineWidth: 2
            },
			credits: {
				enabled: false
			},
			exporting: {
				enabled: false
			},
			legend: {
				enabled: false
			},
            tooltip: {
                formatter: function() {
                    return ''+
                        this.x +': '+ this.y +' dreams';
                }
            },
            series: [{
                name: 'FD (free drainage)',
                data: [<?php
							$mcounter = 0;
							$mtotal = count($month_count);
							foreach($month_count as $k => $v){
								echo "['asdf" . $k . "',	" . $v . "]";
								echo $mcounter < $mtotal ? "," : "";
								$mcounter++;
							}
						?>],
				marker: {
					symbol: 'diamond'
				}
            }]
        });
		// .month_count
    
});
</script> 
<script src="http://code.highcharts.com/highcharts.js"></script> 
<script src="http://code.highcharts.com/modules/exporting.js"></script>
<div id="graph_tags" style="width: 100%; height: 400px; margin: 0 auto;"></div>
<p>&nbsp;</p>
<div id="day_count" style="width: 49%; height: 400px; margin: 0 auto; float:left;"></div>
<div id="month_count" style="width: 49%; height: 400px; margin: 0 auto; float:right;"></div>
<p style="clear:both;">&nbsp;</p>
<p align="center"><a href="#today" class="btn btn-success">jump to now</a></p>
<table>
<?php
	$start = 1350838800;
	// starts on 10/21/12 @ noon
	
	$end = time();
	
	for ($dater = $start; $dater < $end; $dater += 86400){
		$thisDate = date("F j Y", $dater);
		echo date("D", $dater) == "Sun" ? '<tr>' : '';
		echo '<td class="' . date("F", $dater) . '"><p class="n">';
		echo date("j", $dater) == "1" ? date("M", $dater) . ' ' : '';
		echo date("j", $dater);
		echo '</p><p class="t">' . $note_array[$thisDate]['title'] . '</p>';
		echo '<p class="g">' . $note_array[$thisDate]['tags'] . '</p></td>';
		echo date("D", $dater) == "Sat" ? '</tr>' : '';
	}
?>
</table>
<a name="today"></a>
</body>
</html>
