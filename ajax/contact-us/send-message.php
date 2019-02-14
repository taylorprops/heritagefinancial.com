<?php

include_once($_SERVER['DOCUMENT_ROOT'].'includes/global.php');

if(isset($_POST['to_id'])) {
	$id = $_POST['to_id'];
}

$message = 'Received '.date('m/d/Y H:i:s').'<br>Name: '.trim($_POST['name']).'Phone: '.trim($_POST['phone']).'<br>Email: '.trim($_POST['email']).'<br>Message: '.trim(nl2br($_POST['message']));


if(isset($id)) {

	$loQuery = "select * from company.tbl_los where id = '".$id."'";
	$lo = $db -> select($loQuery);

    $insert = "insert into heritage_financial.messages (
        from_email,
        from_name,
        from_phone,
        message,
        message_type,
        sent_to_name,
        sent_to_email
    ) values (
        '".$db->quote(trim($_POST['name']))."',
        '".$db->quote(trim($_POST['phone']))."',
        '".$db->quote(trim($_POST['email']))."',
        '".$db->quote(trim(nl2br($_POST['message'])))."',
        'lo',
        '".$lo[0]['fullname']."',
        '".$lo[0]['lo_email']."'
    )";
    $resultsQuery = $db->query($insert);


    sendMail('', $lo[0]['lo_email'], trim($_POST['email']), 'Contact from website visitor', $message, '');
    //sendMail('', 'mike@taylorprops.com', trim($_POST['email']), 'Contact from website visitor', $message, '');

} else {

    $insert = "insert into heritage_financial.messages
	(
        from_email,
        from_name,
        from_phone,
        message,
        message_type
    ) values (
        '".$db->quote(trim($_POST['name']))."',
        '".$db->quote(trim($_POST['phone']))."',
        '".$db->quote(trim($_POST['email']))."',
        '".$db->quote(trim(nl2br($_POST['message'])))."',
        'office'
    )";
    $resultsQuery = $db->query($insert);

    sendMail('', 'info@heritagetitlemd.com', trim($_POST['email']), 'Contact from website visitor', $message, '');
	//sendMail('', 'mike@taylorprops.com', trim($_POST['email']), 'Contact from website visitor', $message, '');

}



?>
