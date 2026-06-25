<?php
session_start();

/**
 * 🧼 SAFETY: Ensure cart exists
 */
if (!isset($_SESSION['cart']) || !is_array($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

/**
 * 🔐 Get & sanitize ID
 */
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

/**
 * 🚫 Invalid request handling
 */
if (!$id || $id <= 0) {
    header("Location: cart.php");
    exit;
}

/**
 * 🧺 Remove item if exists
 */
if (array_key_exists($id, $_SESSION['cart'])) {
    unset($_SESSION['cart'][$id]);

    // Optional: clean empty cart
    if (empty($_SESSION['cart'])) {
        unset($_SESSION['cart']);
    }

    // Optional success flag (for toast/animation later)
    $_SESSION['cart_message'] = "Item removed successfully.";
}

/**
 * 🔁 Safe redirect fallback
 */
$redirect = $_SERVER['HTTP_REFERER'] ?? 'cart.php';

header("Location: $redirect");
exit;
?>