<?php
$con=new mysqli('localhost','root','','Project');
if(isset($_POST['bun']))
{
    $name=$_POST['name'];
    $pass=$_POST['password'];
    $sql="select * from `reg` where name='$name' and password='$pass'";
    // $sql = "insert into login (user,password) values('$name','$pass')";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result)==1)
    {
        echo "sucess";
        header("location:user.html");
    }
    else{
        echo "db error";     
        die(mysqli_error($con));
    }
   
}
else{
    echo "error";
}
?>
