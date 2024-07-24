<?php

require_once '../php/connection.php';

try {
    session_start();
    if (isset($_SESSION['product_info'])) {
        unset($_SESSION['product_info']);
    }
    $querry = "SELECT * from tbl_products WHERE product_status != 'INACTIVE' ORDER By RAND() LIMIT 8";
    $result = $connect->query($querry);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $products_info[] = $row;
        }
    }

    $_SESSION['product_info'] = $products_info;
    header('Location: ../pages/market.php');
    exit();



} catch (Exception $e) {
    echo "Error: " . $e;
}
?>