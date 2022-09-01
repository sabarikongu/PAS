<?php
include("conn.php");
// $reg=$_POST["reg"];
// $name=$_POST["name"];
// $dep=$_POST["dep"];
// $cou=$_POST["cou"];
// $hob=$_POST["hob"];



$name=$_POST["name"];
$address=$_POST["address"];
$district=$_POST["district"];
$state=$_POST["state"];
$pincode=$_POST["pincode"];

$email=$_POST["email"];
$telephone=$_POST["telephone"];
$fname=$_POST["fname"];

$age=$_POST["age"];
$password=$_POST["password"];

// $sql="INSERT INTO inse(reg,name,dep,cou,hob)VALUES('$reg','$name','$dep','$cou','$hob')";



$sql="INSERT INTO inse3(name,address,district,state,pincode,email,telephone,fname,age,password)VALUES('$name','$address','$district','$state','$pincode','$email','$telephone','$fname','$age','$password')";







if($conn->query($sql) === TRUE){
    echo'<script>alert("Booked Successfully")</script>';

    
    header("Location: ./adder.html");
}
else{
    echo "error: ". $sql . "<br>" .$conn->error;
}
$conn->close();
?>