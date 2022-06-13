<?php 

// get parameters
$userEmail = filter_input(INPUT_GET, "userEmail", FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_GET, "userName", FILTER_SANITIZE_SPECIAL_CHARS);
$password = filter_input(INPUT_GET, "password", FILTER_SANITIZE_SPECIAL_CHARS);

// functions

// this function takes in a column and value and returns true if value does not exist in the database
function isInDatabase($column, $value) {
    include "connect.php";
    // check if username or email are already associated with an account in the database
    $command = "SELECT * FROM users WHERE {$column} = ?";
    $params = [$value];
    $stmt = $dbh->prepare($command);

    $success = $stmt->execute($params);
    
    if ($success) {
        if ($stmt->fetch()) {
            return true;
        } else {
            return false;
        }
    }
}

function addUser($userEmail, $username, $passwordHashed) {
    include "connect.php";

    $command = "INSERT INTO users (users_email, users_name, users_password) VALUES (?, ?, ?)";
    $params = [$userEmail, $username, $passwordHashed];
    $stmt = $dbh->prepare($command);

    $success = $stmt->execute($params);

    if ($success) {
        return true;
    } else {
        return false;
    }
}

// **********************MAIN********************************
$valid = true;
// result error codes (-1: INVALID ENTRY, -2: Email Taken, -3: Username Taken)
$result = [];

// validate parameters
if ($userEmail === "" || $userEmail === null || $username === "" || $username === null || $password === "" || $password === null) {
    $valid = false;
    $result = [-1];
}

$passwordHashed = password_hash($password, PASSWORD_DEFAULT);

if ($valid) {
     // check that username does not exist in database
    $usernameTaken = isInDatabase('users_name', $username);

    // if username not taken, check if userEmail is taken
    if (!$usernameTaken) {  
        $userEmailTaken = isInDatabase('users_email', $userEmail);

        // if email is not taken, add user to database
        if (!$userEmailTaken) { 
            $userAdded = addUser($userEmail, $username, $passwordHashed);
            
            if ($userAdded) {
                $result = [1]; // added user to database
            } else {
                $result = [-4]; // failed to add user to database
            }
        } else {
            $result = [-3]; // email was taken
        }
    } else {
        $result = [-2]; // username was taken
    }
}

// if ($valid) {
//     $userTaken = true;
//     $emailTaken = true;

//     // check if email exist in the database
//     if (checkDatabase('users_email', $userEmail)) {
//         $emailTaken = true;
//         $result = [-2];
//     } else {
//         $emailTaken = false;
//         $result = ["not found in database"];

//     }

    // check if username exists in the database
    // if (checkDatabase("users_name", $username)) {
    //     $userTaken = false;
    //     $result = [-3];
    // } else {
    //     $userTaken = true;
    // }
    
    // if username and email do not exist in database, add to database
    // if ($emailTaken === false and $userTaken === false) {
    //     // insert user data into database
    //     if (addUser($userEmail, $username, $passwordHashed)) {
    //         $result = [1];
    //     } else {
    //         $result = [-4];
    //     }
    // }
// }

echo json_encode($result);