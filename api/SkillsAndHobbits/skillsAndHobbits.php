<?php

use App\Model\Entity\Section;
use App\Model\Manager\SectionManager;

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

/**
 * Return table of section object
 * @return false|string
 */
function get() {
    $allSection = SectionManager::get();
    $arraySection = [];

    foreach ($allSection as $section) {
        $arraySection[] = ["id" => "" . $section->getId() . "", "content" => "" . $section->getContent() . "", "section" => "" . $section->getSection() . ""];
    }
    return json_encode($arraySection);
}

/**
 * Add a data into table Section
 * @param $data
 */
function add($data) {
    echo $data->content;
    SectionManager::add((new Section(null,$data->content, $data->section)));
}