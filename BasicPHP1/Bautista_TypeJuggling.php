<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Hamster Store - Type Juggling</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <!-- Store Header -->
        <div class="store-header">
            <h1>✨ 🐹 The Hamster Store 🐹 ✨</h1>
        </div>

        <!-- Main Content -->
        <div class="content-box">
            <h2 class="section-title">🎯 How many hamsters are in the store?</h2>
            
            <?php
                $hamsterCountString = "5xydJoz";
                $hamsterCountInteger = (int)$hamsterCountString;
            ?>
            
            <div class="info-item">
                🔸 You entered: <span class="highlight">"<?php echo $hamsterCountString; ?>"</span> 
                <span class="type-label">(string)</span>
            </div>
            
            <div class="info-item">
                🔸 Converted: <span class="highlight"><?php echo $hamsterCountInteger; ?></span> 
                <span class="type-label">(integer)</span>
            </div>
            
            <div class="info-item">
                🔸 <span class="success">We now have <?php echo $hamsterCountInteger; ?> hamsters in the store!</span>
            </div>

            <h2 class="section-title">🎯 What is the price per hamster?</h2>
            
            <?php
                $priceDouble = 15.99;
                $priceInteger = (int)$priceDouble;
            ?>
            
            <div class="info-item">
                🔸 Price entered: <span class="highlight">$<?php echo $priceDouble; ?></span> 
                <span class="type-label">(double)</span>
            </div>
            
            <div class="info-item">
                🔸 Rounded price: <span class="highlight">$<?php echo $priceInteger; ?></span> 
                <span class="type-label">(integer)</span>
            </div>
            
            <div class="info-item">
                🔸 <span class="success">Sale price: $<?php echo $priceInteger; ?> per hamster!</span>
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
