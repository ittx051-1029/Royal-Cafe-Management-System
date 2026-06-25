<?php include('header.php'); ?>

<!-- ============================= -->
<!-- 🎯 HERO (FINAL HYBRID) -->
<!-- ============================= -->
<div class="order-hero-renewed d-flex align-items-center">

    <div class="container">
        <div class="row align-items-center">

            <!-- LEFT TEXT -->
            <div class="col-lg-6 col-md-8 text-white reveal">

                <h1 class="fw-bold display-4">Order Online</h1>

                <p class="lead mt-3 mb-4 opacity-75" style="max-width: 480px;">
                    Fresh coffee & snacks delivered from our roastery to your doorstep,
                    perfectly packaged for peak flavor.
                </p>

                <button class="btn btn-royal rounded-pill px-5"
                        data-bs-toggle="modal"
                        data-bs-target="#orderModal">
                    Start Your Order →
                </button>

            </div>

            <!-- RIGHT EMPTY (for background visual space) -->
            <div class="col-lg-6 d-none d-lg-block"></div>

        </div>
    </div>

</div>

<!-- ============================= -->
<!-- OPTIONS -->
<!-- ============================= -->
<main class="container py-5 text-center">

    <h2 class="fw-bold text-maroon mb-2">Choose your delivery partner</h2>
    <p class="text-muted mb-5">Fast, fresh, and reliable</p>

    <div class="row justify-content-center g-4">

        <!-- ROYAL -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-5 p-4 h-100">

                <div class="bg-maroon text-white py-5 rounded-4 mb-3">
                    <h4 class="fw-bold mb-0">ROYAL TO-GO</h4>
                </div>

                <h5 class="fw-bold">Order Direct</h5>
                <p class="small text-muted">
                    Order directly from our system for best experience.
                </p>

                <button class="btn btn-maroon mt-auto"
                        data-bs-toggle="modal"
                        data-bs-target="#orderModal">
                    Order Now →
                </button>

            </div>
        </div>

        <!-- FOODPANDA -->
        <div class="col-md-4">
            <div class="card border-0 shadow-sm rounded-5 p-4 h-100">

                <div class="bg-light py-4 rounded-4 mb-3">
                    <img src="images/foodpanda.png.png"
                         class="img-fluid"
                         style="max-height:100px;">
                </div>

                <h5 class="fw-bold">Foodpanda</h5>
                <p class="small text-muted">
                    Fast delivery via official partner.
                </p>

                <a href="https://foodpanda.pk"
                   target="_blank"
                   class="btn btn-outline-dark mt-auto">
                   Order via Foodpanda →
                </a>

            </div>
        </div>

    </div>

</main>

<!-- ============================= -->
<!-- MODAL -->
<!-- ============================= -->
<div class="modal fade" id="orderModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-4 border-0 shadow">

            <!-- HEADER -->
            <div class="modal-header border-0 text-center justify-content-center">

                <div>
                    <img src="images/logo-marron.png.png" style="height:40px;">
                    <h5 class="fw-bold text-maroon mt-2">Select Order Type</h5>
                </div>

                <button type="button"
                        class="btn-close position-absolute end-0 me-3"
                        data-bs-dismiss="modal">
                </button>

            </div>

            <!-- BODY -->
            <div class="modal-body text-center p-4">

                <!-- TOGGLE -->
                <div class="d-flex justify-content-center mb-4">
                    <button id="btnDelivery"
                        class="btn btn-maroon me-2"
                        onclick="toggleOrderType('delivery')">
                        Delivery
                    </button>

                    <button id="btnPickup"
                        class="btn btn-light"
                        onclick="toggleOrderType('pickup')">
                        Pick-Up
                    </button>
                </div>

                <p id="orderLabel" class="text-muted mb-3">
                    Select your location
                </p>

                <select class="form-select mb-4">
                    <option>Karachi</option>
                    <option>Lahore</option>
                    <option>Islamabad</option>
                </select>

                <!-- PAYMENT -->
                <div class="d-flex flex-column gap-2 mb-3">

                    <button class="btn btn-dark py-3 rounded-pill">
                        <i class="bi bi-apple me-2"></i> Apple Pay
                    </button>

                    <button class="btn py-3 rounded-pill text-white" style="background:#000;">
                        <i class="bi bi-google me-2"></i> Google Pay
                    </button>

                    <button class="btn btn-outline-maroon py-2">
                        Monthly Subscription (-15%)
                    </button>

                </div>

                <button class="btn btn-maroon w-100">
                    Continue →
                </button>

            </div>

        </div>
    </div>
</div>

<!-- ============================= -->
<!-- SCRIPT -->
<!-- ============================= -->
<script>
function toggleOrderType(type){
    let d = document.getElementById('btnDelivery');
    let p = document.getElementById('btnPickup');
    let label = document.getElementById('orderLabel');

    if(type === 'delivery'){
        d.className = "btn btn-maroon me-2";
        p.className = "btn btn-light";
        label.innerText = "Select delivery location";
    } else {
        p.className = "btn btn-maroon";
        d.className = "btn btn-light me-2";
        label.innerText = "Select pickup branch";
    }
}
</script>

<?php include('footer.php'); ?>




