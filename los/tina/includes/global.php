<?php
$id = 159;

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Composer

use PHPMailer\PHPMailer\PHPMailer;


date_default_timezone_set('America/New_York');
include_once('vendor/autoload.php');

include('includes/config/Db.php');
$db = new Db();

$GLOB_LO_Query = "select * from company.tbl_los where id = '".$id."'";
$GLOB_LO = $db -> select($GLOB_LO_Query);

$licenses = '';
if($GLOB_LO[0]['lic1_state'] != '') {
    $licenses .=  $GLOB_LO[0]['lic1_state'].' Lic No.: '.$GLOB_LO[0]['lic1_num'].'<br>';
}
if($GLOB_LO[0]['lic2_state'] != '') {
    $licenses .=  $GLOB_LO[0]['lic2_state'].' Lic No.: '.$GLOB_LO[0]['lic2_num'].'<br>';
}

if($GLOB_LO[0]['lic3_state'] != '') {
    $licenses .=  $GLOB_LO[0]['lic3_state'].' Lic No.: '.$GLOB_LO[0]['lic3_num'];
}


$GLOB_LO_license = 'NMLS ID: '.$GLOB_LO[0]['nmls_lic'].'<br>'.$licenses;

function sendMail($priority, $to, $from, $subject, $body, $ccs) {

	$mail = new PHPMailer;

    $mail->isSMTP();
	$mail->Host = 'mail.tpmailserver.com';
	$mail->SMTPAuth = true;
	$mail->Username = 'mailer@mail.tpmailserver.com';
	$mail->Password = 'T0m@hawkT@ters';
	$mail->SMTPSecure = '';
	$mail->Port = 587;

	$mail->setFrom($from);
	$mail->addAddress($to);
	if(is_array($ccs)) {
		for($c=0;$c<count($ccs);$c++) {
			if(stristr($ccs[$c], '<')) {
				$cc = preg_replace('/^.*\<(.*)\>$/', '$1', $ccs[$c]);
				$mail->addCC($cc);
			} else {
				$cc = $ccs[$c];
			}
			$mail->addCC($cc);
		}
	} else {
		if(stristr($ccs, '<')) {
			$cc = preg_replace('/^.*\<(.*)\>$/', '$1', $ccs);
		} else {
			$cc = $ccs;
		}
		$mail->addCC($cc);
	}
	$mail->isHTML(true);

	$mail->Subject = $subject;
	$mail->Body    = $body;
	$mail->send();

}

?>
