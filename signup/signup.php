<html>    
    <head>    
        <title>Signup</title>    
    </head>    
    <body>    
            
		<link href = "../agent/styleagent.css" type = "text/css" rel = "stylesheet" /> 	
		<ul>
			<li style="float:right;"><a href="../index.php"> Back to homepage</a></li>
		</ul>
		<h3>Signup</h3> 
      
         <form name = "form1" action='input.php' method = 'POST' enctype = "multipart/form-data" >    
            <div class = "container">

                
<p>Note:Please Register First to Signup.Thank You.</p>
				
				<div class = "form_group">    
                    <label>User Name:</label>    
                    <input type = "text" name = "user" value = "" required />    
                </div>
				
				<div class = "form_group">    
                    <label>Password: </label>    
                    <input type = "password" name = "pass" value = ""  required />    
                </div>
				<div class = "form_group">    
                    <label>First Name:</label>    
                    <input type = "text" name = "Firstname" value = "" required />    
                </div>    
               
                <div class = "form_group">    
                    <label>Last Name:</label>    
                    <input type = "text" name = "Lastname" value = "" required />    
                </div>  
                
                <div class = "form_group">    
                    <label>Gender:  </label><input type = "radio" name = "Gender" value = "M" required />Male<input type = "radio" name = "Gender" value = "F" required />Female
                </div>
                <div class = "form_group">    
                    <label>Contact Number: </label>    
                    <input type = "text" name = "Contact_Number" value = ""  required pattern="[0-9]{10}" />    
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