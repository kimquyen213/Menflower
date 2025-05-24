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
    <title>Đăng nhập - MenFlower</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    
    <div class="auth-container">
        <form class="auth-form" method="POST" action="process-login.php">
            <h2>Đăng nhập</h2>
            
            <?php if(isset($_GET['error'])): ?>
            <div class="error-message">
                <?php 
                    switch($_GET['error']) {
                        case 'empty':
                            echo "Vui lòng điền đầy đủ thông tin";
                            break;
                        case 'invalid':
                            echo "Email hoặc mật khẩu không chính xác";
                            break;
                        default:
                            echo "Có lỗi xảy ra, vui lòng thử lại";
                    }
                ?>
            </div>
            <?php endif; ?>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Đăng nhập</button>

            <div class="auth-links">
                <a href="register.php">Chưa có tài khoản? Đăng ký ngay</a>
                <a href="forgot-password.php">Quên mật khẩu?</a>
            </div>
        </form>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>