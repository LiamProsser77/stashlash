<?php

$message = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = trim($_POST["username"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $password = $_POST["password"] ?? "";

    if ($username === "" || $email === "" || $password === "") {
        $message = "Please fill in every field.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message = "Please enter a valid email address.";
    } elseif (strlen($password) < 8) {
        $message = "Your password must be at least 8 characters.";
    } else {
        $message = "Registration information looks good!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Create Account - Stashlash</title>
    <meta name="description" content="Create your Stashlash account.">

    <link rel="stylesheet" href="style.css">
</head>

<body>

<header>
    <img src="stashlash2.png" alt="Stashlash logo" class="logo">
    <h1>Stashlash</h1>
</header>

<main>
    <h2>Create an account</h2>

    <p>Create your Stashlash account to start keeping your files safe.</p>

    <?php if ($message !== ""): ?>
        <p><?php echo htmlspecialchars($message); ?></p>
    <?php endif; ?>

    <form method="POST" action="register.php">

        <label for="username">Username</label>
        <br>
        <input type="text" id="username" name="username" required>

        <br><br>

        <label for="email">Email</label>
        <br>
        <input type="email" id="email" name="email" required>

        <br><br>

        <label for="password">Password</label>
        <br>
        <input type="password" id="password" name="password" required>

        <br><br>

        <button type="submit" class="button">Create Account</button>

    </form>

    <br>

    <a href="login.php" class="button secondary">Already have an account?</a>
</main>

<footer>
    <p>© <?php echo date("Y"); ?> Stashlash</p>
</footer>

</body>
</html>
