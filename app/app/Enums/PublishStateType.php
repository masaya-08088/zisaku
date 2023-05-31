<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PublishStateType extends Enum
{
    const OptionOne =   'option one';
    const OptionTwo =   'option two';
    const OptionThree = 'option three';

    //  /**
    //  * Get the description for an enum value
    //  *
    //  * @param $value
    //  * @return string
    //  */
    // public static function getDescription($value): string
    // {
    //     switch ($value){
    //         case self::OptionOne:
    //             return '管理';
    //             brake;
    //         case self::OptionTwo:
    //             return '一般';
    //             brake;
    //         case self::OptionTwo:
    //             return '店舗管理';
    //             brake;
    //         default:
    //             return self::getKey($value);
    //     }
    // }
}
