<?php
	$fullName = $_POST['fullName'];
	$email = $_POST['email'];
    	$number = $_POST['number'];
	$groupsize = $_POST['groupsize'];
	$notes = $_POST['notes'];

	// Database connection
	$conn = new mysqli('localhost','id22091158_root','Ananth@2003','id22091158_karabu');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(fullName, email, number, groupsize, notes) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("ssiis", $fullName, $email, $number, $groupsize, $notes);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
