<?php $page= basename($_SERVER["SCRIPT_FILENAME"], '.php');?>
<header>
    <nav>
        <ul>
            <?php if($page=="home" ): ?>
            <li><a href="home.php" class="active">Home</a></li>
            <?php else: ?>
            <li><a href="home.php">Home</a></li>
            <?php endif; ?>
            <?php if($page=="contact" ): ?>
            <li><a href="contact.php" class="active">Contact</a></li>
            <?php else: ?>
            <li><a href="contact.php">Contact</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>