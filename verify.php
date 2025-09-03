<?php
require("connection.php");

$email = $_GET['email'] ?? '';

if (!$email) {
    $message = "طلب غير صالح ❌";
    $status  = "error";
} else {

    $stmt = $con->prepare("SELECT id, active FROM users WHERE email = ? LIMIT 1");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        $message = "الحساب غير موجود ❌";
        $status  = "error";
    } elseif ($user['active'] == 1) {
        $message = "حسابك مفعل مسبقاً ✅";
        $status  = "info";
    } else {

        $upd = $con->prepare("UPDATE users SET active = 1 WHERE email = ?");
        $upd->execute([$email]);

        $message = "تم تفعيل حسابك بنجاح ✅ سيتم تحويلك لصفحة تسجيل الدخول...";
        $status  = "success";

        $redirect = true;
    }
}
?>
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>تفعيل الحساب</title>
    <style>
        body {
            font-family: Arial, Tahoma, sans-serif;
            background-color: #f9f9f9;
            text-align: center;
            padding-top: 100px;
        }
        .box {
            display: inline-block;
            padding: 30px 40px;
            border-radius: 10px;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,.2);
        }
        .success { color: green; font-size: 20px; }
        .error   { color: red; font-size: 20px; }
        .info    { color: #333; font-size: 20px; }
    </style>
</head>
<body>
    <div class="box">
        <p class="<?= $status ?>"><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>
        <?php if (!isset($status) || $status !== "error"): ?>
            <p>سيتم تحويلك تلقائياً إلى <a href="login.php">صفحة تسجيل الدخول</a> خلال 3 ثوان.</p>
        <?php endif; ?>
    </div>

    <?php if (!empty($redirect)): ?>
    <script>
        setTimeout(function() {
            window.location.href = "login.php";
        }, 3000);
    </script>
    <?php endif; ?>
</body>
</html>
