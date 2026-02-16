<?php
include("../res/x5engine.php");
$nameList = array("vlt","6tg","dxz","je6","jz2","ulk","rxe","7hr","n3d","u8p");
$charList = array("A","3","8","3","V","W","R","P","8","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
