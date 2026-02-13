<?php
include("../res/x5engine.php");
$nameList = array("vsj","fdk","p7e","cy3","d38","r8k","4hp","6su","u8e","p54");
$charList = array("X","R","A","5","6","L","C","3","S","P");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
