<?php    
include "../connection.php";
    
    
$sql = "select * from agent";    
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
		<h1><center>Agents Data</center></h1>
		<ul>
			<li style=" font-size: 50px; "><a href="../login/admindashboard.php">🏠</a></li>
		</ul>
<table width = "100%" border = "0" cellspacing = "5" cellpadding = "5">
            <tr>    
                <td>Agent Code</td>    
                <td>Agent Name</td>    
                <td>DOB</td>    
                <td>Address</td>    
                <td>Pincode</td>    
                <td>Branch</td>    
				<td>Contact Number</td>
                <td colspan = "2">Action</td>    
            </tr>  
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Agent_code;?>  
				</td>  
				<td>  
					<?php echo $row->Agent_name;?>  
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
					<?php echo $row->Branch;?>  
				</td>  
				<td> 
					<?php echo $row->Contact_Num;?>  
				</td>  
				<td> <a href="delete.php?id=<?php echo $row->Agent_code;?>" onclick="return confirm('Are You Sure')">Delete    
				</a>
				</td>  
			</tr>  
		<?php } ?>  			
        </table>   		
    </body>    
</html>