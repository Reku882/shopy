<?php
    include 'server.php';

    $username = $_GET['username'];
    $password = $_GET['password'];
    $email = $_GET['email'];

    $login_query = "SELECT * FROM user WHERE `username` = '$username' AND `password` = '$password' AND `email` = '$email'";
    $login_result = mysqli_query($conn, $login_query);

    while ($user = mysqli_fetch_assoc($login_result)) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['password'] = $user['password'];
        $_SESSION['email'] = $user['email'];
    }

    if (mysqli_num_rows($login_result)) {
        echo "<script>alert('ยินดีต้อนรับเข้าสู่ระบบ'); window.location = 'index.php'</script>";
    } else {
        echo "<script>alert('ชื่อบัญชีหรือรหัสผ่านผิด กรุณาลองใหม่อีกครั้ง'); window.location = 'login.php'</script>";
    }
?>

