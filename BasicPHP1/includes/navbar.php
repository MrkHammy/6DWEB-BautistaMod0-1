<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<nav>
    <span class="nav-brand">🐹 The Hamster Store</span>
    <a href="Bautista_VariablesArrays.php" class="<?= $current_page == 'Bautista_VariablesArrays.php' ? 'active' : '' ?>">Multi-Array & Do-While</a>
    <a href="Bautista_ExpressionsOperators.php" class="<?= $current_page == 'Bautista_ExpressionsOperators.php' ? 'active' : '' ?>">Operators & If-While</a>
    <a href="Bautista_TypeJuggling.php" class="<?= $current_page == 'Bautista_TypeJuggling.php' ? 'active' : '' ?>">Type Juggling & Match</a>
    <a href="Bautista_ShortHandForEcho.php" class="<?= $current_page == 'Bautista_ShortHandForEcho.php' ? 'active' : '' ?>">Shorthand & If-Else</a>
</nav>
