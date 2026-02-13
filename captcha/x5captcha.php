<?php
include("../res/x5engine.php");
$nameList = array("lat","sw4","8aa","trt","crk","8es","jel","ljf","8c2","c8y");
$charList = array("M","J","Y","4","G","7","H","X","M","S");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
