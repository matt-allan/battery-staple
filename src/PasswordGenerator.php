<?php

namespace Yuloh\BatteryStaple;

use SplFileObject;

class PasswordGenerator
{
    public static function generate()
    {
        $word = '';
        $file = new SplFileObject(__DIR__ . '/../resources/google-10000-english-usa.txt');
        for ($i = 0; $i < 4; $i++) {
            $lineNumber = random_int(0, 9999);
            $file->seek($lineNumber);
            $word .= trim($file->current());
        }
        return $word;
    }
}
