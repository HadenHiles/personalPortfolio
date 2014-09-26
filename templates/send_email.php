<?
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $subject = $_REQUEST['subject'];
    $message = $_REQUEST['message'];
    $ok;

    if(empty($name)){
        $ok= false;
    }
    if(empty($email) && preg_match('^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$', $email) && empty($name) && empty($subject) && empty($message)){
        $_POST['error'] = 'Please ensure that are fields are filled out and the email provided is valid! Thank you :).'
        $ok= false;
    }
    if($ok){
        $message = 'Email: ' . $email . '<br /><br />' . $message;
        mail("hschnizel@gmail.com",$subject,$message,"From: $name\n");
    }
?>