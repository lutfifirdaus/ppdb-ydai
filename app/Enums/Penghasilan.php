<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Penghasilan extends Enum
{
    const DiBawahRp500000 = "< Rp 500.000";
    const Rp500000SampaiRp999999 = "Rp 500.000 - Rp 999.999";
    const Rp1000000SampaiRp1999999 = "Rp 1.000.000 - Rp 1.999.999";
    const Rp2000000SampaiRp4999999 = "Rp 2.000.000S - Rp 4.999.999";
    const Rp5000000SampaiRp20000000 = "Rp 5.000.000 - Rp 20.000.000";
    const DiAtasRp20000000 = "> Rp 20.000.000";
    const TidakBerpenghasilan = "Tidak Berpenghasilan";
}

$instance = Penghasilan::Rp500000SampaiRp999999();


