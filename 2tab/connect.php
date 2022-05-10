<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demo";
 
$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
    die(mysqli_error($conn));
   }
   
if(isset($_POST['save']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];
  $city = $_POST['city'];
  $pincode = $_POST['pincode'];
  $work = $_POST['work'];

  $sql = "INSERT INTO crud (name, email, mobile, password) VALUES ('$name','$email', '$mobile', '$password')";

  $result = $conn->query($sql);
  $last_id= mysqli_insert_id($conn);
  
 $sql1 = "INSERT INTO crud1 (city,pincode,work,crud_id) VALUES ('$city','$pincode', '$work', '$last_id')";
 $result = $conn->query($sql1);

if ($result) {
 // echo $last_id ;
  header('location:display.php');
 
}
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>

