<?php

class speedometer
{
    private const KMTOMILES = 0.621;
    private const MILESTOKM = 1.609;

    public static function convertKmToMiles(float $km) : ?float
    {
    return $km * (self::KMTOMILES);
    }

    public static function convertMilesToKm(float $Miles) : ?float
    {
    return $Miles * (self::MILESTOKM);
    }
}

