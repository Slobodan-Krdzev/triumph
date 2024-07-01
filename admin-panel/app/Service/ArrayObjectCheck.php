<?php

namespace App\Service;

class ArrayObjectCheck
{
    public static function isItemEmpty($item)
    {
        if (is_array($item)) {
            foreach ($item as $key => $value) {
                if (is_array($value)) {
                    if (!self::isItemEmpty($value)) {
                        return false;
                    }
                } elseif (!is_null($value) && $value !== '') {
                    return false;
                }
            }
        } elseif (is_object($item)) {
            foreach ($item as $key => $value) {
                if (!is_null($value) && $value !== '') {
                    return false;
                }
            }
        }
        return true;
    }

    public static function processItem($item)
    {
        if (is_array($item)) {
            foreach ($item as $key => $value) {
                $item[$key] = self::processItem($value);
            }
            if (self::isItemEmpty($item)) {
                return null;
            }
        } elseif (is_object($item)) {
            foreach ($item as $key => $value) {
                $item->$key = self::processItem($value);
            }
            if (self::isItemEmpty($item)) {
                return null;
            }
        }
        return $item;
    }
}
