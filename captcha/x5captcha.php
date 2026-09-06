<?php
include("../res/x5engine.php");
$nameList = array("u3u","tc4","afr","jgl","zpz","ynn","ctw","tht","erm","uh7");
$charList = array("Y","N","X","2","6","5","H","7","7","Z");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
