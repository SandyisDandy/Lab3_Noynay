<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$comment = $_POST['comment'];

        $servername = "192.168.150.213";
        $username = "webprogss211";
        $password = "fancyR!ce36";
        $dbname = "webprogss211";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = test_input($_POST["name"]);
			$email = test_input($_POST["email"]);
			$subject = test_input($_POST["subject"]);
			$comment = test_input($_POST["comment"]);
		  }
		  
		  function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		  }


	// Database connection
	$conn = new mysqli($servername,$username,$password,$dbname);
	if($conn->connect_error){ 
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into asnoynay_myguest(name, email, subject, comment) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $name, $email, $subject, $comment);
		$execval = $stmt->execute();
		echo $execval;
		echo "Sign up successfully...";
		$stmt->close();
		$conn->close();
       
	}
?>