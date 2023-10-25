<?php
/*
 * Template Name: Redirection Template
 */
$sendy_url = 'https://youthfencingchicago.com/newsletter';
$list = 'KCKtMVgN8R9Nct3r892JSuJQ';
$api_key = 'B2gtq3pwE2LGNYDfwuus';
$recaptcha_secret = "6LdGoD4oAAAAAI-9666VkhutEosm-tL_9ROPHQvs";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
	$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $recaptcha_secret . "&response=" . $_POST['g-recaptcha-response']);
	$response = json_decode($response, true);
	if ($response["success"] === true) {
		if ($_POST['contact'] == '' && $_POST['Email2'] == 'your@email.com') {
			if ((isset($_POST['name-news']) && $_POST['name-news'] != '')  && (isset($_POST['email-news']) && $_POST['email-news'] != '')) {

				$name = filter_input(INPUT_POST, 'name-news', FILTER_UNSAFE_RAW);
				$email = filter_input(INPUT_POST, 'email-news', FILTER_VALIDATE_EMAIL);
				$hp = $_POST['hp'];
				$IP = $_SERVER['REMOTE_ADDR'];
				$Referrer = $_SERVER['HTTP_REFERER'];
				$sendpostdata = http_build_query(
					array(
						'name-news' => $name,
						'email-news' => $email,
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
				$sendcontext  = stream_context_create($sendopts);
				$sendresult = file_get_contents($sendy_url . '/subscribe', false, $sendcontext);
				if ($sendresult) {
					if ($sendresult == "Some fields are missing.") {
						echo "Please fill Name and Email";
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
					echo "Sorry, unable to subscribe. Please try again later!";
				}
			} else {
				echo "Please fill Name and Email";
			}
		} else {
			echo "Please enter the correct Email";
		}
	} else {
		echo "Please make sure you're not a Robot";
	}
} else {
}
