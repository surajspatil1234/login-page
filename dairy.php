<?php
mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("reg") or die (mysql_error());

if(isset($_POST['signup']))
{
   echo $emailid = $_POST['email'];
    echo $pass = $_POST['password'];
    if($email=='')
    {
        echo "<script>alert('please enter the email')</script>";
    }
    if($pass=='')
    {
        echo "<script>alert('please enter the password')</script>";
    }

    $query = "insert into user (email,password) values ('$emailid','$pass;)";
    if (mysql_query($query)) {
        echo "<h3> you have registerd successfully!!</h3>"
    }
}

?>
