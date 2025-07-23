<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Data Laptop Inventory</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        @media print {

            .no-print,
            .btn,
            .alert {
                display: none !important;
            }

            table {
                border-collapse: collapse !important;
                width: 100% !important;
            }

            th {
                background-color: #f2f2f2 !important;
                color: #000 !important;
                border: 1px solid #000 !important;
                padding: 6px !important;
                box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.1);
            }

            td {
                border: 1px solid #000 !important;
                padding: 6px !important;
            }

            body {
                margin: 0;
                font-size: 12px;
            }
        }
    </style>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>📋 Data Laptop Inventory</h2>
            <div class="no-print">
                <a href="form_tambah.php" class="btn btn-success">➕ Tambah Data</a>
                <button onclick="window.print()" class="btn btn-outline-primary">🖨️ Cetak Data</button>
            </div>
        </div>

        <?php if (isset($_GET['pesan'])): ?>
            <div id="floating-alert" class="alert 
                <?php
                if ($_GET['pesan'] == 'sukses') echo 'alert-success';
                elseif ($_GET['pesan'] == 'update') echo 'alert-primary';
                elseif ($_GET['pesan'] == 'hapus') echo 'alert-danger';
                ?>
                alert-dismissible fade show position-fixed top-0 end-0 m-3 shadow" role="alert" style="z-index: 9999;">
                <?php
                if ($_GET['pesan'] == 'sukses') echo '✅ Data berhasil ditambahkan.';
                elseif ($_GET['pesan'] == 'update') echo '✅ Data berhasil diubah.';
                elseif ($_GET['pesan'] == 'hapus') echo '🗑️ Data berhasil dihapus.';
                ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>



            <!-- ✅ Script agar alert hilang otomatis -->
            <script>
                setTimeout(() => {
                    const alertBox = document.getElementById('floating-alert');
                    if (alertBox) {
                        alertBox.classList.remove('show');
                        alertBox.classList.add('hide');
                    }
                }, 1000); // hilang 2 detik
                unset($_SESSION['pesan']);
            </script>

        <?php
        endif; ?>


        <!-- ✅ Form Search -->
        <div class="mb-3 no-print">
            <input type="text" id="searchInput" onkeyup="searchTable()" class="form-control" placeholder="🔍 Cari SN, Merk, atau Computer name...">
        </div>

        <!-- ✅ Tabel Data -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover shadow-sm bg-white">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Computer Name</th>
                        <th>Ex</th>
                        <th>SN</th>
                        <th>Merk</th>
                        <th>Status</th>
                        <th>kondisi</th>
                        <th>Tanggal Masuk</th>
                        <th>Tanggal Keluar</th>
                        <th>dipakai</th>
                        <th>Keterangan</th>
                        <th class="no-print">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $query = mysqli_query($conn, "SELECT * FROM laptop ORDER BY id DESC");
                    while ($data = mysqli_fetch_assoc($query)) {
                        echo "<tr>
                            <td>{$no}</td>
                            <td>{$data['computer_name']}</td>
                            <td>{$data['ex']}</td>
                            <td>{$data['SN']}</td>
                            <td>{$data['merk']}</td>
                            <td>{$data['status']}</td>
                            <td>{$data['kondisi']}</td>
                            <td>{$data['tanggal_masuk']}</td>
                            <td>{$data['tanggal_keluar']}</td>
                            <td>{$data['dipakai']}</td>
                            <td>{$data['keterangan']}</td>
                            <td class='no-print'>
                                <a href='form_edit.php?id={$data['id']}' class='btn btn-sm btn-primary'>✏️ Edit</a>
                                <a href='hapus.php?id={$data['id']}' onclick=\"return confirm('Yakin ingin hapus data ini?');\" class='btn btn-sm btn-danger'>🗑️ Hapus</a>
                            </td>
                        </tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ✅ Script pencarian tabel-->
    <script>
        function searchTable() {
            const input = document.getElementById("searchInput");
            const filter = input.value.toLowerCase();
            const table = document.querySelector("table");
            const trs = table.querySelectorAll("tbody tr");

            trs.forEach(row => {
                const cells = row.querySelectorAll("td");
                let match = false;

                cells.forEach(cell => {
                    if (cell.textContent.toLowerCase().includes(filter)) {
                        match = true;
                    }
                });

                row.style.display = match ? "" : "none";
            });
        }
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        // Simpan posisi scroll sebelum pindah halaman
        window.addEventListener('beforeunload', function() {
            localStorage.setItem('scrollPos', window.scrollY);
        });

        // Setelah halaman dimuat, scroll ke posisi sebelumnya
        window.addEventListener('load', function() {
            const scrollPos = localStorage.getItem('scrollPos');
            if (scrollPos !== null) {
                window.scrollTo(0, parseInt(scrollPos));
                localStorage.removeItem('scrollPos'); // Hapus agar tidak selalu trigger
            }
        });
    </script>

</body>

</html>