<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'site_id' => 'E017384F3C3808FE68634D564A09C763',
	'url' => 'https://danilociaramaglia.github.io/abave/',
	'homepage_url' => 'https://danilociaramaglia.github.io/abave/index.html',
	'icon' => '',
	'version' => '2026.2.5.0',
	'sitename' => 'Abave',
	'lang_code' => 'it-IT',
	'rtl' => false,
	'public_folder' => '',
	'salt' => '0gxsozd681e44q3ahrwpnprt5iz2c0f392zja9',
	'common_email_sender_addres' => 'danilo214@alice.it',
	'enable_sender_header' => true,
	'date_format' => 'dd MMM yyyy',
	'date_format_ext' => 'dddd dd MMM yyyy',
	'date_format_no_day' => 'MMM yyyy',
	'date_format_no_day_ext' => 'MMM yyyy'
);
/*
|-------------------------------
|	BREAKPOINTS
|-------------------------------
*/

$imSettings['breakpoints'] = array(
	array("name" => "Desktop", "hash" => "64fc08783617d04d904ff96094f48dc9", "start" => "max", "end" => 1500.0, "fluid" => false),
	array("name" => "Breakpoint 1", "hash" => "5657496af3440f53ff8a52cd1aadc400", "start" => 1499.9, "end" => 1150.0, "fluid" => false),
	array("name" => "BreakPoint_7qsyfiro", "hash" => "f1c1b18e3e77458754e7fa151a5ebafd", "start" => 1149.9, "end" => 950.0, "fluid" => false),
	array("name" => "Mobile", "hash" => "d6b072faa3ac87eabff241f8d95d2937", "start" => 949.9, "end" => 720.0, "fluid" => false),
	array("name" => "Mobile Fluid", "hash" => "5ecdcca63de80fd3d4fbb36295d22b7d", "start" => 719.9, "end" => 0.0, "fluid" => true),
);
/*
|-------------------------------
|	PASSWORD POLICY
|-------------------------------
*/

$imSettings['password_policy'] = array(
	'required_policy' => false,
	'minimum_characters' => '6',
	'include_uppercase' => false,
	'include_numeric' => false,
	'include_special' => false
);
/*
|-------------------------------
|	Captcha
|-------------------------------
*/ImTopic::$captcha_code = "		<div class=\"x5captcha-wrap\">
			<label for=\"97inzz5e-imCpt\">Parola di controllo:</label><br />
			<input type=\"text\" id=\"97inzz5e-imCpt\" class=\"imCpt\" name=\"imCpt\" maxlength=\"5\" />
		</div>
";


$imSettings['admin'] = array(
	'icon' => 'admin/images/logo_g4uxnljv.png',
	'notification_public_key' => 'BMPsl_Ur2qppehFvGOK-7zbhiKqaqtcmMHyeKh05MrmHM1CiD5LU0I8P9uMG3dl_klSbwHJr8WmtUyuc4SdspFg',
	'notification_private_key' => '1ja2Me1wASMGXT-0vepgGykWdjEQDvIyIDq1NhOWfi4',
	'notification_dbprefix' => 'w5_fs12zlai_notifications_',
	'enable_notifications' => false,
	'theme' => 'orange',
	'extra-dashboard' => array(),
	'extra-links' => array()
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();
$ecommerce = Configuration::getCart();
// Setup the coupon data
$couponData = array();
$couponData['products'] = array();
// Setup the cart
$ecommerce->setPublicFolder('');
$ecommerce->setCouponData($couponData);
$ecommerce->setSettings(array(
	'page_url' => 'https://danilociaramaglia.github.io/abave/',
	'force_sender' => false,
	'mail_btn_css' => 'display: inline-block; text-decoration: none; color: rgba(0, 0, 0, 1); background-color: rgba(192, 192, 192, 1); padding: 8px 4px 8px 4px; border: solid; border-block-color: rgba(169, 169, 169, 1) rgba(169, 169, 169, 1); border-inline-color: rgba(169, 169, 169, 1) rgba(169, 169, 169, 1); border-width: 1px; border-radius: 0px; ',
	'email_opening' => 'Gentile Cliente,<br /><br />Ringraziandola per il Suo ordine, le ricordiamo che siamo in attesa del pagamento.<br /><br />Qui di seguito può trovare l\'elenco dei prodotti ordinati, i dati di fatturazione e spedizione e le istruzioni per poter effettuare il pagamento.',
	'email_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale.',
	'email_payment_opening' => 'Gentile Cliente,<br /><br />Ringraziandola per il Suo acquisto, le confermiamo che abbiamo ricevuto il suo pagamento e che l’ordine verrà evaso il prima possibile.<br /><br />Qui di seguito può trovare l\'elenco dei prodotti ordinati e i dati di fatturazione e spedizione.',
	'email_payment_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale',
	'email_digital_shipment_opening' => 'Gentile Cliente,<br /><br />Ringraziandola per il Suo acquisto le inviamo l\'elenco dei download link relativo ai prodotti ordinati:',
	'email_digital_shipment_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale',
	'email_physical_shipment_opening' => 'Gentile Cliente,<br />ringraziandola per il Suo acquisto, le confermiamo che l’ordine è stato correttamente evaso e la merce è stata spedita.<br /><br />Qui di seguito può trovare l\'elenco dei prodotti ordinati:',
	'email_physical_shipment_closing' => 'Rimaniamo a Sua disposizione per ulteriori informazioni.<br /><br />Cordiali Saluti, Staff Commerciale',
	'sendEmailBeforePayment' => true,
	'sendEmailAfterPayment' => false,
	'useCSV' => false,
	'header_bg_color' => 'rgba(37, 58, 88, 1)',
	'header_text_color' => 'rgba(255, 255, 255, 1)',
	'cell_bg_color' => 'rgba(255, 255, 255, 1)',
	'cell_text_color' => 'rgba(0, 0, 0, 1)',
	'availability_reduction_type' => 1,
	'border_color' => 'rgba(211, 211, 211, 1)',
	'owner_email' => '',
	'vat_type' => 'included',
	'availability_image' => ''
));

$ecommerce->setPriceFormatData(array(
	'decimals' => 2,
	'decimal_sep' => '.',
	'thousands_sep' => '',
	'currency_to_right' => true,
	'currency_separator' => ' ',
	'show_zero_as' => '0',
	'currency_symbol' => '€',
	'currency_code' => 'EUR',
	'currency_name' => 'Euro',
));

$ecommerce->setDigitalProductsData(array());
$ecommerce->setProductsData(array());
$ecommerce->setSlugToProductIdMap(array());
$ecommerce->setCategoriesData(array(
	'z3dx83py' => array(
		'id' => 'z3dx83py',
		'name' => 'Nuova Categoria',
		'containsProductsWithProductPage' => false,
		'products' => array(),
		'categories' => array()
	)
));
$ecommerce->setCommentsData(array(
	'enabled' => false,
	'type' => "websitex5",
	'db' => '',
	'table' => '',
	'prefix' => 'x5productPage_',
	'comment_type' => "commentandstars"
));
$ecommerce->setPaymentData(array(
	'8dkejfu5' => array(
		'id' => '8dkejfu5',
		'name' => 'Bonifico Bancario',
		'description' => 'Pagamento posticipato tramite Bonifico Bancario.',
		'email_text' => 'Qui di seguito sono riportati i dati necessari per effettuare il pagamento tramite Bonifico Bancario:

XXX YYY ZZZ

Le ricordiamo che, una volta effettuato il pagamento, è necessario inviare la copia contabile insieme al Numero di Ordine.',
		'enableAfterPaymentEmail' => false
	)));
$ecommerce->setShippingData(array(
	'j48dn4la' => array(
		'id' => 'j48dn4la',
		'name' => 'Posta',
		'description' => 'La merce verrà consegnata in 3-5 giorni lavorativi.',
		'email_text' => 'Spedizione tramite Posta.\\nLa merce verrà consegnata in 3-5 giorni lavorativi.',
		'tracking_type' => 'none'
	),
	'hdj47dut' => array(
		'id' => 'hdj47dut',
		'name' => 'Corriere Espresso',
		'description' => 'La merce verrà consegnata in 1-2 giorni lavorativi.',
		'email_text' => 'Spedizione tramite Corriere Espresso.\\nLa merce verrà consegnata in 1-2 giorni lavorativi.',
		'tracking_type' => 'none'
	)));

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------------------------------------------------------------------
|	Dynamic Objects SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['dynamicobjects'] = array(	'template' => array(
),
	'pages' => array(

	));


/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'html';
$ImMailer->exposeWsx5 = true;
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 Professional 2026.2.5 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#C0C0C0" style="background-color: #C0C0C0;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px; border-collapse: separate;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; font: normal normal normal 8pt \'Tahoma\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; width: 700px; border-style: solid; border-color: rgba(128, 128, 128, 1) rgba(128, 128, 128, 1) rgba(128, 128, 128, 1) rgba(128, 128, 128, 1); border-top-width: 1px; border-right-width: 1px; border-bottom-width: 0; border-bottom: none; border-left-width: 1px; border-top-left-radius: 0px; border-top-right-radius: 0px;  padding-top: 25px;  padding-bottom: 25px; padding-left: 25px; padding-right: 25px;  background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '<tr><td id="imEmailIcons" style="background-color: #FFFFFF;border-left: 1px solid rgba(128, 128, 128, 1); border-right: 1px solid rgba(128, 128, 128, 1);  padding-top: 25px;  padding-bottom: 25px; padding-left: 15px; padding-right: 15px;  text-align: center;  min-height: 300px; " width="700"></td></tr>' . "\n\t" . '<tr><td id="imEmailFooter" style="font: normal normal normal 7pt \'Tahoma\'; color: #000000; background-color: transparent; text-decoration: none; text-align: center;  width: 700px;border-style: solid; border-block-color: rgba(128, 128, 128, 1) rgba(128, 128, 128, 1); border-inline-color: rgba(128, 128, 128, 1) rgba(128, 128, 128, 1); border-top-width: 0; border-top: none; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;  padding-top: 25px;  padding-bottom: 25px; padding-left: 25px; padding-right: 25px;  background-color: #FFFFFF" width="700px">' . "\n\t\t" . 'Questo messaggio di posta elettronica contiene informazioni rivolte esclusivamente al destinatario sopra indicato.<br>Nel caso aveste ricevuto questo messaggio di posta elettronica per errore, siete pregati di segnalarlo immediatamente al mittente e distruggere quanto ricevuto senza farne copia.' . "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodyTextColorOdd = '#000000';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#C0C0C0';
$ImMailer->emailContentStyle = 'font: normal normal normal 8pt \'Tahoma\'; color: #000000; background-color: #FFFFFF; text-decoration: none; text-align: left; ';
$ImMailer->emailContentFontFamily = 'font-family: Tahoma;';

// End of file x5settings.php