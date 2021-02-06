<?php
$con = mysqli_connect('localhost','root');


if($con){
    echo "connection sucessfull";
}else{
    echo "no connection";
}

mysqli_select_db($con,'com_web');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query= "INSERT INTO userinfodata( user, email, mobile, comment) VALUES ('$user','$email','$mobile','$comment')";

mysqli_query($con, $query);


header('location: index.php');



?>