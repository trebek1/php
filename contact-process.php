<pre><?php

// echo var_dump($_POST);
$name = $_POST["name"]; 
$email = $_POST["email"]; 
$message = $_POST["message"]; 
$email_body = ""; 
$email_body = $email_body . "Name: " . $name . "\n"; 

$email_body = $email_body . "Email: " . $email . "\n"; 

$email_body = $email_body . "Message: " . $message . "\n";  

echo $email_body; 

?> </pre>