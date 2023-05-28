<?php
include("loginserv.php"); 

?>

<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
body{
	background-color: #21D4FD;
background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);
}
  
.login{
  background-color: white;

width:800px;
box-shadow: 10px 10px 5px grey;
margin:50px auto;
font:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
border-radius:10px;
border:2px solid #ccc;
padding:10px 40px 25px;
margin-top:250px; 
}
input[type=text], input[type=password]{
width:30%;
padding:10px;
display: block;
text-align: center;
border:0;
margin: 5px 30px ;
margin-top:10px;
border: 2px solid #3498db;
padding-left:5px;
font-size:16px;
outline: none;
border-radius: 24px;
 transition: 0.25s;
font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; 
}

input[type = text]:focus,input[type = password]:focus{
  width: 280px;
  border-color: #2ecc71;
}

input[type=submit]{
border:0;
  background: none;
  display: block;
  margin-left: 90px;
  margin-right: 100px;
  margin-top: 20px;
  margin-bottom: 10px;
  text-align: center;
  border: 2px solid #2ecc71;
  padding: 14px 40px;
  outline: none;
  color: white;
  border-radius: 24px;
  transition: 0.25s;
  cursor: pointer;
}

 input[type = "submit"]:hover{
  background: #2ecc71;
}
</style>
</head>
<body>


<div class="login">
<h1 align="left">Login</h1>
<form action="" method="post" style="text-align:center;">
<input type="text" placeholder="Username" id="user" name="user"><br/><br/>
<input type="text" placeholder="Contact Number" id="Contact_Number" name="Contact_Number"><br/><br/>

<input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
<input type="submit" value="Login" name="submit">
<!-- Error Message -->
<span><?php echo $error; ?></span>
</body>
</html>