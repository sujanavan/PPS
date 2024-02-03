<meta name="viewport" content="width=device-width, user-scalable=no">


<?php

session_start();
if(!$_SESSION["wallet"]) die("Wallet NOT Connected");

$url="https://node.somenano.com/proxy?action=receivable&account=nano_1yiqeaskez38key1iicnaxg5jrubrhk8btezgtcicq1cxy9ue55q6ok1zi93&count=9999&source=true";

$data = file_get_contents($url);

$obj = json_decode($data);

echo "<!--";
print_r($obj);
echo "-->";


$hash=0;

$lines=file("hash", FILE_IGNORE_NEW_LINES);
//print_r($lines);

foreach($obj->blocks as $key=>$value)
{
    if($value->source==$_SESSION["wallet"]){
        if(!strlen(array_search($key,$lines))) {
            $hash=$key;
            break;
        }
    }
}


if($hash)
{
$myfile = fopen("hash", "a") or die("Unable to open file!");
fwrite($myfile, "\n".$hash);
fclose($myfile);
header("Location: https://www.google.com/search?q=".$_POST["q"]);
}
else echo "Payment Transaction NOT found on XNO Block Explorer";






















// CODE FOR CHECKING TRANSACTIONS IN ACCOUNT HISTORY WHICH ARE ALREADY RECEIVED
/*
$url="";

$data = file_get_contents($url);

echo "<br> - - HTML COMMENT OPEN -- VIEW IN PAGE SOURCE <br>";
print_r($data);
echo "<br> - - HTML COMMENT CLOSE";


$obj = json_decode($data);

$w=$_GET["w"];
$hash=0;

$lines=file("hash", FILE_IGNORE_NEW_LINES);
//print_r($lines);


foreach($obj->history as $o){
if($o->account == $w) {
  if(!strlen(array_search($o->hash,$lines))) {
      $hash=$o->hash;
      break;
  }
}
}

if($hash)
{
$myfile = fopen("hash", "a") or die("Unable to open file!");
fwrite($myfile, "\n".$hash);
fclose($myfile);
header("Location: https://www.google.com/search?q=".$_GET["q"]);
}
else echo "Payment Transaction NOT found on XNO Block Explorer";
*/





// CODE FOR OTHER NODES USING CURL - JSON ENCODE - POST
/*
$request = array(
    "action"=>"receivable", 
    "account" => "nano_1yiqeaskez38key1iicnaxg5jrubrhk8btezgtcicq1cxy9ue55q6ok1zi93",
    "count"=> "9999",
    "array"=> "true"
);

$json_request = json_encode($request);
$url = 'https://rpc.nano.to';
$ch = curl_init($url);
 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_request);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($json_request)
));
 
$response = curl_exec($ch);
if(curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    echo $response;
}
curl_close($ch);
*/


?>


<!--


$url="https://node.somenano.com/proxy?action=receivable&account=nano_1yiqeaskez38key1iicnaxg5jrubrhk8btezgtcicq1cxy9ue55q6ok1zi93&count=9999&source=true";

$data = file_get_contents($url);

$obj = json_decode($data);

//print_r($obj);


$hash=0;

$lines=file("hash", FILE_IGNORE_NEW_LINES);
//print_r($lines);

foreach($obj->blocks as $key=>$value)
{
    if($value->source==$_GET["w"]){
        if(!strlen(array_search($key,$lines))) {
            $hash=$key;
            break;
        }
    }
}


if($hash)
{
$myfile = fopen("hash", "a") or die("Unable to open file!");
fwrite($myfile, "\n".$hash);
fclose($myfile);
header("Location: https://www.google.com/search?q=".$_GET["q"]);
}
else echo "Payment Transaction NOT found on XNO Block Explorer";







// CODE FOR CHECKING TRANSACTIONS IN ACCOUNT HISTORY WHICH ARE ALREADY RECEIVED
/*
$url="";

$data = file_get_contents($url);

print_r($data);

$obj = json_decode($data);

$w=$_GET["w"];
$hash=0;

$lines=file("hash", FILE_IGNORE_NEW_LINES);
//print_r($lines);


foreach($obj->history as $o){
if($o->account == $w) {
  if(!strlen(array_search($o->hash,$lines))) {
      $hash=$o->hash;
      break;
  }
}
}

if($hash)
{
$myfile = fopen("hash", "a") or die("Unable to open file!");
fwrite($myfile, "\n".$hash);
fclose($myfile);
header("Location: https://www.google.com/search?q=".$_GET["q"]);
}
else echo "Payment Transaction NOT found on XNO Block Explorer";
*/





// CODE FOR OTHER NODES USING CURL - JSON ENCODE - POST
/*
$request = array(
    "action"=>"receivable", 
    "account" => "nano_1yiqeaskez38key1iicnaxg5jrubrhk8btezgtcicq1cxy9ue55q6ok1zi93",
    "count"=> "9999",
    "array"=> "true"
);

$json_request = json_encode($request);
$url = 'https://rpc.nano.to';
$ch = curl_init($url);
 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_request);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($json_request)
));
 
$response = curl_exec($ch);
if(curl_errno($ch)) {
    echo 'Error: ' . curl_error($ch);
} else {
    echo $response;
}
curl_close($ch);
*/


-->