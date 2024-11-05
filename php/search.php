<?php
include "config.php"; // Include your database connection
$query = isset($_GET['query']) ? $_GET['query'] : '';

if (!empty($query)) {
    // Split the query into individual keywords
    $keywords = explode(' ', $query);
    $escaped_keywords = array_map(function($keyword) use ($conn) {
        return mysqli_real_escape_string($conn, $keyword);
    }, $keywords);

    // Prepare the SQL query
    $sql = "SELECT * FROM companies WHERE ";

    // Construct the LIKE conditions for each keyword
    $like_clauses = [];
    foreach ($escaped_keywords as $keyword) {
        $like_clauses[] = "(company LIKE '%$keyword%' OR company_source_list LIKE '%$keyword%' OR ranking LIKE '%$keyword%' OR stock_ticker LIKE '%$keyword%' OR industry LIKE '%$keyword%' OR country LIKE '%$keyword%' OR phone LIKE '%$keyword%')";
    }
    $sql .= implode(' AND ', $like_clauses); // Use AND to match all keywords

    // Execute the query
    $run_sql = mysqli_query($conn, $sql);
    $output = [];

    // Fetch the results if rows are found
    if (mysqli_num_rows($run_sql) > 0) {
        while ($row = mysqli_fetch_assoc($run_sql)) {
            $output[] = $row;
        }
    }

    // Return the results as JSON
    echo json_encode($output);
} else {
    // Return an empty array if no query is provided
    echo json_encode([]);
}

// Close the database connection
mysqli_close($conn);
