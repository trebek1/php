<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

	// echo var_dump($_POST);
	$name = $_POST["name"]; 
	$email = $_POST["email"]; 
	$message = $_POST["message"]; 
	$email_body = ""; 
	$email_body = $email_body . "Name: " . $name . "\n"; 
	$email_body = $email_body . "Email: " . $email . "\n";
	$email_body = $email_body . "Message: " . $message . "\n";  



	header("Location: contact.php?status=thanks" );
	exit;
}
	?>


<?php 
$pageTitle = "Contact Mike"; 
$section = 'contact'; 
include('inc/header.php'); ?>

<div class='section page'>

	<div class = 'wrapper'>
		<h1> Contact </h1>

		<?php if(isset($_GET["status"]) AND $_GET["status"] == "thanks"){ ?> 

			<p> Thanks For the Email </p> 

		<?php } else { ?>


			<p> I&rsquo;d love to hear from you </p>
			<form method = 'post' action = "contact.php">
				<table>
				<tr>
					<th>
						<label for = 'name'> Name </label>
					</th>
					<td>
						<input type = 'text' name = 'name' id = 'name'> 
					</td>
				</tr>

				<tr>
					<th>
						<label for = 'email'> Email </label>
					</th>
					<td>
						<input type = 'text' name = 'email' id = 'email'> 
					</td>
				</tr>
				<tr>
					<th>
						<label for = 'message'> Message </label>
					</th>
					<td>
						<textarea name = 'message' id = 'message'> Default Text </textarea> 
					</td>
				</tr>
				</table>
				<input type = 'submit' value = "send"> 
			</form> 
		</div>

<?php } ?> 
</div>

<?php include('inc/footer.php'); ?> 