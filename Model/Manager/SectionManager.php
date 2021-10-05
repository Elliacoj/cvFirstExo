<?php


use App\Model\Classes\DB;
use App\Model\Entity\Section;
use App\Model\Traits\TraitsManager;

require_once $_SERVER['DOCUMENT_ROOT'] . "/View/require.php";

class SectionManager {

    use TraitsManager;

    /**
     * Add a value into Section table
     * @param Section $section
     * @return bool
     */
    public static function add(Section $section):bool {
        $content = $section->getContent();
        $page = $section->getPage();
        $section = $section->getSection();

        $stmt = DB::getInstance()->prepare("INSERT INTO ellia_section (content, page, section) VALUES(':content', ':page', ':section')");

        $stmt->bindValue("content", $content);
        $stmt->bindValue("page", $page);
        $stmt->bindValue("section", $section);
        return $stmt->execute();
    }

    /**
     * Return an array of all data Section
     * @return array
     */
    public static function get():array {
        $stmt = DB::getInstance()->prepare("SELECT * FROM ellia_section");

        $allSection = [];
        if($stmt->execute() && $datas = $stmt->fetchAll()){
            foreach($datas as $data) {
                $section = new Section($data["id"],$data["content"], $data['section'], $data["page"]);
                $allSection[] = $section;
            }
        }
        return $allSection;
    }
}