<?php

namespace Dena\XssTransformer\Helpers;

class StrHelper
{
    public static function hasHtmlAttribute(string $string): bool
    {
        return $string !== strip_tags($string);
    }
}
