<?php
   
   //for validating

   //check for data submissiion using post method

   if($_SERVER['REQUEST_METHOD'] === "POST"){

     $fullName = trim($_POST['fullName']);
     $phoneNumber = trim($_POST['phoneNumber']);
     $email = trim($_POST['email']);
     $subject = trim($_POST['subject']);
     $message = trim($_POST['message']);


     //form validation
     if(empty(($fullName) || empty($phoneNumber) || empty($email) || empty($subject) || empty($message))){
        die("Please fill in the all required fields.");
     }


     //email validation
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Invalid email format");
     }


     //db coneection
     $conn = new mysqli('localhost', 'root', 'Pandey@1234', 'cardb');

    //lets check

    if($conn->connect_error){
        die("Connection failed" . $con->connect_error);
    }

    //insertion of data 
    $ipAddress= $_SERVER['REMOTE_ADDR'];
    $submisssionTime= date('y-m-d H:i:s');

    $sql="INSERT INTO contact_form(full_name, phone_number,email, subject,message, ip_address, submission_time) 
    VALUES ('$fullName','$phoneNumber','$email','$subject','$message','$ipAddress','$submisssionTime')";


    if($conn->query($sql)===TRUE){

        $to='shivamamitpandey95@gmail.com';
        $subject='New Form Submission';
        $messageBody = "New form submission:\n\nFull Name: $fullName\nPhone :$phoneNumber\nEmail: $email\nSubject: $subject\nMessage";
        $headers = 'From: sender@example.com';


        //email
        mail($to, $subject,$messageBody, $headers);

        echo "Form Submitted Succcessfully";


    }else{
        echo "Error: " .$sql . "<br>".$conn->error;
    }

    $conn->close();



   }else{
     header('Location: index.php');
     exit;


   }


//Here the smtp server setting can be changed as per user requirement 




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submitted </title>
</head>
<body>
    <a href="index.php">Back to Form</a> 
</body>
</html>

