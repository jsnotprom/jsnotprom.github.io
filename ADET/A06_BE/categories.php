<?php
include "connect.php";

header("Content-Type: application/json");

try {
    $stmt = $pdo->query("SELECT categoryID, name FROM categories ORDER BY name ASC");
    $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($categories);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(["error" => "Failed to fetch categories"]);
}
?>
