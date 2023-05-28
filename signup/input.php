<p style="text-align: center;"><?php
		include "../connection.php";
		
		$a=$_POST['user'];
		$p=$_POST['pass'];
		$fn=$_POST['Firstname'];
		
		$ln=$_POST['Lastname'];
		$g=$_POST['Gender'];
		$con=$_POST['Contact_Number'];
		$query="insert into login(user,pass,Firstname,Lastname,Gender,Contact_Number) values('$a','$p','$fn','$ln','$g','$con')";
		mysqli_query($conn,$query) or die("ERROR!!!!!!.Please Go to Customer Registration And Register First...");
?></p>


<html>
<head>
	<title>Thank you!</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="TSW WebCoder">
</head>
<body>
    <div class="part-five part-four" id="Get-Started" style="display: flex; align-items: center; justify-content: center; background-size: auto !important;">
        <p>Thank you for Signing Up .To see ur details log in. Please click <a href="../index.php" style="text-decoration: none; color #0986d9 !important;;">here </a> if you are not redirected within a few seconds.</p>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        setTimeout(function () {
            window.location.replace("../index.php"); 
        }, 3000); 
    </script>   
</body>
</html>