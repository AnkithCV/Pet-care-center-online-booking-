<!DOCTYPE html>
<html lang="en">
  <head>
    <title>register form </title>
    <link rel="stylesheet" href="stylestyle.html" />
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

.signup-box {
  width: 360px;
  height: 620px;
  margin: auto;
  background-color: pink;
  border-radius: 3px;
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
button[type="submit"] {
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
    <div class="signup-box">
      <h1>REGISTER</h1>
      <h4>Register soon for your pet care</h4>
      
      <form  action="" method="post" >
        <label>USER NAME</label>
        <input type="email"  name="name"  placeholder="type your email" />

        <label>AGE</label>
        <input type="int"  name="age"  placeholder="enter your age" />

        <label>EMAIL</label>
        <input type="email"  name="email" placeholder="can enter their another email or above email " />

        <label>CONTACT NO</label>
        <input type="int"   name="contact" placeholder="enter your phone no" />

	<label>PASSWORD</label>
        <input type="password"   name="password" placeholder="enter desired password" />
        
        <button type="submit"  name="submit" value="Register" >Update</button>
      <closeform></closeform></form>

      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
      Already have an account? <a href="nanilogin.php">Login here</a>
    </p>





 <?php
        // put your code here
        $UserName = $age = $email = $ContactNO = $password = "" ;
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $UserName = $_POST['name'];
            $age = $_POST['age'];
            $email = $_POST['email'];
            $ContactNO = $_POST['contact'];
            $password = $_POST['password'];
            
            $con = mysqli_connect("localhost","root","","dasara");                     
       
			$query = "INSERT INTO `nani` (`user name`, `age`, `email`, `contact no`, `password`) VALUES ('$UserName', '$age', '$email', '$ContactNO', '$password')";
                        $result = mysqli_query($con,$query);
                        if($result){
			 echo ("Registration is Succesful");
                          header("Location: nanilogin.php");
			            }
                                    else
                                    {
                                        echo ("Registration Fail"); 
                                    }
                         } 
          
          
          
        ?>


  </body>
</html>


