<?php
  session_start();

  session_destroy();
  unset($_SESSION);

  echo "<script>window.open('../index.php','_self')</script>";
?>
