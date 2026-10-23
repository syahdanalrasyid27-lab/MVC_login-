<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<h2>Dashboard</h2>
<p>Login berhasil. Selamat datang, 
   <strong><?= htmlspecialchars($_SESSION['user']['email']) ?></strong>!
</p>