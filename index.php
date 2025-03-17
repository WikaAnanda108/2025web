<?php
include "koneksi.php";
$query = "SELECT * FROM mahasiswa";
$data = ambildata ($query);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
    <br>
     <table border="1" cellspacing="0" cellpadding"S">
        <thread>
        <th>no</th>
            <th>nim</th>
            <th>nama</th>
            <th>tanggal_lahir</th>
            <th>telp</th>
            <th>email</th>
            <th>id</th>
    </thread>
        <tbody>
            <?php
            $i =1;
            foreach($data as $d) : ?>

    <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $d ["nim"] ?></td>
        <td><?php echo $d ["nama"] ?></td>
        <td><?php echo $d ["tanggal_lahir"] ?></td>
        <td><?php echo $d ["telp"] ?></td>
        <td><?php echo $d ["email"] ?></td>
        <td><?php echo $d ["id"] ?></td>
</tr>
<?php endforeach ; ?>
<tbody>
 </table>   
</body>

</html>