<?php
    $n = intval($_GET['n']);
    for ($i = 1; $i <= 15; $i++) {
        echo "$i x $n = " . ($i * $n) . "<br>";
    }
?>