<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    $users = [
        'test@example.com' => password_hash('password123', PASSWORD_DEFAULT),
        
    ];

    if (array_key_exists($email, $users) && password_verify($password, $users[$email])) {
        $_SESSION['user_email'] = $email;
        header("Location: rules.php");
        exit();
    } else {
        $error = "Invalid email or password. Please try again.";
    }
}
?>
<!DOCTYPE html>

<head>
    
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Login</h2>

    <?php
    if (isset($error)) {
        echo "<p class='error'>$error</p>";
    }
    ?>

    <form method="post" action="">
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
       
            <label for="userName">Enter your name:</label>
            <input type="text" id="userName" name="userName" required>

        <input type="submit" value="Login">
    </form>

    <p>Don't have an account? <a href="signup.php">Create a new account</a></p>
</div>

</body>
</html>




