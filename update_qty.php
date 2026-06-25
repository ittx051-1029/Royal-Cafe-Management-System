<?php
session_start();

/* =========================
   🔐 SAFE INPUT HANDLING
========================= */
$id   = isset($_GET['i']) ? (int)$_GET['i'] : 0;
$type = $_GET['type'] ?? '';

/* =========================
   🛑 VALIDATION
========================= */
if($id <= 0 || !in_array($type, ['plus', 'minus'])){
    header("Location: cart.php");
    exit;
}

/* =========================
   🛒 INIT CART IF NOT EXISTS
========================= */
if(!isset($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

/* =========================
   🔄 UPDATE LOGIC
========================= */
if(isset($_SESSION['cart'][$id])){

    if($type === "plus"){
        $_SESSION['cart'][$id]['qty']++;

        $_SESSION['cart_message'] = "Quantity increased";
    }

    if($type === "minus"){
        $_SESSION['cart'][$id]['qty']--;

        // 🗑 AUTO REMOVE IF ZERO
        if($_SESSION['cart'][$id]['qty'] <= 0){
            unset($_SESSION['cart'][$id]);
            $_SESSION['cart_message'] = "Item removed from cart";
        } else {
            $_SESSION['cart_message'] = "Quantity decreased";
        }
    }

}else{
    // ⚠ ITEM NOT FOUND
    $_SESSION['cart_message'] = "Item not found in cart";
}

/* =========================
   🎯 FUTURE READY (INDEX-STYLE UI)
========================= */
// This message can be used later for:
// ✔ Toast notification (glass UI popup)
// ✔ Live cart counter animation
// ✔ Sound effect (click/ding)
// ✔ AJAX cart update

/* =========================
   🔄 REDIRECT BACK
========================= */
header("Location: cart.php");
exit;
?>