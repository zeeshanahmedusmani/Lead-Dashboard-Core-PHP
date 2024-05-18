<?php    
// $headers  = "From: zeeshanqha73@gmail.com\r\n"; 
//     $headers .= "Content-type: text/html\r\n";
// mail('zeeshanahmed26@hotmail.com', 'test email', 'test body', $headers);
// echo "done";
// exit;

include_once("php-mailer/PHPMailerAutoload.php");
// 	echo "<pre>";
// 	print_r($_POST);
// 	exit();
	
	$from = $_POST['email'];
    $subject = "Signup Hire Exam Takers";

	$ip = $_SERVER['SERVER_ADDR'];
	$referer = $_POST['referer'];
	$name = $_POST['name'];
	$page = $_POST['page'];
	$email = $_POST['email'];
	$number = $_POST['phone'];
	$country = $_POST['country'];
	$postal_code = $_POST['postal_code'];
	$interest = $_POST['interest'];
	$budget = $_POST['budget'];
	$course = $_POST['course'];
	$description = $_POST['description'];
	$description2 = $_POST['description2'];
	$services = $_POST['services'];
	$package_name = $_POST['package_name'];
	$lead_area = $_POST['lead_area'];
	$locationURL = $_POST['locationURL'];

		
	
    //begin of HTML message 
	$message ="
	<html> 
	  <body> 
	    <div>
	        <h4>Signup Hire Exam Takers</h4><br>";
            $message .="<b>IP Address:</b> ".$ip."<br/>";
	        if (isset($page) && !empty($page)) {
	        	$message .="<b>Page:</b> ".$page."<br/>";
	        }
	        if (isset($referer) && !empty($referer)) {
	        	$message .="<b>Page URL:</b> ".$referer."<br/>";
	        }
	        if (isset($package_name) && !empty($package_name)) {
	        	$message .="<b>Package Name:</b> ".$package_name."<br/>";
	        }
	        if (isset($lead_area) && !empty($lead_area)) {
	        	$message .="<b>Price:</b> ".$lead_area."<br/>";
	        }
	        if (isset($name) && !empty($name)) {
	        	$message .="<b>Name:</b> ".$name."<br/>";
	        }
	        if (isset($email) && !empty($email)) {
				$message .="<b>Email:</b> ".$email."<br/>";
	        }
	        if (isset($number) && !empty($number)) {
	        	$message .="<b>Number: </b> ".$number."<br/>";
	        }
	        if (isset($postal_code) && !empty($postal_code)) {
	        	$message .="<b>Postal Code: </b> ".$postal_code."<br/>";
	        }
	        if (isset($country) && !empty($country)) {
				$message .="<b>Country: </b> ".$country."<br/>";
	        }
	        if (isset($interest) && !empty($interest)) {
				$message .="<b>Interest: </b> ".$interest."<br/>";
	        }
	        if (isset($course) && !empty($course)) {
				$message .="<b>Course: </b> ".$course."<br/>";
	        }
	        if (isset($budget) && !empty($budget)) {
				$message .="<b>Budget: </b> ".$budget."<br/>";
	        }
	        if (isset($description) && !empty($description)) {
				$message .="<b>Description: </b> ".$description."<br/>";
	        }
	        if (isset($description2) && !empty($description2)) {
				$message .="<b>Description 2: </b> ".$description2."<br/>";
	        }
	        if (isset($services) && !empty($services)) {
				$message .="<b>Services: </b> ".$services."<br/>";
	        }
	        if (isset($f1) && !empty($f1)) {
				$message .="<b>WHAT ARE YOUR WEBSITE NEEDS? </b> ".$f1."<br/>";
	        }
	        if (isset($other1) && !empty($other1)) {
				$message .="<b>WHAT ARE YOUR WEBSITE NEEDS? </b> ".$other1."<br/>";
	        }
	        if (isset($f2) && !empty($f2)) {
				$message .="<b>WHAT ARE YOUR WEBSITE NEEDS? </b> ".$f2."<br/>";
	        }
	        if (isset($other2) && !empty($other2)) {
				$message .="<b>WHAT ARE YOUR WEBSITE NEEDS? </b> ".$other2."<br/>";
	        }
	        if (isset($f3) && !empty($f3)) {
				$message .="<b>WHAT TYPE OF BUSINESS IS THIS FOR? </b> ".$f3."<br/>";
	        }
	        if (isset($other3) && !empty($other3)) {
				$message .="<b>WHAT TYPE OF BUSINESS IS THIS FOR? </b> ".$other3."<br/>";
	        }
	        if (isset($f4) && !empty($f4)) {
				$message .="<b>WHAT INDUSTRY DO YOU OPERATE IN? </b> ".$f4."<br/>";
	        }
	        if (isset($other4) && !empty($other4)) {
				$message .="<b>WHAT TYPE OF BUSINESS IS THIS FOR? </b> ".$other4."<br/>";
	        }
	        if (isset($f5) && !empty($f5)) {
				$message .="<b>WHAT IS YOUR ESTIMATED BUDGET FOR THIS PROJECT? </b> ".$f5."<br/>";
	        }
	    $message .="</div>";	    
	  $message .="</body>";
	$message .="</html>";
   //end of message 
    $headers  = "From: $from\r\n"; 
    $headers .= "Content-type: text/html\r\n";
//      echo "<pre>";
// 	print_r($message);
// 	exit();
    //options to send to cc+bcc 
    //$headers .= "Cc: [email]maa@p-i-s.cXom[/email]"; 
    //$headers .= "Bcc: [email]email@maaking.cXom[/email]"; 
    $mail = new PHPMailer;
	$mail->setFrom('admin@hireexamtakers.com', 'Hire Exam Takers');
	$mail->addAddress('info@hireexamtakers.com');     // Add a recipient
// 	$mail->addCC('zeeshanahmed26@hotmail.com');
// 	$mail->addCC('support@hireexamtakers.com');
	$mail->addCC('swiftreflex2021@gmail.com');
// 	$mail->addBCC('frank@hireexamtakers.com');
// 	$mail->addBCC('zayn@hireexamtakers.com');
// 	$mail->addBCC('mark@hireexamtakers.com');
// 	$mail->addBCC('samad@hireexamtakers.com');
	$mail->Subject = 'Leads - Hire Exam Takers';
	$mail->Body    = $message;
	$mail->IsHTML(true);
	$mail->send();
// 	echo "Done";
    // now lets send the email. 
    // mail($to, $subject, $message, $headers);
    // mail($to2, $subject, $message, $headers);
    	$con = mysqli_connect("localhost","gothqccr_hireexamtakers_user",")kb)4CT]knsN","gothqccr_hireexamtakers_db") or die('Not Connected');

	
	$query="insert into leads
	(ip,referer,name,page,email,phone,country,postal_code,interest,budget,course,description,description2,package_name,lead_area,locationURL)values
	('".$ip."','".$referer."','".$name."','".$page."','".$email."','".$number."','".$country."','".$postal_code."','".$interest."','".$budget."','".$course."','".$description."','".$description2."','".$package_name."','".$lead_area."','".$locationURL."')";
	$row = mysqli_query($con , $query);
// echo $query;
// exit;
// 	$param['status'] = 1;
//     echo json_encode($param);
	header('location: https://hireexamtakers.com/thank-you');
?>