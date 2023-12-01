<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_POST["name"];
     $email = $_POST["email"];
     $contact = $_POST["contact"];
     $message = $_POST["message"];
     $to = 'ayush5555.ag@gmail.com';
     $subject = 'new query';
     $body = "From: $name\n E-mail: $email\n Message:\n $message";
     if(mail($to,$subject,$body)){
        echo"message sucess";
     }
     else{
        echo"message deliver failed";
     }
}
// $name = $_POST["name"];
// $email = $_POST["email"];
// $contact = $_POST["contact"];
// $message = $_POST["message"];

// //databae connect 

// $conn = new mysqli('localhost','root','','printertech-landingpage');
// if($conn->connect_error){
//     die('connection failed :' .$conn->connect_error);

// } else {
//     $stmt = $conn->prepare("insert into request(name,email,contact,message)
//     values(?,?,?,?)");
//     $stmt->bind_param("ssis",$name,$email,$contact,$message);
//     $stmt->execute();
//     echo "request successfully..";
//     header("location:index.html");
//     $stmt->close();
//     $conn->close();

// }

?>