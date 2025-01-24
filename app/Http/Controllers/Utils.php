<?php

class Utils
{
    public static function intIsValidMonth($int): bool
    {
        if (!is_numeric($int) || $int < 1 || $int > 12) {
            return false;
        }
        return true;
    }
}


