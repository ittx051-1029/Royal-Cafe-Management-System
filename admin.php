<?php 
include('header.php'); 
include('config/db.php');

// Simple protection (Update this for real user auth)
$orders = $conn->query("SELECT * FROM orders ORDER BY id DESC");
?>

<main class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-5 reveal active">
        <h2 class="fw-bold text-maroon">Command Center</h2>
        <div class="glass-card px-4 py-2 small fw-bold text-gold">ADMINISTRATOR ACCESS</div>
    </div>

    <div class="row g-4">
        <!-- 📊 QUICK STATS -->
        <div class="col-md-4 reveal">
            <div class="glass-card p-4 text-center">
                <h6 class="text-muted small fw-bold mb-2">TOTAL ORDERS</h6>
                <h2 class="fw-bold text-gold mb-0"><?php echo $orders->num_rows; ?></h2>
            </div>
        </div>
        
        <!-- 🧾 RECENT ORDERS TABLE -->
        <div class="col-12 reveal">
            <div class="glass-card p-0 overflow-hidden shadow-lg">
                <div class="p-4 border-bottom bg-light">
                    <h5 class="mb-0 fw-bold">Recent Transactions</h5>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="bg-light small fw-bold opacity-75">
                            <tr>
                                <th class="ps-4">ID</th>
                                <th>CUSTOMER</th>
                                <th>ADDRESS</th>
                                <th>TOTAL</th>
                                <th class="text-end pe-4">STATUS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = $orders->fetch_assoc()): ?>
                            <tr>
                                <td class="ps-4 small fw-bold">#RC-<?php echo $row['id']; ?></td>
                                <td>
                                    <div class="fw-bold"><?php echo $row['name']; ?></div>
                                    <div class="small text-muted"><?php echo $row['phone']; ?></div>
                                </td>
                                <td class="small text-muted"><?php echo $row['address']; ?></td>
                                <td class="fw-bold text-gold">Rs. <?php echo $row['total']; ?></td>
                                <td class="text-end pe-4">
                                    <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 rounded-pill">Completed</span>
                                </td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include('footer.php'); ?>