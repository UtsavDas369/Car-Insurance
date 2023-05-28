<?php
		include "../connection.php";
		$fn=$_POST['Policy_Num'];
		$mn=$_POST['Fine'];
		$d=$_POST['Lateness'];
		
		$query="insert into unpaid_premium(Policy_Num,Fine,Lateness) values('$fn','$mn','$d')";
		mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
?>


<html>
<head>
	<title>Thank you!</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="TSW WebCoder">
</head>
<body>
    <div class="part-five part-four" id="Get-Started" style="display: flex; align-items: center; justify-content: center; background-size: auto !important;">
        <p>Thank you for reaching out to us. We will get back to you shortly. Please click <a href="../login/admindashboard.php" style="text-decoration: none; color #0986d9 !important;;">here </a> if you are not redirected within a few seconds.</p>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        setTimeout(function () {
            window.location.replace("../login/admindashboard.php"); 
        }, 3000); 
    </script>   
</body>
</html>