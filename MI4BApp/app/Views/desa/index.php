<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Desa/Keluarahan di Kecamatan Natar</h1>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No.</th>
            <th>Nama Desa/Kelurahan</th>
            <th>Kode Pos</th>
            <th>Kecamatan</th>
            <th>Kabupaten</th>
            <th>Provinsi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($data_desa as $row) : ?>
            <tr>
                <td><?= $i++;?></td>
                <td><?= $row['nama']?></td>
                <td><?= $row['kode']?></td>
                <td><?= $row['kecamatan']?></td>
                <td><?= $row['kabupaten']?></td>
                <td><?= $row['provinsi']?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>