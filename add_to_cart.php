<?php
session_start();
include('config/db.php');

/* =========================
   🔐 VALIDATION
========================= */
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if($id <= 0){
    header("Location: menu.php");
    exit;
}

/* =========================
   📦 FETCH PRODUCT SAFELY
========================= */
$stmt = $conn->prepare("SELECT id, name, price, image FROM products WHERE id=? LIMIT 1");
$stmt->bind_param("i", $id);
$stmt->execute();

$product = $stmt->get_result()->fetch_assoc();

if(!$product){
    header("Location: menu.php");
    exit;
}

/* =========================
   🛒 INIT CART
========================= */
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

/* =========================
   ➕ ADD / INCREMENT LOGIC
========================= */
if(isset($_SESSION['cart'][$id])){

    // increase qty
    $_SESSION['cart'][$id]['qty']++;

}else{

    // create new item
    $_SESSION['cart'][$id] = [
        'id'    => $product['id'],
        'name'  => $product['name'],
        'price' => $product['price'],
        'image' => $product['image'],
        'qty'   => 1
    ];
}

/* =========================
   🎯 OPTIONAL: FLASH MESSAGE (FOR TOAST UI)
========================= */
$_SESSION['cart_message'] = $product['name'] . " added to cart";

/* =========================
   🔄 REDIRECT BACK
========================= */
header("Location: cart.php");
exit;
?>