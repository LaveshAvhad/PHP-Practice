<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo</title>
</head>
<body>
    <h1>Welcome to PHP Demo</h1>
    
    <?php
    // Initialize variable to store user's name
    $name = '';

    // Check if form was submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Sanitize input to prevent XSS
        $name = htmlspecialchars($_POST['name']);
        echo "<p>Hello, $name! Welcome to the PHP demo.</p>";
    }
    ?>

    <!-- Simple HTML Form -->
    <form action="" method="post">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
