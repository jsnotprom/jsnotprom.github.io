<?php
include "connect.php";

header("Content-Type: application/json");

if (!isset($_GET['categoryID'])) {
    http_response_code(400);
    echo json_encode(["error" => "Missing categoryID parameter"]);
    exit;
}

$categoryID = $_GET['categoryID'];

try {
    $stmt = $pdo->prepare("SELECT name, price, image FROM products WHERE categoryID = ?");
    $stmt->execute([$categoryID]);
    $products = $stmt->fetchAll();

    echo json_encode($products);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(["error" => "Failed to fetch products"]);
}
?>
