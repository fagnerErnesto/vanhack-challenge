<?php
include_once '../../init.php';
/**
 * Created by PhpStorm.
 * User: fagner
 * Date: 24/06/18
 * Time: 14:24
 */

use PHPUnit\Framework\TestCase;

class TimePushTest extends TestCase
{

    public function testGetTimePushByUser()
    {
        $obj = new TimePush();
        $arrData = $obj->getTimePushByUser(517135);
        foreach ($arrData as $timePushed) {
            $this->assertEquals($timePushed['userId'], 517135);
        }
    }

    public function testGetTimePush()
    {
        $obj = new TimePush(new User(new Location()));
        $arrData = $obj->getTimePush();
        $this->assertTrue(is_array($arrData));
    }
}
