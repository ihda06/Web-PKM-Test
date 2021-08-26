<?php

namespace App\Models;


class Tim
{

    static $tims = [
        [
            "Judul" => "PKM terbaik abad 19",
            "Ketua" => "Susilo Bambang Yudhoyono",
            "Kontak" => "087712345678",
            "Keterangan" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta quasi rerum nam itaque ipsam accusamus, dolor voluptate ratione autem vero. "
        ],
        [
            "Judul" => "Induksi induk ayam",
            "Ketua" => "Fahri",
            "Kontak" => "087755668877",
            "Keterangan" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta quasi rerum nam itaque ipsam accusamus, dolor voluptate ratione autem vero."
        ],
    ];

    public static function all()
    {
        return self::$tims;
    }
}
