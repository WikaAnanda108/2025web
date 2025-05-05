<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
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
    <h1>Data Prodi</h1>
    <br>
     <table border="1" cellspacing="0" cellpadding"S">
        <thread>
        <th>no</th>    
        <th>id</th>
            <th>nama</th>
            <th>kaprodi</th>
            <th>jurusan</th>
            
    </thread>
        <tbody>
            <?php
            $i =1;
            foreach($data as $d) : ?>
    <tr>
        <td><?php echo $i++ ?></td>
        <td><?php echo $d ["id"] ?></td>
        <td><?php echo $d ["nama"] ?></td>
        <td><?php echo $d ["kaprodi"] ?></td>
        <td><?php echo $d ["jurusan"] ?></td>
</tr>
<?php endforeach ; ?>
   </tbody>
</table>
</body>

</html>