<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>
<body>
    <h3>Dosen</h3>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>NIDN</th>
                <th>Pendidikan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($pengajar as $dsn){
            ?>
            <tr>
                <td><?= $nomor ?></td>
                <td><?= $dsn -> nidn ?></td>
                <td><?= $dsn -> pendidikan ?></td>
                <td>
                    <a href="<?= base_url("index.php/dosen/detail/$dsn->id") ?>"></a>
                </td>
            </tr>
            <?php
            $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>