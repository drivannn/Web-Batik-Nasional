<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us</title>
  <link rel="stylesheet" href="Contact.css">
</head>
<body>
<div class="container">
  <h1>Contact Us</h1>
  <form action="process_comment.php" method="POST">
    <!-- Input untuk nama -->
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" required><br><br>

    <!-- Input untuk pesan -->
    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="5" placeholder="Enter your message" required></textarea><br><br>

    <!-- Tombol submit -->
    <button type="submit">Send</button>
  </form>
  </div>
</body>
</html>
