<?php
	$customer[first_name] = $_POST['customer[first_name]'];
	$customer[last_name] = $_POST['customer[last_name]'];
	$customer[email] = $_POST['customer[email]'];
	$customer[password] = $_POST['customer[password]'];

	// Database connection
	$conn = new mysqli('localhost','root','','sunita fashion');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(customer[first_name], customer[last_name], customer[email], customer[password]) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $customer[first_name], $customer[last_name], $customer[email], $customer[password]);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
