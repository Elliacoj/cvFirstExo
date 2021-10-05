<?php
session_start();

$root = $_SERVER['DOCUMENT_ROOT'];

require_once $root . "/Model/Manager/Traits/TraitsManager.php";
require_once $root . "/Model/Manager/UlManager.php";
require_once $root . "/Model/Manager/SectionManager.php";
require_once $root . "/Model/Manager/DlManager.php";
require_once $root . "/Model/Classes/DB.php";

require_once $root . "/Model/Entity/Dl.php";
require_once $root . "/Model/Entity/Section.php";
require_once $root . "/Model/Entity/Ul.php";
