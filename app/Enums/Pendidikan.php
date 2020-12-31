<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Pendidikan extends Enum
{
    const TidakSekolah = "Tidak sekolah";
    const PutusSd = "Putus SD";
    const SdSejederajat = "SD sejederajat";
    const SmpSederajat = "SMPS sederajat";
    const SmaSederajat = "SMA sederajat";
    const D1 = "D1";
    const D2 = "D2";
    const D3 = "D3";
    const D4S1 = "D4/S1";
    const S2 = "S2";
    const S3 = "S3";
}
