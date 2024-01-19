<?php 
        $targetDate = mktime(0, 0, 0, 1, 1, 2024);
        $today = time();
        $beda = ($targetDate-$today);
        $days = (int) ($beda/86400);
    ?>