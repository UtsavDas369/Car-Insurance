<?php
		include "../connection.php";
		$pn=$_POST['Policy_Num'];
		$cn=$_POST['Customer_Num'];
		$ac=$_POST['Agent_code'];
		$d=$_POST['DOC'];
		$p=$_POST['Product'];
		$sa=$_POST['Sum_assured'];
		$pp=$_POST['Payment_period'];
		$ip=$_POST['Ins_period'];
		$mode=$_POST['mode'];

		$fn=$_POST['Fine'];
		$la=$_POST['Lateness'];




		if ($mode=='MLY'){
			$pre = $sa/($ip*12);
			$ld = date('Y-m-d', strtotime($d. ' + 1 months'));
		}
		else if ($mode=='QLY'){
			$pre = $sa/($ip*4);
			$ld = date('Y-m-d', strtotime($d. ' + 3 months'));
			
		}
		else if ($mode=='YLY'){
			$pre = $sa/($ip);
			$ld = date('Y-m-d', strtotime($d. ' +  1 years'));
		}
		else if ($mode=='SSS'){
			$pre = $sa;
			$ld = $d;
		}
		
		$query="insert into policy_data(Policy_Num,Customer_Num,Agent_code,DOC,Product,Sum_Assured,Pay_Period,Ins_Period) values('$pn','$cn','$ac','$d','$p','$sa','$pp','$ip')";
		mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
		$query2="insert into premium(Policy_Num,Premium,Mode,Last_date) values('$pn','$pre','$mode','$ld')";
		mysqli_query($conn,$query2) or die($query2."Can't Connect to Query...");
		
				if($fn==0 && $la==0){
$d=date("Y-m-d");
			$r=time()%(100000000000);
			$query="insert into paid_premium(Receipt_Num,Receipt_Date,Policy_Num) values('$r','$d','$pn')";
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");	

}else{

$query3="insert into unpaid_premium(Policy_Num,Fine,Lateness) values('$pn','$fn','$la')";
		mysqli_query($conn,$query3) or die($query2."Can't Connect to Query...");


}
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
        <p>Registered To Premium Successfully <a href="../login/admindashboard.php" style="text-decoration: none; color #0986d9 !important;;">here </a> if you are not redirected within a few seconds.</p>
    </div>
    <script src="http://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        setTimeout(function () {
            window.location.replace("../login/admindashboard.php"); 
        }, 3000); 
    </script>   
</body>
</html>