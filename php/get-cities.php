
<?php
include "config.php";
if (isset($_GET["id"]) && isset($_GET['page']) && isset($_GET['limit'])) {
    $id = $_GET["id"];
    $page = intval($_GET['page']); // Ensure page is an integer
    $limit = intval($_GET['limit']); // Ensure limit is an integer

    // Ensure the page is at least 1
    if ($page < 1) {
        $page = 1;
    }

    $offset = ($page - 1) * $limit; // Calculate the offset for pagination

    // MySQL query for pagination
    $sql = "SELECT * FROM de_germany WHERE country='{$id}' LIMIT {$limit} OFFSET {$offset}";
    $run_sql = mysqli_query($conn, $sql);
    $output = [];

    if (mysqli_num_rows($run_sql) > 0) {
        while ($row = mysqli_fetch_assoc($run_sql)) {
            $output[] = $row;
        }
    }

    echo json_encode($output);
    exit;
}


?>
