<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Reservasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Edit Reservasi</h1>
        <form action="index.php?action=update&id=<?= $reservation['reservation_id'] ?>" method="POST">
            <div class="form-group">
                <label>ID Pengguna</label>
                <input type="number" name="user_id" class="form-control" value="<?= $reservation['user_id'] ?>" required>
            </div>
            <div class="form-group">
                <label>ID Destinasi</label>
                <input type="number" name="destination_id" class="form-control" value="<?= $reservation['destination_id'] ?>" required>
            </div>
            <div class="form-group">
                <label>Tanggal Reservasi</label>
                <input type="date" name="tgl_reservasi" class="form-control" value="<?= $reservation['tgl_reservasi'] ?>" required>
            </div>
            <div class="form-group">
                <label>Status Pembayaran</label>
                <select name="status_pembayaran" class="form-control">
                    <option value="Pending" <?= $reservation['status_pembayaran'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
                    <option value="Lunas" <?= $reservation['status_pembayaran'] == 'Lunas' ? 'selected' : '' ?>>Lunas</option>
                    <option value="Dibatalkan" <?= $reservation['status_pembayaran'] == 'Dibatalkan' ? 'selected' : '' ?>>Dibatalkan</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php?action=index" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>