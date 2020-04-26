<?php


class Speedometer
{
    const KM_TO_MILES = 0.621371;

    public static function convertKmToMiles(int $kmh ){
            return round(SELF::KM_TO_MILES * $kmh,2);

}


}
