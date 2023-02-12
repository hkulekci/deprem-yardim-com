<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Injured extends Model
{
    public function scopeActiveCities($query)
    {
        return $query->whereIn('city', self::getActiveCities());
    }

    public static function getActiveCities()
    {
        return [
            "Hatay",
            "Kahramanmaraş",
            "Adıyaman",
            "Gaziantep",
            "Şanlıurfa",
            "Osmaniye",
            "Malatya",
            "Kilis",
            "Diyarbakır",
            "Adana",
            "Batman",
            "Bingöl",
            "Bitlis",
            "Elazığ",
            "Hakkari",
            "Mardin",
            "Mersin",
            "Siirt",
            "Şırnak",
            "Van"
        ];
    }
}
