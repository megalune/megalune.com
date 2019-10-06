<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dream Stats</title>
<link href="daily.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="http://i.icomoon.io/public/temp/6008dc1aee/Dreams/style.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
</head>

<body>
<?php
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




/* get 1 note */
$guid = $_GET['guid'];
$note = $noteStore->getNote($authToken, $guid, true, false, false, false);
$tags = $noteStore->getNoteTagNames($authToken, $guid);
$noteDate = date('Y/m/d',intval($note->created)/1000);
?>
<h1><?php echo $note->title; ?></h1>
<div style="margin:auto 4em;">
	<p><em><?php echo $noteDate; ?></em></p>
	<p><?php echo $note->content; ?></p>
	<p style="border-left: solid 50px #ddd; padding-left:10px;"><em>themes:
		<?php echo implode(", ",$tags); ?>
		</em></p>
	<p>&nbsp;</p>
	<p><a href="dream-stats.php">&laquo; Return to Stats</a></p>
</div>
</body>
</html>
