<?php 
    session_start();
    include_once "config.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (!empty($email) && !empty($password)) {
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");

            if (mysqli_num_rows($sql) > 0) {
                $row = mysqli_fetch_assoc($sql);

                // Verify password using password_verify
                if (password_verify($password, $row['password'])) {
                    echo "success";
                } else {
                    echo "Email or Password is Incorrect!";
                }
            } else {
                echo "$email - This email does not exist!";
            }
        } else {
            echo "All input fields are required!";
        }
    }
?>
