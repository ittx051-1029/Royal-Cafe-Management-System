<?php 
include('header.php'); 
// In a real app, generate a CSRF token here
$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
?>

<style>
:root {
    --primary-gold: #D4AF37;
    --primary-gold-hover: #B8860B;
    --glass-bg: rgba(255, 255, 255, 0.05);
    --glass-border: rgba(255, 255, 255, 0.12);
    --text-muted: rgba(255, 255, 255, 0.6);
    --transition-standard: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
}

/* 🌟 HERO & BACKGROUND */
.contact-hero {
    background: radial-gradient(circle at top right, #2b1b18, #1a1a1a);
    color: #ffffff;
    padding: 100px 0;
    min-height: 80vh;
}

/* 🧊 REFINED GLASSMORPHISM */
.glass-card {
    background: var(--glass-bg);
    backdrop-filter: blur(15px);
    -webkit-backdrop-filter: blur(15px);
    border-radius: 20px;
    border: 1px solid var(--glass-border);
    transition: var(--transition-standard);
    height: 100%;
}

.glass-card:hover {
    border-color: var(--primary-gold);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
}

/* ✨ FORM CONTROLS */
.form-floating > .form-control {
    background: rgba(0, 0, 0, 0.2);
    border: 1px solid var(--glass-border);
    color: #fff;
    border-radius: 12px;
}

.form-floating > .form-control:focus {
    border-color: var(--primary-gold);
    box-shadow: 0 0 0 0.25 remote rgba(212, 175, 55, 0.25);
    background: rgba(0, 0, 0, 0.4);
}

.form-floating > label {
    color: var(--text-muted);
}

/* 🟡 LUXURY BUTTON */
.btn-gold {
    background: var(--primary-gold);
    color: #000;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    border-radius: 12px;
    padding: 14px;
    transition: var(--transition-standard);
    border: none;
}

.btn-gold:hover {
    background: var(--primary-gold-hover);
    transform: translateY(-2px);
}

/* 🧭 TYPOGRAPHY */
.section-title {
    font-size: clamp(2.5rem, 5vw, 3.5rem);
    font-weight: 900;
    background: linear-gradient(to bottom, #ffffff, #a1a1a1);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
</style>

<section class="contact-hero">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="section-title">Get In Touch</h1>
            <p class="text-muted-custom" style="color: var(--text-muted)">Experience the craft of Royal Coffee. Our team is here to assist you.</p>
        </div>

        <div class="row g-4 justify-content-center">
            
            <!-- 📍 CONTACT INFO -->
            <div class="col-lg-4 col-md-5">
                <div class="glass-card p-4">
                    <div class="d-flex align-items-center mb-4">
                        <div class="icon-box me-3" style="font-size: 2rem;">📍</div>
                        <div>
                            <h5 class="fw-bold mb-0">Our Headquarters</h5>
                            <small style="color: var(--primary-gold)">Royal Coffee Pakistan</small>
                        </div>
                    </div>

                    <div class="contact-details mt-4">
                        <div class="d-flex mb-3">
                            <span class="me-3">📞</span>
                            <span>+92 300 1234567</span>
                        </div>
                        <div class="d-flex mb-3">
                            <span class="me-3">✉</span>
                            <span>maryam@royalcafe.com</span>
                        </div>
                        <div class="d-flex mb-3">
                            <span class="me-3">⏰</span>
                            <span>Mon - Sun: 09:00 - 23:00</span>
                        </div>
                        <div class="d-flex mb-3">
    <span class="me-3">
        <i class="bi bi-whatsapp" style="color:#25D366; font-size:18px;"></i>
    </span>
    <a href="https://wa.me/923001234567" target="_blank" style="color:inherit; text-decoration:none;">
        Chat on WhatsApp
    </a>
</div>
                    </div>

                    <div class="social-links mt-5 pt-4 border-top border-secondary">
                        <p class="small text-uppercase tracking-wider">Follow Our Journey</p>
                        <!-- Add Social Icons Here -->
                    </div>
                </div>
            </div>

            <!-- ✉ INTERACTIVE FORM -->
            <div class="col-lg-6 col-md-7">
                <div class="glass-card p-4 p-lg-5">
                    <form action="process_contact.php" method="POST" id="contactForm">
                        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                        
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control" id="nameInput" placeholder="Full Name" required>
                                    <label for="nameInput">Full Name</label>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control" id="emailInput" placeholder="name@example.com" required>
                                    <label for="emailInput">Email Address</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-4">
                            <textarea name="message" class="form-control" id="messageInput" placeholder="Leave a comment here" style="height: 150px" required></textarea>
                            <label for="messageInput">How can we help you?</label>
                        </div>

                        <button type="submit" class="btn btn-gold w-100 py-3 d-flex align-items-center justify-content-center">
                            <span>Send Inquiry</span>
                            <i class="ms-2">→</i>
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
// Professional Submission Feedback
document.getElementById('contactForm').addEventListener('submit', function() {
    const btn = this.querySelector('.btn-gold');
    btn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span> Sending...';
    btn.style.opacity = '0.7';
    btn.style.pointerEvents = 'none';
});
</script>

<?php include('footer.php'); ?>