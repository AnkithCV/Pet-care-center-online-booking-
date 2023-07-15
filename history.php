<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking_history</title>
    
    <style>
      body{
         
            background-image:url("anki.jpg");
           
            background-repeat:no-repeat;
            background-size:100%;
             background-position:center;
            background-attachment:fixed;
            
            justify-content: center;
            margin: auto;
            background-blend-mode:darken;
         
            background-color: pink;
            border-radius: 10px;
           
      }
      
      
      h1 {
        text-align: center;
        font-size: 36px;
        margin-bottom: 30px;
        color: #170230;
      }
      
      
      
      select {
        background-image: linear-gradient(to bottom, #3498db, #2980b9);
        color: #fff;
        border: none;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      
      select option {
        background-color: #fff;
        color: #2c3e50;
      }
      


     .bookings{
        max-width: 300px;
        margin: 0 auto;
        font-family: Arial, sans-serif;
        font-size: 16px;
      
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        background: transparent;
        border: 2px solid ;
        border-color:wheat;
        border-radius: 20px;
        backdrop-filter: blur(5px);
       
     }
    </style>
  </head>
  
  
  
  
  
  
  
    <body>

        <h1>BOOKING HISTORY</h1>
        <center>
        <div>
        <button type="submit" name="submit" onclick="window.location='nanihome.php'"  >HOME</button>
    </div>
        </center>
       
    

        <?php
            session_start();
            $name=$_SESSION['username'];
            $con = mysqli_connect("localhost","root","","dasara"); 
            
            
            $sql="SELECT * FROM boarding  WHERE `owner name`= '$name'";
            $result=$con->query($sql);
            echo '<center>';
            echo '<br><br>';
            if (mysqli_num_rows($result)>0) {
                while ($boarding=mysqli_fetch_array($result)) {
                echo '<div class="bookings">';
                  echo 'service: boarding'.'<br>';
                 echo 'owner name : '.$boarding['owner name'].'<br>';
                 
                 echo 'pet name : '.$boarding['pet name'].'<br>';
                 echo 'pet type : '.$boarding['pet type'].'<br>';
                 echo 'breed : '.$boarding['breed'].'<br>';
                 echo 'from date : '.$boarding['from date'].'<br>';
                 echo 'to date : '.$boarding['to date'].'<br>';
                
                 echo '</div>';
                 echo '<br><br>';
                }
            }
            
            
            $sql="SELECT * FROM `day care`  WHERE `owner name`= '$name'";
            $result=$con->query($sql);
            echo '<center>';
            echo '<br><br>';
            if (mysqli_num_rows($result)>0) {
                while ($daycare=mysqli_fetch_array($result)) {
                echo '<div class="bookings">';
                echo 'service: daycare'.'<br>';
               echo 'owner name : '.$daycare['owner name'].'<br>';
                 
                 echo 'pet name : '.$daycare['pet name'].'<br>';
                 echo 'pet type : '.$daycare['pet type'].'<br>';
                 echo 'breed : '.$daycare['breed'].'<br>';
                 echo 'from date : '.$daycare['from date'].'<br>';
                 echo 'joining timings : '.$daycare['join timings'].'<br>';
                           
                 echo '</div>';
                 echo '<br><br>';
                }
            }
            



            $sql="SELECT * FROM `pet walking`  WHERE `owner name` = '$name'";
            $result=$con->query($sql);
            echo '<center>';
            echo '<br><br>';
            if (mysqli_num_rows($result)>0) {
                while ($dayout=mysqli_fetch_array($result)) {
                echo '<div class="bookings">';
                 echo 'Service: Pet Walking'.'<br>';
                 
                 echo 'owner name : '.$dayout['owner name'].'<br>';
                 
                 echo 'pet name : '.$dayout['pet name'].'<br>';
                 echo 'pet type : '.$dayout['pet type'].'<br>';
                 echo 'breed : '.$dayout['breed'].'<br>';
                 echo 'walking kms : '.$dayout['walking kms'].'<br>';
                 echo 'joining timings : '.$dayout['no of times'].'<br>';
                   
                 echo '</div>';
                 echo '<br><br>';
                }
            }
           


             
            $sql="SELECT * FROM grooming  WHERE `owner name`= '$name'";
            $result=$con->query($sql);
            echo '<center>';
            echo '<br><br>';
            if (mysqli_num_rows($result)>0) {
                while ($grooming=mysqli_fetch_array($result)) {
                echo '<div class="bookings">';
                echo 'Service: Pet Grooming'.'<br>';
                
                 echo 'owner name : '.$grooming['owner name'].'<br>';
                 
                 echo 'pet name : '.$grooming['pet name'].'<br>';
                 echo 'pet type : '.$grooming['pet type'].'<br>';
                 echo 'breed : '.$grooming['breed'].'<br>';
                 echo 'age : '.$grooming['age'].'<br>';
                 echo 'grooming type : '.$grooming['groom type'].'<br>'; 
                  echo 'pickup location : '.$grooming['pick up location'].'<br>'; 
                 echo '</div>';
                 echo '<br><br>';
                }
            }
           

            
            
            $sql="SELECT * FROM `pet pooling`  WHERE `owner name`= '$name'";
            $result=$con->query($sql);
            echo '<center>';
            echo '<br><br>';
            if (mysqli_num_rows($result)>0) {
                while ($pooling=mysqli_fetch_array($result)) {
                echo '<div class="bookings">';
                 echo 'Service: Pet Pooling'.'<br>';
                 
                echo 'pet name : '.$pooling['pet name'].'<br>';
                 echo 'pet type : '.$pooling['pet type'].'<br>';
                 echo 'breed : '.$pooling['breed'].'<br>';
                 echo 'time duration : '.$pooling['time duration'].'<br>';
                 echo 'over and over : '.$pooling['no of times'].'<br>'; 
                  echo 'pickup location : '.$pooling['pick up location'].'<br>'; 
                 echo '</div>';
                 echo '<br><br>';
                }
            }
            
            echo '</center>';

            
            ?>


         </body>
</html>