<?php


class Speedometer
{
    const KMPERMILE = 1.609;
    const MILEPERKM = 0.621;

    public static function convertMilesToKm($miles): float
    {
        return $miles * self::KMPERMILE;
    }
    public static function convertKmToMiles($kilometers): float
    {
        return $kilometers * self::MILEPERKM;
    }
}