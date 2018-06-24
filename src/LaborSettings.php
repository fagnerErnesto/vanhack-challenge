<?php
require_once __DIR__ . '/../init.php';
/**
 * Created by PhpStorm.
 * User: fagner
 * Date: 24/06/18
 * Time: 12:10
 */

class LaborSettings
{
    protected $autoBreak;
    protected $autoBreakRules;
    protected $dailyOvertimeMultiplier;
    protected $weeklyOvertimeMultiplier;
    protected $breakLenght;
    protected $threshold;
    protected $overtime;

    public function __construct(Location $location)
    {

    }
}