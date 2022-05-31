<?php

$lname = $_POST['name'];
$mobilenumber = $_POST['mobilenumber'];
$email = $_POST['email'];
$password = $_POST['password'];
  // error_reporting(0);

  $conn = new mysqli('localhost','root','','accounting');
  if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
  }else{
    $stmt = $conn->prepare("insert into register(name,gender,age,mobilenumber,email,userid,password)values (?,?,?,?,?,?,?)");
    $stmt->bind_param("siss",$name,$mobilenumber,$email,$password);
    $stmt->execute();
    echo "<script>
    alert('Registation Successful')
    </script>";
    echo "<script>location.href='login.html'</script>";
    $stmt->close();
    $conn->close();
  }
  
  ?>
