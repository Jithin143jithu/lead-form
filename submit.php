<?php
require 'db.php';

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    function clean($data)
    {
        return htmlspecialchars(trim($data));
    }

    $full_name = clean($_POST['full_name'] ?? '');
    $phone = clean($_POST['phone'] ?? '');
    $email = clean($_POST['email'] ?? '');
    $gender = clean($_POST['gender'] ?? '');
    $dob = clean($_POST['dob'] ?? '');
    $district = clean($_POST['district'] ?? '');
    $marital_status = clean($_POST['marital_status'] ?? '');
    $employment_status = clean($_POST['employment_status'] ?? '');
    $total_experience = clean($_POST['total_experience'] ?? '');

    $preferred_locations = isset($_POST['preferred_locations'])
        ? implode(", ", $_POST['preferred_locations'])
        : '';

    $preferred_roles = isset($_POST['preferred_roles'])
        ? implode(", ", $_POST['preferred_roles'])
        : '';

    // Basic validation
    if (
        empty($full_name) || empty($phone) || empty($email)

        || empty($gender)
        || empty($dob)
        || empty($district)
        || empty($marital_status)
        || empty($employment_status)
        || empty($total_experience)
        || empty($preferred_locations)
        || empty($preferred_roles)

    ) {
        echo json_encode([
            "status" => "error",
            "message" => "Please fill all required fields."
        ]);
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid email format."
        ]);
        exit;
    }

    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        echo json_encode([
            "status" => "error",
            "message" => "Invalid phone number."
        ]);
        exit;
    }

    // Prevent duplicate phone
    $check = $conn->prepare("SELECT id, phone, email FROM website_leads WHERE phone = ? OR email = ?");
    $check->bind_param("ss", $phone, $email);
    $check->execute();
    $result = $check->get_result();

    if ($result->num_rows > 0) {

        $existing = $result->fetch_assoc();

        if ($existing['phone'] === $phone) {
            echo json_encode([
                "status" => "error",
                "message" => "This phone number is already registered."
            ]);
            exit;
        }

        if ($existing['email'] === $email) {
            echo json_encode([
                "status" => "error",
                "message" => "This email address is already registered."
            ]);
            exit;
        }
    }

    // Insert Data
    $stmt = $conn->prepare("INSERT INTO website_leads 
        (full_name, phone, email, gender, dob, district, marital_status, employment_status, total_experience, preferred_locations, preferred_roles)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param(
        "sssssssssss",
        $full_name,
        $phone,
        $email,
        $gender,
        $dob,
        $district,
        $marital_status,
        $employment_status,
        $total_experience,
        $preferred_locations,
        $preferred_roles
    );

    if ($stmt->execute()) {

        echo json_encode([
            "status" => "success",
            "message" => "Thank You! Our Recruitment Team Will Contact You Soon."
        ]);

    } else {

        echo json_encode([
            "status" => "error",
            "message" => "Something went wrong. Please try again."
        ]);
    }

}