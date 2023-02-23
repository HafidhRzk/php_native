<?php

function allUser()
{
    include "models/user.php";
    if (empty(getAllUser())) {
        return ["status" => "Data Is Empty", "code" => 400, "data" => []];
    }
    return ["status" => "Success Get Data", "code" => 200, "data" => getAllUser()];
}

function userDetail($id)
{
    include "models/user.php";
    return getUserById($id);
}
