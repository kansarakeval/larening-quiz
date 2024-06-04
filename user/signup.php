<?php

    include("../connection.php");

    @$name = $_POST['name'];
    @$email = $_POST['email'];
    @$password = $_POST['password'];

    if($name!=null && $email!=null && $password!=null)
    {
        $readQuery = "SELECT * FROM user WHERE `email`='$email'";
        $data = mysqli_query($conn, $readQuery);
        if(mysqli_num_rows($data)==0)
        {
            $haspass = password_hash($password,PASSWORD_DEFAULT);
            $query = "INSERT INTO `user` (`name`, `email`, `password`) VALUES ('$name','$email','$haspass')";
            $res = mysqli_query($conn, $query);

            if($res) 
            {
                $msg = array('status'=>'Success fully sign in');
                echo json_encode($msg);
                http_response_code(200);
            } 
            else 
            {
                $msg = array('status'=>'Failed to sign up');
                echo json_encode($msg);
                http_response_code(400);
            }
        }
        else 
        {
            $msg = array('status'=>'this email alrady sign up');
            echo json_encode($msg);
            http_response_code(400);
        }
    }
    else
    {
        $msg = array('status'=>'Key not Exists');
        echo json_encode($msg);
        http_response_code(404);
    }
?>