<?php

function getAllUser()
{
    include "config.php";
    $qry = "SELECT * FROM user";
    $userStatement = mysqli_prepare($connection, $qry);
    mysqli_stmt_execute($userStatement);
    $result = mysqli_stmt_get_result($userStatement);
    while ($getData = mysqli_fetch_all($result, MYSQLI_ASSOC)) {
        $data = $getData;
    }
    return $data;
}

function getUserById($id)
{
    include "config.php";
    $qry = "SELECT * FROM user WHERE id = ?";
    $userStatement = mysqli_prepare($connection, $qry);
    mysqli_stmt_bind_param($userStatement, 'i', $id);
    mysqli_stmt_execute($userStatement);
    $result = mysqli_stmt_get_result($userStatement);
    $data = mysqli_fetch_assoc($result);
    return $data;
}
