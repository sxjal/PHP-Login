<?php

$conn = new mysqli('localhost','root','20022003n','me');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
	
        $sql = "INSERT INTO increment (id, namee)
        VALUES ('1234', 'example')";
        if($conn->query($sql))
        {
            echo "secc";
        }

    }
?>
