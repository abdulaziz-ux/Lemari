<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM laptop WHERE id='$id'"));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2>✏️ Edit Data Laptop</h2>
        <form action="update.php" method="POST">
            <input type="hidden" name="id" value="<?= $data['id']; ?>">
            <div class="mb-3">
                <label>SN</label>
                <input type="text" name="SN" class="form-control" value="<?= $data['SN']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Merk</label>
                <input type="text" name="merk" class="form-control" value="<?= $data['merk']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Computer Name</label>
                <input type="text" name="computer_name" class="form-control" value="<?= $data['computer_name']; ?>">
            </div>
            <div class="mb-3">
                <label>Ex</label>
                <input type="text" name="ex" class="form-control" value="<?= $data['ex']; ?>">
            </div>
            <div class="mb-3">
                <label>Status</label>
                <select name="status" class="form-select">
                    <option value="">-</option>
                    <option <?= $data['status'] == 'disimpan' ? 'selected' : '' ?>>Disimpan</option>
                    <option <?= $data['status'] == 'keluar' ? 'selected' : '' ?>>Keluar</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Kondisi</label>
                <select name="kondisi" class="form-select">
                    <option value="">-</option>
                    <option <?= $data['kondisi'] == 'rusak' ? 'selected' : '' ?>>Rusak</option>
                    <option <?= $data['kondisi'] == 'baru' ? 'selected' : '' ?>>Baru</option>
                    <option <?= $data['kondisi'] == 'ok' ? 'selected' : '' ?>>Ok</option>
                    <option <?= $data['kondisi'] == 'kurang_baik' ? 'selected' : '' ?>>Kurang_baik</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Tanggal Masuk</label>
                <input type="date" name="tanggal_masuk" class="form-control" value="<?= $data['tanggal_masuk']; ?>">
            </div>
            <div class="mb-3">
                <label>Tanggal Keluar</label>
                <input type="date" name="tanggal_keluar" class="form-control" value="<?= $data['tanggal_keluar']; ?>">
            </div>

            <div class="mb-3">
                <label>dipakai</label>
                <input type="text" name="dipakai" class="form-control" value="<?= $data['dipakai']; ?>">
            </div>

            <div class="mb-3">
                <label>Keterangan</label>
                <textarea name="keterangan" class="form-control"><?= $data['keterangan']; ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="index.php" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</body>

</html>