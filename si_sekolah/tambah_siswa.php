<?php
include 'koneksi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama_siswa'];
    $alamat = $_POST['alamat_siswa'];
    $agama = $_POST['agama_siswa'];
    $asal_sekolah = $_POST['asal_sekolah'];

    $query = "INSERT INTO data_siswa (nama_siswa, alamat_siswa, agama_siswa, asal_sekolah) 
              VALUES ('$nama', '$alamat', '$agama', '$asal_sekolah')";
    if (mysqli_query($konek, $query)) {
        echo "<script>alert('Data berhasil ditambahkan!');</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data: " . mysqli_error($konek) . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
        }

        h2 {
            text-align: center;
            margin: 20px 0;
            color: #444;
        }

        .container {
            width: 50%;
            margin: 0 auto;
        }

        form {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-top: 50px;
        }

        form label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        form input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background: #218838;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Form Tambah Data Siswa</h2>
        <form action="" method="post">
            <label for="nama_siswa">Nama Siswa:</label>
            <input type="text" id="nama_siswa" name="nama_siswa" required>

            <label for="alamat_siswa">Alamat:</label>
            <input type="text" id="alamat_siswa" name="alamat_siswa" required>

            <label for="agama_siswa">Agama:</label>
            <input type="text" id="agama_siswa" name="agama_siswa" required>

            <label for="asal_sekolah">Asal Sekolah:</label>
            <input type="text" id="asal_sekolah" name="asal_sekolah" required>

            <button type="submit" name="submit">Tambah Data</button>
        </form>
    </div>
</body>

</html>
