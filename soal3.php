<?php
function isBalancedBrackets($input) {
    // Peta pasangan tanda kurung
    $brackets = [
        ')' => '(',
        '}' => '{',
        ']' => '[',
    ];

    // Stack untuk menyimpan tanda kurung pembuka
    $stack = [];

    // Iterasi karakter dalam string
    for ($i = 0; $i < strlen($input); $i++) {
        $char = $input[$i];
        if (in_array($char, ['(', '{', '['])) {
            // Tanda kurung pembuka
            array_push($stack, $char);
        } elseif (in_array($char, [')', '}', ']'])) {
            // Tanda kurung penutup
            if (empty($stack) || array_pop($stack) !== $brackets[$char]) {
                return "NO";
            }
        }
    }

    // Jika stack kosong, tanda kurung seimbang
    return empty($stack) ? "YES" : "NO";
}

$output = null;
$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bracketsInput = trim($_POST['brackets']);

    // Validasi input
    if (!empty($bracketsInput)) {
        $output = isBalancedBrackets($bracketsInput);
    } else {
        $error = "Harap masukkan string tanda kurung!";
    }
}

include 'soal3_template.php';
