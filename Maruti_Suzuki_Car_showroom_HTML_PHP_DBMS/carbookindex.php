<!DOCTYPE html>
<html lang="en">

<head>
	<title>MS - Car Registration</title>
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
	<font face="time new roman"><h1>Maruthi Suzuki - Car Registration</h1></font>

		<form action="carbookinsert.php" method="post">
		<pre>
		<font face="times new roman" size="3">

			Person Name:	            <input type="text" name="personname" id="personname">


	        	DOB:                     <input type="date" name="birthday" id="birthday">
	
	
Licence Number:	        <input type="number" name="quantity" id="quantity" min="60000" max="80000">


	Mode_of_Licence:<input type=radio name=mode size=20 value="Learner Licence">Learner Licence    <input type=radio name=mode size=20 value="Permanent Licence">Permanent Licence


	Gender:			<input type=radio name=gender size=20 value="Male">Male    <input type=radio name=gender size=20 value="Male">Female
		

	Address:		       <input type="text" name="address" id="Address">
		
		
	Email Address:	<input type="text" name="email" id="emailAddress">


	Car Name:		        
				<input type=radio name=carname size=20 value="Maruti Swift">Maruti Swift
					       <input type=radio name=carname size=20 value="Maruti Vitara Brezza">Maruti Vitara Brezza	
				   <input type=radio name=carname size=20 value="Maruti Baleno">Maruti Baleno	
				<input type=radio name=carname size=20 value="Maruti Dzire">Maruti Dzire
				      <input type=radio name=carname size=20 value="Maruti Wagon R">Maruti Wagon R
				<input type=radio name=carname size=20 value="Maruti Ertiga">Maruti Ertiga


	Car Color Addon:	
	  <input type=radio name=carcolor size=20 value="blue">Blue
	   <input type=radio name=carcolor size=20 value="Red">Red	
	       <input type=radio name=carcolor size=20 value="Gray">Gray	
										

				<input type="submit" value="Submit">			<input type="reset" value="Reset">
	
		</form>
		</font>
	</pre>

</body>

</html>
