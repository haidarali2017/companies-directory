<?php
    // Start the session
    session_start();

    // Include database configuration file
    include "config.php";

    // Retrieve user_id and user_type from the session
    $user_id = $_SESSION['id'];
    $user_type = $_SESSION['userType'];

    // Upload projects insert  
    $title = $_POST['title'];
    $category = $_POST['Category']; 
    $keywords = $_POST['keywords'];
    $my_file_name = $_POST['myfile-name'];
    $short_description = $_POST['shortDescription'];
    $brief_description = $_POST['brief_description'];

    // SQL query to insert form data into the `upload_projects` table using placeholders
    $stmt = $conn->prepare("INSERT INTO upload_projects (user_id, user_type, title, category, keywords, my_file_name, short_description, brief_description, date, created_at, updated_at) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW(), NOW())");

    // Bind the parameters to the SQL query
    $stmt->bind_param("isssssss", $user_id, $user_type, $title, $category, $keywords, $my_file_name, $short_description, $brief_description);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Upload project inserted successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to insert upload project"]);
    }

    // Close the statement
    $stmt->close();
    
    // Close the database connection
    $conn->close();
?>
