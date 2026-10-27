<?php

// Database connection
$host = "localhost";
$username = "root";
$password = "";
$database = "employee.db";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}


// Check whether form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form values
    $employee_id  = $_POST['employee_id'] ?? '';
    $full_name    = $_POST['full_name'] ?? '';
    $email        = $_POST['email'] ?? '';
    $phone        = $_POST['phone'] ?? '';
    $department   = $_POST['department'] ?? '';
    $designation  = $_POST['designation'] ?? '';
    $salary       = $_POST['salary'] ?? '';
    $joining_date = $_POST['joining_date'] ?? '';
    $gender       = $_POST['gender'] ?? '';
    $address      = $_POST['address'] ?? '';

    // Insert data
    $sql = "INSERT INTO employees
            (employee_id, full_name, email, phone, department, designation, salary, joining_date, gender, address)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("SQL Error: " . $conn->error);
    }

    $stmt->bind_param(
        "ssssssdsss",
        $employee_id,
        $full_name,
        $email,
        $phone,
        $department,
        $designation,
        $salary,
        $joining_date,
        $gender,
        $address
    );

    // Execute
    if ($stmt->execute()) {

        echo "<script>
                alert('Employee saved successfully!');
                window.location.href='employee_form.php';
              </script>";

    } else {

        echo "Error saving employee: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();

?>
