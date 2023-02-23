<?php

$request = $_SERVER["REQUEST_URI"];

switch ($request) {
    case "/php/all-user":
        include __DIR__ . "/views/user.php";
        break;

    case (preg_match_all('/php/user/[0-9]', $request) ? true : false):
        include __DIR__ . "/views/user_detail.php";
        break;

    default:
        echo "ini diawal";
}
