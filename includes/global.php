<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Composer

use PHPMailer\PHPMailer\PHPMailer;


date_default_timezone_set('America/New_York');
include_once($_SERVER['DOCUMENT_ROOT'].'vendor/autoload.php');

include($_SERVER['DOCUMENT_ROOT'].'includes/config/Db.php');
$db = new Db();

$loQuery = "select * from company.tbl_los where active = 'yes' and id != 95 order by proc";
$lo = $db -> select($loQuery);
$loCount = count($lo);


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

use Jaybizzle\CrawlerDetect\CrawlerDetect;
if(!isset($_SESSION['tracked'])) {

	$CrawlerDetect = new CrawlerDetect;
	if(!$CrawlerDetect->isCrawler()) {
		tracking($_GET['email'], $_SERVER['HTTP_REFERER'], $_GET['src'], $_SERVER['REMOTE_ADDR'], $_GET['page']);
	}

}

function tracking($email, $referrer, $src, $ip, $page) {

    global $db;

    $src = strtolower($src);
	$email = strtolower($email);

    if($src == 'recruitlos') {
        $source = 'Recruiting Email - HF - To LOs';
    } else if($src == 'recruitlosouragents') {
        $source = 'Recruiting Email - HF - To Our Agents';
    } else if($src == 'recruitlosallagents') {
        $source = 'Recruiting Email - HF - To All Agents';
    } else if($src == 'hftoagents') {
        $source = 'Our Services Email - To all Agents';
    }

	if($page) {
		if($page == 'careers') {
			$goto = '/careers.html';
		} else if($page == 'apply') {
			$goto = '/apply-for-loan.html';
		}
	}


    if($email != '' && $email != '%%Email%%') {
        // Get prospect details
    	$leadQuery = "Select * from marketing.emails where email = '".$db -> quote($email)."'";
    	$lead =  $db -> select($leadQuery);

    	$name = $lead[0]['name'];
    	$email = $lead[0]['email'];
    	$phone = $lead[0]['phone'];
    	$company = $lead[0]['company'];



        $existsProspectsQuery = "Select * from company.prospects where p_email = '".$db -> quote($email)."'";
        $existsProspects =  $db -> select($existsProspectsQuery);

 		$addVisitorQuery = "INSERT INTO `marketing`.`site_visitors`(
			`site`,
			`visitor_name`,
			`visitor_email`,
			`visitor_phone`,
			`visitor_company`,
			`referrer`,
			`visitor_source`,
			`visitor_ip`,
			`visitor_type`
		)
			VALUES
		(
			'heritagefinancial.com',
			'".$name."',
			'".$email."',
			'".$phone."',
			'".$company."',
			'".$referrer."',
			'".$source."',
			'".$ip."',
			'lo'
		)";
		$queryResults = $db -> query($addVisitorQuery);

		// if already there
        if(count($existsProspects) > 0) {

		    header("Location: /careers.html");

        } else {

			// Add to prospects
	        $add = "insert into company.prospects (p_name, p_email, p_phone, p_source, p_status, p_referrer, p_type) values ('".$name."', '".$email."', '".$phone."', '".$source."', 'live', '".$referrer."', 'lo')";
	        $resultsQuery =  $db -> query($add);
			header("Location: /careers.html");

		}

    } else {
		// If no email just add them to visitors
		$addVisitorQuery = "INSERT INTO `marketing`.`site_visitors`(
			`site`,
			`referrer`,
			`visitor_ip`
		)
			VALUES
		(
			'heritagefinancial.com',
			'".$referrer."',
			'".$ip."'
		)";
		$queryResults = $db -> query($addVisitorQuery);

	}
	$_SESSION['tracked'] = 'yes';

	if($goto) {
		header("Location: ".$goto);
	}
}
?>
