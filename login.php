<?php
  if (isset($_POST['email'])) {
      $email = $_POST['email'];
      $password = $_POST['password'];
      if ($email == 'leduyhieu@gmail.com' && $password = '123') {
        echo "OK You have logged in";
      }else{
        echo "False Check your information please";
      }
    }

?>
