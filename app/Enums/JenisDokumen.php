<?php

namespace App\Enums;

enum JenisDokumen: int {
    use EnumTraits;

    case FOTO = 1;
    case PortFolio = 2;


    public static function getLabel(int $value)
    {
        return match($value){
            self::FOTO => "Foto",
            self::PortFolio => "Portofolio",
        };
    }

    public function title()
    {
        return match($this)
        {
            self::FOTO => "Foto",
            self::PortFolio => "Portofolio",
        };
    }

    public function getDirName()
    {
        return match($this)
        {
            self::FOTO => "Foto",
            self::PortFolio => "Portofolio",
        };
    }
}
