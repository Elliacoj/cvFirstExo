<?php


use App\Model\Classes\DB;
use App\Model\Entity\Ul;
use App\Model\Traits\TraitsManager;

require_once "../../View/require.php";

class UlManager {

    use TraitsManager;

    /**
     * Add a value into Ul table
     * @param Ul $ul
     * @return bool
     */
    public static function add(Ul $ul):bool {
        $content = $ul->getContent();
        $contentA = $ul->getContentA();
        $ul = $ul->getUl();

        $stmt = DB::getInstance()->prepare("INSERT INTO ellia_ul (content, ul, contentA) VALUES(':content', ':ul', ':contentA')");

        $stmt->bindValue("content", $content);
        $stmt->bindValue("ul", $ul);
        $stmt->bindValue("contentA", $contentA);
        return $stmt->execute();
    }

    /**
     * Return an array of all data Ul
     * @return array
     */
    public static function get():array {
        $stmt = DB::getInstance()->prepare("SELECT * FROM ellia_ul");

        $allUl = [];
        if($stmt->execute() && $datas = $stmt->fetchAll()){
            foreach($datas as $data) {
                $ul = new Ul($data["id"],$data["content"], $data["ul"], $data['contentA']);
                $allUl[] = $ul;
            }
        }
        return $allUl;
    }
}