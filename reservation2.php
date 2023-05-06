
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



.column {
    float: left;
    padding: 10px;
    height: auto;
}

#myUL{
    overflow: scroll;
}
header{
    background-color: #000080;
    color: white;
    display: flex;
    position: -webkit-sticky;
    position: sticky;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}
.but{
    display: flex;
    margin-left: 60%;
}
.but button{
    border-right: 2px solid #000080;
}
#myInput {
    background-image: url('../css/searchicon.png');
    background-position: 10px 12px;
    background-repeat: no-repeat;
    width: 100%;
    font-size: 16px;
    padding: 12px 20px 12px 40px;
    border: 1px solid #ddd;
    margin-bottom: 12px;
  }
  #myUL {
    list-style-type: none;
    padding: 0;
    margin: 0;
  }

  #myUL li a {
    border: 1px solid #ddd;
    margin-top: -1px; /* Prevent double borders */
    background-color: #f6f6f6;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    color: black;
    display: block
  }

  #myUL li a:hover:not(.header) {
    background-color: #eee;
  }
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #000080;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #000080;
}
#fname{
  display: inline;
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

    <header id="header" class="header-scroll top-header headrom">
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
        <div class="card">

<div>
<form method="POST" action="index.php">

<input type="text" id="fname" name="phone" placeholder="Your phone numbers.." style="width:50%;"><input type="text" id="fname" name="chairs" placeholder="how many chairs do you want"style="width:50%;">

<label for="lname">About Schedule</label>
<input type="text" id="lname" name="day" value="5/5/2023">

<label for="country">when do you want it (hours)</label>
<select id="country" name="hours">
<option value="8:am">8:00am</option>
<option value="9:00am">9:00am</option>
<option value="10:00am">10:00am</option>
<option value="11:00am">11:00am</option>
<option value="12:00am">12:00am</option>
<option value="13:00pm">13:00pm</option>
<option value="14:00pm">14:00pm</option>
<option value="15:00pm">15:00pm</option>
<option value="16:00pm">16:00pm</option>
<option value="17:00pm">17:00pm</option>
<option value="18:00pm">18:00pm</option>
<option value="19:00pm">19:00pm</option>
<option value="20:00pm">20:00pm</option>
<option value="21:00pm">21:00pm</option>
<option value="22:00pm">22:00pm</option>
<option value="23:00pm">23:00pm</option>

</select>

<input type="submit" value="Submit" name="addres">
</form>
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


</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "code_camp_bd_fos";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(isset($_POST['addres'])){
$sender=$_SESSION['user_id'];
$phone= $_POST['phone'];
$chair= $_POST['chairs'];
$day= $_POST['day'];
$hour= $_POST['hours'];

$sql = "INSERT INTO reservation(u_id, phone,chairs, r_day,r_hour)
VALUES ('$sender','$phone','$chair','$day','$hour')";

if (mysqli_query($conn, $sql)) {

echo "<script>alert('your review has been added successfully')</script>"  ;
} else {

  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);

?>