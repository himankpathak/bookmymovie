<?php

  // establishing the MySQLi connection
  $con = mysqli_connect("localhost","root","","bookmymovie");
  if (mysqli_connect_errno()){
    echo "MySQLi Connection was not established: " . mysqli_connect_error();
  }

  // checking the user
  if(empty($_SESSION)) // if the session not yet started
     session_start();

  if(isset($_POST["login"])){

    $email = mysqli_real_escape_string($con,$_POST["Email"]);
    $pass = mysqli_real_escape_string($con,$_POST["Password"]);
    $sel_user = "select Name from customer where Email='$email' AND Password='$pass'";

    $run_user = mysqli_query($con, $sel_user);

    $check_user = mysqli_num_rows($run_user);
    $row = mysqli_fetch_assoc($run_user);

    if($check_user>0){
      $_SESSION["user_email"]=$email;
      $_SESSION["user_name"]=$row["Name"];
      $_SESSION["Phone"]=$row["Phno"];

      echo'<script>
              window.history.go(-1);
           </script>';
    }
    else {
      echo '<script>
              alert("Incorrect Password or Username!");
              window.history.go(-1);
            </script>';
    }
  }

?>
