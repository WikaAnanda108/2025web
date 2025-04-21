<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);
?>
<!DOCTYPE html>
<html lang="en">
<heag d>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>

<body>
    <h1>Tambah Data Mahasiswa</h1>
    <form action="tambahaksimahasiswa.php" method="post">
        <table>

            <tr>
                <td>nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>tanggal_lahir</td>
                <td><input type="date"  name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>telp</td>
                <td><input type="text"  name="telp"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" ></td>
            </tr>
            <tr>
                <td>prodi</td>
                <td>
                    <select name="id_prodi">
                        <?php foreach($data as $d) : ?>
                        <option value="<?= $d["id"] ?>"><?= $d["nama"] ?></option>  
                        <?php endforeach; ?>
                    </select>
                 </td>
            </tr>

        </table>
        <a href="index.php">Kembali</a>
        <button><type="Submit">Simpan</button>
    </form>
</body>
</html>