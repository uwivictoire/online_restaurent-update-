
<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  
error_reporting(0);  
session_start(); 

?>

<head>
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 300px;
}

div.gallery:hover {
  border: 1px solid #777;
}
div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

.column {
    float: left;
    padding: 10px;
    height: auto;
}
/*customer Review  */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #000080;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #000080;
}

.container2 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Home || Christina's restaurant</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>



<body class="home">

    <header style="background-color:black;" id="header" class="header-scroll top-header headrom">
        <nav class="navbar navbar-dark" style="background-color: black">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                <a class="navbar-brand" href="index.php"> <h3 style="color:white; font-family: cursive;">Christina's Restaurant</h3></a>
                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a> </li>
                        



                        <?php
						if(empty($_SESSION["user_id"])) // if user is not login
							{
								echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
							  <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
							}
						else
							{

									
									echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
                                    echo  '<li class="nav-item"><a href="reservation2.php" class="nav-link active">Reservation</a> </li>';
									echo  '<li class="nav-item"><a href="review.php" class="nav-link active">Review</a> </li>';
                                    echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
							}

						?>

                    </ul>

                </div>
            </div>
        </nav>

    </header>
<br><br>
    <section class="popular">
        <div class="container">
        <div class="row">
  <div class="leftcolumn">
    <div class="card">

      <h2>Customer review</h2>
      <p><b>We are very excited to hear from you!</b></p>
      <p>please leave a review by filling out this form below.this will help us to improve customer satisfacion</p>
      <h3><b>be part of the solution</b></h3>

      <div class="container2">
        <form method="POST" action="index.php">
        <div class="row">
          <div class="col-25">
            <label for="fname">YourName</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="name" placeholder="Your name..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="lname">Email</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="email" placeholder="Your last email..">
          </div>
        </div>
        <div class="row">
          <div class="col-25">
            <label for="subject">Subject</label>
          </div>
          <div class="col-75">
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
          </div>
        </div>
        <br>
        <div class="row">
          <input type="submit" value="Submit" name="addrev">
        </div>
        </form>
      </div>


</div>
  </div>
  
</div>
        </div>
    </section>

    

    <?php include "include/footer.php" ?>


    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
</body>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "online_restaurent";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['addrev'])){
$name= $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];

$sql = "INSERT INTO review (cname, email, messages)
VALUES ('$name','$email','$subject')";

if (mysqli_query($conn, $sql)) {
  echo "<script>alert('your review has been added successfully')</script>"  ;

  
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 echo "<script>alert('your review not successfully ')</script>"  ;
}
mysqli_close($conn);

?>

</html>