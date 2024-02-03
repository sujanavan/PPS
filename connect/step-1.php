<meta name="viewport" content="width=device-width, user-scalable=no">
<br><br><center>


<?php
$url="https://node.somenano.com/proxy?action=account_representative&account=".$_POST["w"];
$data = file_get_contents($url);
$obj = json_decode($data);

echo "<!--";
print_r($obj);
echo "-->";

if(!$obj->representative)
die("Invalid Wallet Adress");

session_start();
$_SESSION["r"]=$obj->representative;
$_SESSION["w"]=$_POST["w"];
echo "<i>Your current account representative is:-</i><br>".$_SESSION["r"];
?>
<br><br>
<b>Change your XNO account representative</b>
<br><br> and then
<br><br>
<a href=step-2.php><button>Click Here to Continue</button></a>
