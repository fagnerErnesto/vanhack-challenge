<?php
include_once '../../init.php';
/**
 * Created by PhpStorm.
 * User: fagner
 * Date: 24/06/18
 * Time: 16:10
 */

use PHPUnit\Framework\TestCase;

class WorkTimeCalculatorTest extends TestCase
{

    public function testCalculateWorkTime()
    {
        $loc = new Location();
        $loc->getLocations(25753);
        $user = new User($loc);
        $user->getUser(517150);
        $obj = new WorkTimeCalculator($loc, $user);
        $obj->calculateWorkTime();
    }

    public function testHasOvertime()
    {
    }
}
