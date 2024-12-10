<?php
function denseRanking($scores, $gitsScores) {
    // Hapus duplikat skor dan urutkan dari tinggi ke rendah
    $uniqueScores = array_unique($scores);
    rsort($uniqueScores);

    // Hitung peringkat GITS
    $results = [];
    foreach ($gitsScores as $gitsScore) {
        $rank = 1;
        foreach ($uniqueScores as $score) {
            if ($gitsScore >= $score) {
                break;
            }
            $rank++;
        }
        $results[] = $rank;
    }

    return $results;
}

$output = null;
$error = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $playerCount = intval($_POST['playerCount']);
    $scoresInput = trim($_POST['scores']);
    $gameCount = intval($_POST['gameCount']);
    $gitsScoresInput = trim($_POST['gitsScores']);

    // Validasi input
    if ($playerCount > 0 && $gameCount > 0 && !empty($scoresInput) && !empty($gitsScoresInput)) {
        $scores = array_map('intval', explode(' ', $scoresInput));
        $gitsScores = array_map('intval', explode(' ', $gitsScoresInput));

        // Pastikan jumlah skor pemain dan skor GITS sesuai input
        if (count($scores) === $playerCount && count($gitsScores) === $gameCount) {
            $result = denseRanking($scores, $gitsScores);
            $output = implode(' ', $result);
        } else {
            $error = "Jumlah skor pemain atau skor GITS tidak sesuai dengan input jumlah!";
        }
    } else {
        $error = "Harap masukkan semua data dengan benar!";
    }
}

include 'soal2_template.php';
