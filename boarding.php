<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>boarding pet</title>
    
    <style>
body {
	background: url('boarding.jpg')no-repeat;
    background-position: center;
    background-size: cover;
  background-color: white;
  font-family: "Roboto", sans-serif;
}

.signup-box {
  width: 360px;
  height: 700px;
  margin: auto;
  background-color: grey;
  border-radius: 3px;
}

h1 {
    color:black;
  text-align: center;
  padding-top: 15px;
}

h4 {
    color:black;
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
      <h1>BOARDING BOOKING</h1>
      <h4>Book soon for your pet boarding</h4>
      
      
      <form  action="" method="post" >
        <label>USER NAME</label>
        <input type="email"  name="username"  placeholder="type your name" />

        <label>PET NAME</label>
        <input type="text"  name="petname"  placeholder="enter your pet name" />

        <label>PET TYPE</label>
        <input type="text"  name="type" placeholder="enter your pet type" />

        <label>BREED</label>
        <input type="text"   name="breed" placeholder="enter which breed is your pet" />

	<label>FROM DATE</label>
        <input type="date"   name="fromdate" placeholder="enter the joining date" />
        
        <label>TO DATE</label>
        <input type="date"   name="todate" placeholder="enter the ending date" />

	<label>NO OF DAYS</label>
        <input type="int"   name="totaldays" placeholder=" total days pet caring done" " />
        
        <button type="submit"  name="submit" value="Register" >Update</button>
      <closeform></closeform></form>
      
       <p class="para-2">
      WANT TO GO BACK TO HOME PAGE? <a href="nanihome.php">HOME</a>
    </p>




 <?php
        // put your code here
        $ownername = $petname = $type = $breed = $fromdate = $todate = $totaldays = "" ;
        
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $ownername = $_POST['username'];
            $petname = $_POST['petname'];
            $type = $_POST['type'];
            $breed = $_POST['breed'];
            $fromdate = $_POST['fromdate'];
            $todate = $_POST['todate'];
            $totaldays = $_POST['totaldays'];
            
            $con = mysqli_connect("localhost","root","","dasara");                     
       
			$query = "INSERT INTO `boarding` (`owner name`, `pet name`, `pet type`, `breed`, `from date`, `to date`, `no of days`) VALUES ('$ownername', '$petname', '$type', '$breed', '$fromdate', '$todate', '$totaldays')";
                        $result = mysqli_query($con,$query);
                        if($result){
			 echo ("booking is Succesful");
			            }
                                    else
                                    {
                                        echo ("Registration Fail"); 
                                    }
                         } 
                         
           
          
          
        ?>
       
  
      
     
    </body>
</html>
