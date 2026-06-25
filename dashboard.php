<?php 
include('header.php'); 
include('config/db.php');

if(!isset($_SESSION['user_id'])) { header("Location: login.php"); exit; }

$u_id = $_SESSION['user_id'];
$orders = $conn->query("SELECT * FROM orders WHERE user_id = $u_id ORDER BY id DESC");
?>

<main class="container py-5">
    <div class="row g-4 align-items-start">
        <!-- 👤 PROFILE CARD -->
        <div class="col-lg-4">
            <div class="glass-card p-4 text-center reveal active">
                <div class="bg-gold rounded-circle mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px; background: var(--clr-gold)">
                    <span class="fs-2 fw-bold text-white"><?php echo strtoupper(substr($_SESSION['user_name'], 0, 1)); ?></span>
                </div>
                <h4 class="fw-bold"><?php echo $_SESSION['user_name']; ?></h4>
                <p class="small text-muted mb-4">Royal Gold Member</p>
                <hr class="opacity-10">
                <a href="logout.php" class="btn btn-outline-danger btn-sm rounded-pill px-4 mt-2">Logout</a>
            </div>
        </div>

        <!-- 🧾 HISTORY SECTION -->
        <div class="col-lg-8">
            <div class="glass-card p-4 reveal active">
                <h5 class="fw-bold mb-4">Your Brew History</h5>
                
                <?php if($orders->num_rows > 0): ?>
                    <div class="table-responsive">
                        <table class="table table-hover align-middle border-0">
                            <thead class="small text-muted opacity-75">
                                <tr>
                                    <th>ID</th>
                                    <th>DATE</th>
                                    <th>TOTAL</th>
                                    <th class="text-end">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($row = $orders->fetch_assoc()): ?>
                                <tr>
                                    <td class="fw-bold">#RC-<?php echo $row['id']; ?></td>
                                    <td class="small"><?php echo date('M d, Y', strtotime($row['created_at'])); ?></td>
                                    <td class="fw-bold text-gold">Rs. <?php echo $row['total']; ?></td>
                                    <td class="text-end">
                                        <button class="btn btn-light btn-sm rounded-pill">Reorder</button>
                                    </td>
                                </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else: ?>
                    <p class="text-center py-4 text-muted">You haven't ordered your first Royal cup yet!</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>