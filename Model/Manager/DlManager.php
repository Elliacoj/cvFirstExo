<?php

namespace App\Model\Manager;

use App\Model\Classes\DB;
use App\Model\Entity\Dl;
use App\Model\Traits\TraitsManager;

require_once $_SERVER['DOCUMENT_ROOT'] . "/View/require.php";

class DlManager {

    use TraitsManager;

    /**
     * Add a value into Dl table
     * @param Dl $dl
     * @return bool
     */
    public static function add(Dl $dl):bool {
        $contentDt = $dl->getContentDt();
        $contentDd = $dl->getContentDd();
        $dl = $dl->getDl();

        $stmt = DB::getInstance()->prepare("INSERT INTO ellia_dl (content_dt, content_dd, dl) VALUES(:contentDt, :contentDd, :dl)");

        $stmt->bindValue("contentDt", $contentDt);
        $stmt->bindValue("contentDd", $contentDd);
        $stmt->bindValue("dl", $dl);
        return $stmt->execute();
    }

    /**
     * Return an array of all data Dl
     * @return array
     */
    public static function get():array {
        $stmt = DB::getInstance()->prepare("SELECT * FROM ellia_dl");

        $allDl = [];
        if($stmt->execute() && $datas = $stmt->fetchAll()){
            foreach($datas as $data) {
                $dl = new Dl($data["id"],$data["content_dt"], $data['content_dd'], $data["dl"]);
                $allDl[] = $dl;
            }
        }
        return $allDl;
    }
}