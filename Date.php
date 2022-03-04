<?php

class Date
{
    public $timezone = 'Asia/Dhaka';

    public function __construct()
    {
        return date_default_timezone_set($this->timezone);
    }

    public function Now()
    {
        return date('Y-m-d h:i:s a');
    }

    public function Day()
    {
        return date('d');
    }

    public function Month()
    {
        return date('m');
    }

    public function Year()
    {
        return date('Y');
    }

    public function First3LetterOfDayName()
    {
        return date('D');
    }
    
    public function DayName()
    {
        return date('l');
    }

    public function MonthName()
    {
        return date('F');
    }

    public function TotalDays($year, $month)
    {
        return cal_days_in_month(CAL_GREGORIAN, $month, $year);
    }

    public function MonthlyDates($month)
    {
        $number_of_days = $this->TotalDays(date('Y'), $month);
        $dates = [];
        for($i = 1; $i <= $number_of_days; $i++){
            $dates[] = date("Y-m-d", strtotime("Y-$month-$i"));
        }
        return $dates;
    }
}