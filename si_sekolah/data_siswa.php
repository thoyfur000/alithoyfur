<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
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
            width: 80%;
            margin: 20px auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        table th, 
        table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ddd;
        }

        table th {
            background-color: #28a745;
            color: white;
            text-transform: uppercase;
        }

        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        table tr:hover {
            background-color: #f1f1f1;
        }

        .action a {
            text-decoration: none;
            color: #007bff;
            margin-right: 10px;
        }

        .action a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Data Siswa</h2>
        <table>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Alamat</th>
                <th>Agama</th>
                <th>Asal Sekolah</th>
                <th>Aksi</th>
            </tr>
            <?php
            $no = 1;
            $query = mysqli_query($konek, "SELECT * FROM data_siswa");
            while ($data = mysqli_fetch_array($query)) {
                ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama_siswa']; ?></td>
                <td><?php echo $data['alamat_siswa']; ?></td>
                <td><?php echo $data['agama_siswa']; ?></td>
                <td><?php echo $data['asal_sekolah']; ?></td>
                <td class="action">
                    <a href="#">Edit</a>
                    <a href="#">Hapus</a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>

</html>
