<?php
    $con = new mysqli("localhost","root","","sweet_memories");

    if($con->connect_error){
        die("Connection Error");
    }

?>