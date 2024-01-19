<?php 
        $targetDate = mktime(0, 0, 0, 12, 31, 2024);
        $today = time();
        $beda = ($targetDate-$today);
        $days = (int) ($beda/86400);
    ?>