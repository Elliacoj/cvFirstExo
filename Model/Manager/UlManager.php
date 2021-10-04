<?php


use App\Model\Classes\DB;
use App\Model\Entity\Ul;
use App\Model\Traits\TraitsManager;

class UlManager {

    use TraitsManager;

    /**
     * Add a value into Ul table
     * @param Ul $ul
     * @return bool
     */
    public static function add(Ul $ul):bool {
        $content = $ul->getContent();
        $content = $ul->getUl();

        $stmt = DB::getInstance()->prepare("INSERT INTO Ul (content) VALUES(':content', ':ul')");

        $stmt->bindValue("content", $content);
        $stmt->bindValue("ul", $ul);
        return $stmt->execute();
    }

    /**
     * Return an array of all data Ul
     * @return array
     */
    public static function get():array {
        $stmt = DB::getInstance()->prepare("SELECT * FROM Ul");
        $stmt->execute();

        $allUl = [];
        if($stmt->execute() && $datas = $stmt->fetchAll()){
            foreach($datas as $data) {
                $ul = new Ul($data["id"],$data["content"], $data["ul"]);
                $allUl[] = $ul;
            }
        }
        return $allUl;
    }
}