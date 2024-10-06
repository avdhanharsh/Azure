<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $review=$_POST['review'];

    $sql = "insert into review(name,email,review) values('$name','$email','$review')";
    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Review inserted successfully')</script>";
        echo "<script>window.open('index.html','_Self')</script>";
    }
    else
    {
        echo "error: ".mysqli_error($conn);
    }
    mysqli_close($conn);
}


?>