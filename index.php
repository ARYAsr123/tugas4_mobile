<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Absensi</title>
</head>

<body>
    <h1>Absensi Kelas</h1>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>P1</th>
            <th>P2</th>
            <th>P3</th>
        </tr>
        <?php
        $url = file_get_contents("https://tifupb.id/21a3");
        $data = json_decode($url, true);
        if (count($data) != 0) {
            foreach ($data as $data) {
        ?>
                <tr>
                    <td><?php echo $data['NO'] ?></td>
                    <td><?php echo $data['NaMa'] ?></td>
                    <td><?php echo $data['NIM'] ?></td>
                    <td><?php echo $data['1'] ?></td>
                    <td><?php echo $data['2'] ?></td>
                    <td><?php echo $data['3'] ?></td>
                </tr>
        <?php
            }
        }
        ?>
    </table>
</body>

</html>