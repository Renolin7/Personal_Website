<?php
// $name = $_POST['name'];
// $visitor_email = $_POST['email'];
// $message = $_POST['message'];
// $subject = $_POST['subject'];
// $email_body = "User name: $name. \n".
//                  "User Email: $visitor_email.\n". 
//                     "User Message: $Message.\n";
// $to = "renolinjr@gmail.com";
// $headers = "From: renolinjr@gmail.com";
// mail($to,$subject,$email_body,$headers);
    



// header("Location: ../../index.html");
//get data from form 
echo "Thank You"; 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "renolinjr@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location: reno.html");
?>