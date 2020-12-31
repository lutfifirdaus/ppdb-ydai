<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Agama extends Enum
{
    const Islam = "Islam";
    const Kristen = "Kristen";
    const Katholik = "Katholik";
    const Hindu = "Hindu";
    const Buddha = "Buddha";
    const Konghucu = "Konghucu" ;
}
