<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class ModaTransportasi extends Enum
{
    const JalanKaki =  "Jalan kaki";
    const KendaraanPribadi =  "Kendaraan pribadi";
    const KendaraanUmumAngkotPetepete =  "Kendaraan umum/Angkot/Pete-pete";
    const JemputanSekolah =  "Jemputan sekolah";
    const KeretaApi =  "Kereta api";
    const Gojek =  "Gojek";
    const AndongBediSadoDokarDelmaBecak =  "Andong/Bedi/Sado/Dokar/Delma/Becak";
    const PerahuPenyeberanganRakitGetek =  "Perahu penyeberangan/Rakit/Getek";
    const Lainnya =  "Lainnya";
}
