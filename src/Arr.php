<?php
namespace Braunstetter\Helper;

class Arr
{
    public static function attachClassToAttrArray(array $array, string $class): array
    {
        return static::attachToAttrArray($array, ['class' => $class]);
    }

    public static function attachToAttrArray(array $array, array $data): array
    {
        foreach ($data as $key => $value) {
            $array = array_replace(
                $array, [$key => array_key_exists($key, $array) ? $array[$key] . ' ' . $value : $value]
            );
        }

        return $array;
    }
}