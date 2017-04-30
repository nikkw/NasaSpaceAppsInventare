<?php

if(isset($_POST)){
	$name = $_POST['name'];
	$pCode = $_POST['postal_code'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$link = mysqli_connect('localhost', 'root', '', 'test');

	if($link){
		$sql = "INSERT INTO subs(name, postal_code, email, phone) VALUES('$name', '$pCode', '$email', '$phone')";

		mysqli_query($link, $sql);

		mysqli_close($link);

		echo 1;

		return;
	}
}

echo 0;

?>''