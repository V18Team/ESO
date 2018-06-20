<?php
/**
 * This file is part of ESO system.
 *
 * (c) ESO 2018
 *
 * If you want, you can see license file at https://github.com/ZPOSO/ESO/LICENSE
 *
 * Date: 20.06.18
 * Time: 16:18
 *
 * @author Mariusz08 < https://github.com/Mariusz08 >
 */

namespace App\Formatter;

class FormatDateTime
{
    public static function returnFormattedDateTimeForPrivateMessage(): string
    {
        return date('Y-m-d H:i:s');
    }
}