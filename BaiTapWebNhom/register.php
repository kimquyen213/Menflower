<?php
session_start();
if(isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký - MenFlower</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div class="auth-container">
        <form class="auth-form" method="POST" action="process-register.php">
            <h2>Đăng ký tài khoản</h2>
            
            <?php if(isset($_GET['error'])): ?>
            <div class="error-message">
                <?php 
                    switch($_GET['error']) {
                        case 'empty':
                            echo "Vui lòng điền đầy đủ thông tin";
                            break;
                        case 'email':
                            echo "Email đã được sử dụng";
                            break;
                        case 'password':
                            echo "Mật khẩu không khớp";
                            break;
                        default:
                            echo "Có lỗi xảy ra, vui lòng thử lại";
                    }
                ?>
            </div>
            <?php endif; ?>

            <div class="form-group">
                <label for="name">Họ tên:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-group">
                <label for="confirm_password">Xác nhận mật khẩu:</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <button type="submit">Đăng ký</button>

            <div class="auth-links">
                <a href="login.php">Đã có tài khoản? Đăng nhập ngay</a>
            </div>
        </form>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>