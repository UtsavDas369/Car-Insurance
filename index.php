<?php
include('connection.php')
?>
<html>
<head>
	<title>Stark Car Insurance</title>
	
<script type="text/javascript">
	AOS.init({
		transition-duration:2000;
	})

</script>

<style>

	@import url('https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap');
	*{
	margin: 0;
	padding: 0;
	font-family: sans-serif;

}

.container{
width: 100%;
height: 3200px;

background-color: #21D4FD;
background-image: linear-gradient(19deg, #21D4FD 0%, #B721FF 100%);


}
.Menu ul{
	display: inline-flex;
	margin: 50px;

}
.Menu ul li{
	list-style: none;
	margin: 0 20px;
	color: #FFFFFF;
	
}
.active{
	 border: 2px solid black;
  border-radius: 20px;
    background-image: linear-gradient(#9C42FF,#9C42FF),radial-gradient(circle at top left,#6284FF,#FFFFFF);
  color: black;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  transition-duration: 500ms;
  transition-timing-function: ease;
}

.active:hover{
	background: red;

}

.adlogin:hover{
	background: red;
  transition-duration: 500ms;
}

.adlogin{
margin-right:  130px;
margin-top: 10px;
	top: 40px;
	right: 80px;
	position: absolute;
	text-decoration: none;
	color: #fff;
	border: 2px solid transparent;
    border-radius: 20px;
   background-color: #FFFFFF;
background-image: linear-gradient(#9C42FF,#9C42FF),radial-gradient(circle at top left,#6284FF,#FFFFFF);
background-origin: border-box;
background-clip:content-box,border-box;



}


.adlogin span{
	display: block;
	padding: 8px 22px;
}






.login:hover{
	background: red;
  transition-duration: 500ms;
}

.login{
margin-right:  30px;
margin-top: 10px;
	top: 40px;
	right: 80px;
	position: absolute;
	text-decoration: none;
	color: #fff;
	border: 2px solid transparent;
    border-radius: 20px;
   background-color: #FFFFFF;
background-image: linear-gradient(#9C42FF,#9C42FF),radial-gradient(circle at top left,#6284FF,#FFFFFF);
background-origin: border-box;
background-clip:content-box,border-box;



}


.login span{
	display: block;
	padding: 8px 22px;
}

.signup:hover{
	background: red;
  transition-duration: 500ms;
}

.signup{
margin-right:  11px;
margin-top: 70px;
	top: 40px;
	right: 80px;
	position: absolute;
	text-decoration: none;
	color: #fff;
	border: 2px solid transparent;
    border-radius: 20px;
   background-color: #FFFFFF;
background-image: linear-gradient(#9C42FF,#9C42FF),radial-gradient(circle at top left,#6284FF,#FFFFFF);
background-origin: border-box;
background-clip:content-box,border-box;



}

.signup span{
	display: block;
	padding: 8px 22px;
}


.banner{

	width: 80%;
	height: 70%;
	top :25%;
	left: 130px;
	position: absolute;
	color: #FFF;
}





.app-text{

	width: 80%;
	float: left;
}

.app-text h1{

	font-size: 40px;
	width: 630px;
	position: relative;
	margin-left: 40px;

}

.app-text p{
font-family: 'Comfortaa', cursive;
	width: 650px;
	font-size: 26px;
	margin: 30px 0px 30px 40px;
	line-height: 25px;
	color:#000;
}

.app-text li{
	font-family: 'Comfortaa', cursive;
	font-size: 26px;
}

.pic{
	width: 40%;
    float: right;
 margin-top: -300px;
}

.pic img{
	width: 100%;

}

.app-text2 h2{

	font-size: 40px;
	font-style: italic; 
	position: relative;
	margin-left: 40px;
margin-top: -100px;

}
.app-text2 p{
font-family: 'Comfortaa', cursive;

height: 300px;
width: 700px;
text-align: left;
border-radius: 10px;
	font-size: 26px;
	margin-top: -400px;
	color:#000;

}

.app-text2 li{
	
	font-family: 'Comfortaa', cursive;
	color: black;
	font-size: 26px;
margin-top:  -78px;


}

.app-text2 img{
	margin-right: 20px;
margin-left: -900px;
margin-top: 200px;
border-radius: 10px;


}

.app-text3 p{
font-family: 'Comfortaa', cursive;

height: 10px;
width: 700px;
text-align: left;
border-radius: 10px;
	font-size: 26px;
	margin-top: 500px;
	margin-left: -900px;
	color:#000;


}

.app-text3 img{
	width: 700px;
	height: 300px;
	margin-right: 20px;
margin-left: -900px;
margin-top: -400px;
border-radius: 10px;
 
}

.text4{
	margin-top: 400px;
	margin-left: -750px;

}

.text4 h2{
	font-family: 'Comfortaa', cursive;
	font-style: bold;
	font-size: 36px;
	text-align: center;
}
.text4 img{
	margin-top: 100px;
	border-radius: 20px;
	box-shadow: 5px 10px grey;
}

.contact
{
    

background-color: #4158D0;
background-image: linear-gradient(43deg, #4158D0 0%, #C850C0 46%, #FFCC70 100%);



    padding: 20px 35px;
    
}

input[type="text"]{
	display: block;
	margin-top: 10px;
	margin-bottom: 25px;
	width: 20%;
	border: none;
	outline: none;
  border-radius: 120px;

}
  input{
	padding: 7px;
	font-size: inherit;
}

.grow { transition: all .2s ease-in-out; }
.grow:hover { transform: scale(1.1); box-shadow: grey; }

.connectwith{
	margin-left: 30px;
}

</style>

</head>

<body>

<div class="container">
	<div  class="Menu">
		<ul>
			<li class="active" a href="../index.php">Home</li>
			<li class="active"><a href="agent/agent.php" style="text-decoration: none;  color: white; ">Agent Entry</a></li>
			<li class="active"><a href="client/client.php" style="text-decoration: none;  color: white; ">Customer Registration</a></li>
	<li class="active"><a href="about.php" style="text-decoration: none; color: white;">About Us</li>
<li class="active"><a href="rules.php" style="text-decoration: none; color: white;">Rules</li>



<li><a href="login/adlogin.php" class="adlogin"><span>Admin Login</span></a></li>

<li><a href="signup/signup.php" class="signup"><span>Sign Up</span></a></li>

<li><a href="login/login.php" class="login"><span>Login</span></a></li>


		</ul>
	</div>

	<div class="banner">
		<div  class="app-text">
			<h1>Welcome To Stark Car Insurance</h1>
			<p>
			Our algorithms do all the hard work for you, read between the lines, decode the terms and conditions, and make the purchase cake walk for you
			<li>

			Plans explained in plain English. No research required.
		</li>
		<li>
				
			The process is completely online.
		</li>
		<li>
				
			Unbiased advice. Exceptional Experience.
		</li>



			</p>
			</div>
<div class="pic">
	<img class="transition-image" src="car1.gif">




		<div  class="app-text2">
			

	<img class="transition-image" src="car2.jpg">

			<h2>Quick and Hassle Free Buying</h2>
			<p>
			Our algorithms do all the hard work for you, read between the lines, decode the terms and conditions, and make the purchase cake walk for you
		<li>Plans explained in plain English. 
		<li>The process is completely online.
		<li>Unbiased advice. Exceptional Experience.
		</p>
		</li>
		</li>
		</li>
			</div>



<div  class="app-text3">
			

			<p style="font-size: 36px;">Throw Sress Out</p>
			<p>
			Our claims are so stress-free, it’s like taking an afternoon nap. Just give us a call and we’ll take care of everything - from picking up your car, to getting it repaired and dropping it back right at your doorstep.


			</p>
			

	<img class="transition-image" src="car3.jpg">


</div>



	<div class="text4">
		
<h2>How Do We Make Car Insurance Claims Stress-Free?</h2>

<img class="transition-image" src="car4.jpg">




                 

	</div>

	
	



</div>
	

	</div>
	

</div>

<div class="contact">
<h4>Contact Us</h4>
				<p class="contact-agile2">Sign Up For Our News Letters</p>
				<iframe  style="border-radius: 20px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.5017434684!2d77.5616714152215!3d13.003688817690847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1629146a9bf5%3A0xabdfa22e60fcf9a!2s13th%20Cross%20Rd%2C%20Maruthi%20Extension%20Vinayaka%20Layout%2C%20MT%20Layout%2C%20Malleshwaram%2C%20Bengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1585824636517!5m2!1sen!2sin" align="right" height="270" width="400" ></iframe>
				<form  method="post" name="sentMessage" id="contactForm" >
					<div class="control-group form-group">
                        
                            <label class="contact-p1">Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required >
                            <p class="help-block"></p>
                       
                    </div>	
                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Phone Number:</label>
                            <input type="text" class="form-control" name="phone" id="phone" required >
							<p class="help-block"></p>
						
                    </div>



                    <div class="control-group form-group">
                        
                            <label class="contact-p1">Email Address:</label>
                            <input type="text" class="form-control" name="email" id="email" required >
							<p class="help-block"></p>
						
                    </div>
                    
                    
                    <input type="submit" name="sub" value="Send Now" class="btn btn-primary">	
				</form>
			</div>
				<?php
				if(isset($_POST['sub']))
				{
					$name =$_POST['name'];
					$phone = $_POST['phone'];
					$email = $_POST['email'];
					$approval = "Not Allowed";
					$sql = "INSERT INTO `contact`(`fullname`, `phoneno`, `email`,`cdate`,`approval`) VALUES ('$name','$phone','$email',now(),'$approval')" ;
					
					
					if(mysqli_query($conn,$sql))
					echo"We will contact you soon!!";
					
				}
				?>

<div style="background: linear-gradient(90deg, #00C9FF 0%, #92FE9D 100%);">
			<h4>Connect With Us</h4>
			<p class="connectwith" style="margin-top: 10px; "><strong>Phone :</strong>+91 9983433421</p>
			<p class="connectwith" style="margin-top: 10px; "><strong>Email :</strong> <a href="mailto:UD@STARK.COM">UD@STARK.COM</a></p>
			<p class="connectwith" style="margin-top: 10px; "><strong>Address :</strong> 13th cross, Malleswaram</p>
			<div class="connectwith">
				<ul class="social-icons" >
								<li><a href="https://www.facebook.com"><img class="grow" src="facebook.jpg"></a>
								<a href="https://www.twitter.com"><img class="grow" src="twitter.jpg"></a>
								<a href="https://www.google.com"><img class="grow" src="gplus.jpg"></a></li>

								
							</ul>

			</div>
			</div>
																

</body>
</html>