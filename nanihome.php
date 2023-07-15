<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Custom Website</title>
	<link rel="stylesheet" href="stylestyle.css">
        <style>
            *{
	padding: 0;
	margin: 0;
}
.wrapper{
	background: url(chintu.jpg) no-repeat;
	background-size: 100%;
	height: 400vh;
      
        
}
.navbar{
	position: fixed;
	height: 80px;
	width: 100%;
	top: 0;
	left: 0;
	background: black;
}
.navbar .logo{
	width: 200px;
	height: auto;
	padding: 20px 100px;
}
.navbar ul{
	float: right;
	margin-right: 10px;
}
.navbar ul li{
	list-style: none;
	margin: 0 1px;
	display: inline-block;
	line-height: 80px;
}
.navbar ul li a{
	font-size: 20px;
	font-family: 'Roboto', sans-serif;
	color: white;
	padding: 5px 8px;
	text-decoration: none;
	transition: .4s;
}
.navbar ul li a.active,
.navbar ul li a:hover{
	background: red;
	border-radius: 2px;
}
.wrapper .center{
	position: absolute;
	left: 50%;
	top: 60%;
	transform: translate(-50%, -50%);
	font-family: sans-serif;
	user-select: none;
}
.center h1{
	color: white;
	font-size: 70px;
	width: 900px;
	font-weight: bold;
	text-align: center;
}
.center h3{
	color: black;
	font-size: 40px;
	font-weight: bold;
	margin-top: 10px;
	width: 875px;
	text-align: center;
}
.center .buttons{
	margin: 50px 400px;
}
.buttons button{
	height: 40px;
	width: 100px;
	font-size: 18px;
	font-weight: 400;
	color: white;
	background: black;
	outline: none;
	cursor: pointer;
	border: 1px solid #cc0000;
	border-radius: 25px;
	transition: .4s;
}
.buttons .btn2{
	margin-left: 25px;
}
.buttons button:hover{
	background: red;
}
body{
            background: url(anki.jpg) no-repeat;
            height:200px;
            background-size:100%;
            background-color:pink;
            border-radius: 10px;
            background-position:center top;
}

	#dd{
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
	    margin-top: 1060px;
        }
        .dd1{
            
            width: 800px;
            margin: 70px;
            position: relative;
            text-align: center;
        }
 .mm{  border-radius: 10px;
            box-shadow: 15px 10px 10px 0px rgb(52, 88, 79);
        }

    
.dd1 button{
	height: 40px;
	width: 100px;
	font-size: 18px;
	font-weight: 400;
	color: white;
	background: red;
	outline: none;
	cursor: pointer;
	border: 1px solid #cc0000;
	border-radius: 25px;
	transition: .4s;
}

        </style>
</head>
<body>
	<div class="wrapper">
			<nav class="navbar">
				<img class="logo" src="sami.jpg">
				<ul>
					<li><a class="active" href="#">Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="cost.php">Total Cost</a></li>
					<li><a href="#">Contact Us</a></li>
					<li><a href="feedback.php">Feedback</a></li>
                                        <li><a href="history.php">History</a></li>
				</ul>
			</nav>
			<div class="center">
			<h1>WELCOME TO YOUR PET CARE CENTER</h1>
			<h3>All services available for your pet</h3>
			<div class="buttons">
                        <a href="nanilogin.php"> 
                          
			<button>Logout</button>
                        </a>
			
		</div>
		</div>
       <div id=dd>

        <div class="dd1">
            <img src="boarding.jpg"  width="300px"  class=mm>
            <h1 style="margin: 0px;color: white">PET BOARDING</h1>
            <h4 style="margin: 0px;color: white">We treat your pets as our own pets and take care</h4>
	    <a href="boarding.php">
	    <button type="submit"  name="submit" value="Register" >BOOK</button>
	    </a>
        </div>
       

        <div class="dd1">
            <img src="daycare.jpg"  width="300px"  class=mm>
            <h1 style="margin: 0px;color: white">DAYCARE</h1>
            <h4 style="margin: 0px;color: white">Till night we safeguard your pets</h4>
	    <a href="daycare.php">
	    <button type="submit"  name="submit" value="Register" >BOOK</button>
	    </a>
        </div>

        <div class="dd1">
            <img src="walking.jpg"  width="300px"  class=mm>
            <h1 style="margin: 0px;color:white">PET'S DAYOUT</h1>
            <h4 style="margin: 0px;color:white">A good walk for your pets within certain kms</h4>
	    <a href="walking.php">
	    <button type="submit"  name="submit" value="Register" >BOOK</button>
	    </a>
        </div>

        <div class="dd1">
            <img src="pool.jpg" width="300px"  class=mm >
            <h1 style="margin: 0px;color: white">POOL SESSIONS</h1>
            <h4 style="margin: 0px;color: white">Its a refreshing and a fun time for your pets with the water</h4>
	    <a href="pooling.php">
	    <button type="submit"  name="submit" value="Register" >BOOK</button>
	    </a>

        <div class="dd1" >
            <img src="joy.jpg"  width="300px" height="50%"  class=mm>
            <h1 style="margin: 0px;color: white">PET GROOMING</h1>
            <h4 style="margin: 0px;color:white">Provide a new classy look for your pet</h4>
	    <a href="grooming.php">
	    <button type="submit"  name="submit" value="Register" >BOOK</button>
	    </a>
        </div>
       
    </div>
</body>
</html>

