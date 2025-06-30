<?ph
include('../../connection.php');
header('Content-Type: application/json');

// Get current user ID
if (!isset($_SESSION['user_id'])) {
    echo json_encode(['success' => false, 'message' => 'User not logged in']);
    exit;
}
$currentUserId = $_SESSION['user_id'];

// Fetch all templates
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

// Fetch templates edited by the current user
$edit_stmt = $connection->prepare("
    SELECT t.*
    FROM edit_template e
    JOIN template t ON e.template_id = t.template_id
    WHERE e.user = ?
");
$edit_stmt->bind_param("i", $currentUserId);
$edit_stmt->execute();
$edit_result = $edit_stmt->get_result();

$edited_templates = [];
while ($edit_row = $edit_result->fetch_assoc()) {
    $edited_templates[] = $edit_row;
}

// Fetch unique categories
$cat_result = $connection->query("SELECT DISTINCT catergory FROM template WHERE catergory IS NOT NULL AND catergory != ''");
$categories = [];
while ($cat = $cat_result->fetch_assoc()) {
    $categories[] = $cat['catergory'];
}

// Output
echo json_encode([
    'success' => true,
    'admin_templates' => $admin_templates,
    'user_templates' => $user_templates,
    'edited_templates' => $edited_templates,
    'categories' => $categories
]);
?>
