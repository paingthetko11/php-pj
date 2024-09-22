<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" type="image/x-icon" href="https://production-assets.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" />
  <link rel="mask-icon" type="" href="https://production-assets.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" />
  <title>Order List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  
      <style>

@charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#1F2739;
  overflow-x: hidden;
}

h1 {
  font-size:3em; 
  font-weight: 300;
  line-height:1em;
  text-align: center;
  color: #4DC3FA;
}

h2 {
  font-size:1em; 
  font-weight: 300;
  text-align: center;
  display: block;
  line-height:1em;
  padding-bottom: 2em;
  color: #FB667A;
}

h2 a {
  font-weight: 700;
  text-transform: uppercase;
  color: #FB667A;
  text-decoration: none;
}

.blue { color: #185875; }
.yellow { color: #FFF842; }

.kise th h1 {
	  font-weight: bold;
	  font-size: 1em;
  text-align: center;
  color: goldenrod;
}

.kise td {
	  font-weight: normal;
	  font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
	   -moz-box-shadow: 0 2px 2px -2px #0E1119;
	        box-shadow: 0 2px 2px -2px #0E1119;
}

.kise {
	  text-align: center;
      vertical-align: middle;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.kise td, .kise th {
	  padding-bottom: 2%;
	  padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.kise tr:nth-child(odd) {
	  background-color: #323C50;
}

/* Background-color of the even rows */
.kise tr:nth-child(even) {
	  background-color: #2C3446;
}

.kise th {
	  background-color: #1F2739;
}

.kise td:first-child { color: #FB667A; }

.kise tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
	   -moz-box-shadow: 0 6px 6px -6px #0E1119;
	        box-shadow: 0 6px 6px -6px #0E1119;
}

.kise td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
	  transition-duration: 0.4s;
	  transition-property: all;
  transition-timing-function: line;
}

.cool {
    display: inline-block;
    background-color: #28a745; /* Green background */
    color: white; /* White text */
    text-decoration: none; /* Remove underline */
    padding: 10px 20px; /* Padding around text */
    border-radius: 5px; /* Rounded corners */
    font-size: 16px; /* Font size */
    font-weight: bold; /* Make text bold */
}

.cool:hover {
    background-color: green; /* Darker green on hover */
    color:white !important;
}

.cool2 {
    display: inline-block;
    background-color: skyblue;
    color: white; /* White text */
    text-decoration: none; /* Remove underline */
    padding: 10px 20px; /* Padding around text */
    border-radius: 5px; /* Rounded corners */
    font-size: 16px; /* Font size */
    font-weight: bold; /* Make text bold */
}

.cool2:hover {
    background-color: cyan; /* Darker green on hover */
    color:white !important;
}



@media (max-width: 800px) {
.kise td:nth-child(4),
.kise th:nth-child(4) { display: none; }
}
    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  
  
  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>

</head>

<body translate="no" >
   <br>
   <br>
   <div class="row">
    <div class="col-1"></div>
    <div class="col-3">
    &nbsp;<br>
        <a href="home.html" id="addButton2" class="cool2">< Back </a></div>
    <div class="col-4"> 
   
        <h1><span class="gold">Order List</h1>
    </div>
    <div class="col-2">
    
    </div>
    <div class="col-2">
   
    </div>
  



  
  </div>
 
  <br>
<table class="kise" >
	<thead>
		<tr>
        <th><h1>No</h1></th>
			<th><h1>Name</h1></th>
			<th><h1>Phone</h1></th>
			<th><h1>Address</h1></th>
			<th><h1>Product Name</h1></th>
            <th><h1>Price</h1></th>
            <th><h1>Delete</h1></th>
		</tr>
	</thead>
	<tbody>

    <?php
error_reporting(1);
include('connection.php');
$data="SELECT * FROM `order` ORDER BY id DESC";
$val=$con->query($data);
$i = 1;
if ($val->num_rows > 0) {
while(list($id,$name,$ph,$add,$pn,$p) = mysqli_fetch_array($val)){
    echo "<tr>";
    echo "<td>".$i++."</td>";
    echo "<td>".$name."</td>";
    echo "<td>".$ph."</td>";
    echo "<td>".$add."</td>";
    echo "<td>".$pn."</td>";
    echo "<td>".$p."</td>";
    echo "<td><a href='delete-order.php?id=$id'>&nbsp;&nbsp;&nbsp;&nbsp;
    <img src='img/delee.jpg' style='border-radius:20px; margin-left:-20px' width='50'/></a></td>";
    echo "</tr>";
}}else{
    echo "<tr><td colspan='8' class='text-center'>
   <b> No data available</b></td></tr>";
}

?>

		
	</tbody>
</table>
  

</body>
</html>