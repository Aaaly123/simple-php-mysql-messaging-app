<?php
// Include the database connection
include 'db_config.php';

// Query to fetch all messages, ordered by the latest first
$sql = "SELECT name, message, created_at FROM entries ORDER BY created_at DESC";
$result = $conn->query($sql);

// Check if there are any rows and display them
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>" . htmlspecialchars($row['name']) . "</strong> (" . $row['created_at'] . ")</p>";
        echo "<p>" . htmlspecialchars($row['message']) . "</p>";
    }
} else {
    echo "<p>No messages yet.</p>";
}

// Close the database connection
$conn->close();
?>
