<?php    
    
include "../connection.php";    
    
$sql = "select * from paid_premium";    
$result = mysqli_query($conn,$sql);    
$sql1 = "select * from unpaid_premium";
$result1 = mysqli_query($conn,$sql1);  
?>    
<html>   
<style >
	

body{
	background-color: #21D4FD;
background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);

}

table{
	background-color: white;
	border-radius: 20px;
	border : 0;

}





 
 
</style> 
    <body>
	  
		
		
	<center>    
	<h1> Premium details</h1>
</center>
	<ul>
			<li style="font-size: 50px;"><a href="../login/admindashboard.php" >🏠</a></li>
		</ul>
		<center>
	<h2> Paid Premiums </h2>
</center>
	
        <table width = "100%"  cellspacing = "5" cellpadding = "5">    
            <tr>    
                <td>Receipt Number</td>    
                <td>Receipt Date</td>    
                <td>Policy_Num</td>    
				<td>Premium</td>    
				<td>Mode</td>    
				<td>Last Date</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Receipt_Num;?>  
				</td>  
				<td>  
					<?php echo $row->Receipt_Date;?>  
				</td>  
				<td>  
					<?php echo $row->Policy_Num;?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row->Policy_Num)
							echo $row2->Premium;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row->Policy_Num)
							echo $row2->Mode;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row->Policy_Num)
							echo $row2->Last_date;
					}	
					?>  
				</td>  
			</tr> 
		<?php }?>
        </table>
        <center>
		<h2> Unpaid Premiums </h2>
        </center>
        <table width = "100%"  cellspacing = "5" cellpadding = "5">    
            <tr>    
                <td>Policy_Num</td>    
				<td>Premium</td>    
				<td>Mode</td>    
				<td>Last Date</td>    
				<td>Fine</td>
				<td>Lateness</td>
            </tr>  
	<?php    
    
		while($row1 = mysqli_fetch_object($result1)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row1->Policy_Num;?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row1->Policy_Num)
							echo $row2->Premium;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row1->Policy_Num)
							echo $row2->Mode;
					}	
					?>  
				</td>  
				<td>  
					<?php
					$sql2 = "select * from premium";
					$result2 = mysqli_query($conn,$sql2);    
					while($row2 = mysqli_fetch_object($result2)){
						if($row2->Policy_Num==$row1->Policy_Num)
							echo $row2->Last_date;
					}	
					?>  
				</td>  
				<td>  
					<?php echo $row1->Fine;?>  
				</td>  
				<td>  
					<?php echo $row1->Lateness;?>  
				</td>  
				
			</tr> 
		<?php }?>
        </table>
    </body>    
</html>