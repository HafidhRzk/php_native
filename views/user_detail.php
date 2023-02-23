<?php
include "controllers/user.php";
preg_match_all("/\/php\/user\/[0-9]{1,}/", $request, $match);
$data = userDetail(explode("/", $match[0][0])[3]);
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="views/styles.css" rel="stylesheet">
    <title>User Detail</title>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <h1><?= "User Detail" ?></h1>

    <h4>Id: <?= $data["id"] ?></h4>
    <h4>Nama: <?= $data["nama"] ?></h4>
    <h4>Password: <?= $data["passwd"] ?></h4>
    <h4>Tanggal Dibuat: <?= $data["createdAt"] ?></h4>
</body>

</html>