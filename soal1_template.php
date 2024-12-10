<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A000124 Sequence Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3 class="card-title">A000124 Sequence Generator</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="soal1.php">
                    <div class="mb-3">
                        <label for="length" class="form-label">Masukkan Panjang Deret</label>
                        <input type="number" class="form-control" id="length" name="length" min="1" required>
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
        <a href="index.php" class="btn btn-secondary mt-3">Kembali</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
