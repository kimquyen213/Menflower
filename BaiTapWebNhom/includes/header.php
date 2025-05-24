<?php
// Update in your header.php or where your account links are
<div class="account">
    <?php if(isset($_SESSION['user_id'])): ?>
        <a href="profile.php">👤 <?php echo htmlspecialchars($_SESSION['user_name']); ?></a> |
        <a href="logout.php">Đăng xuất</a>
    <?php else: ?>
        <a href="login.php">Đăng nhập</a> |
        <a href="register.php">Đăng ký</a>
    <?php endif; ?>
</div>