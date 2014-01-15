<?php namespace JustMenu\Support;

class Abbreviator
{
    private static $knownAbbreviations = array(
        'small'  => 'Sm.',
        'medium' => 'Md.',
        'large'  => 'Lg.',
        'pint'   => 'Pt.',
        'quart'  => 'Qt.',
    );

    public static function abbreviate($unabbreviated)
    {
        return array_key_exists($unabbreviated, self::$knownAbbreviations) ?  self::$knownAbbreviations[$unabbreviated]:'';
    }

    public static function unabbreviate($abbreviated)
    {
        $knownAbbreviations = array_flip(self::$knownAbbreviations);

        return array_key_exists($abbreviated, $knownAbbreviations) ? $knownAbbreviations[$abbreviated]:'';
    }
}
