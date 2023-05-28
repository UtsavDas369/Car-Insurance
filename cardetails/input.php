<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
		include "../connection.php";
		$cn=$_POST['Contact_Number'];
		$comp=$_POST['company'];
		$mo=$_POST['model'];
		$ch=$_POST['chassisno'];
		$en=$_POST['engineno'];
		$c=$_POST['color'];
		$r=$_POST['registrationno'];
        $ed=$_POST['insuranceupto'];
        $ed = date('Y-m-d', strtotime('+1 years'));

		


$query="insert into cardetails(Contact_Number,company,model,chassisno,engineno,color,registrationno,insuranceupto) values('$cn','$comp','$mo','$ch','$en','$c','$r','$ed')";
		mysqli_query($conn,$query) or die("ERROR!!! Please Enter the details carefully!!!");
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