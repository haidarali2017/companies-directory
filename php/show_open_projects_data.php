<?php

    // Start the session
    session_start();

    // Include database configuration file
    include "config.php";

    // Check if the user is logged in 
    if ($_SESSION['userType'] === 'open project') {
        $user_id = $_SESSION['id']; 
        $user_type = $_SESSION['userType']; 

        // Query to fetch projects that match the user's ID and user type
        $sql = "SELECT 
                    title, 
                    category, 
                    keywords, 
                    my_file_name, 
                    short_description, 
                    brief_description 
                FROM 
                    upload_projects
                WHERE 
                    user_id = ? AND user_type = ?";

        // Prepare and bind the SQL statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("is", $user_id, $user_type); 
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

        // Close the statement
        $stmt->close();
        
    } else {
        $category = $_SESSION['category']; 

        // Prepare the SQL query
        $sql = "SELECT title, category, keywords, my_file_name, short_description, brief_description FROM upload_projects WHERE category = ?";
        $stmt = $conn->prepare($sql);
        
        // Check if the statement was prepared successfully
        if ($stmt === false) {
            die(json_encode(["error" => "Failed to prepare SQL statement: " . $conn->error]));
        }
        
        // Bind the parameter and execute the statement
        $stmt->bind_param("s", $category); // Note: changed from "is" to "s" for a string
        $stmt->execute();
        
        // Get the result
        $result = $stmt->get_result();
        
        // Fetch and store the results
        $data = [];
        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        
        // Return data as JSON
        header('Content-Type: application/json');
        echo json_encode($data);
        
        // Close the statement and connection
        $stmt->close();
    }

    // Close the database connection
    $conn->close();
?>
