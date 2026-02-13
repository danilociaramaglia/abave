<?php
include("../res/x5engine.php");
$nameList = array("hu8","5fk","2wd","f7h","yv4","j3z","4xl","vl4","r2a","edx");
$charList = array("M","D","S","M","R","A","7","2","J","H");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
