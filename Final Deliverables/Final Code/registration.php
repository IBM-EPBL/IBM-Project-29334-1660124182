<?php

use LDAP\Result;

$con = new mysqli('localhost','root','','project');
if(isset($_POST['submit']))
{
    $name = $_POST['name'];  
    $email = $_POST['email'];
    $password = $_POST['pass'];
    
    $sql="insert into `reg` (name,email,password) values('$name','$email','$password')";
    $result = mysqli_query($con,$sql);
    if(!$result)
    {
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Attrition</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <nav>
    <div id="lat">
        <div id="logo">
            <img src="./images/logo 2.png" alt="logo" width="50px" height="40px" style="margin-top: 5px;">
        </div>
        <div id="title">
            <span>Flight</span>
            <span style="color:rgb(209,184,87)">Attririon</span>
        </div>
    </div>
    <div id="menu" style="font-size: large;">
    <span id="home"><b>Home</b></span>
        <span id="admin"><b>Admin</b></span>
        <span id="register" ><b>Register</b></span>
        <span id="about"><b>About us</b></span>
        <span id="contact"><b>Contact us</b></span>
    </div>
</nav>
<div class="container ">
        <div class="con"  style="background:transparent;" >
            <div class="reg" >
                <form class="regform" style="background:transparent;" method="post"> 
                    <h1 style="color:rgb(255,283,0); background-color: rgba(255, 255, 255, .3); width:250px ; text-align: center;
                    border-radius: 10px; border: 1px solid white;" >Register Form</h1>
                    <div class="inputbox">
                        <input type="text" name="name" required="required"><span>Name</span></div>
                        <div class="inputbox">   <input type="email" name="email" required="required"><span>Email id</span></div>
                            <!-- <div class="inputbox">  <input type="text" name="orgname" required="required"><span>Organization name</span></div> -->
                                <div class="inputbox">  <input type="password" name="pass" required="required"><span>password</span></div>
                                    <!-- <div class="inputbox">  <input type="password"  required="required"><span>confirm password</span></div> -->
                    <button  name="submit" >Register </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="./index.js"></script>
</body>
</html>


