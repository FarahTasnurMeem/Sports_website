<?php
if (isset($_POST['submit'])) 
{
    include_once "connection.php";

    $UserName =$_POST["UserName"];
    $Email=$_POST["Email"];
    $Password=$_POST["Password"];
    $Gender =$_POST["Gender"];
    $Country =$_POST["Country"];
    $JersyNumber =$_POST["JersyNumber"];
    $SportType =$_POST["SportType"];

    $tor = "INSERT INTO signup(UserName,Email,Password,Gender,Country,JersyNumber,SportType)
    VALUES ('".$UserName."', '".$email."', '".$Password."' , '".$Country."', '".$JersyNumber."' , '".$SportType."', '', '', '', '');


if ($conn->query($tor) === TRUE) 
{
    header("Location: submitted.html");
} 
else 
{
    echo "already registered by this email: ";
}

$conn->close();
}
?>