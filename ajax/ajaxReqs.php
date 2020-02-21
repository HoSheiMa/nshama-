<?php

include './../html/config.php';
include '../class/AdminClass/Inputs.php';

include './../class/admin.php';

// reqs 
// data
$admin = new admin($c);
if (isset($_POST['reqs'])) {
    $reqs = $_POST['reqs'];
    if (isset($_POST['data'])) {
        $data = ($_POST['data']);
    }
    $d = "";

    // add input for user, team, etc
    // edit input
    // remove input
    if ($reqs == "edit_input") {
        if (isset($_POST['type']) && isset($_POST['inputId']) && isset($_POST['InputType']) && isset($_POST['title'])) {
            $types = ["text", "number", "select"];
            if (in_array($_POST['InputType'], $types)) {
                $admin->inputsFunction('edit', $_POST['type'], [$_POST['InputType'], $_POST['title'], isset($_POST['a']) ? $_POST['a'] : "", $_POST['inputId']]);
            }
        }
    }
    if ($reqs == "add_input") {
        if (isset($_POST['type']) && isset($_POST['InputType']) && isset($_POST['title'])) {
            $types = ["text", "number", "select"];
            if (in_array($_POST['InputType'], $types)) {
                $admin->inputsFunction('add', $_POST['type'], [$_POST['InputType'], $_POST['title'], isset($_POST['a']) ? $_POST['a'] : ""]);
            }
        }
    }
    if ($reqs == "get_input") {
        // if (!$admin->isAdmin()) {
        //     echo 'Permission:not Allow';
        //     return;
        // }
        if (isset($data['type']) && isset($data['who'])) {
            $d = $admin->inputsFunction('get', $data['type'], $data['who']);
            $d = json_encode($d);
        }
    }
    if ($reqs == "remove_input") {
        if (isset($data['type']) && isset($data['id'])) {
            $admin->inputsFunction('remove', $data['type'], $data['id']);
        }
    }
    echo $d;
}
