
<?php
    $fname=$_POST["fname"];
    $Title=$_POST["Title"];
    $lname=$_POST["lname"];
    $date=$_POST["date"];
    $mobile=$_POST["mobile"];
    $email=$_POST["email"];
    $message=$_POST["message"];
    $file=$_POST["file"];

    if (!ctype_alpha($fname)) {
        echo '<script>alert("Please enter a valid First Name");window.location.href="index.html";</script>';
    }

    if (!ctype_alpha($lname)) {
        echo '<script>alert("Please enter a valid Last Name");window.location.href="index.html";</script>';
    }

    if (!ctype_digit($mobile) && strlen($mobile)>=10){
        echo '<script>alert("Please enter a valid Mobile Number");window.location.href="index.html";</script>';
    }

    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo '<script>alert("Please enter a valid Email");window.location.href="index.html";</script>';
    }

    if ($file){
        $file_type= array('pdf','jpg','png','jpeg');
        $ext= pathinfo($file,PATHINFO_EXTENSION);
        if (!in_array($ext,$file_type)) {
            echo '<script>alert("Please upload a valid File Format");window.location.href="index.html";</script>';
        } 
    }

    print("Thank you {$Title}. {$fname} {$lname}<br>");
    print("You have submitted the following details<br>");
    print("Date of Birth: {$date}<br>");
    print("Telephone: {$mobile}<br>");
    print("Email: {$email}<br>");
    print("File upload: {$file}<br>");
    print("Message: {$message}<br>");    
?>