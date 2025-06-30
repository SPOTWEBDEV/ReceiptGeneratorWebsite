<?php
// File: get_templates.php
include('../../connection.php');
include('../../client/auth/index.php'); // ensure user session is available

header('Content-Type: application/json');

$category = $_GET['category'] ?? '';
$keyword = $_GET['keyword'] ?? '';
$user_id = $_SESSION['user_id']; // assuming you store user id in session

$templates = [];
$admin_templates = [];
$user_templates = [];
$edited_templates = [];

$search = "%$keyword%";

// 1. Fetch templates (admin + user)
if ($category !== '') {
    $stmt = $connection->prepare("SELECT * FROM template WHERE catergory = ? AND title LIKE ?");
    $stmt->bind_param("ss", $category, $search);
} else {
    $stmt = $connection->prepare("SELECT * FROM template WHERE title LIKE ?");
    $stmt->bind_param("s", $search);
}

$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    if ((int)$row['user'] === 0) {
        $admin_templates[] = $row;
    } else {
        $user_templates[] = $row;
    }
}

// 2. Fetch edited templates by current user
$edit_stmt = $connection->prepare("SELECT template.* FROM edit_template INNER JOIN template ON edit_template.template_id = template.template_id WHERE edit_template.user = ?");
$edit_stmt->bind_param("i", $user_id);
$edit_stmt->execute();
$edit_result = $edit_stmt->get_result();
while ($row = $edit_result->fetch_assoc()) {
    $edited_templates[] = $row;
}

// 3. Fetch unique categories
$cat_result = $connection->query("SELECT DISTINCT catergory FROM template WHERE catergory IS NOT NULL AND catergory != ''");
$categories = [];
while ($cat = $cat_result->fetch_assoc()) {
    $categories[] = $cat['catergory'];
}

// 4. Return JSON
echo json_encode([
    'success' => true,
    'admin_templates' => $admin_templates,
    'user_templates' => $user_templates,
    'edited_templates' => $edited_templates,
    'categories' => $categories
]);
exit;
