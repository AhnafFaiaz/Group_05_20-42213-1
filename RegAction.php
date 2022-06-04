<?php 

	$Fname = $_POST['Fname'];
	$Lname = $_POST['Lname'];
	$gender = isset($_POST['gender']) ? $_POST['gender'] : NULL;
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$country = isset($_POST['country']) ? $_POST['country'] : NULL;

	$message = "";
	if (empty($Fname)) {
		$message .= "First Name is Empty";
		$message .= "<br>";
	}
	if (empty($Lname)) {
		$message .= "Last Name is Empty";
		$message .= "<br>";
	}
	if (!isset($gender) or empty($gender)) {
		$message .= "Gender not Selected";
		$message .= "<br>";
	}
	if (empty($email)) {
		$message .= "Email is Empty";
		$message .= "<br>";
	}
	if (empty($mobile)) {
		$message .= "Mobileno is Empty";
		$message .= "<br>";
	}
	if (empty($address)) {
		$message .= "Street/House/Road is Empty";
		$message .= "<br>";
	}
	if (!isset($country) or empty($country)) {
		$message .= "Country not Seletect";
		$message .= "<br>";
	}

	if ($message === "") {
		echo "Registration Successful";
	}
	else {
		echo $message;
	}
?>