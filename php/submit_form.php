<?php

    include "config.php";

    // Collect form data
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmemail = $_POST['confirmemail'];
    $firstname = $_POST['firstname'];
    $surname = $_POST['surname'];
    $mobile = $_POST['solution_provider_mobile'];
    $userType = $_POST['userType'];
    $companyname = $_POST['companyname'];
    $title = $_POST['title'];
    $street = $_POST['street'];
    $housenumber = $_POST['housenumber'];
    $zipcode = $_POST['zipcode'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $telephone = $_POST['telephone'];
    $cellphone = $_POST['cellphone'];
    $fax = $_POST['fax'];

    // Check if the email already exists
    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, 's', $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        // Email already exists
        echo json_encode(["success" => false, "message" => "Email already exists."]);
    } else {
        // SQL query to insert form data into the `user` table
        $sql = "INSERT INTO user (email, password, confirmemail, firstname, surname, mobile, userType, companyname, title, street, housenumber, zipcode, city, country, telephone, cellphone, fax, created_at, updated_at) 
                VALUES ('$email', '$password', '$confirmemail', '$firstname', '$surname', '$mobile', '$userType', '$companyname', '$title', '$street', '$housenumber', '$zipcode', '$city', '$country', '$telephone', '$cellphone', '$fax', NOW(), NOW())";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(["success" => true, "message" => "User inserted successfully"]);
        } else {
            echo json_encode(["success" => false, "message" => "Failed to insert user"]);
        }
    }

    // Close connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
?>
