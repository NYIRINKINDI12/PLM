<?php
session_start();
header('Content-Type: application/json');

if(isset($_POST['csrf_token']) && $_POST['csrf_token'] !== $_SESSION['token']){
    echo json_encode(['status'=>'error','message'=>'Invalid CSRF token']);
    exit;
}

$connection = new mysqli("localhost","root","", "lamedicale");
if($connection->connect_error){
    echo json_encode(['status'=>'error','message'=>'Database connection failed']);
    exit;
}

function clean_input($data){ return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8'); }

$name = clean_input($_POST['name'] ?? '');
$email = clean_input($_POST['email'] ?? '');
$phone = clean_input($_POST['phone'] ?? '');
$message = clean_input($_POST['message'] ?? '');

if(!$name || !$email || !$phone || !$message){
    echo json_encode(['status'=>'error','message'=>'Please fill all required fields']);
    exit;
}

if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo json_encode(['status'=>'error','message'=>'Invalid email']);
    exit;
}

$stmt = $connection->prepare("INSERT INTO contact_messages (fullname,email,phone,message) VALUES (?,?,?,?)");
$stmt->bind_param("ssss",$name,$email,$phone,$message);

if($stmt->execute()){
    // Optional: email notification
    $to = "fabricenyd@gmail.com";
    $subject = "New Contact Message";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";
    $headers = "From: $email";
    @mail($to,$subject,$body,$headers);

    echo json_encode(['status'=>'success','message'=>'Message sent successfully!']);
} else {
    echo json_encode(['status'=>'error','message'=>$stmt->error]);
}

$stmt->close();
$connection->close();
?>