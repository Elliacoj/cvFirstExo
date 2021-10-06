<?php

use App\Model\Entity\Dl;
use App\Model\Manager\DlManager;

require_once $_SERVER['DOCUMENT_ROOT'] . "/View/require.php";

header('Content-Type: application/json');
$requestType = $_SERVER['REQUEST_METHOD'];

switch ($requestType) {
    case "GET":
        echo get();
        break;
    case "POST":
        add((json_decode(file_get_contents('php://input'))));
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

/**
 * Add a data into table Dl
 * @param $data
 */
function add($data)
{
    DlManager::add((new Dl(null, $data->contentDt, $data->contentDd, $data->dl)));
}