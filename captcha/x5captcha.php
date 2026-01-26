<?php
include("../res/x5engine.php");
$nameList = array("f27","da2","ltk","rvm","hgt","u27","pfn","fcn","8ys","lxf");
$charList = array("D","E","Z","G","G","P","P","G","4","Y");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
