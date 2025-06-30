<?php
include('../../connection.php');
// get_templates.php
header('Content-Type: application/json');
$stmt = $connection->prepare("SELECT * FROM template");
$stmt->execute();
$result = $stmt->get_result();
$templates = [];
while ($row = $result->fetch_assoc()) {
    $templates[] = $row;
}

// Fetch all unique categories
$cat_result = $connection->query("SELECT DISTINCT catergory FROM template");
$categories = [];
while ($cat = $cat_result->fetch_assoc()) {
    $categories[] = $cat['catergory'];
}

echo json_encode([
    'success' => true,
    'templates' => $templates,
    'categories' => $categories
]);
