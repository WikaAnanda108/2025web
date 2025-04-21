<?php
include "koneksi.php";

$query = "SELECT m.*, p.nama namaProdi FROM mahasiswa m JOIN prodi p ON m.id_prodi = p.id";
$data = ambildata($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>
<body>
<h1>DATA MAHASISWA</h1>
    <br>
    <a href="tambahmahasiswa.php">Tambah Data</a>
     <table border="1" cellspacing="0" cellpadding"1">
        <thread>
            <th>no</th>
            <th>nim</th>
            <th>nama</th>
            <th>tanggal_lahir</th>
            <th>telp</th>
            <th>email</th>
            <th>prodi</th>
            <th>Aksi</th>
            
    </thread>
        <tbody>
            <?php
            $i=1;
            foreach($data as $d) : ?>

    <tr>
        <td><?= $i++ ?></td>
        <td><?= $d ["nim"] ?></td>
        <td><?= $d ["nama"] ?></td>
        <td><?= $d ["tanggal_lahir"] ?></td>
        <td><?= $d ["telp"] ?></td>
        <td><?= $d ["email"] ?></td>
        <td><?= $d ["namaProdi"] ?></td>
        <td><a href="deletemahasiswa.php?nim=<?= $d['nim']; ?>"
        onclick="return confirm('Yakin nihh?')">Delete</a> |
        <a href="editmahasiswa.php?nim=<?= $d['nim']; ?>">Edit</a></td>
            </tr>
<?php endforeach ; ?>


<tbody>
 </table>   
</body>
</html>