<?php
require_once '../../init.php';

/**
 * Created by PhpStorm.
 * User: fagner
 * Date: 24/06/18
 * Time: 13:37
 */

use PHPUnit\Framework\TestCase;

class LocationTest extends TestCase
{

    public function testGetLocations()
    {
        $obj = new Location();
        $this->assertTrue(is_array($obj->getLocations()));

    }

    public function testGetLabourSettings()
    {
        $obj = new Location();
        $obj->getLocations(25753);
        $arrData = $obj->getLabourSetting();
        $this->assertTrue(is_array($arrData));
        var_dump($arrData);
    }
}
