<?php
    function createUser($fname, $username, $password, $email, $userlvl) {
        include('connect.php');
        $userString = "INSERT INTO tbl_user VALUES(NULL, '{$fname}', '{$username}', '{$password}', '{$email}', NULL, '{$userlvl}', 'no')";
        echo $userString;
        $userQuery = mysqli_query($link, $userString);
        if($userQuery) {
            redirect_to("admin_index.php");
        }else{
            $message = "There was a problem in the creation process.";
            return $message;
        }

        mysqli_close($link);
    }


?>
