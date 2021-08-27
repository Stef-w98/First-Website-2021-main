<?php
  $userName = $_POST['username'];
  $Password = $_POST['password'];

  //Database connection
$conn = new mysql('localhost','root','','Login_db');
if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}else{
  $stmt = $conn->prepare("inser into users(user_name, password)
    values(?, ?)");
    $stmt->bind_param("ss", $username, $Password);
    $stmt->execute();
    echo "registration successfully...";
    $stmt->close();
    $conn->close();
}

?>
