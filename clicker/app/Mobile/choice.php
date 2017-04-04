<?php


echo "Connectedsuccessfully";

if($db->conncect_error){
  die("database Connection Failed: " . $conn->connect_error);
}
echo "<br>Database connected successfully";

echo $choice = $_GET['choice'];
echo $matricNo = $_GET['matricNo'];

$sql = "INSERT INTO responses VALUES (1, '$matricNo', '$choice')";

if ($conn->query($sql) === TRUE) {
  echo "<br>New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

?>