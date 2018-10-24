<?php

  session_start();

  if(isset($_SESSION["user_name"])){

    $conn = mysqli_connect("localhost","root","","bookmymovie");
    $userName = $_SESSION["user_name"];
    $userEmail = $_SESSION["user_email"];

    if(isset($_POST["newUserName"])) {

      $newUserName = $_POST["newUserName"];
      if (mysqli_query($conn,"UPDATE CUSTOMER SET Name='$newUserName,' WHERE Email='$userEmail'")) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
     }

    if(isset($_POST["newPassword"])) {

      $newPassword = $_POST["newPassword"];
      if (mysqli_query($conn,"UPDATE CUSTOMER SET Password='$newPassword' WHERE Email='$userEmail'")) {
       echo "Record updated successfully";
      } else {
       echo "Error updating record: " . mysqli_error($conn);
       }
     }

    if(isset($_POST["newPhone"])) {
      $newPhone = $_POST["newPhone"];
      if (mysqli_query($conn,"UPDATE CUSTOMER SET Phno='$newPhone' WHERE Email='$userEmail'")) {
        echo "Record updated successfully";
      } else {
        echo "Error updating record: " . mysqli_error($conn);
      }
    }

    if(isset($_POST["newPassword"]) || isset($_POST["newUserName"]) || isset($_POST["newPhone"])) {
      echo '<script>alert("Updated!!");
         window.open("../index.php", "_self");
         </script>';
    } else {
      echo '<script>
         window.open("../index.php", "_self");
         </script>';
    }

    mysqli_close($conn);
  }
?>
