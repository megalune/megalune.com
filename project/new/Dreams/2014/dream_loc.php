eqfeed_callback({
    "features": [<?php
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
$mapData = array();

foreach ($notes as $note) {
	$loc = '['.substr($note->attributes->latitude,0,5).','.substr($note->attributes->longitude,0,5).']';
	if(strlen($loc) > 4){
		$mapData[$loc] += 1;
	}
}

foreach ($mapData as $k => $v) {
	if($v > 4){
		$value = 4;
	} else if($v < 3){
		$value = 3;
	}
	echo '{"mag": '.$value.', "coordinates": '.$k.'},'.PHP_EOL;
}
#print_r($mapData);
?>{
        "mag": 0,
        "coordinates": [0, 0]
    }]
});