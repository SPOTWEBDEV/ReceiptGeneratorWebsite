<?php
include('../../connection.php');
header('Content-Type: application/json');

$stmt = $connection->prepare("SELECT * FROM template");
$stmt->execute();
$result = $stmt->get_result();

// Separate admin and user templates
$admin_templates = [];
$user_templates = [];

while ($row = $result->fetch_assoc()) {
    if ($row['user'] == 0) {
        $admin_templates[] = $row;
    } else {
        $user_templates[] = $row;
    }
}

// Fetch unique categories
$cat_result = $connection->query("SELECT DISTINCT catergory FROM template WHERE catergory IS NOT NULL AND catergory != ''");
$categories = [];
while ($cat = $cat_result->fetch_assoc()) {
    $categories[] = $cat['catergory'];
}

echo json_encode([
    'success' => true,
    'admin_templates' => $admin_templates,
    'user_templates' => $user_templates,
    'categories' => $categories
]);


?>