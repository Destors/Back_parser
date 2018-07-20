<?php
namespace parser\helpers;
class StringHelper {
    public static function clean($string) {
        $clean = str_replace(["\n", "\r", "\t", "\0", "'", '"', "\\"], '', $string);
        $clean = preg_replace('/ {2,}/', ' ', $clean);
        $clean = strip_tags($clean);
        $clean = trim($clean);
        return $clean;
    }
}