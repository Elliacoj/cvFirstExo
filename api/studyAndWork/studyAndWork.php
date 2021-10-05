<?php

use App\Model\Manager\DlManager;

require_once $_SERVER['DOCUMENT_ROOT'] . "/View/require.php";

header('Content-Type: application/json');
$requestType = $_SERVER['REQUEST_METHOD'];

switch ($requestType) {
    case "GET":
        echo get();
        break;
    case "add":
        break;
}

function get() {
    $allDl = DlManager::get();
    $arrayDl = [];

    foreach ($allDl as $dl) {
        $arrayDl[] = [
            "id" => "" . $dl->getId() . "", "contentDt" => "" . $dl->getContentDt() . "",
            "contentDd" => "" . $dl->getContentDd() . "", "dl" => "" . $dl->getDl() . ""
        ];
    }
    return json_encode($arrayDl);
}