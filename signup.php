<?php
$error = '';
$name = $_POST['name'];
$email = $_POST['email'];

 $data = "$name,$email\n";

  $file = fopen("data.csv", "a");
  fwrite($file, $data);
  fclose($file);

  echo "New record created successfully";
?>
