<?php

namespace Sasaya;

class Base64URL
{
    public static function encode(string|array $plain): string
    {
        if (is_array($plain)) {
            return count($plain) ? self::encode(json_encode($plain)) : '';
        }

        return preg_replace('/=*$/', '', strtr(base64_encode($plain), '+/', '-_'));
    }

    public static function decode(string $encoded): string|array
    {
        $decoded = base64_decode(strtr($encoded, '-_', '+/'));

        if ($decoded === '') {
            return [];
        }

        if (self::isJson($decoded)) {
            return json_decode($decoded, true);
        }

        return $decoded;
    }

    private static function isJson(string $string): bool
    {
        json_decode($string);

        return json_last_error() === JSON_ERROR_NONE;
    }
}
