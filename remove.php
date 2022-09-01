<?php
include("conn.php");
//$tno=$_POST["tno"];
// $reg=$_POST["reg"];
$telephone=$_POST["telephone"];
$sql="DELETE FROM inse3 where telephone=$telephone";
if($conn->query($sql) === TRUE)
{
    echo'<script>alert("Tickect Cancelled Successfully")</script>';
    header("Location: ./remover.html");
    
}
else{
    echo "error: ". $sql . "<br>" .$conn->error;
}
$conn->close();
?>
