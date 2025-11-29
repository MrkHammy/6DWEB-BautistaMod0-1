<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hamster Store - Expressions & Operators</title>
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
            <h2 class="section-title">🛒 Shopping Cart 🛒</h2>
            
            <?php
                $items = "Hamster wheel, Hamster food, Chew toy, Water bottle, Bedding";
                $stock = 5;
                $wanted = 3;
                $canBuy = $stock - $wanted;
            ?>
            
            <div class="info-item">
                📦 <strong>Item:</strong> <?php echo $items; ?>
            </div>
            
            <div class="info-item">
                📊 <strong>Stock:</strong> <?php echo $stock; ?>
            </div>
            
            <div class="info-item">
                💭 <strong>Wanted:</strong> <?php echo $wanted; ?>
            </div>
            
            <div class="info-item">
                📦 <strong>Can buy:</strong> <?php echo $canBuy; ?>
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
