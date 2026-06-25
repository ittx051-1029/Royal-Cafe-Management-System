<?php include('header.php'); ?>

<main class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="row g-5">
                
                <!-- 📋 FORM -->
                <div class="col-md-7">
                    <div class="glass-card p-lg-5 p-4 reveal active">
                        <h3 class="fw-bold mb-4">Shipping Details</h3>
                        <form action="place_order.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="small fw-bold opacity-75 mb-2">FULL NAME</label>
                                    <input type="text" name="name" class="form-control rounded-4 border-0 bg-light p-3" required>
                                </div>
                                <div class="col-12">
                                    <label class="small fw-bold opacity-75 mb-2">PHONE NUMBER</label>
                                    <input type="tel" name="phone" class="form-control rounded-4 border-0 bg-light p-3" required>
                                </div>
                                <div class="col-12">
                                    <label class="small fw-bold opacity-75 mb-2">DELIVERY ADDRESS</label>
                                    <textarea name="address" rows="3" class="form-control rounded-4 border-0 bg-light p-3" required></textarea>
                                </div>
                            </div>

                            <h4 class="fw-bold mt-5 mb-4">Payment Method</h4>
                            <div class="d-flex flex-column gap-2">
                                <button type="button" class="btn btn-dark w-100 py-3 rounded-pill d-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-apple"></i> Apple Pay
                                </button>
                                <button type="button" class="btn btn-light border w-100 py-3 rounded-pill d-flex align-items-center justify-content-center gap-2">
                                    <i class="bi bi-google"></i> Google Pay
                                </button>
                                <div class="text-center my-2 small text-muted">OR</div>
                                <button type="submit" class="btn btn-royal w-100 py-3">Cash on Delivery</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- 🛒 MINI SUMMARY -->
                <div class="col-md-5">
                    <div class="glass-card p-4 reveal active">
                        <h5 class="fw-bold mb-4">Your Order</h5>
                        <?php 
                        $total = 0;
                        foreach($_SESSION['cart'] as $item): 
                            $total += ($item['price'] * $item['qty']);
                        ?>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <div class="d-flex align-items-center gap-3">
                                <img src="images/<?php echo $item['image']; ?>" width="50" class="rounded-2 bg-light p-1">
                                <div>
                                    <h6 class="small fw-bold mb-0"><?php echo $item['name']; ?></h6>
                                    <small class="text-muted">Qty: <?php echo $item['qty']; ?></small>
                                </div>
                            </div>
                            <span class="small fw-bold">Rs. <?php echo $item['price'] * $item['qty']; ?></span>
                        </div>
                        <?php endforeach; ?>
                        
                        <hr class="opacity-10">
                        <div class="d-flex justify-content-between mt-4">
                            <span class="fw-bold">Total Amount</span>
                            <span class="fs-5 fw-bold text-gold" style="color: var(--clr-gold)">Rs. <?php echo $total; ?></span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>