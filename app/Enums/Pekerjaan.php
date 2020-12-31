<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class Pekerjaan extends Enum
{
    const TidakBekerja = "Tidak bekerja";
    const Nelayan = "Nelayan";
    const Petani = "Petani";
    const Peternak = "Peternak";
    const PNS = "PNS/TNI/Polri";
    const KaryawanSwasta = "Karyawan swasta";
    const PedagangKecil = "Pedagang kecil";
    const PedagangBesar = "Pedagang besar";
    const Wiraswasta = "Wiraswasta";
    const Wirausaha = "Wirausaha";
    const Buruh = "Buruh";
    const Pensiunan = "Pensiunan";
}
