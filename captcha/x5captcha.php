<?php
include("../res/x5engine.php");
$nameList = array("4r3","w35","uhr","yza","x6k","8f2","s2n","hjn","wz2","r6f");
$charList = array("C","6","Z","N","G","E","M","C","8","Z");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
