<?php include('header.php'); ?>

<?php
$cart = $_SESSION['cart'] ?? [];
$subtotal = 0;
?>

<style>

/* 🌌 PREMIUM BACKGROUND (INDEX STYLE) */
body{
    background:
    radial-gradient(circle at top, rgba(212,175,55,0.08), transparent 40%),
    radial-gradient(circle at bottom, rgba(90,40,30,0.25), transparent 60%),
    #0d0706;
    overflow-x:hidden;
}

/* ✨ GLOBAL GLASS SYSTEM */
.glass-card{
    background: rgba(255,255,255,0.06);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 22px;
    transition: all .4s ease;
    position: relative;
}

.glass-card:hover{
    transform: translateY(-6px);
    border-color: var(--clr-gold);
    box-shadow: 0 25px 60px rgba(0,0,0,0.5);
}

/* 🎭 ANIMATION (INDEX STYLE) */
.reveal{
    opacity:0;
    transform: translateY(30px);
    transition: all .8s ease;
}

.reveal.active{
    opacity:1;
    transform: translateY(0);
}

/* 🛒 CART ITEM */
.cart-item{
    animation: fadeUp .6s ease;
}

@keyframes fadeUp{
    from{opacity:0; transform:translateY(25px);}
    to{opacity:1; transform:translateY(0);}
}

/* 💎 BUTTON */
.btn-royal{
    background: linear-gradient(135deg, #D4AF37, #B8860B);
    color:#111;
    font-weight:700;
    border-radius:14px;
    transition:.3s;
    border:none;
}

.btn-royal:hover{
    transform: scale(1.05);
    box-shadow: 0 10px 25px rgba(212,175,55,0.25);
}

/* ➕ QTY */
.qty-box{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
}

.qty-btn{
    width:34px;
    height:34px;
    border-radius:10px;
    border:1px solid rgba(255,255,255,0.15);
    background:transparent;
    color:#fff;
    transition:.3s;
}

.qty-btn:hover{
    border-color: var(--clr-gold);
    color: var(--clr-gold);
    transform: scale(1.1);
}

/* 🏷 TEXT */
.text-gold{
    color: var(--clr-gold);
}

/* 🧾 ORDER SUMMARY */
.summary-box{
    position: sticky;
    top: 110px;
}

/* 🌫 FLOATING GLOW */
.glow{
    position:absolute;
    width:300px;
    height:300px;
    background: rgba(212,175,55,0.08);
    filter: blur(120px);
    border-radius:50%;
    z-index:0;
}

</style>

<main class="container py-5 position-relative">

    <!-- 🌟 GLOW BACKGROUND -->
    <div class="glow" style="top:-50px; left:-100px;"></div>
    <div class="glow" style="bottom:-100px; right:-80px;"></div>

    <!-- HEADER -->
    <div class="d-flex justify-content-between align-items-center mb-4 reveal active">
        <h2 class="fw-bold text-white">Your Cart</h2>
        <span class="text-muted"><?= count($cart) ?> Items</span>
    </div>

    <div class="row g-4">

        <!-- LEFT SIDE -->
        <div class="col-lg-8">

            <?php if(!empty($cart)): ?>

                <?php foreach($cart as $id => $item):
                    $total = $item['price'] * $item['qty'];
                    $subtotal += $total;
                ?>

                <div class="glass-card p-3 mb-3 cart-item reveal active">

                    <div class="row align-items-center g-3">

                        <!-- IMG -->
                        <div class="col-3">
                            <img src="images/<?= $item['image'] ?>" class="img-fluid rounded-4">
                        </div>

                        <!-- NAME -->
                        <div class="col-3">
                            <h6 class="text-white mb-1"><?= $item['name'] ?></h6>
                            <small class="text-muted">Rs <?= $item['price'] ?></small>
                        </div>

                        <!-- QTY -->
                        <div class="col-3 text-center">
                            <div class="qty-box">

                                <a href="update_qty.php?i=<?= $id ?>&type=minus" class="qty-btn">-</a>

                                <span class="text-white fw-bold"><?= $item['qty'] ?></span>

                                <a href="update_qty.php?i=<?= $id ?>&type=plus" class="qty-btn">+</a>

                            </div>
                        </div>

                        <!-- TOTAL -->
                        <div class="col-2 text-end text-gold fw-bold">
                            Rs <?= $total ?>
                        </div>

                        <!-- DELETE -->
                        <div class="col-1 text-end">
                            <a href="remove_item.php?id=<?= $id ?>" class="text-danger">
                                <i class="bi bi-trash3"></i>
                            </a>
                        </div>

                    </div>

                </div>

                <?php endforeach; ?>

            <?php else: ?>

                <!-- EMPTY STATE -->
                <div class="glass-card p-5 text-center text-white reveal active">
                    <i class="bi bi-bag-x display-1 text-muted mb-3"></i>
                    <h4>Your cart feels empty</h4>
                    <p class="text-muted">Discover handcrafted café experiences</p>
                    <a href="menu.php" class="btn btn-royal mt-3 px-4 py-2">
                        Explore Menu
                    </a>
                </div>

            <?php endif; ?>

        </div>

        <!-- RIGHT SIDE -->
        <div class="col-lg-4">

            <div class="glass-card p-4 summary-box reveal active">

                <h4 class="text-white mb-4">Order Summary</h4>

                <div class="d-flex justify-content-between text-muted mb-2">
                    <span>Subtotal</span>
                    <span>Rs <?= $subtotal ?></span>
                </div>

                <div class="d-flex justify-content-between text-muted mb-3">
                    <span>Delivery</span>
                    <span class="text-success">FREE</span>
                </div>

                <hr class="border-light opacity-25">

                <div class="d-flex justify-content-between text-white fw-bold fs-5 mb-4">
                    <span>Total</span>
                    <span class="text-gold">Rs <?= $subtotal ?></span>
                </div>

                <a href="checkout.php" class="btn btn-royal w-100 py-3">
                    Checkout Now
                </a>

                <small class="text-muted d-block text-center mt-3">
                    Secure • Fast • Royal Experience
                </small>

            </div>

        </div>

    </div>

    <!-- 🍽 UPSELL -->
    <?php if(!empty($cart)): ?>
    <div class="mt-5 reveal active">

        <h6 class="text-muted mb-3">Perfect Pairing</h6>

        <div class="glass-card p-3 d-flex justify-content-between align-items-center">

            <div class="d-flex align-items-center gap-3">
                <img src="images/croissant.png" width="60">
                <div>
                    <h6 class="text-white mb-0">Butter Croissant</h6>
                    <small class="text-muted">Best with espresso</small>
                </div>
            </div>

            <button class="btn btn-royal px-3">
                Add Rs 320
            </button>

        </div>

    </div>
    <?php endif; ?>

</main>

<?php include('footer.php'); ?>