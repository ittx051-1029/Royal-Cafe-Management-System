<?php
session_start();

/* =========================
   🔐 SAFE INPUT HANDLING
========================= */
$id  = isset($_POST['id']) ? (int)$_POST['id'] : 0;
$qty = isset($_POST['qty']) ? (int)$_POST['qty'] : 0;

/* =========================
   🛑 VALIDATION CHECKS
========================= */
if($id <= 0){
    header("Location: cart.php");
    exit;
}

if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

/* =========================
   🛒 UPDATE CART LOGIC
========================= */
if(isset($_SESSION['cart'][$id])){

    if($qty <= 0){
        // ❌ REMOVE ITEM IF QTY IS 0
        unset($_SESSION['cart'][$id]);

        $_SESSION['cart_message'] = "Item removed from cart";

    } else {

        // 🔄 UPDATE QUANTITY
        $_SESSION['cart'][$id]['qty'] = $qty;

        $_SESSION['cart_message'] = "Cart updated successfully";
    }

} else {
    // ⚠ ITEM NOT FOUND
    $_SESSION['cart_message'] = "Item not found in cart";
}

/* =========================
   🎯 FUTURE READY (FOR AJAX / TOAST)
========================= */
// You can later use this session message for:
// - Toast popup (like index UI)
// - Live cart updates
// - Notifications system

/* =========================
   🔄 REDIRECT BACK
========================= */
header("Location: cart.php");
exit;
?>