<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hamster Store - Shorthand Echo</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <!-- Store Header -->
        <div class="store-header">
            <h1>✨🐹 The Hamster Store 🐹✨</h1>
        </div>

        <!-- Main Content -->
        <div class="content-box">
            <h2 class="section-title welcome-title">← Welcome Iviana!</h2>
            
            <?php
                $favoriteHamster = "Dwarf Hamster";
            ?>
            
            <div class="info-item">
                🐹 Your favorite type of hamster is: <span class="highlight"><?= $favoriteHamster ?></span>.
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <div class="footer-title">Created by: BAUTISTA, MARK ANTHONY A.</div>
            <div class="footer-info">Date: November 13, 2025 | Course: CYB-201 - 6DWEB</div>
        </div>
    </div>
</body>
</html>
