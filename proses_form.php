<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $pesan = htmlspecialchars($_POST["pesan"]);

    $valid = true;
    $errorMsg = "";

    if (empty($nama) || empty($email) || empty($pesan)) {
        $valid = false;
        $errorMsg = "Semua field wajib diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $valid = false;
        $errorMsg = "Email tidak valid.";
    } 

} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan Terkirim</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
</head>
<body class="thanks-page">
    <div class="thanks-container">
        <?php if ($valid): ?>
            <h2>🎉 Terima kasih, <?= $nama; ?>! 🎉</h2>
            <p><strong>Email:</strong> <?= $email; ?></p>
            <p><strong>Pesan:</strong> <?= nl2br($pesan); ?></p>
        <?php else: ?>
            <h2>❗ Terjadi Kesalahan</h2>
            <p><?= $errorMsg; ?></p>
        <?php endif; ?>
        <a href="index.php#kontak" class="back-link">← Kembali ke Profil</a>
    </div>
</body>
</html>