<?php
if (isset($_POST['submit']) && isset($_POST['name']) && isset(_POST['email'])) {
$name = $_POST['name'];
$email = $_POST['email'];

//send mail
$to = 'kevin.c388@gmail.com';
$subject = "Test website";
$body = '<html> 
            <body>
                <p>Name: '.$name.'</p>
                <br>
                <p>Email: '.$email.' </p>
            </body>
        </html>';
 $headers  ="From:".$name."<".$email.">\r\n";
 $headers .="reply-To:".$email."\r\n";
 $headers .="NINE-Version: 1.0\r\n";
 $headers .="Content-type: text/html; charset=utf-8";

//sending process
$send = mail($to, $subject, $body, $headers);
if ($send) {
    echo "<br>";
    echo "Thanks for contacting us! We will get back to you shortly.";
} else {
    echo "error";
}
}
?>

