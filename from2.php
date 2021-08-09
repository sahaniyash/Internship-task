<?php
   $FullName = $_POST['FullName'];
   $Email = $_POST['Email'];
   $Number = $_POST['Number'];
   $Seatno = $_POST['Seatno'];
   $Password = $_POST['Password'];

  //Database connection
  $conn = new mysqli('localhost','root','','student');
  if($conn->connect_error) {
      die('Connection failed  :' $conn->connect_error);
  }else{
      $stmt = $conn->prepare("insert into login(FullName,Email,Number,Seatno,Password (?, ?, ?, ?, ?, ?,)"){
          $stmt->blind_param("sssssi",$FullName, $Email, $Number, $Seatno, $Password);
          $stmt->execute();
          echo "Login Successfully...";
          $stmt->close();
          $conn->close();
      }
  }


?>
