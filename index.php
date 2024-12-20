<!-- index.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guestbook</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Guestbook</h1>
    <form id="guestbookForm" method="POST" action="submit.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>
        <br>
        <button type="submit">Submit</button>
    </form>
    <h2>Messages</h2>
    <div id="messages">
        <!-- Include the display.php file -->
        <?php include 'display.php'; ?>
    </div>
</body>
</html>
