<html>    
    <head>    
        <title>Car Entry Form</title>    
    </head>    
    <body>    
            
		<link href = "../agent/styleagent.css" type = "text/css" rel = "stylesheet" /> 	
		<ul>
			<li style="float:right;"><a href="../index.php"> Back to homepage</a></li>
		</ul>
		<h3>Car Registration</h3> 
      
         <form name = "form1" action='input.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">
<p>Enter Phone Number To register the vechile </p>
                <div class = "form_group">    
                    <label>Enter Phone Number:</label>    
                    <input type = "text" name = "Contact_Number" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Company Name:</label>    
                    <input type = "text" name = "company" value = "" required />    
                </div>    
                <div class = "form_group">    
                    <label>Model Name:</label>    
                    <input type = "text" name = "model" value = "" required />    
                </div>  
                
				

				<div class = "form_group">    
                    <label>Chassis No.:</label>    
                    <input type = "text" name = "chassisno" value = "" required />    
                </div>
				
				<div class = "form_group">    
                    <label>Engine No.: </label>    
                    <input type = "text" name = "engineno" value = ""  required />    
                </div>
				<div class = "form_group">    
                    <label>Color: </label>    
                    <input type = "text" name = "color" value = ""  required  />    
                </div>
				<div class = "form_group">    
                    <label>Registration Number: </label>    
                    <input type = "text" name = "registrationno" value = ""  required />    
                </div>

				
				<div class = "form_group">    
                    <input type = "submit" value = "submit"/>    
                </div>
				<div class = "form_group">    
                    <input type = "reset" value = "reset"/>    
                </div>
				
            </div>    
        </form>    
    </body>    
</html>    