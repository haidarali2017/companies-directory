<?php
    // Start the session
    session_start();
    
    include "config.php";
    
    // Check if the user is logged in and get the user's ID
    if ($_SESSION['userType'] === 'solution provider') {

        $user_id = $_SESSION['id']; // Retrieve the user ID from the session

        // Fetch data for the logged-in user
        $sql = "SELECT firstname, surname, email, mobile, companyname,short_description,brief_description FROM user WHERE userType = 'solution provider' AND id = ?";
        
        // Prepare and bind the SQL statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $user_id); // 'i' is for integer

        // Execute the query
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

        // Close the statement and connection
        $stmt->close();
    } else {
        // If the user is not logged in, return an error message
        $sql = "SELECT firstname, surname, email, mobile, companyname,short_description,brief_description FROM user WHERE userType = 'solution provider'"; 
        $stmt = $conn->prepare($sql);
        

        $data = [];
        $stmt->execute();
        $result = $stmt->get_result();
        // Fetch and store the results
        if ($result->num_rows > 0) {
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
