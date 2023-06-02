<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

include('connection.php');
 require 'vendor/autoload.php';

if(isset($_POST['submit']))
  {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $query = $_POST['query'];
    $msg = $_POST['message'];

    $send_mail = mysqli_query($con,"INSERT INTO consult(name, email, query, message) VALUES('$name', '$email', '$query', '$msg')");
    
if($send_mail)		
{
$mail = new PHPMailer(true);

try {
	$mail->SMTPDebug = 2;	
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = '8b148023e94938';
    $mail->Password = 'a410906e8a7fce';								
    
	
	$mail->setFrom('yogeshk.mane13@gmail.com', 'Govind Financial Counsultancy');		
	$mail->addAddress($email, $name);
	
	
	$mail->isHTML(true);								
	$mail->Subject = 'Thanks for contacting Govind Financial Counsultancy!';
	// $mail->Body = '<p>Dear, '.$name.' <br> Thank you for contacting. <br> 
    //         Your query is about : '.$query.' <br>
    //         And the message is : '.$msg.'<br>
    //         We will get back to you shortly!    </p>';

            $mail->Body = '<div><p>Dear, '.$name.' <br> Thank you for contacting. <br> 
            Your query is about : '.$query.' <br>
            And the message is : '.$msg.'<br>
            We will get back to you shortly!    </p>';

	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	
	echo "<script>alert('Mail Sent!');</script>";
	
	echo "<script>window.location.href = 'index.php';</script>";
} 

catch (Exception $e)
{
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	echo "<script>alert('Mail Not Sent!');</script>";
}


	}
}
else
{
	echo "<script>alert('Error!');</script>";

}
	
     


  ?>