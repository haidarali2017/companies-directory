<?php

    // Start the session
    session_start();

    // Include database configuration file
    include "config.php";

    // Check if the user is logged in
    if (isset($_SESSION['id'])) {
        $user_id = $_SESSION['id']; // Get the user's ID from the session
        
        // Fetch the user's category from the 'user' table based on their session ID
        $user_sql = "SELECT category FROM user WHERE id = ?";
        $stmt = $conn->prepare($user_sql);
        $stmt->bind_param("i", $user_id); // Bind the user ID
        $stmt->execute();
        $result = $stmt->get_result();
        
        // Check if user exists and fetch their category
        if ($result->num_rows > 0) {
            $user_data = $result->fetch_assoc();
            $user_category = $user_data['category']; // Get the user's category
            
            // Query to fetch projects that match the user's category
            $sql = "SELECT 
                        upload_projects.title, 
                        upload_projects.category, 
                        upload_projects.keywords, 
                        upload_projects.my_file_name, 
                        upload_projects.short_description, 
                        upload_projects.brief_description
                    FROM 
                        upload_projects
                    WHERE 
                        upload_projects.category = ?";
            
            // Prepare and bind the SQL statement
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $user_category); // Bind the user's category to the query
            $stmt->execute();
            $result = $stmt->get_result();
            
            $data = [];

            // Fetch and store the results
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $data[] = $row;
                }
            }
            
            // Return data as JSON
            header('Content-Type: application/json');
            echo json_encode($data);
            
        } else {
            // If user is not found
            echo json_encode(["error" => "User not found"]);
        }

        // Close the statement
        $stmt->close();
        
    } else {
        // If the user is not logged in
        echo json_encode(["error" => "User not logged in"]);
    }

    // Close the database connection
    $conn->close();
?>
