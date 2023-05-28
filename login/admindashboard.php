<?php    
    
include "../connection.php";        
$sql = "SELECT Firstname FROM adminlogin WHERE user=? AND pass=?"; 
$sql2 = "SELECT count( * ) as  total_record FROM adminlogin"; 
$sql3 = "SELECT count( * ) as  total_cust FROM customer"; 
$sql4 = "SELECT count( * ) as  total_agent FROM agent";


$result = mysqli_query($conn,$sql); 
$result1 = mysqli_query($conn,$sql2); 
$result2 =  mysqli_query($conn,$sql3); 
$result3 =  mysqli_query($conn,$sql4); 

?>    
<html>
<head>
 
  <title>Admin Page</title>
  
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<style >
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #FFFFFF;
   background-image: url(adminback.jpg);
background-repeat: no-repeat;
  background-size: cover;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 300px;
  height: 100%;
  background: #FFFFFF;
  padding: 30px 0px;
  position: fixed;
  border-radius: 10px;
  box-shadow: grey;
}

.wrapper .sidebar h2{
  color: #000000;
  margin-left:20px;
    text-align: left ;

  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
  transition: all .2s ease-in-out;
  border-radius: 5px;
}    

.wrapper .sidebar ul li a{
  color: black;
  display: block;

}

.wrapper .sidebar ul li a .fas{
  width: 25px;
  color: black;
  font
}

.wrapper .sidebar ul li:hover{

  background-color: #FFFFFF;
  transform: scale(1.1); box-shadow: grey;
}
    
.wrapper .sidebar ul li:hover a{
  color: black;
}
 


.wrapper .main_content h3{
   padding-left: 850px;
   font-size: 48px;
   font-style: 'Helvetica'
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}

.adminlist{
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 350px;
 width: 1500px;
 height: 1000px;
  color: #555555; 
  border: 2px solid;
  border-color: black;
 border-radius: 10px;
 background-color: white;
  font-size: 19px;
   
}

.adminno{
   border: #dddddd 2px solid ;
  border-radius: 20px; 
  background-color: #eeeeee; 
   margin-top: 70px;
  margin-bottom: 10px;
  margin-right: 10px;
  margin-left: 70px;
  width: 300px;
  height: 300px;
  text-align: center;
   box-shadow: 5px 10px grey;
}
.adminno p{

font-size: 100px;
margin-top: 50px;
   font-style: 'Helvetica'

}

.custno{
 border: #dddddd 2px solid ;
  border-radius: 20px; 
  background-color: #eeeeee; 
   margin-top: -310px;
  margin-bottom: 10px;
  margin-right: 10px;
  margin-left: 500px;
  width: 300px;
  height: 300px;
  text-align: center;
   box-shadow: 5px 10px grey;



}

.custno p{

font-size: 100px;
margin-top: 50px;
   font-style: 'Helvetica'

}

.agentno{
 border: #dddddd 2px solid ;
  border-radius: 20px; 
  background-color: #eeeeee; 
   margin-top: -310px;
  margin-bottom: 10px;
  margin-right: 10px;
  margin-left: 940px;
  width: 300px;
  height: 300px;
  text-align: center;
   box-shadow: 5px 10px grey;



}

.agentno p{

font-size: 100px;
margin-top: 50px;
   font-style: 'Helvetica'

}

</style>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Plan', 'Address'],
          <?php
          $query = "SELECT Address,sum(Plan) FROM customer group by Address";
          $fire = mysqli_query($conn,$query);

          while ($rst = mysqli_fetch_assoc($fire)) {

            echo "['".$rst['Address']."',".$rst['sum(Plan)']."],";
          }


?>





        ]);

        var options = {
          title: 'Money Earned According To Locations'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

  
    



<body>

<div class="wrapper">
    <div class="sidebar" >
        <h2>Admin Page</h2>
        <ul>
            <li><a href="../index.php"><i class="fas fa-home"></i>Home</a></li>
           
            <li><a href="../client/table.php"><i class="fas fa-address-card"></i>Customer Data</a></li>
            <li><a href="../agent/table.php"><i class="fas fa-address-card"></i>Agent Data</a></li>
            <li><a href="../premium/table.php"><i class="fas fa-address-card"></i>Premium Data</a></li>
            <li><a href="../policy/policy.php"><i class="fas fa-address-card"></i>Policy Entry</a></li>
             <li><a href="../cardetails/cardetails.php"><i class="fas fa-address-card"></i>Car Details</a></li>
        </ul> 
        
    </div>


    <div class="main_content">

  <h3>Welcome to the car insurance</h3>
<div class="adminlist" >


  <div class="adminno">
<h1>Number of Admins</h1>  
<?php    
    
    while($row = mysqli_fetch_object($result1)){    
    
    
  ?>      
<p >

 
          <?php  echo $row->total_record;?>  
           <?php } ?>   
 </div>      
</p>
<div class="custno">


<h1>Number of Customers</h1> 
<?php    
    
    while($row = mysqli_fetch_object($result2)){    
    
    
  ?>   
<p >
          <?php  echo $row->total_cust;?>  
           <?php } ?>   
       
</p>
</div>

 

 <div class="agentno">
<?php 
 while($row = mysqli_fetch_object($result3)){    
    
    
  ?>  

<h1>Number of Agents</h1>      
<p >

  <?php  echo $row->total_agent;?>  
           <?php } ?>  
 </p>
 </div>      


<div id="piechart" style="width: 900px; height: 500px;margin-left: 400px; margin-top: 30px;"></div>




</div>
      
    
 

      







        <div class="info">
          
      </div>
    </div>
</div>
</table>
</body>
</html>