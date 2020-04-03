
<?php
session_start();
include "connection.php";
$wallet_amount=$_GET['id'];
$item_id=$_SESSION['item_id'];
$qty=$_SESSION['qty'];

  $obj=new db();
$selec="select * from item WHERE item_id='$item_id'";
$data1=$obj->execute($selec);

//$row=mysqli_fetch_array($data);
if(mysqli_num_rows($data1)>0)
{

while($row=mysqli_fetch_array($data1))
{
$itemname=$row['itemname'];	
$price=$row['price'];
//$stock=$row['no_item'];

$total=$price*$qty;

}
}

?>
<?php
$bcid=$_SESSION['lid'];
$obj=new db();
$sel="select * from customerregister WHERE loginid=$bcid";
$data2=$obj->execute($sel);

//$row=mysqli_fetch_array($data);
if(mysqli_num_rows($data2)>0)
{

while($row=mysqli_fetch_array($data2))
{	
$firstname=$row['firstname'];

//$DOB=$row['DOB'];


}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title>ZELSONN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

   

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="goto-here">
		<div class="py-1 bg-primary">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	 <span class="text">7510537296</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">zelsonn@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
						    <span class="text">3-5 Business days delivery &amp; Free shopping</span>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">ZELSONN</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="indexin.php" class="nav-link">Home</a></li>
	          
            </li>
	          <li class="nav-item"><a href="cart11.php" class="nav-link">CART</a></li>
	          <li class="nav-item"><a href="feedback.php" class="nav-link">FEEDBACKS</a></li>
	          <li class="nav-item"><a href="ORG1.php" class="nav-link">LOGOUT</a></li>
			  <li class="nav-item"><a href="changepasswords.php" class="nav-link">CHANGE PASSWORD</a></li>
	          <li class="nav-item"><a href="cat.php" class="nav-link">CATEGORYS</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
	   <section id="home-section" class="hero">
		  <div class="home-slider owl-carousel">
	      <div class="slider-item" style=style="background-image: url(vegefoods/images/c3.jpg);">
	      	<div class="overlay"></div>
	        <div class="container">
	          <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

	            <div class="col-md-12 ftco-animate text-center">
	             <!-- <h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
	              <h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
	              <p><a href="#" class="btn btn-primary">View Details</a></p>
	            </div>-->

	          </div>
	        </div>
	      </div>
		  </section>
<?php

include 'conn.php';
$q="select * from places";
  $sq=mysqli_query($con,$q); 								
?><!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 4px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 10px 18px;
  margin: 8px 50;
    right: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}
body {
  margin: 0;
  padding: 0;
  
      background-image: url("table.jpg");
 
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px  18px ;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 30%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

</style>
</head>
<body>



  
  
    

   
  <form class="modal-content animate" action="walletship.php" method="post">

 
   <h1>SHIPPING ADDRESS</h1>
   
      <div class="container">
      
      <div class="col-25">
        <label for="itemname"><b>place:</b></label>
      </div>
<select  name="place" class="form-control">
		                      	<option value="place">Select place</option>
		                        <?php 
								while($r=mysqli_fetch_array($sq))
   								{
									?>
   								
<option value="<?php echo $r['place'];

//echo "<script> alert($cid);
           //window.location='company.php'</script>";


?>"><?php echo $r['place']?>


<?php
}
?>

		                    </select>
							<label for="uname"><b>Address</b></label>
      <br><input type="text" placeholder="adress" name="adress" required>
	 <br>
							
							<label for="uname"><b>city</b></label>
      <br><input type="text" placeholder="city" name="city" required><br>
	  <label for="uname"><b>lanmark</b></label>
      <br><input type="text" placeholder="lanmark" name="lanmark" required><br>
	 
	 
      
	
        <label for="housenumber"><b>Housenumber</b></label>
     
   
   <br><input type="text" name="houseno" id="houseno"  pattern=".{5,}[A-Z/a-z]"  placeholder="" checked required=" "><br>
   
 <br><div class="row">
     <div class="col-25">
  <button type="submit" name="submit" id="submit">SUBMIT<a href="payment.php?$id=<?php echo $item_id;?>"></button> </br>
  

 </div>
 </div>
        
      
  </form>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>

<?php 

 
 if(isset($_POST['submit']))
{           
$pl=$_POST['place'];
$ad=$_POST['adress'];
$city=$_POST['city'];
$lan=$_POST['lanmark'];
$hou=$_POST['houseno'];
$total=$_POST["total"];
$ndate=date("Y")."-".date("m")."-".date("d");
$total=$price*$qty;
$a="0.1";
$wallet=$total*$a;
$sql="INSERT INTO `shipping`(`firstname`, `place`, `adress`, `city`, `lanmark`, `houseno`, `itemname`, `qty`, `total`, `date`,`status`)values('$firstname','$pl','$ad','$city','$lan','$hou','$itemname','$qty','$total','$ndate','0')";

$objj=new db();
$objj->execute($sql);
echo "<script> 
 
 

 window.location='ipayment.php'</script>";



 


}
?>


<?php

$query="select * FROM wallet";
$r=mysqli_query($con,$query);
if(mysqli_num_rows($r)>0){
	
	
	
	while($row = mysqli_fetch_array($r)){
		$a=$row['wallet_amount'];
		

if($wallet_amount<$total)
	{
		echo "<script> alert('UN SUFFICIENT BALANCE');
          window.location='cat.php' </script>";
	}
	else{

		
$update="UPDATE wallet SET wallet_amount = $wallet_amount - $total";
$upd=mysqli_query($con,$update); 
	}
}
}
?>


</form>
</html>

           