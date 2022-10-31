<!DOCTYPE html>
<html lang="en">

<head>
	<title>MS - Test Drive Booking</title>
	<style>
body {
  background-image: url('bgimg.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
form
  {
  width: 40%;
  box-sizing: border-box;
  border: solid #00008B;
  background-color: #ADD8E6;
  color: black;
  }
</style>
</head>

<body>
<center>
	<font face="time new roman"><h1>Maruthi Suzuki - Car Test Drive Booking Reg</h1></font>

		<form action="tbdinsert.php" method="post">
		<pre>
		<font face="times new roman" size="3">
			
	Name:						<input type="text" name="drivername" id="drivername">


	DOB:					  <input type="date" name="birthday" id="birthday">


	Gender:						<input type=radio name=gender size=20 value="Male">Male    <input type=radio name=gender size=20 value="Male">Female


	Address:						<input type="text" name="address" id="Address">


	Email Address:				<input type="text" name="email" id="emailAddress">


Licence Number:		    <input type="number" name="quantity" id="quantity" min="60000" max="80000">


	Mode_of_Licence:				<input type=radio name=mode size=20 value="Learner Licence">Learner Licence    <input type=radio name=mode size=20 value="Permanent Licence">Permanent Licence


					<input type="submit" value="Submit">			<input type="reset" value="Reset">
		</form>
  		</font>
		</pre>

</body>

</html>
