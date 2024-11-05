<?php
    // Start the session
    session_start();

    // Include database configuration file
    include "config.php";

    // Check if the user is logged in
    if (isset($_SESSION['id'])) {
        $user_id = $_SESSION['id']; // Get the user's ID from the session

        // Fetch the form data from the POST request
        $category = $_POST['Category']; 
        $short_description = $_POST['shortDescription'];
        $brief_description = $_POST['brief_description'];

        // SQL query to update the user's data
        $stmt = $conn->prepare("UPDATE user SET category = ?, short_description = ?, brief_description = ? WHERE id = ?");

        // Bind the parameters to the SQL query
        $stmt->bind_param("sssi", $category, $short_description, $brief_description, $user_id); // 'i' for integer (user ID)

        // Execute the query and check for success
        if ($stmt->execute()) {
            echo json_encode(["success" => true, "message" => "User data updated successfully"]);
        } else {
            echo json_encode(["success" => false, "message" => "Failed to update user data"]);
        }

        // Close the statement
        $stmt->close();
    } else {
        // If the user is not logged in, return an error message
        echo json_encode(["error" => "User not logged in"]);
    }

    // Close the database connection
    $conn->close();
?>
