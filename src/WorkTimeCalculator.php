<?php
require_once __DIR__ . '/../init.php';
/**
 * Created by PhpStorm.
 * User: fagner
 * Date: 24/06/18
 * Time: 11:24
 */

class WorkTimeCalculator
{
    const MINUTES = 'M';
    const HOUR = 'H';
    protected $location;
    protected $user;
    protected $booOvertime;

    public function __construct(Location $location, User $user)
    {
        $this->user = $user;
        $this->location = $location;
        $this->booOvertime = false;
    }

    public function hasOvertime()
    {
        return $this->booOvertime;
    }


    protected function convertTime($intTime, $converTo = self::MINUTES)
    {
        if ($intTime <= 0 || !is_numeric($intTime)) return 0;
        switch ($converTo) {
            case self::MINUTES:
                $intTime *= 60;
                break;
            case self::HOUR:
                $intTime = ($intTime/60);
                break;
        }
        return $intTime;
    }

    public function calculateWorkTime()
    {
        $timePush = new TimePush();
        $timePush->getTimePush();x
        $arrTimeByUser = $timePush->getTimePushByUser($this->user->getUserId());
        $intWorkedTime = 0;
        $intOverTime = 0;
        $dailyOvertimeThreshold = $this->location->getLabourSetting()['dailyOvertimeThreshold'];
        $weekEnd = '';
        $weeklyHours = 0;
        foreach ($arrTimeByUser as $timePushed) {
            $weekEnd = ($weekEnd == '') ? $this->getEndWeekDay($timePushed) : $weekEnd;
            $intTimeIn = new DateTime($timePushed['clockedIn']);
            $intTimeOut = new DateTime($timePushed['clockedOut']);
            $diffDate = $intTimeOut->diff($intTimeIn);
            $dailyWorkTime = $diffDate->h*60;
            $intWorkedTime += $dailyWorkTime;
            if ($dailyWorkTime > $dailyOvertimeThreshold) {
                $intOverTime += ($dailyWorkTime - $dailyOvertimeThreshold);
            }

            if ($timePushed['clockedOut'] <= $weekEnd) {
                $weeklyHours += $intWorkedTime;
            } else {
                $weekEnd = $this->getEndWeekDay($timePushed);
            }
            echo $timePushed['clockedIn'] . ' - ' . $weekEnd . PHP_EOL;
        }
        print_r($intWorkedTime) . PHP_EOL;
        print_r($intOverTime) . PHP_EOL;
        print_r($weeklyHours) . PHP_EOL;

    }

    public function getEndWeekDay($timePushed)
    {
        return date("Y-m-d H:i:s", strtotime("{$timePushed['clockedIn']} +7 days"));
    }

}