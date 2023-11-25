<?php
  $conn = mysqli_connect("localhost", "root", "", "arza");

  $name = $_POST ['name'];
  $email = $_POST ['email'];
  $subject = $_POST ['subject'];
  $message = $_POST ['message'];
  $text = "Data sudah dikirimkan";
  $tetx = "Terjadi Kesalahan";

  $query = "INSERT INTO library VALUES
            ('$name', '$email', '$subject', '$message')";

  if (mysqli_query($conn, $query)) {
    echo "<h1 class='text'>$text</h1>";
  } else {
    echo "<h1 class='tetx'>$tetx</h1> " . mysqli_error($conn);
  }

  mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemberitahuan</title>
  <link href="img" rel="icon">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <style>
    body { background-image: url(../assets/img/contact-bg.jpg); }
    .text, .tetx { 
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%); 
      color: white;
    }
  </style>
</head>
<body>
  
</body>
</html>
