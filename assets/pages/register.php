<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Sign-Up</title>
    <?php
        include("../php/config.php");
    ?>
</head>

<body>
    <div class="container">
        <form action="../php/signup.php" method="post">
            <h1>Register</h1>
            <div class="error-text"></div>
            <input type="text" name="first_name" placeholder="Name" required>
            <input type="text" name="last_name" placeholder="LastName" required>
            <input type="email" name="email" placeholder="email" required >

            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="enter password" required><br>
            <div class="gender">
                <input type="radio" name="gender" value="1" checked>
                <label>
                    Male
                </label>
                <input type="radio" name="gender" value="2">
                <label>
                    Female
                </label>
                <input type="radio" name="gender" value="0">
                <label>
                    Other
                </label>
            </div>
            <input type="submit" class="button" value="Sign-in"><br>
            <p>Already a user? <a href="login.php">Login Here</a></p>
        </form>
        <div class="drops">
            <div class="drop drop1"></div>
            <div class="drop drop2"></div>
            <div class="drop drop3"></div>
            <div class="drop drop4"></div>
            <div class="drop drop5"></div>
            <div class="drop drop6"></div>
            <div class="drop drop7"></div>
            <div class="drop drop8"></div>
        </div>
    </div>
</body>
<script src="../js/signup.js"></script>
</html>