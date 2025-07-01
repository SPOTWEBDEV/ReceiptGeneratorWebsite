<?php
include('../../server/connection.php');
include('../../server/client/auth/index.php');

$template_id = $_GET['template_id'] ?? null;
$user_id = $_SESSION['user_id'];

if (!$template_id || !$user_id) {
    exit('Invalid access');
}

// 1. Get the original template
$stmt = $connection->prepare("SELECT * FROM template WHERE template_id = ?");
$stmt->bind_param("s", $template_id);
$stmt->execute();
$original = $stmt->get_result()->fetch_assoc();

if (!$original) {
    exit('Template not found');
}

// 2. Check if the user already has it in edit_template
$check = $connection->prepare("SELECT * FROM edit_template WHERE template_id = ? AND user = ?");
$check->bind_param("si", $template_id, $user_id);
$check->execute();
$existing = $check->get_result()->fetch_assoc();

if ($existing) {
    // If the contents are unchanged, just redirect (don't insert again)
    if ($existing['html_contents'] === $original['html_contents']) {
        echo "<script>window.location.href='../../pages/client/main.php?template_id={$template_id}';</script>";
        exit;
    }

    // If already changed, also redirect to continue editing
    echo "<script>window.location.href='../../pages/client/main.php?template_id={$template_id}';</script>";
    exit;
}

// 3. If not already in edit_template, insert it
$insert = $connection->prepare("INSERT INTO edit_template (user, template_id, main_template_id, html_contents, image) VALUES (?, ?, ?, ?, ?)");
$insert->bind_param("issss", $user_id, $template_id, $original['id'], $original['html_contents'], $original['image']);
$insert->execute();

// 4. Redirect to editor
echo "<script>window.location.href='../../pages/client/main.php?template_id={$template_id}';</script>";
exit;
?>
