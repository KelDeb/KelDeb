<!DOCTYPE html>
<html>
<head>
<style>
    .error {color: Red;}

        h1{font-size: 40px;color: black}
        h2{color: black;font-size: 40px;}
        h3{color: black;font-size: 40px;}
        menu{text-align: center;
                padding: 400px;
                background-color: gold;
                color: black;}
        content{width: auto;background-color:black;color: black;margin: auto;}
        header{background-color: black;color:black}  
       
            .active {
                background-color: black;
            }
          header{background-color: black;}
            footer {
                text-align: center;
                padding: 3px;
                background-color: gold;
                color: black;
            }
</style>

   <title> Student Application</title>
   <script>
function validationForm() 
{    var x = document.forms["myForm"]["firstname"].value;
    if (x == "") {alert("Please provide a first name!");
        return false;}

	 var x = document.forms["myForm"]["lastname"].value;
    if (x == "") {alert("Please provide a last name!");
        return false;}
	 var x = document.forms["myForm"]["email"].value;
    if (x == "") {alert("Please provide an email!");
        return false;}
        var x = document.forms["myForm"]["address"].value;
    if (x == "") {alert("Please provide a street address!");
        return false;}
        var x = document.forms["myForm"]["city"].value;
    if (x == "") {alert("Please provide a city!");
        return false;}
        var x = document.forms["myForm"]["state"].value;
    if (x == "") {alert("Please provide a state!");
        return false;}
        var x = document.forms["myForm"]["zipcode"].value;
    if (x == "") {alert("Please provide a zip code in the format #####!");
        return false;}
	 var x = document.forms["myForm"]["cell"].value;
    if (x == "") {alert("Please provide a cell number!");
        return false;}
        var x = document.forms["myForm"]["graduationdate"].value;
    if (x == "") {alert("Please provide expected graduation date!");
        return false;}
	 var x = document.forms["myForm"]["KSUstudentposition"].value;
    if (x == "") {alert("Please select a position!");
        return false;}
	 
	 var value = document.forms["myForm"]["location"].value;
    if (value == "") {alert("Please select a campus location");
        return false;}

	var chks = document.getElementsByName('KSUdays[]');
	var hasChecked = false;
	for (var i = 0; i < chks.length; i++)
	{
	if (chks[i].checked)
	{
	hasChecked = true;
	break;
	}
}

if (hasChecked == false)
	{
	alert("Please select at least one day.");
	return false;
	}

return true;
  }

</script>


<!--Top Logo-->
<meta charset="utf-8">
    <title>CARIT - Center for Applied Research in Information Technology</title>
    <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
     <div id="menu">
         <div id="header"> 
             <a href="index.html">Home</a>
             <a href="faculty.html">About Us</a>
             <a href="resource.html">Resources</a>
             <a href="opportunities.html">Opportunities</a>
     </div>
<div id="content">
<hr>   
<center>
<h1 style="font-size:40px; text-align: center">Center for Applied Research in Information Technology </h1>    
<a href="http://ccse.kennesaw.edu/it" target="blank">
<img src="https://webstatic.kennesaw.edu/_omni/images/global/logo_black.png?v=1" align="center" width="auto" height="auto">
</a>
</center>
<hr>
<br>


<form name="myForm" action="actionform.php" onsubmit="return validateForm()" method="post">
<h4><u><b>For further consideration, please complete the required application below:</b></u></h4>
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
<b>Cell Number:  </b><span style="color: red">*</span><br>
<input type="text" name="cell"><br>
<br>
<b>Expected Graduation:  </b><span style="color: red">*</span><br>
<input type="radio" name="graduationdate" value="2023">2023<br>
<input type="radio" name="graduationdate" value="2024">2024<br>
<input type="radio" name="graduationdate" value="2025">2025<br>
<input type="radio" name="graduationdate" value="2026">2026<br>
<br>
<b>Which position are you applying for:  </b><span style="color: red">*</span><br><br>
<input type="radio" name="KSUstudentposition" value="Undergraduate, Web/Mobile Design"> Web/Mobile Design (Undergraduates Only)<br>
<input type="radio" name="KSUstudentposition" value="Undergraduate, Data Analytics"> Data Analytics (Undergraduates Only) <br>
<input type="radio" name="KSUstudentposition" value="Graduate, Data Analytics"> Data Analytics (Graduates Only) <br>
<br>
<br><b>How many days are you available to work:  </b><span style="color: red">*</span><br><br>
    <select name = "KSUdays"> 
    <option value="">Please select</option>
    <option value="One">One day week</option>
    <option value="Two">Two days a week</option>
    <option value="Three">Three days a week</option>
    <option value="Four">Four days a week</option>
    <option value="All Week">All week</option> 
</select><br>
<br>
<br>
<br><b>Which campus:  </b><span style="color: red">*</span><br><br>
        <input type="radio" name="location" value="Kennesaw">Kennesaw<br>
        <input type="radio" name="location" value="Marietta">Marietta<br>
        <input type="radio" name="location" value="Both">Both<br>
<br>
<br>


</select><br>
<br>
<input type="submit" value="Submit" /><br><br>
</form>

<footer>
    <p>Kennesaw State University | 1000 Chastain Road Kennesaw, GA 30144 | 470-KSU-INFO | Web Development Project for
    <a href="http://it5443.azurewebsites.net/"> IT 5443 Spr2022</a></p>
</footer>

