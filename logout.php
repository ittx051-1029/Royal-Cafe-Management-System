<?php
session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Logging Out...</title>

<style>

/* 🌑 CINEMATIC BACKGROUND */
body{
    margin:0;
    height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:
        radial-gradient(circle at top, rgba(212,175,55,0.08), transparent 40%),
        linear-gradient(180deg, #0f0b0a, #0a0706);
    font-family:Arial, sans-serif;
    overflow:hidden;
    color:#fff;
}

/* ✨ FLOAT GLOW */
.glow{
    position:absolute;
    width:500px;
    height:500px;
    background:rgba(212,175,55,0.1);
    filter:blur(120px);
    border-radius:50%;
    animation:pulse 3s infinite ease-in-out;
}

/* 🧊 LOGOUT CARD */
.card{
    text-align:center;
    padding:40px;
    background:rgba(255,255,255,0.06);
    border:1px solid rgba(255,255,255,0.12);
    border-radius:25px;
    backdrop-filter:blur(15px);
    z-index:2;
    width:320px;
    animation:fadeIn 1s ease;
}

/* ☕ ICON */
.icon{
    font-size:50px;
    margin-bottom:10px;
    animation:spin 2s linear infinite;
}

/* TEXT */
h2{
    margin:10px 0;
    color:#D4AF37;
}

p{
    font-size:14px;
    opacity:0.7;
}

/* ⏳ LOADER */
.loader{
    margin:20px auto;
    width:40px;
    height:40px;
    border:3px solid rgba(255,255,255,0.2);
    border-top:3px solid #D4AF37;
    border-radius:50%;
    animation:rotate 1s linear infinite;
}

/* ANIMATIONS */
@keyframes rotate{
    100%{ transform:rotate(360deg); }
}

@keyframes fadeIn{
    from{ opacity:0; transform:translateY(20px); }
    to{ opacity:1; transform:translateY(0); }
}

@keyframes pulse{
    0%,100%{ transform:scale(1); opacity:0.4; }
    50%{ transform:scale(1.3); opacity:0.7; }
}

@keyframes spin{
    100%{ transform:rotate(360deg); }
}

</style>

</head>

<body>

<div class="glow"></div>

<div class="card">

    <div class="icon">☕</div>

    <h2>Logging You Out</h2>
    <p>Securing your Royal Coffee session...</p>

    <div class="loader"></div>

    <p style="font-size:12px; margin-top:10px;">
        Redirecting to homepage...
    </p>

</div>

<script>

// 🚀 AUTO REDIRECT (smooth UX delay)
setTimeout(()=>{
    window.location.href = "index.php";
}, 2500);

</script>

</body>
</html>