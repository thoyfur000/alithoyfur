<!DOCTYPE html>
<html>
    <head>
        <title>contoh list dengan PHP</title>
    </head>
    <body>
        <h2>Daftar absensi mahasiswa</h2>
        <ol>
            <?php
            for ($i= 1; $i <= 10; $i++)
            {
                echo "<li>Nama mahasiswa ke-$i</li>";
            }
            ?>
        </ol>
    </body>
</html>