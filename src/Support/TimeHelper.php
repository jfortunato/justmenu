<?php namespace JustMenu\Support;

use JustMenu\Menu\Entity\SpecialTime;
use Carbon\Carbon;

class TimeHelper
{
    protected $specialTime;

    public static function convertSpecialTimes(SpecialTime $time = null)
    {
        if (!$time)
            return;

        $days = self::convertToDays($time->days);
        $times = self::convertToTimes($time->times);

        return "Only available on days: {$days} at times: {$times}";
    }

    protected static function convertToDays($days)
    {
        $days = explode(',', $days);

        $converted = array();

        foreach ($days as $day) {
            switch ($day) {
            case '0':
                $converted[] = 'Sunday';
                break;
            case '1':
                $converted[] = 'Monday';
                break;
            case '2':
                $converted[] = 'Tuesday';
                break;
            case '3':
                $converted[] = 'Wednesday';
                break;
            case '4':
                $converted[] = 'Thursday';
                break;
            case '5':
                $converted[] = 'Friday';
                break;
            case '6':
                $converted[] = 'Saturday';
                break;
            default:
                $converted[] = 'any';
                break;
            }
        }

        return implode(', ', $converted);
    }

    protected static function convertToTimes($times)
    {
        $times = explode(',', $times);

        date_default_timezone_set('America/New_York');
        $converted = array();

        foreach ($times as $time) {
            if($time === 'any'){
                $converted[] = 'any';
            } else {
                $start_end = explode('-', $time);

                $start = Carbon::parse($start_end[0]);
                $end = Carbon::parse($start_end[1]);

                $converted[] = "{$start->format('g:ia')} - {$end->format('g:ia')}";
            }
        }

        return implode(', ', $converted);
    }
}
