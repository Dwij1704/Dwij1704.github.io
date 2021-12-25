<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect("localhost","root","","LoginSystem");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else
    {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES ('0', '$username', '$email', '$password')";
        $rs = mysqli_query($con, $sql);
        if($rs)
            {
                echo "Contact Records Inserted";
            }
            else{
                echo "--";
            }
    }
?>