<?php
include('../../server/connection.php');
include('../../server/client/auth/index.php');

$template_id = $_GET['template_id'] ?? '';
$user_id = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Setting Up Template...</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background: #f8f9fc;
      margin: 0;
    }

    .loader-container {
      text-align: center;
    }

    .spinner {
      width: 60px;
      height: 60px;
      border: 6px solid #ccc;
      border-top-color: #6c63ff;
      border-radius: 50%;
      animation: spin 1s linear infinite;
      margin: 0 auto 15px;
    }

    @keyframes spin {
      to {
        transform: rotate(360deg);
      }
    }

    .message {
      color: #333;
      font-size: 16px;
    }
  </style>
</head>
<body>

  <div class="loader-container">
    <div class="spinner"></div>
    <div class="message">Setting up your template, please wait...</div>
  </div>

<?php

// Flush output to show loader
ob_flush();
flush();

if (!$template_id) {
    echo "<script>alert('No template selected'); window.location.href = '../templates.php';</script>";
    exit;
}

// Check if user already edited it
$check_stmt = $connection->prepare("SELECT template_id FROM edit_template WHERE user = ? AND main_template_id = ?");
$check_stmt->bind_param("is", $user_id, $template_id);
$check_stmt->execute();
$check_stmt->store_result();

if ($check_stmt->num_rows > 0) {
    $check_stmt->bind_result($existing_template_id);
    $check_stmt->fetch();
    echo "<script>setTimeout(function() { window.location.href = 'main.php?template_id={$existing_template_id}'; }, 2000);</script>";
    exit;
}

// Get original template
$stmt = $connection->prepare("SELECT * FROM template WHERE template_id = ?");
$stmt->bind_param("s", $template_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "<script>alert('Template not found.'); window.location.href = '../templates.php';</script>";
    exit;
}

$template = $result->fetch_assoc();
$new_template_id = uniqid('edit_');

$insert = $connection->prepare("INSERT INTO edit_template (user, template_id, main_template_id, html_contents, image) VALUES (?, ?, ?, ?, ?)");
$insert->bind_param(
    "sssss",
    $user_id,
    $new_template_id,
    $template['template_id'],
    $template['html_contents'],
    $template['image']
);
$insert->execute();

echo "<script>setTimeout(function() { window.location.href = 'main.php?template_id={$new_template_id}'; }, 2000);</script>";
?>

</body>
</html>
