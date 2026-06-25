<?php include('header.php'); ?>
<?php include('config/db.php'); ?>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700;800&family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

<style>
:root{
    --primary-gold:#D4AF37;
    --gold-light:#f7d774;
    --bg-main:#0b0908;
    --bg-card:#16110f;
    --bg-soft:#1d1714;
    --border:rgba(212,175,55,0.18);
    --white-soft:rgba(255,255,255,0.82);
    --white-muted:rgba(255,255,255,0.62);
    --transition:all .45s cubic-bezier(.23,1,.32,1);
}

/* ===== BODY ===== */
body{
    background:var(--bg-main);
    color:#fff;
    font-family:'Inter',sans-serif;
    overflow-x:hidden;
}

/* ===== GLOBAL ===== */
.text-gold{
    color:var(--primary-gold)!important;
}

.ls-2{letter-spacing:2px;}
.ls-3{letter-spacing:3px;}
.ls-5{letter-spacing:5px;}

.mono{
    font-family:'JetBrains Mono', monospace;
}

.z-index-10{
    z-index:10;
}

/* ===== HERO SECTION ===== */
.hero-section{
    position:relative;
    min-height:100vh;
    display:flex;
    align-items:center;
}

.hero-overlay{
    position:absolute;
    inset:0;
    background:
    linear-gradient(
        to right,
        rgba(0,0,0,.92),
        rgba(0,0,0,.72),
        rgba(0,0,0,.35)
    );
    z-index:1;
}

.parallax-bg{
    position:absolute;
    inset:0;
    background:
    linear-gradient(
        to bottom,
        rgba(0,0,0,.55),
        rgba(0,0,0,.75)
    ),
    url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=1600&q=80');
    background-size:cover;
    background-position:center;
    filter:brightness(.55);
    transform:scale(1.03);
}

/* ===== GLASS CARD ===== */
.glass-card{
    background:rgba(20,16,14,.72);
    border:1px solid var(--border);
    backdrop-filter:blur(18px);
    -webkit-backdrop-filter:blur(18px);
    border-radius:18px;
    padding:14px 22px;
    box-shadow:0 10px 30px rgba(0,0,0,.35);
}

/* ===== TITLE ===== */
.editorial-title{
    font-family:'Playfair Display', serif;
    font-size:clamp(3rem,8vw,6.5rem);
    line-height:1.05;
    font-weight:800;
    color:#fff;
    margin-bottom:20px;
}

.editorial-title span{
    color:var(--primary-gold);
}

/* ===== TEXT ===== */
.hero-description{
    font-size:1.15rem;
    line-height:1.9;
    color:var(--white-soft);
    max-width:720px;
    border-left:4px solid var(--primary-gold);
    padding-left:24px;
}

/* ===== PULSE ===== */
.pulse-gold{
    width:10px;
    height:10px;
    border-radius:50%;
    background:var(--primary-gold);
    display:inline-block;
    margin-right:12px;
    animation:pulse 2s infinite;
}

@keyframes pulse{
    0%{
        box-shadow:0 0 0 0 rgba(212,175,55,.7);
    }
    70%{
        box-shadow:0 0 0 12px rgba(212,175,55,0);
    }
    100%{
        box-shadow:0 0 0 0 rgba(212,175,55,0);
    }
}

/* ===== BUTTONS ===== */
.btn-ultra-gold{
    background:linear-gradient(135deg,var(--primary-gold),#9e7620);
    border:none;
    color:#000;
    font-weight:700;
    letter-spacing:1px;
    padding:15px 38px;
    border-radius:12px;
    transition:var(--transition);
    box-shadow:0 10px 25px rgba(212,175,55,.18);
}

.btn-ultra-gold:hover{
    transform:translateY(-4px);
    color:#000;
    box-shadow:0 16px 35px rgba(212,175,55,.28);
}

.btn-outline-blur{
    background:rgba(255,255,255,.06);
    border:1px solid rgba(255,255,255,.12);
    color:#fff;
    padding:15px 38px;
    border-radius:12px;
    backdrop-filter:blur(12px);
    transition:var(--transition);
}

.btn-outline-blur:hover{
    background:rgba(255,255,255,.14);
    border-color:var(--primary-gold);
    color:#fff;
    transform:translateY(-4px);
}

/* ===== MODAL ===== */
.modal-content.glass-portal{
    background:rgba(11,9,8,.96);
    border:1px solid rgba(212,175,55,.15);
    border-radius:24px;
    color:#fff;
    overflow:hidden;
    box-shadow:0 30px 80px rgba(0,0,0,.55);
}

.modal-header{
    border-bottom:1px solid rgba(212,175,55,.1);
    padding-bottom:20px;
}

.modal-body{
    padding-top:25px;
}

/* ===== DIRECTORY ITEMS ===== */
.directory-item{
    background:var(--bg-card);
    border:1px solid rgba(255,255,255,.05);
    border-radius:16px;
    padding:18px;
    transition:var(--transition);
}

.directory-item:hover{
    border-color:var(--primary-gold);
    transform:translateY(-6px);
    background:var(--bg-soft);
}

.directory-item span{
    color:#fff;
    font-weight:600;
}

.directory-item small{
    color:var(--white-muted)!important;
    display:block;
    margin-top:6px;
    line-height:1.7;
}

/* ===== TABLE ===== */
.schedule-table{
    width:100%;
    border-collapse:separate;
    border-spacing:0 12px;
}

.schedule-table tr{
    background:var(--bg-card);
    transition:var(--transition);
}

.schedule-table tr:hover{
    background:var(--bg-soft);
}

.schedule-table td,
.schedule-table th{
    padding:18px;
}

.schedule-table td{
    border-top:1px solid rgba(255,255,255,.04);
    border-bottom:1px solid rgba(255,255,255,.04);
    color:#fff;
}

.schedule-table small{
    color:var(--white-muted)!important;
}

.status-indicator{
    width:10px;
    height:10px;
    border-radius:50%;
    display:inline-block;
    margin-right:8px;
}

.status-online{
    background:#2ecc71;
    box-shadow:0 0 12px #2ecc71;
}

/* ===== REVEAL ===== */
.reveal{
    opacity:0;
    transform:translateY(40px);
    transition:1s ease;
}

.reveal.active{
    opacity:1;
    transform:translateY(0);
}

/* ===== RESPONSIVE ===== */
@media(max-width:991px){

    .hero-section{
        padding:120px 0 80px;
        text-align:center;
    }

    .hero-description{
        border-left:none;
        border-top:3px solid var(--primary-gold);
        padding-left:0;
        padding-top:20px;
        margin:auto;
    }

    .editorial-title{
        font-size:3.6rem;
    }

    .glass-card{
        justify-content:center;
    }

    .hero-buttons{
        justify-content:center;
    }
}

@media(max-width:576px){

    .editorial-title{
        font-size:2.8rem;
    }

    .btn-ultra-gold,
    .btn-outline-blur{
        width:100%;
    }

    .schedule-table td,
    .schedule-table th{
        padding:12px;
        font-size:.9rem;
    }
}


/* SEARCH */
.search-input{
    width:100%;
    height:65px;
    border-radius:16px;
    border:1px solid rgba(255,255,255,.08);
    background:#16110f;
    color:#fff;
    padding:0 70px 0 25px;
    outline:none;
    font-size:1rem;
}

.search-input:focus{
    border-color:#D4AF37;
}

.search-btn{
    position:absolute;
    right:10px;
    top:50%;
    transform:translateY(-50%);
    width:48px;
    height:48px;
    border:none;
    border-radius:12px;
    background:#D4AF37;
    color:#000;
    font-size:1.1rem;
}

/* WHY CHOOSE US */
.why-card{
    background:#16110f;
    border:1px solid rgba(255,255,255,.05);
    border-radius:24px;
    padding:40px 25px;
    transition:all .4s ease;
}

.why-card:hover{
    transform:translateY(-10px);
    border-color:#D4AF37;
}

.why-icon{
    width:90px;
    height:90px;
    background:rgba(212,175,55,.08);
    border:1px solid rgba(212,175,55,.2);
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    margin:auto;
    color:#D4AF37;
    font-size:2rem;
}

/* TESTIMONIALS */
.testimonial-card{
    background:#16110f;
    border:1px solid rgba(255,255,255,.05);
    border-radius:24px;
    padding:35px;
    transition:all .4s ease;
}

.testimonial-card:hover{
    transform:translateY(-8px);
    border-color:#D4AF37;
}

.testimonial-img{
    width:60px;
    height:60px;
    object-fit:cover;
    border-radius:50%;
    border:2px solid #D4AF37;
}

/* GRAPH */
.custom-progress{
    height:12px;
    border-radius:20px;
    background:#1c1614;
    overflow:hidden;
}

.custom-progress .progress-bar{
    background:linear-gradient(90deg,#D4AF37,#f5d36f);
}

.graph-image{
    border:1px solid rgba(212,175,55,.15);
}

/* THUMBNAILS */
.thumb-card{
    overflow:hidden;
    border-radius:24px;
}

.thumb-card img{
    width:100%;
    height:280px;
    object-fit:cover;
    transition:all .5s ease;
}

.thumb-card:hover img{
    transform:scale(1.08);
}




      
</style>

<section class="hero-section overflow-hidden">

    <div class="parallax-bg"></div>
    <div class="hero-overlay"></div>

    <div class="container position-relative z-index-10">

        <div class="row align-items-center">

            <div class="col-lg-8 reveal">

                <div class="glass-card d-inline-flex align-items-center mb-4">
                    <span class="pulse-gold"></span>

                    <span class="text-gold fw-semibold text-uppercase ls-3 small">
                        Calibration Active • SCAA Grade-1
                    </span>
                </div>

                <h1 class="editorial-title">
                    Fueling the <br>
                    <span>Academic Elite</span>
                </h1>

                <p class="hero-description">
                    Precision roasting protocols engineered for
                    <strong class="text-white">high-performance scholars</strong>,
                    visionary creators, and coffee lovers who demand
                    perfection in every cup.
                </p>

                <div class="mt-5 d-flex flex-wrap gap-3 hero-buttons">

                    <button
                        class="btn btn-ultra-gold"
                        data-bs-toggle="modal"
                        data-bs-target="#directoryModal">

                        Explore Directory
                    </button>

                    <button
                        class="btn btn-outline-blur"
                        data-bs-toggle="modal"
                        data-bs-target="#scheduleModal">

                        Node Schedule
                    </button>

                </div>

            </div>

        </div>

    </div>
</section>

<!-- ===== DIRECTORY MODAL ===== -->

<div class="modal fade" id="directoryModal" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-xl modal-dialog-centered">

        <div class="modal-content glass-portal p-4">

            <div class="modal-header border-0">

                <h2 class="editorial-title fs-1 mb-0">
                    Beverage Archive
                </h2>

                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                <div class="row g-4">

                    <!-- COLUMN 1 -->
                    <div class="col-md-4">

                        <h6 class="text-gold ls-3 text-uppercase mb-4">
                            01. Molecular Espresso
                        </h6>

                        <div class="directory-item mb-3">

                            <div class="d-flex justify-content-between align-items-center">

                                <span>Ristretto Shot</span>

                                <span class="mono text-gold">
                                    PKR 250
                                </span>

                            </div>

                            <small>
                                Short-pull, high-viscosity extraction.
                            </small>

                        </div>

                        <div class="directory-item">

                            <div class="d-flex justify-content-between align-items-center">

                                <span>Gold Cortado</span>

                                <span class="mono text-gold">
                                    PKR 380
                                </span>

                            </div>

                            <small>
                                1:1 ratio with textured micro-foam.
                            </small>

                        </div>

                    </div>

                    <!-- COLUMN 2 -->
                    <div class="col-md-4">

                        <h6 class="text-gold ls-3 text-uppercase mb-4">
                            02. Manual Brews
                        </h6>

                        <div class="directory-item mb-3">

                            <div class="d-flex justify-content-between align-items-center">

                                <span>V60 Pourover</span>

                                <span class="mono text-gold">
                                    PKR 450
                                </span>

                            </div>

                            <small>
                                Clean tea-like clarity with Ethiopian beans.
                            </small>

                        </div>

                        <div class="directory-item">

                            <div class="d-flex justify-content-between align-items-center">

                                <span>Chemex Series</span>

                                <span class="mono text-gold">
                                    PKR 550
                                </span>

                            </div>

                            <small>
                                Laboratory-grade triple filtration system.
                            </small>

                        </div>

                    </div>

                    <!-- COLUMN 3 -->
                    <div class="col-md-4">

                        <h6 class="text-gold ls-3 text-uppercase mb-4">
                            03. Signature Labs
                        </h6>

                        <div class="directory-item mb-3">

                            <div class="d-flex justify-content-between align-items-center">

                                <span>Golden Faisal</span>

                                <span class="mono text-gold">
                                    PKR 480
                                </span>

                            </div>

                            <small>
                                Saffron-infused white mocha fusion.
                            </small>

                        </div>

                        <div class="directory-item">

                            <div class="d-flex justify-content-between align-items-center">

                                <span>Midnight Nitro</span>

                                <span class="mono text-gold">
                                    PKR 390
                                </span>

                            </div>

                            <small>
                                Cold brew charged with pure nitrogen.
                            </small>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<!-- ===== SCHEDULE MODAL ===== -->

<div class="modal fade" id="scheduleModal" tabindex="-1" aria-hidden="true">

    <div class="modal-dialog modal-lg modal-dialog-centered">

        <div class="modal-content glass-portal p-4">

            <div class="modal-header border-0">

                <div>

                    <h2 class="editorial-title fs-1 mb-2">
                        Operational Nodes
                    </h2>

                    <p class="text-white-50 mb-0">
                        System uptime across Royal Cafe locations.
                    </p>

                </div>

                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                <table class="schedule-table">

                    <thead>

                        <tr class="bg-transparent">

                            <th class="text-gold ls-2">
                                LOCATION NODE
                            </th>

                            <th class="text-gold ls-2">
                                ACTIVE WINDOW
                            </th>

                            <th class="text-gold ls-2">
                                STATUS
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>
                                <strong>Main Campus Hub</strong><br>
                                <small>GCUF Gate 1</small>
                            </td>

                            <td class="mono">
                                08:00 — 22:00
                            </td>

                            <td>
                                <span class="status-indicator status-online"></span>
                                ONLINE
                            </td>

                        </tr>

                        <tr>

                            <td>
                                <strong>Executive Archive</strong><br>
                                <small>Faculty Lounge</small>
                            </td>

                            <td class="mono">
                                09:00 — 18:00
                            </td>

                            <td>
                                <span class="status-indicator status-online"></span>
                                ONLINE
                            </td>

                        </tr>

                        <tr>

                            <td>
                                <strong>Midnight Lab</strong><br>
                                <small>Old Campus Sector</small>
                            </td>

                            <td class="mono">
                                18:00 — 02:00
                            </td>

                            <td>
                                <span class="status-indicator"
                                      style="background:#f39c12; box-shadow:0 0 10px #f39c12;">
                                </span>
                                DUSK MODE
                            </td>

                        </tr>

                    </tbody>

                </table>

                <div class="mt-4 p-3 rounded-4 border border-warning"
                     style="background:rgba(255,193,7,.06);">

                    <small class="text-gold mono">

                        <i class="bi bi-info-circle me-2"></i>

                        Weekend calibrations occur every Sunday.
                        Hours may vary during exam seasons.

                    </small>

                </div>

            </div>

        </div>

    </div>

</div>

<script>
const observer = new IntersectionObserver((entries)=>{
    entries.forEach(entry=>{
        if(entry.isIntersecting){
            entry.target.classList.add('active');
        }
    });
},{
    threshold:0.15
});

document.querySelectorAll('.reveal').forEach(el=>{
    observer.observe(el);
});
</script>

<!-- SEARCH SECTION -->
<section class="py-5 position-relative overflow-hidden" style="background:#0f0b09;">

    <div class="container">

        <div class="glass-card p-4 p-lg-5 reveal">

            <div class="row align-items-center g-4">

                <div class="col-lg-6">
                    <h2 class="editorial-title fs-1 mb-3">
                        Search Your <span class="text-gold">Favorite Brew</span>
                    </h2>

                    <p class="text-white-50 mb-0" style="line-height:1.9;">
                        Explore signature coffees, campus specials, juices,
                        desserts, and premium beverages instantly.
                    </p>
                </div>

                <div class="col-lg-6">

                    <div class="position-relative">

                        <input type="text"
                               class="form-control search-input"
                               placeholder="Search coffee, juice, dessert...">

                        <button class="search-btn">
                            <i class="bi bi-search"></i>
                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- WHY CHOOSE US -->
<section class="py-5 position-relative" style="background:#080605;">

    <div class="container py-5">

        <div class="text-center mb-5 reveal">

            <span class="text-uppercase text-gold ls-3 fw-semibold">
                Premium Experience
            </span>

            <h2 class="editorial-title mt-3">
                Why Choose <span>Royal Cafe</span>
            </h2>

            <p class="text-white-50 mx-auto"
               style="max-width:720px; line-height:1.9;">

                We blend premium taste, modern atmosphere,
                and high-quality ingredients to create the ultimate
                student and family cafe experience.

            </p>

        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6 reveal">

                <div class="why-card h-100 text-center">

                    <div class="why-icon">
                        <i class="bi bi-cup-hot"></i>
                    </div>

                    <h4 class="mt-4 mb-3">Premium Coffee</h4>

                    <p class="text-white-50">
                        Freshly roasted beans with rich aroma and world-class taste.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6 reveal">

                <div class="why-card h-100 text-center">

                    <div class="why-icon">
                        <i class="bi bi-lightning-charge"></i>
                    </div>

                    <h4 class="mt-4 mb-3">Fast Service</h4>

                    <p class="text-white-50">
                        Quick preparation and efficient customer support every time.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6 reveal">

                <div class="why-card h-100 text-center">

                    <div class="why-icon">
                        <i class="bi bi-wifi"></i>
                    </div>

                    <h4 class="mt-4 mb-3">Study Friendly</h4>

                    <p class="text-white-50">
                        Peaceful environment with free WiFi for students and creators.
                    </p>

                </div>

            </div>

            <div class="col-lg-3 col-md-6 reveal">

                <div class="why-card h-100 text-center">

                    <div class="why-icon">
                        <i class="bi bi-stars"></i>
                    </div>

                    <h4 class="mt-4 mb-3">Luxury Ambience</h4>

                    <p class="text-white-50">
                        Elegant interior and modern lighting for premium vibes.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- TESTIMONIALS -->
<section class="py-5" style="background:#0f0b09;">

    <div class="container py-5">

        <div class="text-center mb-5 reveal">

            <span class="text-uppercase text-gold ls-3 fw-semibold">
                Customer Reviews
            </span>

            <h2 class="editorial-title mt-3">
                What Our <span>Customers Say</span>
            </h2>

        </div>

        <div class="row g-4">

            <div class="col-lg-4 reveal">

                <div class="testimonial-card h-100">

                    <div class="mb-3 text-gold fs-4">
                        ★★★★★
                    </div>

                    <p class="text-white-50" style="line-height:1.9;">
                        One of the best cafes near campus.
                        Their cold coffee and ambience are next level.
                    </p>

                    <div class="d-flex align-items-center mt-4">

                        <img src="https://randomuser.me/api/portraits/men/32.jpg"
                             class="testimonial-img me-3">

                        <div>
                            <h6 class="mb-0">Ali Hamza</h6>
                            <small class="text-white-50">Software Student</small>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 reveal">

                <div class="testimonial-card h-100">

                    <div class="mb-3 text-gold fs-4">
                        ★★★★★
                    </div>

                    <p class="text-white-50" style="line-height:1.9;">
                        Amazing environment for assignments and group discussions.
                        Highly recommended.
                    </p>

                    <div class="d-flex align-items-center mt-4">

                        <img src="https://randomuser.me/api/portraits/women/44.jpg"
                             class="testimonial-img me-3">

                        <div>
                            <h6 class="mb-0">Ayesha Noor</h6>
                            <small class="text-white-50">Designer</small>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg-4 reveal">

                <div class="testimonial-card h-100">

                    <div class="mb-3 text-gold fs-4">
                        ★★★★★
                    </div>

                    <p class="text-white-50" style="line-height:1.9;">
                        Premium quality drinks with reasonable prices.
                        Their signature drinks are outstanding.
                    </p>

                    <div class="d-flex align-items-center mt-4">

                        <img src="https://randomuser.me/api/portraits/men/65.jpg"
                             class="testimonial-img me-3">

                        <div>
                            <h6 class="mb-0">Usman Tariq</h6>
                            <small class="text-white-50">Business Student</small>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- PAKISTANI STATS SECTION -->
<section class="py-5 position-relative overflow-hidden"
         style="background:#080605;">

    <div class="container py-5">

        <div class="row align-items-center g-5">

            <div class="col-lg-6 reveal">

                <span class="text-uppercase text-gold ls-3 fw-semibold">
                    Pakistan Coffee Growth
                </span>

                <h2 class="editorial-title mt-3">
                    Cafe Culture in <span>Pakistan</span>
                </h2>

                <p class="text-white-50"
                   style="line-height:1.9;">

                    Pakistan's modern cafe industry is rapidly growing.
                    Students and young professionals are driving the
                    demand for premium coffee experiences.

                </p>

                <div class="mt-4">

                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Cold Coffee Demand</span>
                            <span class="text-gold">90%</span>
                        </div>

                        <div class="progress custom-progress">
                            <div class="progress-bar" style="width:90%"></div>
                        </div>
                    </div>

                    <div class="mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span>Student Visitors</span>
                            <span class="text-gold">85%</span>
                        </div>

                        <div class="progress custom-progress">
                            <div class="progress-bar" style="width:85%"></div>
                        </div>
                    </div>

                    <div>
                        <div class="d-flex justify-content-between mb-2">
                            <span>Premium Drinks Trend</span>
                            <span class="text-gold">78%</span>
                        </div>

                        <div class="progress custom-progress">
                            <div class="progress-bar" style="width:78%"></div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="col-lg-6 reveal text-center">

                <img src="https://images.unsplash.com/photo-1511920170033-f8396924c348?auto=format&fit=crop&w=1000&q=80"
                     class="img-fluid rounded-5 shadow-lg graph-image">

            </div>

        </div>

    </div>

</section>



<!-- THUMBNAIL GALLERY -->
<section class="py-5" style="background:#0f0b09;">

    <div class="container py-5">

        <div class="text-center mb-5 reveal">

            <span class="text-uppercase text-gold ls-3 fw-semibold">
                Royal Gallery
            </span>

            <h2 class="editorial-title mt-3">
                Cafe <span>Thumbnails</span>
            </h2>

        </div>

        <div class="row g-4">

            <div class="col-lg-3 col-md-6 reveal">
                <div class="thumb-card">
                    <img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085?auto=format&fit=crop&w=800&q=80"
                         class="img-fluid rounded-4">
                </div>
            </div>

            <div class="col-lg-3 col-md-6 reveal">
                <div class="thumb-card">
                    <img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93?auto=format&fit=crop&w=800&q=80"
                         class="img-fluid rounded-4">
                </div>
            </div>

            <div class="col-lg-3 col-md-6 reveal">
                <div class="thumb-card">
                    <img src="https://images.unsplash.com/photo-1517701604599-bb29b565090c?auto=format&fit=crop&w=800&q=80"
                         class="img-fluid rounded-4">
                </div>
            </div>

            <div class="col-lg-3 col-md-6 reveal">
                <div class="thumb-card">
                    <img src="https://images.unsplash.com/photo-1498804103079-a6351b050096?auto=format&fit=crop&w=800&q=80"
                         class="img-fluid rounded-4">
                </div>
            </div>

        </div>

    </div>

</section>

<?php include('footer.php'); ?>

