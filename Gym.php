<?php 
$server="localhost";
$username="root";
$password="";
$database="gym";
$conn = mysqli_connect($server,$username,$password,$database);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness</title>
    <link rel="stylesheet" type="text/css" href="Gym.css">

    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
   <!-- <style>
       .button{
        display: block;
    width: 74%;
    margin: 30px auto;
    padding: 10px 50px;
    font-size: 25px;
    border-radius: 30px;
    
       }
</style> -->
</head>
<body>
   
    <header class="header">
        <!-- left box for logo -->
        <div class="left">
            <img src="logo.webp" alt="gym">
            <div>Suyog Fitness </div>
        </div>
        <!-- mid box for navbar -->
        <div class="mid">
            <ul class="navbar">
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#" >About Us</a></li>
                <li><a href="#" >Fitness Calculator</a></li>
                <li><a href="#" >Contact Us</a></li>
            </ul>
        </div>
        <!-- right box for some btns -->
        <div class="right">
            <button class="btn">Call Us</button>
            <button class="btn">Email Us</button>
        </div>
    </header>
    <div class="container">
        <h1> Join the best Gym of Paithan Now!!!</h1>
        <form method="post" action="gym_action.php">
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your name">

            </div>
            <div class="form-group">
                <input type="text" name="age" placeholder="Enter your Age">

            </div>
            <div class="form-group">
                <input type="text" name="gender" placeholder="Enter your Gender">

            </div>
            <div class="form-group">
                <input type="text" name="location" placeholder="Enter your Locality">

            </div>
            <div class="form-group">
                <input type="text" name="phn_no" placeholder="Enter your Phone Number">

            </div>
            <input type="submit" name="submit" class="btnn">
            <!-- <button class="btn" type="submit">Submit</button> -->
        </form>
    </div>
</body>
</html>