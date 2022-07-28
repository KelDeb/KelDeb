<!DOCTYPE html>
<html>
<body>
<form name="myForm" action="datasubmit.php" onsubmit="return validateForm()" method="post">
<h2><u><b>Please Complete Required Application:</b></u></h5>
<span style="color: red">* Required Field.</span><br>
<br><b>First Name:</b><span style="color: red">*</span><br>
<input type="text" name="firstname"><br>
<br>
<b>Last Name:</b><span style="color: red">*</span><br>
<input type="text" name="lastname"><br>
<br>
<b>Email Address:</b><span style="color: red">*</span><br>
<input type="text" name="email"><br>
<br>
<b>Street Address:</b><span style="color: red">*</span><br>
<input type="text" name="address"><br>
<br>
<b>City:</b><span style="color: red">*</span><br>
<input type="text" name="city"><br>
<br>
<b>State:</b><span style="color: red">*</span><br>
<input type="text" name="state"><br>
<br>
<b>Zip Code:</b><span style="color: red">*</span><br>
<input type="text" name="zipcode"><br>
<br>
<b>Cell Number:</b><span style="color: red">*</span><br>
<input type="text" name="cell"><br>
<br>
<b>Expected Graduation:</b><span style="color: red">*</span><br>
<input type="text" name="graduationdate"><br>
<br>
<b>Which position are you applying for:</b><span style="color: red">*</span><br><br>
<input type="radio" name="KSUstudentposition" value="Undergraduate, Web/Mobile Design"> Web/Mobile Design (Undergraduates Only)<br>
<input type="radio" name="KSUstudentposition" value="Undergraduate, Data Analytics"> Data Analytics (Undergraduates Only) <br>
<input type="radio" name="KSUstudentposition" value="Graduate, Data Analytics"> Data Analytics (Graduates Only) <br>
<br>
<b>Which days are you available to work. Please select at least two days:</b><span style="color: red">*</span><br><br>
<input type="checkbox" name="KSUdays[]" value="Monday">Monday<br>
<input type="checkbox" name="KSUdays[]" value="Tuesday">Tuesday<br>
<input type="checkbox" name="KSUdays[]" value="Wednesday">Wednesday<br> 
<input type="checkbox" name="KSUdays[]" value="Thursday">Thursday<br>
<input type="checkbox" name="KSUdays[]" value="Friday">Friday<br>      
<br>
<b>Which campus:</b><span style="color: red">*</span><br> <br>
		<select name="location" class="required">
		<option value="">Please Select</option>
		<option value="Kennesaw">Kennesaw</option>
		<option value="Marietta">Marietta</option>
		<option value="Both Campuses">Both</option>
</select><br>
<br>
<input type="submit" value="Submit" /><br><br>
</form>

 </body>
</html>