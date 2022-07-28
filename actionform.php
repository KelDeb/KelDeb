<!DOCTYPE html>
<html>
<head>
    <style>
        .error {color: Red;}
           footer {
                text-align: center;
                padding: 3px;
                background-color: gold;
                color: black;
            }
</style>

    <title>PHP Form Processing</title>
<meta charset="utf-8">
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
       <br>
       
<body>
  
    
    <h3 style="font-size: 30px; text-align: center;">Student Application Confirmation</h3>
    <br><b><center>Congratulations! Your application has been submitted. You should receive a response within two weeks.</b><br><br></center>



    <p>First Name: <?php echo $_POST["firstname"]?></p>
    <p>Last Name: <?php echo $_POST["lastname"]?></p>
    <p>Email Address: <?php echo $_POST["email"]?></p>
    <p>Street Address: <?php echo $_POST["address"]?></p>
    <p>City: <?php echo $_POST["city"]?></p>
    <p>State: <?php echo $_POST["state"]?></p>
    <p>Zip Code: <?php echo $_POST["zipcode"]?></p>
    <p>Cell Number: <?php echo $_POST["cell"]?></p>
    <p>Expected Graduation: <?php echo $_POST["graduationdate"]?></p>
    <p>Which position are you applying for: <?php echo $_POST["KSUstudentposition"]?></p>
    <p>How many days are you available to work:  <?php echo $_POST["KSUdays"]?></p>
    <p>Which campus: <?php echo $_POST["location"]?></p>
<br>
<br>
<br>
<footer>
    <p>Kennesaw State University | 1000 Chastain Road Kennesaw, GA 30144 | 470-KSU-INFO | Web Development Project for
    <a href="http://it5443.azurewebsites.net/"> IT 5443 Spr2022</a></p>
</footer>


</body>
</html>