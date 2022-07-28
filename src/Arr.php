<?php

namespace Braunstetter\Helper;

class Arr
{
    /**
     * This method is just handy when it comes to add a class to an existing class string.
     */
    public static function attachClass(array $array, string $class): array
    {
        return static::attach($array, ['class' => $class]);
    }


    /**
     * Sometimes just want to add some new attribute to an existing string.
     */
    public static function attach(array $array, array $data): array
    {
        foreach ($data as $key => $value) {
            $array = array_replace(
                $array, [$key => array_key_exists($key, $array) ? $array[$key] . ' ' . $value : $value]
            );
        }

        return $array;
    }

    /**
     * Returns the first value of a given array.
     * If the array is empty it returns null.
     */
    public static function firstValue(array $array): mixed
    {
        return array_values($array)[0] ?? null;
    }
}