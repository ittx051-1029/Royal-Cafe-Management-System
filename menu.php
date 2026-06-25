<?php include('header.php'); ?>
<?php include('config/db.php'); ?>

<style>

:root{
    --royal-black:#070707;
    --royal-dark:#111111;
    --royal-card:rgba(255,255,255,.05);
    --royal-border:rgba(255,255,255,.08);

    --gold:#D4AF37;
    --gold-light:#f7df8a;
    --gold-soft:#fff3bf;

    --text:#ffffff;
    --muted:rgba(255,255,255,.68);
}

/* =================================
BODY
================================= */

body{
    background:
    radial-gradient(circle at top right, rgba(212,175,55,.08), transparent 30%),
    radial-gradient(circle at bottom left, rgba(255,255,255,.03), transparent 20%),
    linear-gradient(to bottom,#070707,#0f0f0f,#090909);

    color:var(--text);
    overflow-x:hidden;
}

/* =================================
HERO
================================= */

.menu-hero{
    min-height:78vh;
    position:relative;
    overflow:hidden;
    display:flex;
    align-items:center;
    border-bottom:1px solid rgba(255,255,255,.05);
}

.menu-hero::before{
    content:'';
    position:absolute;
    inset:0;

    background:
    linear-gradient(
    to right,
    rgba(0,0,0,.92),
    rgba(0,0,0,.72),
    rgba(0,0,0,.82)
    );
}

.hero-glow{
    position:absolute;
    width:700px;
    height:700px;
    border-radius:50%;
    background:rgba(212,175,55,.08);
    filter:blur(90px);
    top:-250px;
    right:-150px;
    animation:floatGlow 8s ease-in-out infinite;
}

@keyframes floatGlow{
    0%,100%{transform:translateY(0px);}
    50%{transform:translateY(35px);}
}

.hero-content{
    position:relative;
    z-index:2;
}

.hero-badge{
    display:inline-flex;
    align-items:center;
    gap:10px;

    padding:12px 24px;

    border-radius:999px;

    background:rgba(212,175,55,.12);

    border:1px solid rgba(212,175,55,.22);

    color:var(--gold-light);

    backdrop-filter:blur(14px);

    margin-bottom:28px;

    font-weight:600;

    letter-spacing:1px;
}

.hero-title{
    font-size:clamp(3rem,7vw,6.5rem);
    line-height:.95;
    font-weight:900;
    letter-spacing:-4px;

    margin-bottom:28px;

    background:
    linear-gradient(
    135deg,
    #ffffff 0%,
    #f7efcf 35%,
    #D4AF37 75%,
    #fff7d4 100%
    );

    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.hero-desc{
    max-width:760px;

    font-size:1.08rem;

    line-height:1.9;

    color:rgba(255,255,255,.72);
}

/* =================================
GLASS
================================= */

.glass-card{
    background:rgba(255,255,255,.04);

    border:1px solid rgba(255,255,255,.08);

    backdrop-filter:blur(20px);

    border-radius:30px;

    box-shadow:
    0 10px 40px rgba(0,0,0,.28),
    inset 0 1px 0 rgba(255,255,255,.04);

    transition:.45s ease;
}

.glass-card:hover{
    transform:translateY(-5px);
}

/* =================================
FILTER
================================= */

.filter-wrap{
    margin-top:-80px;
    position:relative;
    z-index:20;
}

.filter-title{
    font-size:1.3rem;
    font-weight:800;

    background:
    linear-gradient(
    135deg,
    #fff,
    #f4df93,
    #D4AF37
    );

    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.filter-sub{
    color:rgba(255,255,255,.5);
}

/* =================================
INPUTS
================================= */

.input-luxury,
.select-luxury{
    height:60px;

    background:rgba(255,255,255,.05)!important;

    border:1px solid rgba(255,255,255,.08)!important;

    border-radius:20px!important;

    color:#fff!important;

    padding:0 22px!important;

    transition:.35s ease;
}

.input-luxury:focus,
.select-luxury:focus{
    background:rgba(255,255,255,.08)!important;

    border-color:rgba(212,175,55,.35)!important;

    box-shadow:
    0 0 0 4px rgba(212,175,55,.12)!important;
}

.input-luxury::placeholder{
    color:rgba(255,255,255,.35);
}

.select-luxury option{
    background:#111;
    color:#fff;
}

/* =================================
BUTTON
================================= */

.btn-royal{
    position:relative;
    overflow:hidden;

    height:60px;

    border:none;

    border-radius:20px;

    font-weight:800;

    letter-spacing:.8px;

    color:#fff4c5!important;

    background:
    linear-gradient(
    135deg,
    #fff3b0 0%,
    #f5d66d 18%,
    #D4AF37 48%,
    #b8860b 80%,
    #ffe89a 100%
    );

    box-shadow:
    0 10px 30px rgba(212,175,55,.28),
    inset 0 1px 0 rgba(255,255,255,.45);

    transition:.35s ease;
}

.btn-royal:hover{
    transform:translateY(-4px);

    box-shadow:
    0 20px 40px rgba(212,175,55,.35),
    0 0 25px rgba(212,175,55,.2);
}

.btn-royal::before{
    content:'';

    position:absolute;

    top:0;
    left:-120%;

    width:80%;
    height:100%;

    background:
    linear-gradient(
    90deg,
    transparent,
    rgba(255,255,255,.45),
    transparent
    );

    transform:skewX(-20deg);

    transition:.8s;
}

.btn-royal:hover::before{
    left:140%;
}

/* =================================
VOICE BUTTON
================================= */

.voice-btn{
    width:60px;
    height:60px;

    border:none;

    border-radius:20px;

    background:
    linear-gradient(
    135deg,
    rgba(212,175,55,.28),
    rgba(212,175,55,.12)
    );

    color:var(--gold-light);

    transition:.35s ease;
}

.voice-btn:hover{
    transform:translateY(-4px);

    box-shadow:
    0 10px 30px rgba(212,175,55,.2);
}

/* =================================
INFO STRIP
================================= */

.info-strip{
    display:grid;

    grid-template-columns:repeat(auto-fit,minmax(240px,1fr));

    gap:24px;
}

.info-box{
    padding:30px;

    border-radius:28px;

    background:rgba(255,255,255,.03);

    border:1px solid rgba(255,255,255,.06);

    transition:.4s ease;
}

.info-box:hover{
    transform:translateY(-8px);

    border-color:rgba(212,175,55,.2);

    box-shadow:
    0 20px 40px rgba(0,0,0,.2);
}

.info-icon{
    width:68px;
    height:68px;

    border-radius:20px;

    display:flex;
    align-items:center;
    justify-content:center;

    margin-bottom:20px;

    background:rgba(212,175,55,.12);

    color:var(--gold);

    font-size:1.4rem;
}

.info-box h5{
    color:#fff0bf;

    margin-bottom:14px;

    font-weight:700;
}

.info-box p{
    color:rgba(255,255,255,.62);

    line-height:1.8;

    margin:0;
}

/* =================================
SECTION
================================= */

.section-title{
    font-size:2.5rem;

    font-weight:900;

    letter-spacing:-1px;

    background:
    linear-gradient(
    135deg,
    #fff,
    #f3dc87,
    #D4AF37
    );

    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.section-sub{
    color:rgba(255,255,255,.6);

    max-width:760px;

    line-height:1.9;
}

/* =================================
BADGES
================================= */

.badge-premium{
    padding:10px 18px;

    border-radius:999px;

    background:rgba(255,255,255,.05);

    border:1px solid rgba(255,255,255,.08);

    color:#f5df8b;
}

/* =================================
LOADER
================================= */

.loader-ring{
    width:75px;
    height:75px;

    border-radius:50%;

    border:4px solid rgba(255,255,255,.08);

    border-top-color:var(--gold);

    margin:auto;

    animation:spin 1s linear infinite;
}

@keyframes spin{
    to{
        transform:rotate(360deg);
    }
}

/* =================================
REVEAL
================================= */

.reveal{
    opacity:0;
    transform:translateY(40px);
    transition:1s ease;
}

.reveal.active{
    opacity:1;
    transform:translateY(0);
}

/* =================================
MOBILE
================================= */

@media(max-width:768px){

    .hero-title{
        font-size:3.6rem;
    }

    .filter-wrap{
        margin-top:-50px;
    }

    .section-title{
        font-size:2rem;
    }

}

</style>

<!-- =================================
HERO
================================= -->

<section class="menu-hero">

    <div class="hero-glow"></div>

    <div class="container hero-content">

        <div class="reveal active">

            <div class="hero-badge">
                <i class="bi bi-stars"></i>
                ULTRA PREMIUM DIGITAL MENU
            </div>

            <h1 class="hero-title">
                The Royal<br>
                Selection
            </h1>

            <p class="hero-desc">
                Discover handcrafted coffee blends, artisan bakery creations,
                premium desserts and signature campus specials —
                engineered with luxury café aesthetics and modern digital experience.
            </p>

        </div>

    </div>

</section>

<!-- =================================
FILTER
================================= -->

<div class="container filter-wrap">

    <div class="glass-card p-4 p-lg-5 reveal active">

        <div class="d-flex justify-content-between align-items-center flex-wrap gap-4 mb-4">

            <div>

                <h3 class="filter-title mb-2">
                    Smart Menu Explorer
                </h3>

                <div class="filter-sub">
                    AI-powered luxury filtering & live menu search
                </div>

            </div>

            <div class="d-flex gap-2 flex-wrap">

                <span class="badge-premium">
                    112 Signature Blends
                </span>

                <span class="badge-premium">
                    Luxury Bakery
                </span>

                <span class="badge-premium">
                    Student Favorites
                </span>

            </div>

        </div>

        <form id="filterForm">

            <div class="row g-3">

                <!-- SEARCH -->
                <div class="col-lg-5">

                    <label class="small text-secondary mb-2">
                        SEARCH MENU
                    </label>

                    <div class="d-flex gap-2">

                        <input
                        type="text"
                        id="searchInput"
                        class="form-control input-luxury"
                        placeholder="Search coffee, desserts, drinks...">

                        <button
                        type="button"
                        class="voice-btn"
                        id="voiceBtn">

                            <i class="bi bi-mic-fill"></i>

                        </button>

                    </div>

                </div>

                <!-- CATEGORY -->
                <div class="col-lg-3">

                    <label class="small text-secondary mb-2">
                        CATEGORY
                    </label>

                    <select
                    id="categorySelect"
                    class="form-select select-luxury">

                        <option value="">All Categories</option>
                        <option value="coffee">Coffee</option>
                        <option value="dessert">Desserts</option>
                        <option value="food">Food</option>
                        <option value="bakery">Bakery</option>

                    </select>

                </div>

                <!-- PRICE -->
                <div class="col-lg-2">

                    <label class="small text-secondary mb-2">
                        MIN PRICE
                    </label>

                    <input
                    type="number"
                    id="minPrice"
                    class="form-control input-luxury"
                    placeholder="0">

                </div>

                <div class="col-lg-2">

                    <label class="small text-secondary mb-2">
                        MAX PRICE
                    </label>

                    <input
                    type="number"
                    id="maxPrice"
                    class="form-control input-luxury"
                    placeholder="5000">

                </div>

            </div>

            <div class="row mt-4">

                <div class="col-lg-3">

                    <button
                    type="button"
                    onclick="loadProducts()"
                    class="btn btn-royal w-100">

                        <i class="bi bi-search me-2"></i>
                        Explore Menu

                    </button>

                </div>

            </div>

        </form>

    </div>

</div>

<!-- =================================
INFO STRIP
================================= -->

<section class="py-5">

    <div class="container">

        <div class="info-strip">

            <div class="info-box reveal">

                <div class="info-icon">
                    <i class="bi bi-cup-hot"></i>
                </div>

                <h5>Luxury Coffee</h5>

                <p>
                    Premium ethically sourced coffee crafted with
                    precision roasting and world-class flavor profiles.
                </p>

            </div>

            <div class="info-box reveal">

                <div class="info-icon">
                    <i class="bi bi-cake2"></i>
                </div>

                <h5>Fresh Bakery</h5>

                <p>
                    Daily artisan pastries, desserts and signature
                    cakes prepared for modern café culture.
                </p>

            </div>

            <div class="info-box reveal">

                <div class="info-icon">
                    <i class="bi bi-lightning-charge"></i>
                </div>

                <h5>Fast Experience</h5>

                <p>
                    Optimized smart ordering experience designed
                    for campus life and premium speed service.
                </p>

            </div>

            <div class="info-box reveal">

                <div class="info-icon">
                    <i class="bi bi-stars"></i>
                </div>

                <h5>Campus Specials</h5>

                <p>
                    Student-inspired signature drinks and combos
                    designed for modern university lifestyle.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- =================================
RESULTS
================================= -->

<section class="pb-5">

    <div class="container">

        <div class="d-flex justify-content-between align-items-end flex-wrap gap-3 mb-5">

            <div>

                <h2 class="section-title mb-3">
                    Curated Menu Collection
                </h2>

                <p class="section-sub">
                    Browse our premium digital menu featuring artisan coffee,
                    handcrafted beverages, desserts, bakery creations,
                    campus specials and luxury café experiences.
                </p>

            </div>

            <div class="small text-secondary">
                Updated live from Royal Coffee database
            </div>

        </div>

        <!-- LOADER -->
        <div id="loader" class="text-center py-5" style="display:none;">

            <div class="loader-ring mb-4"></div>

            <p class="text-secondary">
                Brewing premium results...
            </p>

        </div>

        <!-- RESULTS -->
        <div class="row g-4" id="results"></div>

    </div>

</section>

<script>

let debounceTimer;


/* =================================
AUTO SEARCH
================================= */

document.querySelectorAll('#filterForm input, #filterForm select')
.forEach(input => {

    input.addEventListener('keyup', () => {

        clearTimeout(debounceTimer);

        debounceTimer = setTimeout(loadProducts, 500);

    });

    input.addEventListener('change', () => {

        clearTimeout(debounceTimer);

        debounceTimer = setTimeout(loadProducts, 300);

    });

});

/* =================================
LOAD FIRST
================================= */

window.addEventListener("DOMContentLoaded", loadProducts);

/* =================================
VOICE SEARCH
================================= */

const voiceBtn = document.getElementById('voiceBtn');
const searchInput = document.getElementById('searchInput');

if ('webkitSpeechRecognition' in window) {

    const recognition = new webkitSpeechRecognition();

    recognition.lang = "en-US";

    voiceBtn.onclick = () => {

        recognition.start();

        voiceBtn.style.background = "rgba(212,175,55,.25)";
    };

    recognition.onresult = (event) => {

        searchInput.value = event.results[0][0].transcript;

        loadProducts();

        voiceBtn.style.background = "rgba(212,175,55,.12)";
    };

    recognition.onerror = () => {

        voiceBtn.style.background = "rgba(212,175,55,.12)";
    };

}else{

    voiceBtn.style.display = "none";
}

/* =================================
REVEAL ANIMATION
================================= */

const observer = new IntersectionObserver(entries=>{

    entries.forEach(entry=>{

        if(entry.isIntersecting){
            entry.target.classList.add('active');
        }

    });

},{threshold:0.15});

document.querySelectorAll('.reveal').forEach(el=>{

    observer.observe(el);

});

</script>

<?php include('footer.php'); ?>