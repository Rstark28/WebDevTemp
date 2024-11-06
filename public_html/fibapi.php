<?php
    header('Content-Type: application/json');

    function getFib($n) {
        if ($n <= 0) {
            return [];
        }
        if ($n == 1) {
            return [0];
        }
        if ($n == 2) {
            return [0, 1];
        }

        $fib = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $fib[] = $fib[$i - 1] + $fib[$i - 2];
        }
        return $fib;
    }

    $n = intval($_GET['n']);
    echo json_encode(['data' => getFib($n)]);
?>