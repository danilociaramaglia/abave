<?php
include("../res/x5engine.php");
$nameList = array("zze","caw","hus","5wu","ltx","jgj","h4m","jgx","8mn","5g2");
$charList = array("6","G","G","L","K","T","X","G","C","K");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
