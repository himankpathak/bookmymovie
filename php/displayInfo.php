<?php

  $link = mysqli_connect("localhost","root","","bookmymovie");

  $result = mysqli_query($link,"SELECT * FROM Movies WHERE MovieName='$MovieName'");
  $row = mysqli_fetch_assoc($result);
  $s=$row['Description'];

  echo $s;

  mysqli_close($link);

?>
