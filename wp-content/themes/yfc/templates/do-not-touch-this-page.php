<?php
/*
 * Template Name: Redirection Template
 */
if ($_POST['contact'] == '' && $_POST['Email2'] == 'your@email.com') {
	if ((isset($_POST['name']) && $_POST['name'] != '')  && (isset($_POST['email']) && $_POST['email'] != '')) {
		$sendy_url = 'https://youthfencingchicago.com/newsletter';
		$list = 'KCKtMVgN8R9Nct3r892JSuJQ';
		$api_key = 'B2gtq3pwE2LGNYDfwuus';
		//$name 	=  filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		//$email 	=  filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
		$name = $_POST['name'];
		$email = $_POST['email'];
		$hp = $_POST['hp'];
		$IP = $_SERVER['REMOTE_ADDR'];
		$Referrer = $_SERVER['HTTP_REFERER'];
		$sendpostdata = http_build_query(
			array(
				'name' => $name,
				'email' => $email,
				'IPAddress' => $IP,
				'Referrer' => $Referrer,
				'hp' => $hp,
				'list' => $list,
				'api_key' => $api_key,
				'boolean' => 'true'
			)
		);

		$sendopts = array(
			'http' => array(
				'method'  => 'POST',
				'header'  => 'Content-type: application/x-www-form-urlencoded',
				'content' => $sendpostdata
			)
		);
		$sendcontext = stream_context_create($sendopts);
		$sendresult = file_get_contents($sendy_url . '/subscribe', false, $sendcontext);

		if ($sendresult) {
			if ($sendresult == "Some fields are missing.") {
				echo "Please fill Name and Email2";
			} else if ($sendresult == "Invalid email address.") {
				echo "Invalid email address";
			} else if ($sendresult == "Invalid list ID.") {
				echo "Your list ID is invalid";
			} else if ($sendresult == "Already subscribed.") {
				echo "You have already subscribed.";
			} else {
				echo "Thank you, You're subscribed!";
			}
		} else {
		}
	} else {
		echo "Please fill Name and Email";
	}
} else {
	echo "Please enter the correct Email";
}
