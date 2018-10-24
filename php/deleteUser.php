<?php

  session_start();

  if(isset($_SESSION["user_name"])) {
    $userEmail = $_SESSION["user_email"];
    $conn = mysqli_connect("localhost","root","","bookmyshow");
    if (mysqli_query($conn,"DELETE FROM CUSTOMER WHERE Email='$userEmail'")) {
      echo "Record updated successfully";
    }
    else {
      echo "Error updating record: " . mysqli_error($conn);
    }

    echo '<script>alert("User Account Deleted!!");window.open("../index.html", "_self");</script>';
    mysqli_close($conn);
  }
?>
