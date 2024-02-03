<meta name="viewport" content="width=device-width, user-scalable=no">

<?php
include 'qrcode.php';
?>

<center>
<b><big>PPS: Pay-Per-Search</big></b><br>
<small>Replacing CAPTCHA with XNO micro-payments</small><br>
<small><i>An efficient way for BOTs & Humans to use the web</i></small>

<br><br>


<?php

session_start();
if($_SESSION["wallet"]=="")
{
?>
<a href=connect><button style="background-color:red;color:white;font-weight: bold;" > Connect Wallet </button></a>
<?php
}
else
{
echo "<b style='color:green'>Wallet Connected</b><br><small style='font-size: 9px'>".$_SESSION["wallet"]."</small>"; //<br>Balance = ".$balance." XNO";
}

?>







<br><br>

<form method=post onsubmit="return check()" action=search.php>
<input type=hidden name=w value="<?=$_SESSION["wallet"] ?>" required>
<input type=text name=q required placeholder="Enter keywords"><br><br>
<button> Search </button>
</form>


<img src='qr.php?s=qr-h&d=nano:nano_1yiqeaskez38key1iicnaxg5jrubrhk8btezgtcicq1cxy9ue55q6ok1zi93?amount=1000000000000000000000000' height=200>
<br>Scan QR & Pay 0.000001 XNO <small style="font-size: 9px">to:-<br>
nano_1yiqeaskez38key1iicnaxg5jrubrhk8btezgtcicq1cxy9ue55q6ok1zi93</small><br>
<br>- - OR - -<br><br>
<a target=_blank href="nano:nano_1yiqeaskez38key1iicnaxg5jrubrhk8btezgtcicq1cxy9ue55q6ok1zi93?amount=1000000000000000000000000">
<button> Click Here to Pay using Mobile Wallet </button>
</a>

<script>
function check()
{
if(!document.getElementsByName("w")[0].value)
{
    alert("First Connect Wallet");
return false;
}

}
</script>



