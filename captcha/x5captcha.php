<?php
include("../res/x5engine.php");
$nameList = array("tf8","22r","vku","phf","lud","3a5","mng","p6m","nny","zjy");
$charList = array("V","6","U","U","Y","Y","E","H","H","J");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
