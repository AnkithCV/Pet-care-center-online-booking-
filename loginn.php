<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login form</title>
    <link rel="stylesheet" href="Css/style.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />

<style>
body {
	background: url('chintu.jpg')no-repeat;
    background-position: center;
    background-size: cover;
  background-color: blue;
  font-family: "Roboto", sans-serif;
}


.login-box {
  width: 360px;
  height: 280px;
  margin: auto;
  border-radius: 3px;
  background-color: white;
}

h1 {
  text-align: center;
  padding-top: 15px;
}

h4 {
  text-align: center;
}

form {
  width: 300px;
  margin-left: 20px;
}

form label {
  display: flex;
  margin-top: 20px;
  font-size: 18px;
}

form input {
  width: 100%;
  padding: 7px;
  border: none;
  border: 1px solid gray;
  border-radius: 6px;
  outline: none;
}
input[type="button"] {
  width: 320px;
  height: 35px;
  margin-top: 20px;
  border: none;
  background-color: #49c1a2;
  color: white;
  font-size: 18px;
}
p {
  text-align: center;
  padding-top: 20px;
  font-size: 15px;
}
.para-2 {
  text-align: center;
  color: white;
  font-size: 15px;
  margin-top: -10px;
}
.para-2 a {
  color: #49c1a2;
}
</style>






  </head>
  <body>
    <div class="login-box">
      <h1>Login</h1>
      <form role="form" id="templatemo-preferences-form" name="login" action="" method="post">
          
        <label>User Name</label>
       <input type="text" id="name" placeholder="enter name" name="name" required> <br/>
        <label>Password</label>
        <input type="text" id="pwd" placeholder="enter password" name="password" required><br/>

        <input type="button" value="Submit" />
      <closeform></closeform></form>
    </div>
    <p class="para-2">
      Not have an account? <a href="newreg.html">Register here</a>
    </p>
    
    
     <?php
        // put your code here
        if(isset($_POST['submit'])){
        $name = $_POST['name'];	
       
        $password = $_POST['password'];
        
        
        $con = mysqli_connect("localhost","root","","dasara");
        
        if (mysqli_connect_errno())
                    {
                    echo "Failed to connect to MySQL: " .mysqli_connect_error();
                    }
		
		
			$query = "SELECT * FROM nani WHERE name='$name' and password='$password'";
                        $result = mysqli_query($con,$query);
                        if($result)
                        {
                            if(mysqli_num_rows($result)>0)
                            {
                                session_start();
                                $_SESSION['username'] = $name;
                                
                                header("Location: home.php");
                            }
                            else{
                                echo("Invalid credenatials");
                            }
                            
                        }                     
                        else{
                            echo("Invalid credenatials");
                        }
	      }
               
        
        
        
        
  </body>
</html>