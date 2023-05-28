<?php    
    
include "../connection.php";        
$sql = "select * from customer";    
$result = mysqli_query($conn,$sql);    
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
       <h1><center>Customer Data</center></h1>
		<ul>
			<li ><a href="../login/admindashboard.php" style=" font-size: 50px; ">🏠</a></li>
		</ul>
		
		<div class="containeroftable">
		<table width = "100%" border = "0" cellspacing = "5" cellpadding = "5">    
            <tr >    
                <th>Customer Number</th>    
                <th>First Name</th>    
                <th>Middle Name</th>    
                <th>Last Name</th>    
                <th>Gender</th>    
                <th>DOB</th>    
                <th>Address</th>    
                <th>Pincode</th>    
                <th>Contact Number</th>
                <th>Mother Name</th>    
                <th>Mother Status</th>    
                <th>Father Name</th>    
                <th>Father Status</th>    
                <th>Marital Status</th>    
                <th>Spouse</th> 
                <th>Plan</th>   
                  
            </tr>  



	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Customer_Num;?>  
				</td>  
				<td>  
					<?php echo $row->First_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Middle_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Last_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Gender;?>  
				</td>  
				<td>  
					<?php echo $row->DOB;?>  
				</td>  
				<td>  
					<?php echo $row->Address;?>  
				</td>  
				<td>  
					<?php echo $row->Pincode;?>  
				</td>  
				<td> 
					<?php echo $row->Contact_Number;?>  
				</td>  
				<td>  
					<?php echo $row->Mother_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Mother_Status;?>  
				</td>  
				<td>  
					<?php echo $row->Father_Name;?>  
				</td>  
				<td>  
					<?php echo $row->Father_Status;?>  
				</td>  
				<td>  
					<?php echo $row->Marital_status;?>  
				</td>
				<td>  
					<?php echo $row->Spouse;?>  
				</td>
				<td>  
					<?php echo $row->Plan;?>  
				</td>
				
			</tr>  
		<?php } ?> 
		</div> 			
        </table>   		
    </body>    
</html>