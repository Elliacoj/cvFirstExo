<?php

namespace App\Model\Traits;

trait TraitsManager {
    private static ?Object $manager = null;

    /**
     * Return manage instance
     * @return $this
     */
    function getManager():self {
        if(is_null(self::$manager)) {
            self::$manager = new self();
        }
        return self::$manager;
    }
}