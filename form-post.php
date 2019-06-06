<?php 
if(isset($_POST['submit']) && $_POST['name'] != '' && $_POST['email'] != '' && $_POST['phone'] != '' && $_POST['message'] != '')
{
	$to = "shravan.sandiya@gmail.com";
	$subject = "Enquiry from contact form";
	$txt = "Hello,<br> Following are the detail of enquiry:<br> Name: '".$_POST['name']."'<br>Email: '".$_POST['email']."'<br>Phone: '".$_POST['phone']."'<br>Message: '".$_POST['message']."'";
	$headers = "From: webmaster@example.com" . "\r\n";

	mail($to,$subject,$txt,$headers);
	header("location:index.html");
}
?>