<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Feedback</title>
    
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
  height: 500px;
  margin: auto;
  background-color: pink;
  border-radius: 3px;
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
      <h1> YOUR FEEDBACK BOX</h1>
      <h4>Please write your valuable experience and the drawbacks which would make a better tomorrow for us </h4>
      
      <form  action="" method="post" >
        <label>Best experiences in our world</label>
        <input type="varchar"  name="username"  placeholder="type your experience" />

        <label>Drawbacks experienced</label>
        <input type="text"  name="petname"  placeholder="enter our drabacks" />

        <label>Honest rating</label>
        <input type="int"  name="type" placeholder="enter rating" />

        <label>Place to improve</label>
        <input type="text"   name="breed" placeholder="enter place of improve" />

        <button type="submit"  name="submit" value="Register" >Update</button>
      <closeform></closeform></form>
 <p class="para-2">
      WANT TO GO BACK TO HOME PAGE? <a href="nanihome.php">HOME</a>
    </p>



 <?php
        // put your code here
        $ownername = $petname = $type = $breed  = "" ;
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $ownername = $_POST['username'];
            $petname = $_POST['petname'];
            $type = $_POST['type'];
            $breed = $_POST['breed'];
            
            
            $con = mysqli_connect("localhost","root","","dasara");                     
       
			$query = "INSERT INTO `feedback` (`best experiences`, `drawbacks`, `ratings`, `improve`) VALUES ('$ownername', '$petname', '$type', '$breed')";
                        $result = mysqli_query($con,$query);
                        if($result){
			 echo ("Your feedback is Succesful");
			            }
                                    else
                                    {
                                        echo ("Feedback Fail"); 
                                    }
                         } 
          
          
          
        ?>
 
      
       </body>
</html>

    
