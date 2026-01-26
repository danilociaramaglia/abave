<?php
include("../res/x5engine.php");
$nameList = array("anc","agl","ast","45s","lzr","6v4","fcv","kls","gnk","car");
$charList = array("A","4","Z","N","A","C","Z","U","C","Z");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
