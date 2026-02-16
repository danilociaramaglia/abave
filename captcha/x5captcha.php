<?php
include("../res/x5engine.php");
$nameList = array("alx","ls6","rj3","trz","y27","5kv","nkr","fp6","ekv","d8e");
$charList = array("L","6","H","Y","P","Y","4","H","V","M");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
