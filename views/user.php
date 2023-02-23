<?php
include "controllers/user.php";
$data = allUser();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="views/styles.css" rel="stylesheet">
    <title>User</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Password</th>
                <th scope="col">Tanggal Join</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if (!empty($data)) {
                $i = 1;
                foreach ($data["data"] as $item) {
            ?>
                    <a href="http://localhost/php/user/<?php $item["id"] ?>">
                        <tr>
                            <th scope="row"><?= $i++ ?></th>
                            <td><?= $item["nama"]; ?></td>
                            <td><?= $item["passwd"]; ?></td>
                            <td><?= $item["createdAt"]; ?></td>
                        </tr>
                    </a>
            <?php
                }
            }
            ?>
        </tbody>
    </table>
</body>

</html>