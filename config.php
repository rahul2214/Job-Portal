<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';
$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error)
{
    die("Connection failed:" .$conn->connect_error);
    
}
echo"";
if(isset($_POST['submit']))
{
    $name=$_POST['Name'];
    $email=$_POST['email'];
    $number=$_POST['Phone_no'];
    $password = $_POST['password'];
    $sql="INSERT INTO `users`( `Name`, `email`, `password`,`Phone_no`) VALUES ('$name','$email','$password','$number')";
    
    if(mysqli_query($conn,$sql))
    {
        echo"records inserted sucesfully. ";
    }
    else{
        echo"could not able to execute $sql." . mysqli_error($conn);
    }
}
session_start();
if(isset($_POST['Login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if(mysqli_num_rows($result)==1){
        header("Location:index.php");
    }
    else{
        $error = 'emilid or password is incorrect';
    }
}
if(isset($_POST['job'])){
    $cname=$_POST['cname'];
    $pos = $_POST['pos'];
    $Jdesc = $_POST['Jdesc'];
    $skills = $_POST['skills'];
    $CTC = $_POST['CTC'];
    $sql= "INSERT INTO `jobs`(`cname`, `pos`, `Jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$Jdesc','$skills','$CTC')";
    mysqli_query($conn, $sql);
    
}
if(isset($_POST['aply']))
{
    $name = $_POST['name'];
    $qual = $_POST['qual'];
    $apply = $_POST['apply'];
    $year = $_POST['year'];
    $sql = "INSERT INTO `candidates`(`name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";


    mysqli_query($conn, $sql);

   
}
?>