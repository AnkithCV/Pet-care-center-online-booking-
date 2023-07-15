<!DOCTYPE html>
<html>

<head>
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="./css/style.css">
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
        table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    background-color: grey;
  }
  
  td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
  }
  
  tr:nth-child(even) {
    background-color:grey;
    
    .para-2 {
  text-align: center;
  color: RED;
  font-size: 15px;
  margin-top: -10px;
}
  }
    </style>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>No of Times</th>
                <th>Per service cost</th>
                <th>Total cost</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><input type="text" onkeyup="price(this)"></td>
                <td><input type="text" onkeyup="amount(this)"></td>
                <td class="netPrice">0</td>
            </tr>
            <tr>
                <td><input type="text" onkeyup="price(this)"></td>
                <td><input type="text" onkeyup="amount(this)"></td>
                <td class="netPrice">0</td>
            </tr>
            <tr>
                <td><input type="text" onkeyup="price(this)"></td>
                <td><input type="text" onkeyup="amount(this)"></td>
                <td class="netPrice">0</td>
            </tr>
            <tr>
                <td><input type="text" onkeyup="price(this)"></td>
                <td><input type="text" onkeyup="amount(this)"></td>
                <td class="netPrice">0</td>
            </tr>
            <tr>
                <td><input type="text" onkeyup="price(this)"></td>
                <td><input type="text" onkeyup="amount(this)"></td>
                <td class="netPrice">0</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">Total all services cost</td>
                <td id="total"></td>
            </tr>
        </tfoot>
    </table>
    
    <script>
    var total = document.getElementById("total");
        var netPrice = document.getElementsByClassName("netPrice");
        function price(price) {
            var cal = 0;
            var amount = price.parentElement.parentElement.children[1].children[0].value;
            var res = price.parentElement.parentElement.children[2].innerHTML = amount * price.value;
            for (let i = 0; i < netPrice.length; i++) {
                cal += parseInt(netPrice[i].innerText);
            }
            total.innerHTML = cal;
        }
        function amount(amount) {
            var cal = 0;
            var price = amount.parentElement.parentElement.children[0].children[0].value;
            var res = amount.parentElement.parentElement.children[2].innerHTML = price * amount.value;
            for (let i = 0; i < netPrice.length; i++) {
                cal += parseInt(netPrice[i].innerText);
            }
            total.innerHTML = cal;
        }
    
   
    
    </script>
     <p class="para-2">
      WANT TO GO BACK TO HOME PAGE? <a href="nanihome.php">HOME</a>
      
			<h4>HI.....PER PET BOARDING SERVICE=2000rs</h4>
			<h4>HI.....PER DAYCARE SERVICE=600rs</h4>
                        <h4>HI.....PER PET'S DAYOUT SERVICE=400rs</h4>
                        <h4>HI.....PER POOL SESSIONS SERVICE=400rs</h4>
                        <h4>HI.....PER PET GROOMING SERVICE=300rs</h4>
			
                      
			
	
    </p>
    
</body>

</html>
