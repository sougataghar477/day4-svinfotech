<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $conn = new mysqli(
    "db.fr-pari1.bengt.wasmernet.com",
    "a890400970b4800092c62a05eeea",
    "0694a890-4009-71fc-8000-31acc0d66b54",
    "userfeedbacks",
    10272
);
  $name = trim($_POST['name']);
  $email = trim($_POST['email']);
  $message = trim($_POST['message']);
  
  header('Content-Type: application/json');
  if($conn->connect_error){
      echo json_encode([
    "status" => "error",
    "message" => $conn->connect_error
  ]);
  exit;
  }
  else{
    $stmt =$conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");
    if(!$stmt){
        echo json_encode([
        "status" => "error",
        "message" => $stmt->error
    ]);
    exit;
    }
    $stmt->bind_param("sss", $name, $email, $message);
    if($stmt->execute()){
        echo json_encode([
        "status" => "success",
        "message" => "Inserted succesfully"
    ]);
    exit;
    }
    else{
        echo json_encode([
        "status" => "failure",
        "message" => "Insert failed"
    ]);
    }
  }  

}
?>
