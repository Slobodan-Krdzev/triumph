<?php

namespace App\Service;

class DecodeHtmlEntities
{
    public static function decodeHtmlEntities($data)
    {
        if (is_string($data)) {
            return htmlspecialchars_decode($data, ENT_QUOTES | ENT_HTML5);
        } elseif (is_array($data)) {
            array_walk_recursive($data, function (&$value) {
                if (is_string($value)) {
                    $value = htmlspecialchars_decode($value, ENT_QUOTES | ENT_HTML5);
                }
            });
        } elseif (is_object($data)) {
            foreach ($data as $key => $value) {
                $data->$key = self::decodeHtmlEntities($value);
            }
        }

        return $data;
    }
}
