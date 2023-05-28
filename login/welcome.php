<?php 
session_start();


?>
<?php    
    
include "../connection.php"; 
    $a= $_SESSION["Contact_Number"];
$sql = "select * from cardetails where Contact_Number='$a'";    
$result = mysqli_query($conn,$sql);   
 
 
?>      
<html>
<head>
 
  <title>Side Navigation Bar</title>
  
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
   font-style: 'Helvetica';
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


  
    



<body>

<div class="wrapper">
    <div class="sidebar" >
        <h2>Sidebar</h2>
        <ul>
            <li><a href="../index.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="../rules.php"><i class="fas fa-user"></i>Rules</a></li>
            
          
        </ul> 
        
    </div>


    <div class="main_content">

  <h3>Welcome to the car insurance</h3>
<div class="adminlist" >


  <!--div class="adminno"-->
  
<p style="font-size: 40px; text-align: center; font-style: 'Helvetica';font-weight: bold; ">
    <?php
            echo "Welcome ".$_SESSION["user"];
?>
</p>
<br>

 <?php    
    
    $row = mysqli_fetch_object($result);  
    
    ?>
  

 
<br>
<p style="font-size: 20px; text-align: center; font-style: 'Helvetica';font-weight: bold; ">Company:-</p>
<p style="text-align: center;"><?php echo $row->company;?></p> <br><br>
<p style="font-size: 20px; text-align: center;  font-style: 'Helvetica';font-weight: bold; ">Model Name:-</p>
<p style="text-align: center;"><?php echo $row->model;?></p> <br><br>
<p style="font-size: 20px; text-align: center;  font-style: 'Helvetica';font-weight: bold; ">Chassis No.:-</p>
<p style="text-align: center;"><?php echo $row->chassisno;?></p> <br><br>
<p style="font-size: 20px; text-align: center;  font-style: 'Helvetica';font-weight: bold; ">Engine No.:-</p>
<p style="text-align: center;"><?php echo $row->engineno;?></p><br><br> 
<p style="font-size: 20px; text-align: center;  font-style: 'Helvetica';font-weight: bold; ">Color:-</p>
<p style="text-align: center;"><?php echo $row->color;?></p> <br><br>
<p style="font-size: 20px; text-align: center;  font-style: 'Helvetica';font-weight: bold; ">Registration No.:-</p>
<p style="text-align: center;"><?php echo $row->registrationno;?></p><br><br> 
<p style="font-size: 20px; text-align: center;  font-style: 'Helvetica';font-weight: bold; ">Validity:-</p>
<p style="text-align: center;"><?php echo $row->insuranceupto;?></p>  <br><br>


  <img src="carlambo.jpg" style="margin-left: 400px;">

</div>
 


    
  
 

      







        <div class="info">
          
      </div>
    </div>
</div>
</table>
</body>
</html>