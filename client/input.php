<?php
		include "../connection.php";
		$fn=$_POST['First_Name'];
		$mn=$_POST['Middle_Name'];
		$d=$_POST['DOB'];
		$ln=$_POST['Last_Name'];
		$g=$_POST['Gender'];
		$a=$_POST['Address'];
		$p=$_POST['Pincode'];
		$con=$_POST['Contact_Number'];
		$mon=$_POST['Mother_Name'];
		$mos=$_POST['Mother_Status'];
		$fan=$_POST['Father_Name'];
		$fas=$_POST['Father_Status'];
		$ms=$_POST['Marital_Status'];
		$s=$_POST['Spouse'];
		$pl=$_POST['Plan'];
		$query="insert into customer(First_Name,Middle_Name,Last_Name,Gender,DOB,Address,Pincode,Contact_Number, Mother_Name, Mother_Status,Father_Name, Father_Status, Marital_status, Spouse,Plan) values('$fn','$mn','$ln','$g','$d','$a',$p,$con,'$mon','$mos','$fan','$fas','$ms','$s','$pl')";
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
        <p>Thank you for reaching out to us. We will get back to you shortly. Please click <a href="../index.php" style="text-decoration: none; color #0986d9 !important;;">here </a> if you are not redirected within a few seconds.</p>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        setTimeout(function () {
            window.location.replace("../index.php"); 
        }, 3000); 
    </script>   
</body>
</html>