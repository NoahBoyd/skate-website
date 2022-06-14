<?php 

// ********************Parameter Setup**************************
$username = filter_input(INPUT_GET, "username", FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_GET, "password", FILTER_SANITIZE_SPECIAL_CHARS);

$valid = true;
// result error codes (1: Success, -1: INVALID ENTRY, -2: Username Taken, -3: Email Taken, -4 failed to add user to database)
$result = [];

// validate parameters
if ($username === "" || $username === null || $password === "" || $password === null) {
    $valid = false;
    $result = [-1];
}

$passwordsMatch = false;

// *****************************************************

// Query database for username and password
include "connect.php";

$command = "SELECT * FROM users WHERE users_name = ?";
$params = [$username];
$stmt = $dbh->prepare($command);

$success = $stmt->execute($params);

if ($success) {
    // Save credentials from query
    if ($stmt->rowCount() > 0) {
        while ($row = $stmt->fetch()) {
            $dbPassword = $row['users_password'];
            $userID = $row['users_id'];
            $userName = $row['users_name'];

            // verify password
            if (password_verify($password, $dbPassword)) {
                $passwordsMatch = true;
                $result = [1, $userID, $userName];
                // start session
            } else {
                $result = [-4]; // passwords do not match
            }
        }
    } else {
        $result = [-3]; // Username not found in database
    }
} else {
    $result = [-2]; // database failed
}

echo json_encode($result);