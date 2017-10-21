<?php
/**
 * Created by PhpStorm.
 * User: mohamedsabil83
 * Date: 13/09/16
 * Time: 01:09 ص
 */

namespace Mohamedsabil83\Hijri;

class Hijri
{
    public $time;
    public $date;

    /**
     * Hijri constructor.
     */
    public function __construct()
    {
        $this->time = new I18N_Arabic_Mktime();
        $this->date = new I18N_Arabic_Date();
        $this->number = new I18N_Arabic_Numbers();
    }

    public function date($format = 'Y-m-d', $time = null)
    {
        $time = is_null($time) ? time() : $time;
        $correction = $this->date->dateCorrection($time);
        return $this->date->date($format, $time + 3600 * 24, $correction);
    }

    public function hTime($date = null)
    {
        $date = is_null($date) ? self::date() : $date;
        list($y, $m, $d) = explode('-', $date);

        $correction = $this->time->mktimeCorrection($m, $y);
        $time = $this->time->mktime(0, 0, 0, $m, $d, $y, $correction);
        return $time;
    }

    public function number2text($number = 0)
    {
        $integer = (int)$number;
        $this->number->setFeminine(1);
        $this->number->setFormat(1);
        return $this->number->int2str($integer);
    }
}
