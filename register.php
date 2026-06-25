<?php   
include('header.php'); 
include('config/db.php');

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name  = trim($_POST['full_name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    try {
        $stmt = $conn->prepare("INSERT INTO users (full_name, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $hashedPassword);
        $stmt->execute();

        header("Location: login.php?msg=success");
        exit;

    } catch (Exception $e) {
        $error = "Email already registered!";
    }
}
?>

<style>

/* 🌑 CINEMATIC BACKGROUND */
.signup-section{
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    background:
        radial-gradient(circle at top left, rgba(212,175,55,0.08), transparent 40%),
        radial-gradient(circle at bottom right, rgba(255,255,255,0.05), transparent 50%),
        linear-gradient(180deg, #0f0b0a, #0a0706);
    position:relative;
    overflow:hidden;
}

/* ✨ FLOATING GOLD GLOW */
.signup-section::before{
    content:"";
    position:absolute;
    width:600px;
    height:600px;
    background:rgba(212,175,55,0.1);
    filter:blur(130px);
    top:-120px;
    left:-120px;
    border-radius:50%;
    animation:floatGlow 6s infinite ease-in-out;
}

@keyframes floatGlow{
    0%,100%{ transform:translateY(0px) scale(1); }
    50%{ transform:translateY(40px) scale(1.2); }
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
    transition:0.3s;
}

.form-control:focus{
    border-color:#D4AF37!important;
    box-shadow:0 0 0 0.25rem rgba(212,175,55,0.2)!important;
    transform:scale(1.02);
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

/* 👁️ PASSWORD TOGGLE */
.eye{
    position:absolute;
    right:15px;
    top:50%;
    transform:translateY(-50%);
    cursor:pointer;
    color:#ccc;
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

/* 📱 RESPONSIVE */
@media(max-width:768px){
    .glass-card{ padding:30px; }
}

</style>

<!-- 🌑 SIGNUP -->
<section class="signup-section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-md-5 reveal">

                <div class="glass-card">

                    <div class="text-center mb-4">

                        <h2 class="fw-bold text-white">Join Royal Coffee</h2>
                        <p class="text-muted">Create your premium café identity</p>

                    </div>

                    <?php if($error): ?>
                        <div class="alert alert-danger small rounded-4 border-0">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>

                    <form method="POST">

                        <input type="text" name="full_name" class="form-control mb-3" placeholder="Full Name" required>

                        <input type="email" name="email" class="form-control mb-3" placeholder="Email Address" required>

                        <div class="position-relative mb-3">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
                            <span class="eye" onclick="togglePass()">👁️</span>
                        </div>

                        <button class="btn btn-royal w-100">
                            Become a Member
                        </button>

                    </form>

                    <p class="text-center mt-4 small text-muted">
                        Already a member? <a href="login.php" class="text-gold fw-bold">Login</a>
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<script>

// 👁️ PASSWORD TOGGLE
function togglePass(){
    const pass = document.getElementById("password");
    pass.type = pass.type === "password" ? "text" : "password";
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

</script>

<?php include('footer.php'); ?>