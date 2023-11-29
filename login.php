<?php
session_start();

// Replace with your actual user credentials
$validUsername = 'admin';
$validPassword = 'password';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $enteredUsername = $_POST['username'];
    $enteredPassword = $_POST['password'];

    if ($enteredUsername === $validUsername && $enteredPassword === $validPassword) {
        // Authentication successful
        $_SESSION['authenticated'] = true;
        header('Location: dashboard.php'); // Redirect to the dashboard page
        exit();
    } else {
        // Authentication failed
        $error = 'Invalid username or password. Please try again.';
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>ChiCI Research Group Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <div class="login-container">
        <h2>ChiCI Research Group Login</h2>
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required><br>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>

            <input type="submit" value="Login">
        </form>
        <?php if (isset($error)) { ?>
            <p class="error-message">
                <?php echo $error; ?>
            </p>
        <?php } ?>
    </div>
</body>

</html>