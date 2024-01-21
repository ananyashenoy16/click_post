<?php
    session_start();
    include_once "config.php";

    $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if (!empty($first_name) && !empty($last_name) && !empty($email) && !empty($gender) && !empty($username) && !empty($password)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
            if (mysqli_num_rows($sql) > 0) {
                echo "$email - This email already exists!";
            } else {
                $encrypt_pass = md5($password);
                $insert_query = mysqli_query($conn, "INSERT INTO users (first_name, last_name, gender, email, username, password)
                VALUES ('{$first_name}', '{$last_name}', '{$gender}', '{$email}', '{$username}', '{$encrypt_pass}')");

                if ($insert_query) {
                    $select_sql2 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                    if (mysqli_num_rows($select_sql2) > 0) {
                        $result = mysqli_fetch_assoc($select_sql2);
                        $_SESSION['email'] = $result['email']; // Using email as a session identifier
                        echo "success";
                    } else {
                        echo "This email address does not exist!";
                    }
                } else {
                    echo "Something went wrong. Please try again!";
                }
            }
        } else {
            echo "$email is not a valid email!";
        }
    } else {
        echo "All input fields are required!";
    }
?>
