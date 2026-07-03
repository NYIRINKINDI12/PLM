<?php
session_start();
header('Content-Type: application/json');

// CSRF
if(!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['token']){
    echo json_encode(['status'=>'error','message'=>'Invalid CSRF token']);
    exit;
}

// DB connection
$connection = new mysqli("localhost","root","","lamedicale");
if($connection->connect_error){
    echo json_encode(['status'=>'error','message'=>'Database connection failed']);
    exit;
}

// Clean input
function clean_input($data){ return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8'); }

$name = clean_input($_POST['name']);
$email = clean_input($_POST['email']);
$phone = clean_input($_POST['phone']);
$service = clean_input($_POST['service']);
$dob = clean_input($_POST['dob']);
$appointment = clean_input($_POST['appointment']);
$message = clean_input($_POST['message']);

// Validation
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo json_encode(['status'=>'error','message'=>'Invalid email']);
    exit;
}

if(empty($name) || empty($phone) || empty($service)){
    echo json_encode(['status'=>'error','message'=>'Fill all required fields']);
    exit;
}

// Prepared statement
$stmt = $connection->prepare("INSERT INTO appointments (fullname,email,phone,service,dob,appointment_date,message) VALUES (?,?,?,?,?,?,?)");
$stmt->bind_param("sssssss",$name,$email,$phone,$service,$dob,$appointment,$message);

if($stmt->execute()){
    echo json_encode(['status'=>'success']);
} else {
    echo json_encode(['status'=>'error','message'=>$stmt->error]);
}

$stmt->close();
$connection->close();
?>