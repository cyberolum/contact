<?php
$errName = $_POST['name'];
$errEmail = $_POST['email'];
$errSubject = $_POST['subject'];

if(empty($errName)){
  echo "Name is Empty";
  header("Location:index4.php");
}
else if(empty($errEmail)){
  echo "E-mail is Empty";
  header("Location:index4.php");
}
else if(empty($errSubject)){
  echo "Subject is Empty";
  header("Location:index4.php");
}
else{
  echo "$errName registration is COMPLETED!";
}
?>
