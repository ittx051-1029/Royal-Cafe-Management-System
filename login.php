<?php
session_start();
include('config/db.php');

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT id, name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];

        header("Location: dashboard.php");
        exit;

    } else {
        $error = "Invalid credentials. Please try again.";
    }
}
?>

<?php include('header.php'); ?>

<style>

/* 🌑 CINEMATIC BACKGROUND */
.login-section{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:
        radial-gradient(circle at top left, rgba(212,175,55,0.08), transparent 40%),
        radial-gradient(circle at bottom right, rgba(255,255,255,0.05), transparent 50%),
        linear-gradient(180deg, #0f0b0a, #0a0706);
    overflow:hidden;
    position:relative;
}

/* ✨ FLOATING GLOW */
.login-section::before{
    content:"";
    position:absolute;
    width:600px;
    height:600px;
    background:rgba(212,175,55,0.08);
    filter:blur(120px);
    top:-100px;
    left:-100px;
    border-radius:50%;
}

/* 🧊 GLASS CARD */
.glass-card{
    background:rgba(255,255,255,0.06);
    backdrop-filter:blur(18px);
    -webkit-backdrop-filter:blur(18px);
    border:1px solid rgba(255,255,255,0.12);
    border-radius:28px;
    padding:50px;
    transition:0.4s ease;
    position:relative;
}

.glass-card:hover{
    transform:translateY(-5px);
    border-color:rgba(212,175,55,0.35);
    box-shadow:0 25px 60px rgba(0,0,0,0.6);
}

/* 🏷️ TEXT */
.text-gold{ color:#D4AF37; }

/* 📝 INPUTS */
.form-control{
    background:rgba(0,0,0,0.35)!important;
    border:1px solid rgba(212,175,55,0.25)!important;
    color:#fff!important;
    border-radius:14px!important;
    padding:14px;
}

.form-control:focus{
    border-color:#D4AF37!important;
    box-shadow:0 0 0 0.25rem rgba(212,175,55,0.2)!important;
}

/* 🔘 BUTTON */
.btn-royal{
    background:#D4AF37;
    color:#111;
    font-weight:700;
    border-radius:14px;
    padding:14px;
    transition:0.3s;
}

.btn-royal:hover{
    background:#b8860b;
    transform:translateY(-3px);
}

/* 👁️ REVEAL ANIMATION */
.reveal{
    opacity:0;
    transform:translateY(40px);
    transition:1s ease;
}

.reveal.active{
    opacity:1;
    transform:translateY(0);
}

/* 🔒 PASSWORD TOGGLE */
.eye-btn{
    position:absolute;
    right:15px;
    top:50%;
    transform:translateY(-50%);
    cursor:pointer;
    color:#ccc;
}

/* 📱 MOBILE */
@media(max-width:768px){
    .glass-card{ padding:30px; }
}

</style>

<section class="login-section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-5 reveal">

                <div class="glass-card">

                    <div class="text-center mb-4">

                        <h2 class="fw-bold text-white">Welcome Back</h2>
                        <p class="text-muted">Access your Royal Coffee Lounge</p>

                    </div>

                    <?php if(isset($_GET['msg'])): ?>
                        <div class="alert alert-success small rounded-4 border-0">
                            Registration successful! Please login.
                        </div>
                    <?php endif; ?>

                    <?php if($error): ?>
                        <div class="alert alert-danger small rounded-4 border-0">
                            <?php echo htmlspecialchars($error); ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST" id="loginForm">

                        <input type="email" name="email" class="form-control mb-3" placeholder="Email Address" required>

                        <div class="position-relative mb-3">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                            <span class="eye-btn" onclick="togglePassword()">👁️</span>
                        </div>

                        <button type="submit" class="btn btn-royal w-100" id="loginBtn">
                            Login to Club
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>

<script>

// 👁️ PASSWORD TOGGLE
function togglePassword(){
    const pass = document.getElementById('password');
    pass.type = pass.type === 'password' ? 'text' : 'password';
}

// ✨ SCROLL REVEAL
const observer = new IntersectionObserver(entries=>{
    entries.forEach(e=>{
        if(e.isIntersecting){
            e.target.classList.add('active');
        }
    });
},{threshold:0.2});

document.querySelectorAll('.reveal').forEach(el=>observer.observe(el));

// ⚡ LOADING EFFECT
document.getElementById("loginForm").addEventListener("submit", function(){
    document.getElementById("loginBtn").innerText = "Logging in...";
});

</script>

<?php include('footer.php'); ?>