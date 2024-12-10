<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dense Ranking Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">Dense Ranking Generator</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="index.php">
                    <div class="mb-3">
                        <label for="playerCount" class="form-label">Jumlah Pemain</label>
                        <input type="number" class="form-control" id="playerCount" name="playerCount" min="1" required>
                    </div>
                    <div class="mb-3">
                        <label for="scores" class="form-label">Skor Pemain (pisahkan dengan spasi)</label>
                        <input type="text" class="form-control" id="scores" name="scores" required>
                    </div>
                    <div class="mb-3">
                        <label for="gameCount" class="form-label">Jumlah Permainan</label>
                        <input type="number" class="form-control" id="gameCount" name="gameCount" min="1" required>
                    </div>
                    <div class="mb-3">
                        <label for="gitsScores" class="form-label">Skor GITS (pisahkan dengan spasi)</label>
                        <input type="text" class="form-control" id="gitsScores" name="gitsScores" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Generate</button>
                </form>
                <?php if (isset($output)): ?>
                    <div class="mt-3">
                        <h5>Output:</h5>
                        <p class='alert alert-success'><?= $output ?></p>
                    </div>
                <?php elseif (isset($error)): ?>
                    <div class="mt-3">
                        <p class='alert alert-danger'><?= $error ?></p>
                    </div>
                <?php endif; ?>
            </div>
        </div>
        <a href="../index.php" class="btn btn-secondary mt-3">Kembali</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
