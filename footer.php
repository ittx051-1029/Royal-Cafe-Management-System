
<footer class="pt-5 mt-5" style="background: var(--clr-espresso); color: white;"> 
<style>
    .join-text{
    font-weight: 900;
    letter-spacing: 2px;
    text-transform: uppercase;

    background: linear-gradient(135deg, #D4AF37, #fff3b0, #b8860b);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;

    position: relative;
}
/* --- UNIVERSAL NEWSLETTER BOX --- */
.global-newsletter-container {
    max-width: 550px; /* Fixed size for consistency across all pages */
    margin: 60px auto;
    padding: 20px;
    text-align: left;
}

.newsletter-title {
    color: var(--primary-gold);
    font-size: 14px;
    font-weight: 800;
    letter-spacing: 4px;
    text-transform: uppercase;
    margin-bottom: 10px;
}

.newsletter-subtitle {
    color: rgba(255, 255, 255, 0.7);
    font-size: 15px;
    margin-bottom: 25px;
}

/* The Pill-Box */
.newsletter-pill {
    background: #1a1716; /* Slightly lighter than pure black for depth */
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 15px;
    display: flex;
    align-items: center;
    padding: 8px;
    position: relative;
    box-shadow: inset 0 2px 10px rgba(0,0,0,0.5);
}

.newsletter-pill input {
    background: transparent;
    border: none;
    padding: 15px 25px;
    color: #fff;
    flex-grow: 1;
    outline: none;
    font-size: 14px;
}

.newsletter-pill input::placeholder {
    color: rgba(255, 255, 255, 0.2); /* Fixed visibility */
}

/* Stylish Gold Button */
.btn-gold-shaded {
    background: #f4f4f4; /* High contrast white-grey base */
    border: none;
    border-radius: 4px;
    padding: 12px 25px;
    display: flex;
    align-items: center;
    cursor: pointer;
    transition: all 0.3s cubic-bezier(0.23, 1, 0.32, 1);
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
}

.btn-gold-shaded span.label {
    color: #000;
    font-weight: 500;
    margin-right: 8px;
}

.btn-gold-shaded span.join-text {
    font-weight: 900;
    letter-spacing: 2px;
    /* Shaded Gold Effect */
    background: linear-gradient(180deg, #D4AF37 0%, #C5A059 50%, #8A6E2F 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.btn-gold-shaded:hover {
    transform: translateY(-2px) scale(1.02);
    background: #ffffff;
    box-shadow: 0 8px 25px rgba(197, 160, 89, 0.2);
}

/* Responsive fix for very small screens */
@media (max-width: 480px) {
    .newsletter-pill { flex-direction: column; border-radius: 20px; }
    .btn-gold-shaded { width: 100%; justify-content: center; margin-top: 10px; }
}
/* Glow effect */
.join-text::after{
    content: "";
    position: absolute;
    left: 0;
    bottom: -3px;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, #D4AF37, transparent);
    animation: shineLine 2s infinite;
}
@keyframes shineLine{
    0%{transform: translateX(-100%);}
    100%{transform: translateX(100%);}
}

</style>
    <div class="container py-5">
        <div class="row g-5">
            <!-- Brand Column -->
            <div class="col-lg-4">
                <a class="navbar-brand text-white fw-bold display-6 mb-3 d-block" href="index.php">
                    <span style="color: var(--clr-gold)">ROYAL</span> COFFEE
                </a>
                <p class="opacity-50 small pe-lg-5">A global legacy of premium roasting. Experience the gold standard of coffee culture across Pakistan.</p>
                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="text-white fs-5 hover-lift"><i class="bi bi-instagram"></i></a>
                    <a href="https://wa.me/92301234567" target="_blank" class="text-white fs-5 hover-lift"><i class="bi bi-whatsapp"></i></a>
                    <a href="#" class="text-white fs-5 hover-lift"><i class="bi bi-telegram"></i></a>
                    <a href="#" class="text-white fs-5 hover-lift"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="text-white fs-5 hover-lift"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="text-white fs-5 hover-lift"><i class="bi bi-youtube"></i></a>
                    <a href="#" class="text-white fs-5 hover-lift"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="text-white fs-5 hover-lift"><i class="bi bi-pinterest"></i></a>
                    <a href="#" class="text-white fs-5 hover-lift"><i class="bi bi-tiktok"></i></a>
                    <a href="#" class="text-white fs-5 hover-lift"><i class="bi bi-snapchat"></i></a>
                    <a href="#" class="text-white fs-5 hover-lift"><i class="bi bi-spotify"></i></a>
                    <a href="#" class="text-white fs-5 hover-lift"><i class="bi bi-github"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-6 col-lg-2">
                <h6 class="fw-bold text-gold mb-4" style="color: var(--clr-gold)">THE MENU</h6>
                <ul class="list-unstyled opacity-75 small d-grid gap-2">
                    <li><a href="menu.php" class="text-white text-decoration-none">Main Menu</a></li>
                    <li><a href="campus-special.php" class="text-white text-decoration-none">Cafe Items</a></li>
                    <li><a href="history.php" class="text-white text-decoration-none">Vision</a></li>
                </ul>
            </div>

            <!-- Company -->
            <div class="col-6 col-lg-2">
                <h6 class="fw-bold text-gold mb-4" style="color: var(--clr-gold)">OUR STORY</h6>
                <ul class="list-unstyled opacity-75 small d-grid gap-2">
                    <li><a href="history.php" class="text-white text-decoration-none">Heritage</a></li>
                    <li> <a href="offers.php" class="text-white text-decoration-none">Offers & Deals</a></li>
                    <li><a href="roastery.php" class="text-white text-decoration-none">The Roastery</a></li>
                    <li><a href="sustainability.php" class="text-white text-decoration-none">Sustainability</a></li>
                    <li><a href="contact.php" class="text-white text-decoration-none">Contact Us</a></li>
                    <li><a href="feedback.php" class="text-white text-decoration-none">Feedback</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="col-lg-4">
                <h6 class="fw-bold text-gold mb-4" style="color: var(--clr-gold)">NEWSLETTER</h6>
                <p class="small opacity-50 mb-4">Join the Royal Cafe for exclusive invites and cafe tips.</p>
                <div class="input-group glass-card overflow-hidden border-0" style="background: rgba(255,255,255,0.1)">
                    <input type="email" class="form-control bg-transparent border-0 text-white p-3" placeholder="Email address">
                    <button class="btn-newsletter">Newsletter <span class="join-text">Join</span></button>
                </div>
            </div>
        </div>
    </div>
    
    <div class="py-4 text-center border-top border-white border-opacity-10 opacity-50 small">
        <p class="mb-0">&copy; 2026 Royal Cafe. All rights reserved.</p>
    </div>
</footer>

<!-- 🔔 TOAST NOTIFICATION (ADDED) -->
<div id="toast-container" class="position-fixed bottom-0 end-0 p-3" style="z-index: 1100">
    <div id="liveToast" class="glass-card p-3 d-none animate__animated animate__fadeInUp" style="min-width: 250px;">
        <div class="d-flex align-items-center gap-3">
            <i class="bi bi-check2-circle text-success fs-4"></i>
            <div>
                <h6 class="mb-0 fw-bold">Added to Collection</h6>
                <small class="text-muted">Item ready in your cart.</small>
            </div>
        </div>
    </div>
</div>

<!-- 🚀 GLOBAL SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
// 1. GLOBAL VISUAL ENGINE
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('active');
        }
    });
}, { threshold: 0.1 });

document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

// 2. DARK MODE PERSISTENCE
const themeToggle = document.getElementById('dark-mode-toggle');
const body = document.body;
const icon = document.getElementById('mode-icon');

if (localStorage.getItem('theme') === 'dark') {
    body.classList.add('dark-mode');
    icon.classList.replace('bi-moon-stars-fill', 'bi-sun-fill');
}

themeToggle.addEventListener('click', () => {
    body.classList.toggle('dark-mode');
    const isDark = body.classList.contains('dark-mode');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
    
    if(isDark) {
        icon.classList.replace('bi-moon-stars-fill', 'bi-sun-fill');
    } else {
        icon.classList.replace('bi-sun-fill', 'bi-moon-stars-fill');
    }
});

// 3. NAVBAR SCROLL EFFECT
window.addEventListener('scroll', () => {
    const nav = document.querySelector('.navbar');
    if (window.scrollY > 50) {
        nav.classList.add('scrolled');
    } else {
        nav.classList.remove('scrolled');
    }
});

// 4. AI CONCIERGE LOGIC
const royalMenu = [
    { name: "Flat White", price: 550, tags: ["velvety","creamy","rich","coffee"], img: "flat-white.png" },
    { name: "Matcha Latte", price: 590, tags: ["matcha","green","earthy"], img: "matcha-latte.png" },
    { name: "Tiramisu", price: 590, tags: ["dessert","sweet","italian"], img: "tiramisu.png.png" },
    { name: "Chocolate Cake", price: 450, tags: ["cake","chocolate","sweet"], img: "cake.png" }
];

function handleAIQuery() {
    const input = document.getElementById('aiInput').value.toLowerCase();
    const resultArea = document.getElementById('aiResults');
    
    const intents = {
        tired: ["flat white", "espresso", "americano"],
        sweet: ["chocolate cake", "tiramisu", "spanish latte"],
        hot: ["iced latte", "cold brew", "frappe"],
        healthy: ["matcha latte", "granola bar"]
    };

    let matchedIntent = null;
    for (let key in intents) {
        if (input.includes(key)) matchedIntent = intents[key];
    }

    const recommendation = royalMenu.find(item => {
        if (matchedIntent) return matchedIntent.includes(item.name.toLowerCase());
        return item.tags.some(tag => input.includes(tag));
    });

    if (recommendation) {
        resultArea.innerHTML = `
            <div class="glass-card p-3 mt-3 animate__animated animate__fadeInUp border-gold">
                <p class="small fw-bold text-gold mb-2">THE BARISTA RECOMMENDS:</p>
                <div class="row align-items-center g-3">
                    <div class="col-4"><img src="images/${recommendation.img}" class="img-fluid rounded-3"></div>
                    <div class="col-8">
                        <h6 class="fw-bold mb-1">${recommendation.name}</h6>
                        <p class="x-small text-muted mb-2">Perfect for your current mood.</p>
                        <button onclick="addToCartSync('${recommendation.name}', ${recommendation.price}, '${recommendation.img}')" class="btn btn-royal btn-sm py-1">Add to Cart</button>
                    </div>
                </div>
            </div>
        `;
    } else {
        resultArea.innerHTML = `<p class="small text-muted text-center mt-3">"I recommend trying 'Strong' or 'Something Sweet'!"</p>`;
    }
}
</script>
<script>
setInterval(() => {
    let s = document.getElementById('seconds');
    let m = document.getElementById('minutes');

    let sec = parseInt(s.innerText);

    if(sec > 0){
        s.innerText = (sec - 1).toString().padStart(2,'0');
    } else {
        let min = parseInt(m.innerText);
        if(min > 0){
            m.innerText = (min - 1).toString().padStart(2,'0');
            s.innerText = "59";
        }
    }
}, 1000);
</script>

<script>
window.addEventListener('scroll', () => {
    document.querySelectorAll('.reveal').forEach(el => {
        if (el.getBoundingClientRect().top < window.innerHeight - 100) {
            el.classList.add('active');
        }
    });
});
</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</body>
</html>