<?php if (session_status() === PHP_SESSION_NONE) { session_start(); } ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Royal Cafe</title>

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>

/* =====================
   ROOT THEME
===================== */
:root{
    --bg:#0b0908;
    --card:#16110f;
    --text:#ffffff;
    --gold:#D4AF37;
}

/* LIGHT MODE */
body.light-mode{
    --bg:#f5f5f5;
    --card:#ffffff;
    --text:#111;
}

/* GLOBAL */
body{
    background:var(--bg);
    color:var(--text);
    font-family:'Inter',sans-serif;
    transition:0.4s ease;
}

/* =====================
   NAVBAR
===================== */
.navbar{
    background:rgba(10,8,7,0.8);
    backdrop-filter:blur(15px);
    border-bottom:1px solid rgba(255,255,255,0.08);
}

body.light-mode .navbar{
    background:#ffffff;
}

.navbar-brand{
    font-weight:700;
    color:var(--gold) !important;
    letter-spacing:1px;
}

.nav-link{
    color:var(--text) !important;
    margin:0 10px;
    transition:0.3s;
}

.nav-link:hover{
    color:var(--gold) !important;
}

/* =====================
   TOGGLE SWITCH
===================== */
.theme-switch{
    position:relative;
    width:65px;
    height:32px;
    display:inline-block;
}

.theme-switch input{display:none;}

.slider{
    position:absolute;
    inset:0;
    cursor:pointer;
    background:rgba(255,255,255,0.08);
    border:1px solid rgba(255,255,255,0.15);
    border-radius:50px;
    backdrop-filter:blur(10px);
}

.slider::before{
    content:"";
    position:absolute;
    height:24px;
    width:24px;
    left:4px;
    top:50%;
    transform:translateY(-50%);
    background:linear-gradient(135deg,var(--gold),#8a6e2f);
    border-radius:50%;
    transition:0.4s;
}

/* icons */
.moon,.sun{
    position:absolute;
    top:50%;
    transform:translateY(-50%);
    font-size:12px;
    color:#fff;
}

.moon{left:9px;}
.sun{right:9px;opacity:0.3;}

.theme-switch input:checked + .slider::before{
    transform:translate(32px,-50%);
}

.theme-switch input:checked + .slider .sun{opacity:1;}
.theme-switch input:checked + .slider .moon{opacity:0.3}

/* =====================
   GLOW TRAIL
===================== */
.glow-dot{
    position:fixed;
    width:8px;
    height:8px;
    border-radius:50%;
    background:var(--gold);
    box-shadow:0 0 15px var(--gold);
    pointer-events:none;
    transform:translate(-50%,-50%);
    animation:fade 0.6s forwards;
    z-index:9999;
}

@keyframes fade{
    to{opacity:0; transform:scale(3);}
}

</style>
</head>

<body>

<!-- =====================
     NAVBAR START
===================== -->
<nav class="navbar navbar-expand-lg fixed-top">
<div class="container">

    <a class="navbar-brand" href="index.php">
         Royal Cafe
    </a>

    <button class="navbar-toggler text-white" data-bs-toggle="collapse" data-bs-target="#nav">
        <i class="bi bi-list"></i>
    </button>

    <div class="collapse navbar-collapse" id="nav">

        <ul class="navbar-nav ms-auto align-items-center">

            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
            <li class="nav-item"><a class="nav-link" href="campus-special.php">Campus Special</a></li>
            <li class="nav-item"><a class="nav-link" href="offers.php">Offers</a></li>
            <li class="nav-item"><a class="nav-link" href="story.php">Our Story</a></li>
            <li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
            <li class="nav-item"><a class="nav-link" href="locations.php">Locations</a></li>

             <!-- CART -->
             <li class="nav-item">
                <a class="nav-link position-relative" href="cart.php">
                    <i class="bi bi-cart-fill"></i>
                    <?php if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0): ?>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            <?= count($_SESSION['cart']) ?>
                        </span>
                    </a>
                </li>
                    <?php endif; ?>

            <!-- LOGIN -->
            <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
            </li>

            <!-- DARK/LIGHT TOGGLE -->
            <li class="nav-item ms-3">
                <label class="theme-switch">
                    <input type="checkbox" id="themeToggle">
                    <span class="slider">
                        <i class="bi bi-moon-fill moon"></i>
                        <i class="bi bi-sun-fill sun"></i>
                    </span>
                </label>
            </li>

        </ul>

    </div>

</div>
</nav>

<!-- spacing -->
<div style="height:80px;"></div>

<!-- =====================
     JS
===================== -->
<script>

const toggle = document.getElementById("themeToggle");
const body = document.body;

/* SYSTEM THEME */
function systemTheme(){
    return window.matchMedia("(prefers-color-scheme: light)").matches;
}

/* APPLY THEME */
function applyTheme(mode){
    if(mode === "light"){
        body.classList.add("light-mode");
        toggle.checked = true;
    }else{
        body.classList.remove("light-mode");
        toggle.checked = false;
    }
}

/* LOAD */
let saved = localStorage.getItem("theme");

if(saved){
    applyTheme(saved);
}else{
    applyTheme(systemTheme() ? "light" : "dark");
}

/* TOGGLE */
toggle.addEventListener("change",function(){
    if(this.checked){
        applyTheme("light");
        localStorage.setItem("theme","light");
    }else{
        applyTheme("dark");
        localStorage.setItem("theme","dark");
    }
});

/* AUTO SYSTEM CHANGE */
window.matchMedia("(prefers-color-scheme: light)")
.addEventListener("change", e=>{
    if(!localStorage.getItem("theme")){
        applyTheme(e.matches ? "light" : "dark");
    }
});

/* GLOW TRAIL */
document.addEventListener("mousemove",function(e){

    const dot = document.createElement("div");
    dot.className = "glow-dot";
    dot.style.left = e.clientX + "px";
    dot.style.top = e.clientY + "px";

    document.body.appendChild(dot);

    setTimeout(()=>dot.remove(),600);

});

</script>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>