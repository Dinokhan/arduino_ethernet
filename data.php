<?php
include ('connection.php');
$sql_insert = "INSERT INTO datafinger (finger) VALUES ('".$_GET["finger"]."')";

if(mysqli_query($con,$sql_insert)){
    echo "Done";
    mysqli_close($con);
}
else{
    echo "error is ".mysqli_error($con );
}
?>