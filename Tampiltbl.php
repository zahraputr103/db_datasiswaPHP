<?php
require 'PBO-anliss.php';

$pp = query ("SELECT*FROM siswa");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>........</title>
</head>
<body>


    <h3> DATA SISWA <h3>
 <table border="1">
    <thead>
        <th>No</th>
        <th>Nama</th>
        <th> Kelas</th>
        <th>Jurusan</th>

        <?php $i = 1;?>
        <?php foreach ($pp as $cuy) :?>
        </thead >
        <tbody>
            <tr>
                <td><?= $i;?></td>
                <td><?php echo $cuy ['nama'];?></td>
                <td><?php echo $cuy ['kelas'];?></td>
                <td><?php echo $cuy ['jurusan'];?></td>
            </tr>
            <?php $i++?>
<?php endforeach; ?>

        </tbody>
 </table>   
</body>
</html>