<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */

//Enum này dùng để
final class SystemCacheKeyEnum extends Enum
{
    public const  POST_CITIES = 'post_cities';
}
