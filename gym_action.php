<?php 
$server="localhost";
$username="root";
$password="";
$database="gym";
$conn = mysqli_connect($server,$username,$password,$database);
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age= $_POST['age'];
    $gender=$_POST['gender'];
    $location=$_POST['location'];
    $phn_no=$_POST['phn_no'];

    $sql= "INSERT INTO `gym`(`pid`,`name`,`age`,`gender`,`location`,`phn_no`) VALUES (NULL,'$name','$age','$gender','$location','$phn_no')";
    $result= mysqli_query($conn,$sql);
    if($result>0){
        header("location:gym.php");
    }
}
?>