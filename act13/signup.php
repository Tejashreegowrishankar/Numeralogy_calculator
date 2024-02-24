<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    $users = [
        'test@example.com' => password_hash('password123', PASSWORD_DEFAULT),
    ];

    if (array_key_exists($email, $users)) {
        $error = "Account with this email already exists. Please use a different email.";
    } else {
       
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $users[$email] = $hashedPassword;
        $_SESSION['user_email'] = $email;
        header("Location: rules.php");
        exit();
    }
}
?>
<!DOCTYPE html>

<head>
    
    <title>Create New Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Create New Account</h2>

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

        <input type="submit" value="Create Account">
    </form>

    <p>Already have an account? <a href="index.php">Login</a></p>
</div>

</body>
</html>
