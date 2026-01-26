<?php
include("../res/x5engine.php");
$nameList = array("8xt","pk3","x2t","vnt","7nm","jyl","43e","uzt","kck","jje");
$charList = array("S","5","3","Z","J","F","T","5","E","C");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
