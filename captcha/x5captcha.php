<?php
include("../res/x5engine.php");
$nameList = array("gnp","6s4","nkr","3u6","fup","r8x","2mn","a6k","l8s","daa");
$charList = array("8","Z","Z","K","Y","3","F","H","M","P");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
