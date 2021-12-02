<?php
$UserName =$_POST["UserName"];
$Email=$_POST["Email"];
$Password=$_POST["Password"];
$Gender =$_POST["Gender"];
$Country =$_POST["Country"];
$JersyNumber =$_POST["JersyNumber"];
$SportType =$_POST["SportType"];

//database connection
$conn=new mysqli('localhost','root','','sportssite');
if($conn->connection_error){
    die('Connection Failed:'.conn->connection_error);
}else {
  $stmt =$conn->prepare("insert into registration(UserName,Email,Password,Gender,Country,JersyNumber,SportType)values(?,?,?,?,?,?)");
  $stmt->bind_param("sssssis",$UserName,$Email,$Password,$Gender,$Country,$JersyNumber,$SportType);
  $stmt->execute();
  echo "registration Successfull" ;
  $stmt->close();
  $conn->close();
}
?>


