<?php

// Database credentials 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test_db";

// Step 1: Create a connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Step 2: Check the connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully!<br>";

// Step 3: Perform a sample query 
$sql = "SELECT * FROM sample_table";
$result = mysqli_query($conn, $sql);

// Check if the query execution was successful
if ($result) {
    // Check if the query returned results 
    if (mysqli_num_rows($result) > 0) {
        // Fetch and display rows 
        echo "<b>Data from sample_table:</b><br>";
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . htmlspecialchars($row['id']) . " - Name: " . htmlspecialchars($row['name']) . "<br>";
        }
    } else {
        echo "No records found in sample_table.<br>";
    }
} else {
    // If query fails, display an error message
    echo "Error executing query: " . mysqli_error($conn) . "<br>";
}

// Step 4: Close the connection 
mysqli_close($conn);
?>