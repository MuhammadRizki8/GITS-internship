<?php
function A000124($n) {
    $result = [];
    for ($i = 0; $i < $n; $i++) {
        $result[] = (int)(($i * $i + $i + 2) / 2);
    }
    return $result;
}

$output = null;
$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $length = intval($_POST['length']);
    if ($length > 0) {
        $sequence = A000124($length);
        $output = implode("-", $sequence);
    } else {
        $error = "Masukkan angka positif!";
    }
}

include 'soal1_template.php';
