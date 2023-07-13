<?php

$connection = mysqli_connect('localhost', 'root','','book_db');

if(isset($_POST['send'])){
     $name = $_POST['name'];
     $age = $_POST['age'];
     $course = $_POST['course'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $hostel_name = $_POST['hostel_name'];
     $activity = $_POST['activity'];

     $request = " insert into book_form(name, age, course, email, phone, hostel name, activity) values
     ('$name','$age','$course','$email','$phone','$hostel_name','$activity')";

     mysqli_query($connection, $request);
     header('location:enroll.php');
}else{
    echo 'something went wrong try again';
}

?>