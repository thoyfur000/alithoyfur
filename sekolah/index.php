<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>SI sekolah | data siswa</h2>
    <br/>
    <a href="tambah.php">+ tambah data</a>
    </br>
    <table border="1">
        <tr>
            <th>no</th>
            <th>nama</th>
            <th>nis</th>
            <th>alamat</th>
            <th>opsi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $query = mysqli_query($koneksi,"select * from siswa");
        while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['nis']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $data['id']; ?>">HAPUS</a>
                </td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>