<?php

namespace Braunstetter\Helper;

class Arr
{
    public static function attachClassToAttr(array $array, string $class): array
    {
        return static::attachToAttrArray($array, ['class' => $class]);
    }

    public static function attachToAttr(array $array, array $data): array
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
     *
     * @param array $array
     * @return mixed
     */
    public static function firstValue(array $array): mixed
    {
        return array_values($array)[0] ?? null;
    }
}