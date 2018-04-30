<?php


	//<!-- need to connect to accounts database at endpoint accounts.cpd50ukl3swz.us-east-2.rds.amazonaws.com --> 

	echo '<html lang="en">';
	echo '<head>';
	echo '<meta charset="utf-8">';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';
	echo '<meta name="description" content="Sign in for chatbot">';
	echo '<meta name="author" content="J. Isaac Cook">';
	echo '<title>Sign in for chatbot</title>';
	echo '<link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">';
	echo '<link href="CSS/signin.css" rel="stylesheet">';
	echo '</head>';
	echo '';

	//<!-- connect to accounts datadase -->
	$servername = "accounts.cpd50ukl3swz.us-east-2.rds.amazonaws.com";
	$username = "Icook";
	$password = "10994467";

	//<!-- create the connection -->
	//$conn = new mysqli($servername, $username, $password);
	//if ($conn->connect_error){
	//	die("Connection failed: " . $conn->connect_error);
	//}
	//echo 'Connected successfully.';

	//if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	//	require 'login.php';
	//}

	echo '<body class="text-center">';
	echo '<form method="post" action="login.php" >';
	echo '<h1 class="h2 mb-3 font-weight-normal">Anyware Chatbot</h1>';
	echo '<h2 class="h3 mb-3 font-weight-normal">Please Sign In</h2>';
	echo '<label for="inputUsername" class="sr-only">Username</label>';
	echo '<input type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>';
	echo '<label for="inputPassword" class="sr-only">Password</label>';
	echo '<input type="text" id="inputPassword" class="form-control" placeholder="Password" required>';
	echo '<button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>';
	echo '</form>';
	echo '';
	echo '</body>';
	echo '</html>';
?>
