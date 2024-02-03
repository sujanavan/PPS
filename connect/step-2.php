<meta name="viewport" content="width=device-width, user-scalable=no">
<br><br><center>


<?php
session_start();
if(!$_SESSION["w"]) die("No Wallet Address");

$url="https://node.somenano.com/proxy?action=account_representative&account=".$_SESSION["w"];
$data = file_get_contents($url);
$obj = json_decode($data);

echo "<!--";
print_r($obj);
echo "-->";

if(!$obj->representative)
die("Invalid Wallet Adress");


if($_SESSION["r"]==$obj->representative)
die("Account Representative NOT changed");

$_SESSION["wallet"]=$_SESSION["w"];
header("Location: /pps");
?>

