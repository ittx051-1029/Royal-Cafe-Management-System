<?php include('header.php'); ?>

<style>
:root {
    --royal-maroon: #1a0f0d;
    --coffee-gold: #C5A059;
    --soft-cream: #FDFBF7;
}

/* 🌌 BACKGROUND */
body, #offers {
    background: radial-gradient(circle at top right, #2b1b1a, #120a09);
    color: var(--soft-cream);
    overflow-x: hidden;
}

/* ✨ FLOATING GLOW */
.bg-glow {
    position: absolute;
    width: 600px;
    height: 600px;
    background: var(--coffee-gold);
    opacity: 0.08;
    filter: blur(120px);
    border-radius: 50%;
    animation: floatGlow 10s ease-in-out infinite;
}

@keyframes floatGlow {
    0%,100% { transform: translateY(0); }
    50% { transform: translateY(-40px); }
}

/* 📌 HEADER */
.editorial-header {
    border-left: 4px solid var(--coffee-gold);
    padding-left: 25px;
    margin-bottom: 60px;
}

.editorial-header h6 {
    color: var(--coffee-gold);
    letter-spacing: 4px;
    text-transform: uppercase;
}

.editorial-header h2 {
    font-size: 3.2rem;
    font-weight: 900;
}

/* 🧊 GRID */
.offer-flex-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
}

/* 💎 LUXURY CARD */
.luxury-card {
    flex: 1;
    min-width: 320px;
    background: rgba(255,255,255,0.04);
    border: 1px solid rgba(197,160,89,0.15);
    backdrop-filter: blur(14px);
    border-radius: 18px;
    transition: 0.5s ease;
    position: relative;
    overflow: hidden;
    transform-style: preserve-3d;
}

/* 💫 3D HOVER */
.luxury-card:hover {
    transform: perspective(1000px) rotateX(6deg) rotateY(-6deg) translateY(-10px);
    border-color: var(--coffee-gold);
}

/* HEADER */
.card-banner {
    background: var(--coffee-gold);
    color: #1a0f0d;
    padding: 14px;
    font-weight: 800;
    text-align: center;
    letter-spacing: 2px;
}

/* PRICE ANIMATION */
.price-circle {
    font-size: 5rem;
    font-weight: 900;
    color: var(--coffee-gold);
    animation: pulse 2.5s infinite;
}

@keyframes pulse {
    0%,100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

/* BUTTON */
.btn-coffee {
    background: transparent;
    border: 2px solid var(--coffee-gold);
    color: var(--coffee-gold);
    width: 100%;
    padding: 14px;
    font-weight: 700;
    transition: 0.3s;
    border-radius: 10px;
}

.btn-coffee:hover {
    background: var(--coffee-gold);
    color: #000;
    transform: scale(1.05);
}

/* TIMER */
.timer-wrap {
    display: flex;
    justify-content: center;
    gap: 12px;
    margin: 25px 0;
}

.t-unit {
    background: rgba(255,255,255,0.05);
    padding: 10px;
    min-width: 70px;
    border-radius: 10px;
    text-align: center;
}

/* ✨ SCROLL REVEAL */
.reveal {
    opacity: 0;
    transform: translateY(40px);
    transition: all 1s ease;
}

.reveal.active {
    opacity: 1;
    transform: translateY(0);
}
</style>

<section id="offers" style="position:relative; padding:100px 0;">

    <!-- 🌟 GLOW EFFECT -->
    <div class="bg-glow" style="top:-120px; right:-120px;"></div>
    <div class="bg-glow" style="bottom:-120px; left:-120px;"></div>

    <div class="container">

        <!-- HEADER -->
        <div class="editorial-header reveal">
            <h6>Exclusive Café Rewards</h6>
            <h2>Luxury Deals & Experiences</h2>
            <p style="opacity:0.7;">
                Handcrafted offers designed for coffee lovers & students.
            </p>
        </div>

        <!-- DEALS -->
        <div class="offer-flex-grid">

            <!-- DEAL 1 -->
            <div class="luxury-card reveal">
                <div class="card-banner">Student Elite 🎓</div>

                <div style="padding:40px; text-align:center;">
                    <div class="price-circle">20%</div>
                    <h4 style="letter-spacing:2px;">OFF</h4>

                    <p style="opacity:0.6; margin:20px 0;">
                        Exclusive for GCUF & COMSATS students
                    </p>

                    <div style="border:1px dashed var(--coffee-gold); padding:15px; margin-bottom:20px;">
                        <small>PROMO CODE</small>
                        <div style="color:var(--coffee-gold); font-size:1.4rem; font-weight:800;">
                            CAMPUS20
                        </div>
                    </div>

                    <button class="btn-coffee">Claim Offer</button>
                </div>
            </div>

            <!-- DEAL 2 -->
            <div class="luxury-card reveal">
                <div class="card-banner" style="background:#3d1a16; color:#fff;">
                    Happy Hour 🔥
                </div>

                <div style="padding:40px; text-align:center;">

                    <div class="price-circle" style="color:#fff;">BOGO</div>

                    <h4 style="color:var(--coffee-gold); letter-spacing:2px;">
                        Buy 1 Get 1 Free
                    </h4>

                    <!-- TIMER -->
                    <div class="timer-wrap">
                        <div class="t-unit"><span id="h">02</span><br><small>HRS</small></div>
                        <div class="t-unit"><span id="m">45</span><br><small>MIN</small></div>
                        <div class="t-unit"><span id="s">00</span><br><small>SEC</small></div>
                    </div>

                    <button class="btn-coffee">Order Now</button>
                </div>
            </div>

            <!-- DEAL 3 (NEW PRO FEATURE) -->
            <div class="luxury-card reveal">
                <div class="card-banner">Weekend Special ☕</div>

                <div style="padding:40px; text-align:center;">
                    <div class="price-circle">FREE</div>
                    <h4 style="letter-spacing:2px;">COOKIE</h4>

                    <p style="opacity:0.6; margin:20px 0;">
                        With every premium coffee order
                    </p>

                    <button class="btn-coffee">Avail Now</button>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include('footer.php'); ?>

<script>
// ⏳ TIMER
function startTimer(){
    setInterval(()=>{
        let s=document.getElementById('s');
        let m=document.getElementById('m');

        let sec=parseInt(s.innerText);
        let min=parseInt(m.innerText);

        if(sec>0){
            s.innerText=(sec-1).toString().padStart(2,'0');
        } else if(min>0){
            m.innerText=(min-1).toString().padStart(2,'0');
            s.innerText="59";
        }
    },1000);
}
window.onload=startTimer;

/* ✨ SCROLL REVEAL */
const observer=new IntersectionObserver(entries=>{
    entries.forEach(e=>{
        if(e.isIntersecting){
            e.target.classList.add('active');
        }
    });
});

document.querySelectorAll('.reveal').forEach(el=>{
    observer.observe(el);
});
</script>