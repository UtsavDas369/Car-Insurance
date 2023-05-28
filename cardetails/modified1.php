<?php    
    
include "../connection.php";        
$sql = "select * from cardetails";    
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
			<li ><a href="../index.php" style=" font-size: 50px; ">🏠</a></li>
		</ul>
		
		<div class="containeroftable">
		<table width = "100%" border = "0" cellspacing = "5" cellpadding = "5">    
           <tr>    
                <td>Contact Number</td>    
                <td>Company Name</td>    
                <td>Model Name</td>    
                <td>Chassis Number</td>    
                <td>Engine Number</td>    
                <td>Color</td>    
                <td>Registration Number</td>
                <td>Insurance Upto</td>   
                
                <td colspan = "2">Action</td>    
            </tr>  

        </div>
	<?php    
    
		while($row = mysqli_fetch_object($result)){    
    
    
	?>  
			<tr>  
				<td>  
					<?php echo $row->Contact_Number;?>  
				</td>  
				<td>  
					<?php echo $row->company;?>  
				</td>  
				<td>  
					<?php echo $row->model;?>  
				</td>  
				<td>  
					<?php echo $row->chassisno;?>  
				</td>  
				<td>  
					<?php echo $row->engineno;?>  
				</td>  
				<td>  
					<?php echo $row->color;?>  
				</td>  
				<td>  
					<?php echo $row->registrationno;?>  
				</td>  
				<td>  
					<?php echo $row->insuranceupto;?>  
				</td> 
				<td> <a href="delete.php?id=<?php echo $row->Contact_Number;?>" onclick="return confirm('Are You Sure')">Delete    
				</a> </td>  
			</tr>  
		<?php } ?>  			
        </table>   		
    </body>    
</html>