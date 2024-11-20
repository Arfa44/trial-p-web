<!DOCTYPE html>
 <html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Reservasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Hapus Reservasi</h1>
        <p>Apakah Anda yakin ingin menghapus reservasi dengan ID: <?= $reservation['reservation_id'] ?>?</p>
        <form action="index.php?action=delete&id=<?= $reservation['reservation_id'] ?>" method="POST">
            <button type="submit" class="btn btn-danger">Hapus</button>
            <a href="index.php?action=index" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>