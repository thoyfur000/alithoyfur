<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>SI sekolah | edit data siswa </h2>
    </br>
    <a href="index.php">KEMBALI</a>
    <h3>edit data siswa</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $query = mysqli_query($koneksi,"select * from siswa where id='$id'");
    while($data = mysqli_fetch_array($query)){
        ?>
        <form method="post" action="edit_aksi.php">
            <table>
                <tr>
                    <td>nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                        <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>nis</td>
                    <td><input type="number" name="nis" value="<?php echo $data['nis']; ?>"></td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $data['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
        <?php
    }
    ?>
</body>
</html>