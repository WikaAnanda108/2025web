<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);

$nim = $_GET['nim'];
$querymahasiswa = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
$datamahasiswa = ambildata($querymahasiswa);
$datamahasiswa = $datamahasiswa[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mahasiswa</title>
</head>

<body>
    <h1>Edit Data Mahasiswa</h1>
    <form action="editaksimahasiswa.php" method="post">
        <table>

            <tr>
                <td>nim</td>
                <td><input type="text" name="nim" required value ="<?=
                $datamahasiswa ['nim']; ?>"></td>
            </tr>
            <tr>
                <td>nama</td>
                <td><input type="text" name="nama" required value ="<?=
                $datamahasiswa ['nama']; ?>"></td>
            </tr>
            <tr>
                <td>tanggal_lahir</td>
                <td><input type="date"  name="tanggal_lahir" required value ="<?=
                $datamahasiswa ['tanggal_lahir']; ?>"></td>
            </tr>
            <tr>
                <td>telp</td>
                <td><input type="text"  name="telp" required value ="<?=
                $datamahasiswa ['telp']; ?>"></td>
            </tr>
            <tr>
                <td>email</td>
                <td><input type="text" name="email" required value ="<?=
                $datamahasiswa ['email']; ?>" ></td>
            </tr>
            <tr>
                <td>prodi</td>
                
                    <td><select name="id">
                        <?php foreach($data as $d) : ?>
                        <option value="<?= $d['id'] ?>"
                        <?=
                        $d['id'] == $datamahasiswa['id_prodi'] ?
                        "SELECTED" : ""
                        ?> 
                        ><?php echo $d['nama'] ?></option>
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