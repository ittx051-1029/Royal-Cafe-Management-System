<?php include('header.php'); ?>

<style>

/* 🌑 GLOBAL INDEX STYLE THEME */
:root{
    --gold:#D4AF37;
    --dark:#120d0c;
    --maroon:#2b1b18;
    --glass:rgba(255,255,255,0.08);
}

/* ⭐ SECTION */
#reviews{
    padding:120px 0;
    background:
        radial-gradient(circle at top right, rgba(212,175,55,0.08), transparent 60%),
        linear-gradient(180deg, var(--dark), #0a0706);
    color:#fff;
}

/* 🧊 INDEX STYLE GLASS */
.glass-card{
    background:var(--glass);
    backdrop-filter:blur(16px);
    -webkit-backdrop-filter:blur(16px);
    border:1px solid rgba(255,255,255,0.12);
    border-radius:26px;
    transition:.35s ease;
}

.glass-card:hover{
    transform:translateY(-6px);
    border-color:rgba(212,175,55,0.35);
    box-shadow:0 25px 60px rgba(0,0,0,0.6);
}

/* 🏷️ TEXT */
.text-gold{ color:var(--gold); }

/* ⭐ STAR */
.rating{
    color:var(--gold);
    letter-spacing:2px;
}

/* 👤 AVATAR */
.avatar{
    width:60px;
    height:60px;
    border-radius:50%;
    border:2px solid var(--gold);
}

/* 💬 REVIEW CARD (INDEX STYLE) */
.review-card{
    background:linear-gradient(135deg,#ffffff 0%,#f7f3ed 100%);
    border-radius:26px;
    padding:45px;
    position:relative;
    color:#111;
}

/* QUOTE ICON */
.quote-icon{
    position:absolute;
    top:18px;
    left:18px;
    font-size:2.4rem;
    opacity:0.12;
}

/* 📝 FORM (INDEX STYLE DARK GLASS) */
.form-box{
    background:rgba(255,255,255,0.06);
    border:1px solid rgba(255,255,255,0.12);
    border-radius:26px;
    padding:40px;
}

/* INPUTS */
.form-control,
.form-select,
textarea{
    background:rgba(0,0,0,0.35)!important;
    border:1px solid rgba(212,175,55,0.25)!important;
    color:#fff!important;
    border-radius:14px!important;
    padding:12px;
}

.form-control::placeholder,
textarea::placeholder{
    color:rgba(255,255,255,0.5);
}

.form-control:focus,
.form-select:focus,
textarea:focus{
    border-color:var(--gold)!important;
    box-shadow:0 0 0 0.2rem rgba(212,175,55,0.2)!important;
}

/* 🔘 BUTTON (INDEX STYLE) */
.btn-royal{
    background:var(--gold);
    color:#111;
    font-weight:700;
    border-radius:14px;
    padding:12px;
    transition:.3s;
}

.btn-royal:hover{
    background:#b8860b;
    transform:translateY(-3px);
    box-shadow:0 20px 40px rgba(0,0,0,0.3);
}

/* 📱 RESPONSIVE */
@media(max-width:768px){
    #reviews{ padding:70px 0; }
    .review-card{ padding:30px; }
}

</style>

<!-- ⭐ REVIEWS -->
<section id="reviews">

    <div class="container">

        <!-- HEADER (INDEX STYLE) -->
        <div class="row mb-5 align-items-end">

            <div class="col-lg-7">

                <h6 class="text-gold fw-bold text-uppercase">
                    The Connoisseur’s Choice
                </h6>

                <h2 class="display-4 fw-bold">
                    Community Chronicles
                </h2>

            </div>

            <div class="col-lg-5 text-lg-end">
                <p class="text-white opacity-75">
                    Real experiences from students & coffee lovers across Pakistan.
                </p>
            </div>

        </div>

        <div class="row g-5">

            <!-- 💬 CAROUSEL -->
            <div class="col-lg-7">

                <div id="reviewCarousel" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">

                        <!-- REVIEW 1 -->
                        <div class="carousel-item active">

                            <div class="review-card shadow-lg">

                                <i class="fas fa-quote-left quote-icon"></i>

                                <div class="rating mb-3">★★★★★</div>

                                <p class="h5 fst-italic mb-4">
                                    “The <span class="text-gold fw-bold">Night Study Roast</span> feels like it was made for students.”
                                </p>

                                <div class="d-flex align-items-center gap-3">

                                    <img class="avatar"
                                         src="https://ui-avatars.com/api/?name=Ahmed+Ali">

                                    <div>
                                        <h6 class="fw-bold mb-0">Ahmed Ali</h6>
                                        <small class="text-muted">GCUF Student</small>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <!-- REVIEW 2 -->
                        <div class="carousel-item">

                            <div class="review-card shadow-lg">

                                <i class="fas fa-quote-left quote-icon"></i>

                                <div class="rating mb-3">★★★★★</div>

                                <p class="h5 fst-italic mb-4">
                                    “Best cold brew in Faisalabad — perfect for late-night coding.”
                                </p>

                                <div class="d-flex align-items-center gap-3">

                                    <img class="avatar"
                                         src="https://ui-avatars.com/api/?name=Zainab+Khan">

                                    <div>
                                        <h6 class="fw-bold mb-0">Zainab Khan</h6>
                                        <small class="text-muted">COMSATS Student</small>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- CONTROLS -->
                    <div class="mt-4 d-flex gap-2">

                        <button class="btn btn-outline-light px-4"
                                data-bs-target="#reviewCarousel"
                                data-bs-slide="prev">
                            ←
                        </button>

                        <button class="btn btn-outline-light px-4"
                                data-bs-target="#reviewCarousel"
                                data-bs-slide="next">
                            →
                        </button>

                    </div>

                </div>

            </div>

            <!-- 📝 FORM -->
            <div class="col-lg-5">

                <div class="form-box">

                    <h3 class="fw-bold mb-2">Join the Guild</h3>

                    <p class="text-gold small mb-4">
                        Share your Royal Coffee experience
                    </p>

                    <form action="process_feedback.php" method="POST">

                        <input type="text" name="name" class="form-control mb-3" placeholder="Your Name" required>

                        <select name="fav_brew" class="form-select mb-3">
                            <option>Choose Favorite Brew</option>
                            <option>Espresso</option>
                            <option>Latte</option>
                            <option>Cold Brew</option>
                        </select>

                        <textarea name="message" rows="4" class="form-control mb-3" placeholder="Your Experience"></textarea>

                        <button class="btn btn-royal w-100">
                            Post Review
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<?php include('footer.php'); ?>