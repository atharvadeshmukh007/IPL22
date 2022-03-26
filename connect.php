<?php

$S_name= filter_input(INPUT_POST, 'name');
$S_email = filter_input(INPUT_POST, 'email');
$S_message= filter_input(INPUT_POST, 'message');

if(!empty($name)){
    if(!empty($email)){
        if(!empty($message)){

            $host= "localhost";
            $dbusername= "root"
            $dbpassword = " ";
            $dbname = "contact_ipl";

            // SD creating connection
            $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
            if (mysqli_connect_error()){
            die('Connect Error ('. mysqli_connect_errno() .') '
            . mysqli_connect_error());
            }
    
   else{
       $sql = "INSERT INTO ipl(S_name,S_email,S_message)values('$S_name','$S_email','$S_message')";
       if ($conn->query($sql)){
        echo "New record is inserted sucessfully";
        }
        else{
        echo "Error: ". $sql ."
        ". $conn->error;
        }
        $conn->close();
        }
        }
        else{
        echo "Password should not be empty";
        die();
        }
        }
        else{
        echo "Username should not be empty";
        die();
        }

?>