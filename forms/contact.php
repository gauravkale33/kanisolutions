<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'contact@example.com';

  if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
    include( $php_email_form );
  } else {
    die( 'Unable to load the "PHP Email Form" Library!');
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  
  $contact->smtp = array(
    'host' => 'smtp.gmail.com',
    'username' => 'gkale94@gmail.com',
    'password' => 'BD881EFBCA7642DD91A89083B3D7701001C4',
    'port' => '2525'
  );
  

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();

///////////////////////////////////////////////////////////////////////////////
 /* $name = $_POST['fname'];
  $email =  $_POST['email'];
  $message = $_POST['message'];
  $to= 'gkale94@gmail.com';
  $subject=$_POST['subject'];

  $txt ="Name=". $name."\r\n Email=". $email."\r\n Message=". $message;
  $headers =" From:noreply@kaninfocom.com"."\r\n".
  "CC: gauravkale33@gmail.com";
  if($email!Null){
  	  mail($to,$subject,$txt,$headers);
  }
  header(alert("Thank you!!!");
*/
?>
