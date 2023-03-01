<?php
  
    session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $con = mysqli_connect("localhost","root","","LoginSystem");
    // When form submitted, check and create user session.
    if (isset($_POST['username']))
     {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);

        $query2    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='$password' AND type='1'";
        $result2 = mysqli_query($con, $query2) or die(mysql_error());
        $rows2 = mysqli_num_rows($result2);
        if ($rows2 == 1) {
            // Redirect to user Admin page
            header("Location: admin.php");
        } 
        elseif ($rows == 1) {
           
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } 
    
        else {
            echo "<div class='form-box'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.html'>Login</a> again.</p>
                  </div>";
        }
    }
        ?>