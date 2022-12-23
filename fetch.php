<?php

$conn = new mysqli('localhost','root','20022003n','me');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
	
$query=mysqli_query($conn,"select * from increment");
while($row=mysqli_fetch_array($query))
{
    echo $row['ID']."<br>";
}
    }
?>
