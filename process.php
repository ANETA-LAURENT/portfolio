<?php
if (isset($_POST['email'])) {

  //Email information
  $admin_email = "laurent.aneta@gmail.com";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  //send email
  mail($admin_email, "New Form Submission", $message . ' - ' . $name, "From:" . $email);

  header('Location: https://aneta-laurent.yj.fr/success.html');
}
