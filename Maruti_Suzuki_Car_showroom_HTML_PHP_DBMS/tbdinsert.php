<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => carshowroom_db
		$conn = mysqli_connect("localhost", "root", "", "carshowroom_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 7 values from the form data(input)
		$drivername = $_REQUEST['drivername'];
		$birthday = $_REQUEST['birthday'];
		$quantity = $_REQUEST['quantity'];
		$mode = $_REQUEST['mode'];
		$gender = $_REQUEST['gender'];
		$address = $_REQUEST['address'];
		$email = $_REQUEST['email'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO testdrive VALUES ('$drivername','$birthday','$quantity','$mode','$gender','$address','$email')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
			. "For Confirmation Verify the Given data\n"
			. "Click print to take a copy for Future Verification</h3>";

			echo nl2br("\nName:		$drivername\nDOB:		 $birthday\nLicence No:		$quantity\nMode of Licence: "
				. "		$mode\nGender:		 $gender\nAddress:		 $address\nEmail Id:	 $email");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
		<br><br><br>
		<button onclick="window.print();">Print</button>
		<a href="Main Home.html"><button>Back To Home</button></a>
	</center>
</body>

</html>
