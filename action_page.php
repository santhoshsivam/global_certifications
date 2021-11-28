<?php 
    $f_name = $_POST['firstname'];
    $l_name = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $street_name = $_POST['street_name'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $comment = $_POST['comment'];
    $fromEmail = "santhoshsivam98@gmail.com";



    $to = $email;
    $subject = "An enquiry mail from the globalcertifications.in";
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: '.$fromEmail.'<'.$fromEmail.'>' . "\r\n".'Reply-To: '.$fromEmail."\r\n" . 'X-Mailer: PHP/' . phpversion();
$message = '<!doctype html>
			<html lang="en">
			<head>
				<meta charset="UTF-8">
				<meta name="viewport"
					  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
				<meta http-equiv="X-UA-Compatible" content="ie=edge">
				<title>Document</title>
			</head>
			<body>
			<span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">'.$message.'</span>
				<div class="container">
                 '.$commment.'<br/>
                    Regards<br/>
                  '.$fromEmail.'
				</div>
			</body>
			</html>';
      //$message = "It is check mail function ";
    $result = mail($to, $subject, $message, $headers);
  if ($result){
    echo '<script>alert("Email sent successfully !")</script>';
    echo '<script>window.location.href="index.html";</script>';
  }
  else {
    echo "It is not working and try again later";
  }

    $sent_email = "Hello this is from the website Global Certifications and someone is visited and enquired us :) \n
    Here's their information";
    $body = " Name : $f_name " . "$l_name \n
            Email : $email
            Phone Number : $phone
            Address : $street_name,\n
                    $city,
                    $state,
                    $pincode
    ";
  




?>