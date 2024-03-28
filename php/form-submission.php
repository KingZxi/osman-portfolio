<?php
include 'db.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $email = $_POST['email'];
    $tel = $_POST['phone-number'];
    $message = $_POST['message'];
    
    //Validation
    if (empty($first_name) || empty($last_name) || empty($email) || empty($message)) {
        $errors[] = 'Please fill in all required fields.';
    }

    if (strlen($message) > 2000) {
        $errors[] = 'Message is too long.';
    }

    if (strlen($first_name) > 200 || strlen($last_name) > 200 || strlen($email) > 200) {
        $errors[] = 'First name, last name, and email should not exceed 200 characters.';
    }

    if (!empty($tel) && (!preg_match("/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/", $tel) || strlen($tel) < 10)) {
        $errors[] = 'Phone number is badly formatted or too short.';
    }

    if (empty($errors)) {
        $sql = "INSERT INTO user (first_name, last_name, email, tel, message)
        VALUES (:first_name, :last_name, :email, :tel, :message)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':tel', $tel);
        $stmt->bindParam(':message', $message);

        try {
            $stmt->execute();
            echo json_encode(['success' => 'New record created successfully']);
        } catch(PDOException $e) {
            echo "Error: " . $sql . "<br>" . $e->getMessage();
        }
    } else {
        echo json_encode(['errors' => $errors]);
    }
}