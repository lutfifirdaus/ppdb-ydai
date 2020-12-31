<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Tingkat extends Enum
{
    const Sekolah = "Sekolah";
    const Kecamatan = "Kecamatan";
    const Kabupaten = "Kabupaten";
    const Provinsi = "Provinsi";
    const Nasional = "Nasional";
    const Internasional = "Internasional";
}
