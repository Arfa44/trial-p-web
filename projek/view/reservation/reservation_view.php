<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Reservasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Reservasi</h1>
        <a href="index.php?action=create" class="btn btn-success mb-3">Buat Reservasi Baru</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID Reservasi</th>
                    <th>ID Pengguna</th>
                    <th>ID Destinasi</th>
                    <th>Tanggal Reservasi</th>
                    <th>Status Pembayaran</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservations as $reservation): ?>
                    <tr>
                        <td><?= $reservation['reservation_id'] ?></td>
                        <td><?= $reservation['user_id'] ?></td>
                        <td><?= $reservation['destination_id'] ?></td>
                        <td><?= $reservation['tgl_reservasi'] ?></td>
                        <td><?= $reservation['status_pembayaran'] ?></td>
                        <td>
                            <a href="index.php?action=update&id=<?= $reservation['reservation_id'] ?>" class="btn btn-warning">Edit</a>
                            <a href="index.php?action=delete&id=<?= $reservation['reservation_id'] ?>" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>