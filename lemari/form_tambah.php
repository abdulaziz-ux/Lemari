<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah Data Laptop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">➕ Tambah Data Laptop</h4>
            </div>
            <div class="card-body">
                <form action="simpan.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Computer Name</label>
                        <input type="text" name="computer_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ex</label>
                        <input type="text" name="ex" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Serial Number (SN)</label>
                        <input type="text" name="SN" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Merk</label>
                        <input type="text" name="merk" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Status</label>
                        <select name="status" class="form-select">
                            <option value="">-</option>
                            <option value="disimpan">disimpan</option>
                            <option value="keluar">keluar</option>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kondisi</label>
                        <select name="kondisi" class="form-select" required> <!-- ✅ DITAMBAH required -->
                            <option value="" disabled selected>- Pilih kondisi -</option> <!-- ✅ UBAH agar tidak bisa dipilih -->
                            <option value="rusak">rusak</option>
                            <option value="baru">baru</option>
                            <option value="ok">ok</option>
                            <option value="kurang_baik">kurang_baik</option>
                        </select>
                    </div>



                    <div class="mb-3">
                        <label class="form-label">Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Keluar</label>
                        <input type="date" name="tanggal_keluar" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">dipakai</label>
                        <textarea name="dipakai" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Keterangan</label>
                        <textarea name="keterangan" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">💾 Simpan</button>
                    <a href="index.php" class="btn btn-secondary">🔙 Kembali</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>